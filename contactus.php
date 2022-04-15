<?php

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->banner = "<h1>Contact Us</h1>";
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";
$h->script = <<<EOF
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
EOF;

$h->css = <<<EOF
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

[$top, $footer] = $S->getPageTopBottom($h);

$recaptcha = require_once("/var/www/bartonphillipsnet/PASSWORDS/newbernzig-recaptcha.php");

if($_POST['page'] == "post") {
  extract($_POST);
  $post['response'] = $_POST['g-recaptcha-response'];
  $post['secret'] = $recaptcha['secretKey']; // google grcapcha key
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  $ret = curl_exec($ch);
  $retAr = json_decode($ret, true);

  $address = "newbernzig@gmail.com";
  $agent = substr($S->agent, 0, 254); // keep it small

  $msg = <<<EOF
Name: $name
Email: $email
Message: $msg
EOF;

  $verify = $retAr['success'] == "1" ? 1 : "0";
  $reason = $retAr['error-codes'][0];
  
  $S->query("insert into $S->masterdb.contact_emails (site, ip, agent, subject, message, verify, reason, created, lasttime) ".
            "values('$S->siteName', '$S->ip', '$agent', '$subject', '$msg', '$verify', '$reason', now(), now())");

  if($verify != "1") {
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

