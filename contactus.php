<?php

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
  $err = null;
  
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

  $address = "newbernzig@gmail.com";
  $agent = $S->agent; //substr($S->agent, 0, 254); // keep it small
  $msgStr = <<<EOF
Name: $name
Email: $email
Message: $msg
EOF;

  $msgEmail = str_replace("\n", "<br>", $msgStr); // For the email

  $msgStr = str_replace("'", "\\'", $msgStr); // For the insert
  $subjectStr = str_replace("'", "\\'", $subject);
  
  $verify = empty($retAr['success']) ? false : true;
  $reason = $retAr['error-codes'][0];

  $ver = $verify === true ? 1 : 0;
  
  $S->sql("insert into $S->masterdb.contact_emails (site, ip, agent, subject, message, verify, reason, created, lasttime) ".
          "values('$S->siteName', '$S->ip', '$agent', '$subjectStr', '$msgStr', $ver, '$reason', now(), now())");

  if($verify !== true) {
    $err =  <<<EOF
<h1>Failed Verification. Try Again.</h1>
<p>$reason</p>
EOF;
    goto POST_END;
  }

  $header = "From: ZiglerInfo@newbernzig.com\r\nBcc: bartonphillips@gmail.com\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=UTF-8\r\n";

  //$address = "bartonphillips@gmail.com";
  
  mail($address, $subject, $msgEmail, $header, "-fbarton@bartonphillips.com");

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

