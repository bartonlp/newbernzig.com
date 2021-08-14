<?php
if($this->nodb !== true && $this->noTrack !== true) {
  $image2 =<<<EOF
  <a>
    <img src="https://bartonphillips.net/tracker.php?page=normal&id=$this->LAST_ID&image=$this->trackerImg2" alt="linux counter image.">
  </a>
EOF;
  $image3 = "<img src='https://bartonphillips.net/tracker.php?page=noscript&id=$this->LAST_ID'>";
}
 
return <<<EOF
<div class="grid-section">
<header id="header">
<img id='logo' data-image="$this->trackerImg1" src="/images/Z.jpg"></a>
$image2
$mainTitle
<h2>A Living Part of<br>
New Bern North Carolina History</h2>
<address>
The Ziegler Suites<br>
1914 Trent Blvd.<br>
New Bern, North Carolina 28560<br>
252-638-6868
</address>
<p>GREAT DISCOUNTS<br>
BEST RATES</p>
<img src="/images/ziegler exterior.jpg"> <!-- picture of hotel -->
</header> <!-- end header -->

<!-- Sidebar -->
<div id="sidebar">
  <h1>Site Links</h1>
  <img src="/images/boopwink.gif"><br>
  <ul>
    <li><a href="http://www.NewBernZig.com">Main Page</a></li>
    <li><a href="rates.php">Ziegler Hotel Rates</a></li>
    <li><a href="Policies.php">Rules and Policies</a></li>
    <li><a href="Ziegler Clients.php">Hotel Guest Comments</a></li>
    <li><a href="aboutzig.php">Ziegler Hotel History</a></li>
  </ul>
  <h3>Getaway Package</h3>
  <ul>
    <li><a href="https://www.google.com/maps/@35.1059906,-77.0546469,6852m/data=!3m1!1e3!5m1!1e4?hl=en">New Bern Map</a></li>
    <li><a href="http://visitnewbern.com/">Visit New Bern</a></li>
    <li><a href="https://www.newbernnow.com">New Bern Now</a></li>
    <li><a href="/New-Bern-dining.php">New Bern Dining</a></li>
  </ul>
  <h3>Things to Do</h3>
  <ul>
    <li><a href="http://www.ncmove.com">New Bern Real Estate</a></li>
    <li><a href="http://www.rivertownrentals.com">Long-term Rentals</a>
    <li><a href="/new-bern-weather.php">New Bern Weather</a></li>
    <li><a href="/Airport.php">New Bern Airport</a></li>
    <li><a href="http://www.tryonpalace.org/">Tryon Palace</a></li>
    <li><a href="http://www.newbernhistorical.org">New Bern Historical Society</a></li>
<!--    <li><a href="/New-Bern-happenings.php">Clubs and Organizations</a></li> -->
  </ul>
  <h3>History Links of Interest</h3>
  <ul>
    <li><a href="/New-Bern-history2.php">New Bern History</a></li>
    <li><a href="/New-Bern-Civilwar.php">The Battle of New Bern</a></li>
    <li><a href="/New-Bern-nc-history.php">James City, Home of Free Slaves</a></li>
  </ul>
  <img src="/images/popeye3.gif">
</div>
<!-- End Sidebar -->

<!-- Sidebarsmall -->
<div id="sidebarsmall">
  <label for="smallmenu" class="xicon-menu"></label>
  <input type="checkbox" id="smallmenu">
  <ul id="smenu">
    <li><a href="http://www.NewBernZig.com">Main Page</a></li>
    <li><a href="rates.php">Ziegler Hotel Rates</a></li>
    <li><a href="Policies.php">Rules and Policies</a></li>
    <li><a href="aboutzig.php">Ziegler Hotel History</a></li>
    <li><a href="https://www.google.com/maps/@35.1059906,-77.0546469,6852m/data=!3m1!1e3!5m1!1e4?hl=en">New Bern Map</a></li>
    <li><a href="https://visitnewbern.com/">Visit New Bern</a></li>
    <li><a href="https://www.newbernnow.com">New Bern Now</a></li>
    <li><a href="/New-Bern-dining.php">New Bern Dining</a></li>
    <li><a href="http://www.ncmove.com">New Bern Real Estate</a></li>
    <li><a href="http://www.rivertownrentals.com">Long-term Rentals</a></li>
    <li><a href="/new-bern-weather.php">New Bern Weather</a></li>
    <li><a href="/Airport.php">New Bern Airport</a></li>
    <li><a href="http://www.tryonpalace.org/">Tryon Palace</a></li>
    <li><a href="http://www.newbernhistorical.org">New Bern Historical Society</a></li>
<!--    <li><a href="/New-Bern-happenings.php">Clubs and Organizations</a></li> -->
    <li><a href="/New-Bern-history2.php">New Bern History</a></li>
    <li><a href="/New-Bern-Civilwar.php">The Battle of New Bern</a></li>
    <li><a href="/New-Bern-nc-history.php">James City - Home of Free Slaves</a></li>
  </ul>
</div>
<!-- End Sidebarsmall -->

<noscript>
<p style='color: red; background-color: #FFE4E1; padding: 10px'>
$image3
Your browser either does not support <b>JavaScripts</b> or you have JavaScripts disabled, in either case your browsing
experience will be significantly impaired. If your browser supports JavaScripts but you have it disabled consider enabaling
JavaScripts conditionally if your browser supports that. Sorry for the inconvienence.</p>
</noscript>
EOF;
