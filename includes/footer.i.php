<?php
// BLP 2021-12-15 -- add geo.js
// BLP 2021-10-24 -- counterWigget and lastmod passed in from getPageFooter($b)

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
