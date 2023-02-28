<?php

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->banner = "<h1>Contact Us</h1>";
$S->meta = "<meta name='Editor' content='Bonnie Burch'>";
$S->h_script = <<<EOF
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
EOF;

$S->css = <<<EOF
input { font-size: var(--blpFontSize); width: 250px; }
textarea { font-size: var(--blpFontSize); width: 250px; height: 100px; }
button {
  font-size: var(--blpFontSize);
  border-radius: 10px;
  background: green;
  color: white;
  padding: 10px;
}
#form { grid-area: main; margin: auto; width: 360px;  border: 1px solid black; padding: 5px;}
EOF;

[$top, $footer] = $S->getPageTopBottom();

$recaptcha = require_once("/var/www/PASSWORDS/newbernzig-recaptcha.php"); // This is an assoc array

if($_POST['page'] == "post") {
  extract($_POST); // name, email, subject, msg

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
  $agent = substr($S->agent, 0, 254); // keep it small
  $agent = $S->escape($agent);
  $subject = $S->escape($subject);
  
  $msg = <<<EOF
Name: $name
Email: $email
Message: $msg
EOF;

  $msg = $S->escape($msg);
  
  $verify = empty($retAr['success']) ? 0 : 1;
  $reason = $retAr['error-codes'][0];
  
  $S->query("insert into $S->masterdb.contact_emails (site, ip, agent, subject, message, verify, reason, created, lasttime) ".
            "values('$S->siteName', '$S->ip', '$agent', '$subject', '$msg', '$verify', '$reason', now(), now())");

  if($verify !== true) {
    header( "refresh:5;url=contactus.php" );

    echo <<<EOF
$top
<h1>Failed Verification. Try Again.</h1>
<p>$reason</p>
<p>This page will redirect to <a href="contactus.php"><b>Contact Us</b></a> in two seconds.</p>
$footer
EOF;
    exit();
  }
 
  mail($address, $subject, $msg, "From: ZieglerInfo@newbernzig.com\r\nBcc: bartonphillips@gmail.com", "-fbarton@bartonphillips.com");

  header( "refresh:5;url=index.php" );

  echo <<<EOF
$top
<h1>Posted</h1>
<p>This page will redirect to <a href="index.php"><b>The Ziegler</b></a> in five seconds.</p>
$footer
EOF;

  exit();
}

echo <<<EOF
$top
<div id="form">
<form method="post">
<table>
<tr><th>Name</th><td><input type="text" required name="name"></td></tr>
<tr><th>Email</th><td><input type="text" required name="email"></td></tr>
<tr><th>Subject</th><td><input type="text" required name="subject"></td></tr>
<tr><th>Message</th><td><textarea  placeholder="Enter Message" required name="msg"></textarea></td></tr>
</table>
<div class="g-recaptcha" data-sitekey="{$recaptcha['siteKey']}"></div>
<button type="submit" name="page" value="post">Submit</button>
</form>
</div>
$footer
EOF;

