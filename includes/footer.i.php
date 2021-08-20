<?php
$lastmod = date("M j, Y H:i", getlastmod()) . "<br>";

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
{$arg['msg']}
{$arg['msg1']}
<br>
$counterWigget
Last Modified: $lastmod
{$arg['msg2']}
</footer>
{$arg['script']}
EOF;
