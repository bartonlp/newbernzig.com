<?php

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->banner = "<h1>Ziegler Hotel History</h1>";
$S->meta = "<meta name='Editor' content='Bonnie Burch 5/20/23'>";

$S->css =<<<EOF
img[src*="zig_postcard.jpg"] {
  float: left;
  margin-right: 10px;
}
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<div id="content">

<h2>Best Hotel in New Bern NC</h2>
<p>The Ziegler Hotel is an icon in New Bern, NC. The two-story house was built in the 1920s and served as a residence for Mr. and Mrs. Ziegler.</p>
<p>During World War II the Zeigler's rented out rooms in their house to young Marines stationed at Cherry Point.</p>
<p>Mr. Ziegler had back surgery in the early 1950s and as a result of complications during the surgery, he was permanently paralyzed.
He had a watch repair shop in the garage located in the back yard. 
Needing extra income Mrs. Ziegler converted the garage into two motel rooms.
Her success with renting those two rooms convinced her to eventually build two cottages and nine more motel rooms. 
At the time, motel rooms in Craven County were scarce.
That was long before the days of large franchise hotels and motels, and she had no trouble keeping all the rooms occupied.</p>
<p>Mr. Zeigler passed away in the 1960s.
Mrs. Zeigler lived in the house and operated the motel until she passed away at age 101.</p>
<img src="/images/zig_postcard.jpg">
<p>
By the mid 1950s, the Ziegler Hotel was New Bern's premier place to stay. 
Anyone over 40 and born in New Bern will remember the large neon sign 
for the Zig, at the corner of Highway 17 and Eighth Street,
that guided folks to the motel.</p>
<p>During the 1940s, '50s, and '60s, Highway 17 was the principle route on the east coast for those heading north and south. 
The neon sign snagged many travelers.</p>
<p>After Mrs. Ziegler passed away in the 1990s, the motel sold and maintenance was neglected.
The charming old hotel lost her luster and quickly faded into the sunset.
However, the Tyson Group purchased the Ziegler in 2007 and made it once again a premier place to stay in New Bern.
</p>
<ul class="clear">
<li>Remodeled Hotel Rooms
<li>New Queen Beds
<li>Mini-Refrigerator
<li>Microwave
<li>Coffee Pot
<li>Free WiFi
<li>HDTV TVs
<li>Two New Hotel Suites with full kitchens and stack washer/dryers.
<li>Cottages have full kitchens with dining area, living room, two bedrooms and a bath.
</ul>
</div>
$footer
EOF;
