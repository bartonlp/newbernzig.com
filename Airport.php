<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->banner = "<h1>Coastal Carolina Regional Airport</h1>";

$h->css = <<<EOF
<style>
.bold { font-weight: bold; }
img[src*="Airport"] {
  width: 280px;
  float: left;
  margin-right: 10px;
}
@media (max-width: 500px) {
  img[src*="Airport"] { float: none; }
}        
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<div id="content">
<img border="0" src="/images/New-Bern-Airport.jpg">
<p><span class="bold">New Bern</span> 
and the surrounding areas are fortunate to have a regional airport located only 
minutes from the historic downtown area.
Residents and visitors love how easy it is to get here or to reach faraway destinations with only one or two layovers.
Within a 45-minute drive from the airport, you will find 
Atlantic Beach, Historic Beaufort, Emerald Isle, Havelock and Cherry Point Marine Air Station, Camp LeJeune, 
Oriental (sailing capital of the world), Greenville and East Carolina University.
<a href="http://smartertravel.com">SmarterTravel.com</a> recently 
selected Coastal Carolina Regional Airport as one of the &quot;Top 10 most stress-free 
airports in the United States.&quot;
</p>
<br class="clear">
<p><span class="bold"><a href="https://www.aa.com/homePage.do">American Airlines</a></span>
has many daily direct flights to Douglas International Airport in Charlotte with connecting flights to cities throughout the United States.<br>
24-hour reservation hotline 800-433-7300</p>

<div>
<hr>
<p class="bold">Taxi Service</p>

<p>White Glove Transport<br>
(813) 727-0456
</p>

<p><a href="https://www.uber.com/global/en/airports/ewn">Uber</a><br>
(252) 638-8591
</p>

<hr>
<p class="bold">Rental Cars</p>
<p><a href="https://www.alamo.com">Alamo</a><br>
Local reservations (252) 637-5241 <br>
Worldwide Reservations (800) 462-5266
</p>

<p><a href="https://www.avis.com">Avis</a><br>
Local Reservations (252) 637-2130<br>
Worldwide Reservations (800) 331-1212
</p>

<p><a href="https://www.hertz.com">Hertz</a><br>
Local Reservations (252) 637-3021<br>
Worldwide Reservations (800) 654-3131
</p>

<p><a href="https://www.nationalcar.com/">National</a><br>
Local Reservations (252) 637-5241<br>
Worldwide Reservations (800) 227-7368
</p>

<hr>
<p class="bold">Shipping Services</p>
<p><a href="https://www.dhl.com">DHL</a><br>
(800) 247-2676
</p>

<p><a href="https://www.fedex.com">FedEx</a><br>
(800) 463-3339
</p>

<hr>
<p class="bold">Need a place to stay while in New Bern?</p>
<p>Stay at the Zig, owned by Steve and Jana Tyson, 
New Bern's iconic <a href="/zeigler.php">Ziegler Hotel</a>.<br>
(252) 638-6868
</p>
</div>

</div>
$footer
</div> <!-- end grid section from banner.i.php -->
</body>
</html>
EOF;
