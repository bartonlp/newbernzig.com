<?php
// Newbernzig contactus

use SendGrid\Mail\Mail; // Use SendGrid for emails

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->banner = "<h1>Contact Us</h1>";
$S->meta = "<meta name='Editor' content='Bonnie Burch'>";
$S->h_script = <<<EOF
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
EOF;

$S->css = <<<EOF
#error { text-align: center; color: red; animation: fadeOut 10s linear; animation-fill-mode: forwards; }
@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; display: none; }
}

input { font-size: var(--blpFontSize); width: 250px; }
textarea { font-size: var(--blpFontSize); width: 250px; height: 100px; }
button {
  font-size: var(--blpFontSize);
  border-radius: 10px;
  background: green;
  color: white;
  padding: 10px;
}
#container { grid-area: main; }
#form { margin: auto; width: 360px;  border: 1px solid black; padding: 5px;}
EOF;

[$top, $footer] = $S->getPageTopBottom();

$recaptcha = require_once("/var/www/PASSWORDS/newbernzig-recaptcha.php"); // This is an assoc array

if($_POST['page'] == "post") {
  extract($_POST); // name, email, subject, msg

  if(empty($name) || empty($email) || empty($msg) || empty($subject)) {
    $err = "<h2>You must supply a name, email, subject and message.</h2>";
    goto POST_END;
  }

  $err = null;

  // Do the captcha to see if this is a human.
  
  $response = $_POST['g-recaptcha-response'];
  $secret = $recaptcha['secretKey']; // google grcaptcha key

  $options = ['http' => [
                         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                         'method'  => 'POST',
                         'content' => http_build_query(["response"=>$response, "secret"=>$secret])
                        ]
             ];

  // Now we create a context from the options

  $context  = stream_context_create($options);

  // Now this is going to do a POST!
  // NOTE we must have the full url with https!
  // If we are doing a post that does not need to return anything we can avoid the assignment.

  $ret = file_get_contents("https://www.google.com/recaptcha/api/siteverify", false, $context);
  $retAr = json_decode($ret, true);
  $verify = empty($retAr['success']) ? false : true;
  $reason = $retAr['error-codes'][0];
  $ver = $verify === true ? 1 : 0;

  vardump("retAr", $retAr);

  // Now we have the captcha result $ver and $verify and a reason in $reason

  // Set up SendGrid info.
  
  $mail = new Mail();

  $address = "newbernzig@gmail.com";
  //$address = "bartonphillips@gmail.com";
  
  $mail->setFrom("Info@newbernzig.com");
  $mail->setSubject($subject);
  $mail->addTo($address);
  
  $mail->addBcc("bartonphillips@gmail.com");
  //$mail->addCc("barton@bartonphillips.com");

  $content =<<<EOF
Name: $name
Email: $email
Message: $msg
EOF;

  $msgEmail = str_replace("\n", "<br>", $content); // For the email

  $mail->addContent("text/plain", 'View this in HTML mode');
  $mail->addContent("text/html", $msgEmail);

  $agent = $S->agent;

  $msgStr = str_replace("'", "\\'", $content); // For the insert
  $subjectStr = str_replace("'", "\\'", $subject);
  
  $S->sql("insert into $S->masterdb.contact_emails (site, ip, agent, subject, message, verify, reason, created, lasttime) ".
          "values('$S->siteName', '$S->ip', '$agent', '$subjectStr', '$msgStr', $ver, '$reason', now(), now())");

  if($verify !== true) {
    $err =  <<<EOF
<h1>Failed Verification. Try Again.</h1>
<p>$reason</p>
EOF;
    goto POST_END;
  }

  //$apiKey = new \SendGrid(getenv('SENDGRID_API_KEY'));
  $apiKey = "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";
  //$apiKey = require "/var/www/PASSWORDS/sendgrid-api-key";

  $sendgrid = new \SendGrid($apiKey);

  $response = $sendgrid->send($mail);

  vardump("response: ", $response);
  echo "code={$response->statusCode()}";
  
  if($response->statusCode() > 299) {
    print $response->statusCode() . "<br><pre>";
    print_r($response->headers());
    print "</pre>Body: <pre>";
    print_r(json_decode($response->body()));
    print "</pre>";
    exit();
  }  

  header( "refresh:5;url=contactus.php" );

  echo <<<EOF
$top
<h1>Posted</h1>
<p>This page will redirect to <a href="index.php"><b>The Ziegler</b></a> in five seconds.</p>
$footer
EOF;

  exit();
POST_END:
}

echo <<<EOF
$top
<div id="container">
<div id="error">$err</div>
<div id="form">
<form action="contactus.php" method="post">
<table>
<tr><th>Name</th><td><input type="text" required name="name" value="$name"></td></tr>
<tr><th>Email</th><td><input type="text" required name="email" value="$email"></td></tr>
<tr><th>Subject</th><td><input type="text" required name="subject" value="$subject"></td></tr>
<tr><th>Message</th><td><textarea  placeholder="Enter Message" required name="msg">$msg</textarea></td></tr>
</table>
<div class="g-recaptcha" data-sitekey="{$recaptcha['siteKey']}"></div>
<button type="submit" name="page" value="post">Submit</button>
</form>
</div>
</div>
$footer
EOF;

