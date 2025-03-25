<?php
// Custom due to the Facebook info

// BLP 2023-09-07 - added to let me know if someone calls this directly.

if(!class_exists("Database")) {
  header("location: https://bartonlp.com/otherpages/NotAuthorized.php");
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
