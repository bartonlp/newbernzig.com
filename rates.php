<?php
// Bonnie edited BLP 2022-03-01 -- 
$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->banner = "<h1>The Ziegler Hotel Rates</h1>";
$S->meta = "<meta name='Editor' content='Bonnie Burch 5/20/23'>";

// css clamp(min, prefered, max): for example width: clamp(200px, 50%, 800px) will use 50% until 50% is less then 200px or greater than 800px
// then the value is one of the two limits.

$S->css = <<<EOF
.h3 {
  font-size: 2.2em;
  font-weight: bold;
}
.h3 p {
  font-size: .8em;
  font-weight: normal;
  margin: 0px;
}
.h3 ul {
  font-size: .8em;
  font-weight: normal;
  margin-top: 0;
}
.nosmoking { color: red; }  
/* Refefine the area (from css/newbernzig.css) to use side for head and main. */
.grid-section {
   grid-template-areas: "head head side" "main main main" "foot foot foot";
}
@media (max-width: 770px) {
  .grid-section {
    grid-template-areas: "head head head" "main main main" "foot foot foot";
  }
  .h3 { font-size: 1.2em; }
}
/* The media needs to be overridden as well because we overrode it above. */
@media (hover: none) and (pointer: coarse) {
  .grid-section {
    grid-template-areas: "head head head" "main main main" "foot foot foot";
  }
  .h3 { font-size: 1.2em; }
}
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<div id="content">
<div class="h3">All rooms, suites and cottages have:
<ul>
<li>Queen beds
<li>Microwave
<li>Refrigerator
<li>Free WiFi
<li>Coffee pot
<li>LED flat-screen TV
<li>DVR
<li>New bathrooms
<li>Includes all utilities
<li>All prices plus tax
</ul>
<p>Extended-stay discounts are always negotiable.</p>
</div>
<hr>
<div class="h3">Rooms:
<p>One night $89,
two or more nights $84,
per week $499, per month $1,350.
</p>
</div>

<div class="h3">Suites:
<p>The Elvis and the Marilyn Suites.
An additional fold-out or captain's bed, stack washer/dryer, stove, dishwasher.<br>
$125 per night (with two-day minumum), $550 per week, $1,500 per month.<br>
Some pets allowed at Proprietor's Sole Discretion.<br>
$20 per night or $75 week pet fee.</p>
</div>

<div class="h3">Want a larger place? The Abbot Cottage:
<p>Two bedrooms, living, kitchen/dining and bath rooms.<br>
$125 per night (three-day minimum), $525 per week, $1,500 per month.</p
</div>

<hr>
<p>
No phones in rooms, bring your cell phone.<br>
If you choose to smoke, it is allowed on covered porches just outside the rooms,
benches and ashtray provided.<br>
<span class="nosmoking">Please Do Not Smoke in the Rooms</span>.</p>
</div>
</div>
$footer
</div>
</body>
</html>
EOF;
