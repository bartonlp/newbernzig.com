<?php
// Custom due to the Facebook info

// BLP 2023-09-07 - added to let me know if someone calls this directly.
 
if(!class_exists("SiteClass")) {
  $ip = $_SERVER['REMOTE_ADDR'];
  error_log("bartonphillips.com/footer.i.php: Called directly: $ip");
  echo "<h1>Not Authorized</h1><p>This file is not to be run directly, rather it is used by another file</p>";
  exit();
}

return <<<EOF
<footer>
<hr>
<div>
  <a href="https://www.facebook.com/pages/New-Bern-NC/The-Ziegler-Inn-and-Suites/148026394622">Follow us on Facebook</a>
</div>
$b->aboutwebsite
<address>
$b->copyright
$b->address
</address>
$b->msg
$b->msg1
$counterWigget
$lastmod
$b->msg2
</footer>
$geo
$b->script
$b->inlineScript
EOF;
