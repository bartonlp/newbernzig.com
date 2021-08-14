<?php
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);
$h->banner = "<h1>Ziegler Hotel History</h1>";

$h->css =<<<EOF
<style>
img[src*="zig_postcard.jpg"] {
  float: left;
  margin-right: 10px;
}
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h, $b);

echo <<<EOF
$top
<div id="content">

<h2>Best Hotel in New Bern NC</h2>
<p>The Ziegler Hotel is an icon in New Bern, NC. The two-story house was built in the 1920's and served as a residence for Mr. and Mrs. Ziegler.</p>
<p>During World War II the Zeigler's rented out rooms in their house to young Marines stationed at Cherry Point.</p>
<p>Mr. Ziegler had back surgery in the early 1950's and as a result of complications during the surgery was permanently paralyzed.
He had a watch repair shop in the garage located in the back yard. 
Needing extra income Mrs. Ziegler converted the garage into two motel rooms.
Her success with renting those two rooms convinced her to eventually build two cottages and nine more motel rooms. 
At the time, motel rooms in Craven County were scarce,
that was long before the days of large franchise hotels and motels, and she had no trouble keeping all the rooms occupied.</p>
<p>Mr. Zeigler passed away in the 1960's.
Mrs. Zeigler lived in the house and operated the motel until she passed away at age 101.</p>
<img src="/images/zig_postcard.jpg">
<p>
By the mid 1950's the Ziegler Hotel was New Bern's premier place to stay. 
Anyone over 40 and born in New Bern will remember the large neon sign 
for the Ziegler Motel, corner of Highway 17 and Eight Street,
that guided folks to the Ziegler Motel.</p>
<p>During the 1940s, '50s, and '60s, Highway 17 was the principle route on the east coast for those heading north and south. 
The neon sign snagged many travelers.</p>
<p>After Mrs. Ziegler passed away in the 1990's the motel was sold and maintenance was neglected.
The charming old hotel lost her luster and was quickly fading into the sunset.
However the Ziegler Hotel was purchased in 2007 by the Tyson Group who are committed to once again making her New Bern's premier place to stay.
</p>
<ul class="clear">
<li>Remodeled Hotel Rooms
<li>New Quene Beds
<li>Mini-Refrigerator
<li>Microwave
<li>Coffee Pot
<li>Free WiFi
<li>HDTV TVs
<li>Two New Hotel Suites with full kitchens and stack washer/dryers.
<li>Cottages have full kitchens with dinning area, living room and two bedrooms.
</ul>
</div>
$footer
EOF;
