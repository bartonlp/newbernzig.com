<?php

// BLP 2023-09-07 - added to let me know if someone calls this directly.
 
if(!class_exists("SiteClass")) {
  $ip = $_SERVER['REMOTE_ADDR'];
  error_log("bartonphillips.com/banner.i.php: Called directly: $ip");
  echo "<h1>Not Authorized</h1><p>This file is not to be run directly, rather it is used by another file</p>";
  exit();
}

return <<<EOF
<div class="grid-section">
<header id="header">
$image1
$image2
$mainTitle
<h2>A Living Part of<br>
New Bern North Carolina History</h2>
<address>
The Ziegler Suites<br>
1914 Trent Blvd.<br>
New Bern, North Carolina 28560<br>
252-638-6868<br>
<a href="contactus.php">Contact Us</a>
</address>
<p>GREAT DISCOUNTS<br>
BEST RATES</p>
<img id="hotelimage" src="/images/resizeimg.png"> <!-- picture of hotel -->
</header> <!-- end header -->

<!-- Sidebar -->
<div id="sidebar">
  <h1>Site Links</h1>
  <img src="/images/boopwink.gif"><br>
  <ul>
    <li><a href="https://www.newbernzig.com">Main Page</a></li>
    <li><a href="rates.php">Ziegler Hotel Rates</a></li>
    <li><a href="Policies.php">Rules and Policies</a></li>
    <li><a href="Ziegler Clients.php">Hotel Guest Comments</a></li>
    <li><a href="aboutzig.php">Ziegler Hotel History</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
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
    <li><a href="https://www.findnewbernhomes.com/">New Bern Real Estate</a></li>
    <li><a href="https://rivertownerentals.info/">Long-term Rentals</a>
    <li><a href="/new-bern-weather.php">New Bern Weather</a></li>
    <li><a href="/Airport.php">New Bern Airport</a></li>
    <li><a href="https://www.tryonpalace.org/">Tryon Palace</a></li>
    <li><a href="https://www.newbernhistorical.org">New Bern Historical Society</a></li>
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
    <li><a href="https://www.newbernzig.com">Main Page</a></li>
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
    <li><a href="https://www.tryonpalace.org/">Tryon Palace</a></li>
    <li><a href="https://www.newbernhistorical.org">New Bern Historical Society</a></li>
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
