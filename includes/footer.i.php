<?php
// Custom due to the Facebook info
// BLP 2025-04-08 - use $f->names instead of $b->names

if(!class_exists("dbPdo")) {
  header("location: https://bartonlp.com/otherpages/NotAuthorized.php?site=newbernzig.com&page=footer.i.php");
}

return <<<EOF
<footer>
<hr>
<div>
  <a href="https://www.facebook.com/tysongroup">Follow us on Facebook</a>
</div>
$f->aboutwebsite
<address>
$f->copyright
$f->address
</address>
$f->msg
$f->msg1
$counterWigget
$lastmod
$f->msg2
</footer>
$f->geo
$f->extra
$f->script
$f->inlineScript
EOF;
