<?php
// BLP 2021-10-24 -- counterWigget and lastmod passed in from getPageFooter($b)

return <<<EOF
<footer>
<hr>

<div>
  <a href="https://www.facebook.com/pages/New-Bern-NC/The-Ziegler-Inn-and-Suites/148026394622">Follow us on Facebook</a>
</div>

<h2><a target="_blank" href='aboutwebsite.php'>About This Site</a></h2>
<address>
  Copyright &copy; $this->copyright<br><br>
$this->address<br>
</address>
{$b->msg}
{$b->msg1}
<br>
$counterWigget
$lastmod
{$b->msg2}
</footer>
{$b->script}
EOF;
