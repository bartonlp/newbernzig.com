<?php
$lastmod = date("M j, Y H:i", getlastmod());

return <<<EOF
<footer>
<hr>

<div>
  <a href="https://www.facebook.com/pages/New-Bern-NC/The-Ziegler-Inn-and-Suites/148026394622">Follow us on Facebook</a>
</div>

<h2><a target="_blank" href='aboutwebsite.php'>About This Site</a></h2>
<div id="address">
<address>
  Copyright &copy; $this->copyright<br>
$this->address<br>
<a href='mailto:$this->EMAILADDRESS'>$this->EMAILADDRESS</a>
</address>
</div>
{$arg['msg']}
{$arg['msg1']}
<br>
$counterWigget
Last Modified: $lastmod
{$arg['msg2']}
</footer>
{$arg['script']}
EOF;
