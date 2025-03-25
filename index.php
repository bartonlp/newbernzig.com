<?php
// This is the home file for https://newbernzig.com

// This is a ChatGDP suggestion that I added to try to prevent a NEW Chrome warning in DevTools. It
// didn't fix the problem but it doesn't seen to cause any problems. So for now I will leave it in.
// NOTE: I have opted to 'hide' these warning in DevTools.
header("Content-Security-Policy: default-src 'self'; 
    frame-src https://www.youtube-nocookie.com; 
    script-src 'self' https://www.youtube-nocookie.com; 
    connect-src 'self' https://www.youtube-nocookie.com; 
    img-src 'self' https://www.youtube-nocookie.com data:;
    style-src 'self' 'unsafe-inline'; 
    sandbox allow-scripts allow-same-origin allow-presentation;
    report-uri https://bartonlp.com/otherpages/cspreport2.php");
// End ChatGDP suggestion

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->banner = "<h1>The Ziegler Suites</h1>";
$S->meta = "<meta name='Editor' content='Bonnie Burch 5/20/23'>";

$S->css =<<<EOF
.marilyn { color: red; }
.nosmoking { color: red; }
img[src*="zig sign.jpg"] { height: 400px; }
img[src*="/images/Marilyn.png"] { height: 600px; }
img[src*="animatedElvis5.gif"] { float: left; padding-right: 10px; width: 200px;}
img[src*="blues bros.JPG"] { height: 400px; }
img[src*="zig-fOUNTAIN.JPG"] { width: 353px; height: 400px; }
img[src*="Ziegler.JPG"] { float: left; margin-right: 10px; margin-bottom: 10px; width: 300px;}
img[src*="twlight zone.gif"] { width: 303px; }
img[src*="Marilyn-1.gif"] { width: 400px; }
img[src*="an-lav~1.gif"],
img[src*="zieglertv"],
img[src*="zieglerbath"],
img[src*="ZIG5-Fridge"] {
  float: left;
  margin-right: 10px;
}
img[src*="marilyn-r"],
img[src*="DSCN0665"],
img[src*="DSCN0664"],
img[src*="DSCN0661"] {
  width: 600px;
}
img[src*="DSC04408"],
img[src*="1950's hotel room"],
img[src*="ZIG4-Bathroom.JPG"] {
  height: 336px;
}
img[src*="Frank-Sinatra"],
img[src*="1940's hotel room photos"],
img[src*="1940's room2"] {
  height: 336px;
}
img[src*="zieglertv"],
img[src*="zieglerbath"],
img[src*="ZIG5-Fridge"] {
  height: 260px;
}
img[src*="Hippies2"],
img[src*="clampetts1"],
img[src*="The_Dick_Van_Dyke_Show1"],
img[src*="bewitched-2"],
img[src*="twlight zone"] {
  width: 400px;
}
#youtube-vidio { text-align: center; }
#youtube-vidio iframe { width: 680px; height: 450px; }
#sixties {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  text-align: center;
  background-color: #d2d3cd;
}
address { font-size: 1.2em; }
@media (max-width: 1250px) {
  #sixties { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 860px) {
  #youtube-vidio iframe { width: 300px; height: 200px; }
  #sixties { grid-template-columns: 1fr; }
  img[src*="zieglertv"], img[src*="zieglerbath"], img[src*="ZIG5-Fridge"] { height: inherit; }
  #content img[src*="animatedElvis5.gif"] {width: 30%; }
  #content img[src*="an-lav~1.gif"] { width: 30%; }
}
@media (hover: none) and (pointer: coarse) {
  #youtube-vidio iframe { width: 300px; height: 200px; }
  #sixties { grid-template-columns: 1fr; }
  img[src*="zieglertv"], img[src*="zieglerbath"], img[src*="ZIG5-Fridge"] { height: inherit; }
  #content img[src*="animatedElvis5.gif"] {width: 30%; }
  #content img[src*="an-lav~1.gif"] { width: 30%; }
}
EOF;

[$top, $footer] = $S->getPageTopBottom();

// Render

echo <<<EOF
$top
<div id="content">
<div class="center">
<h2>Going to be in New Bern NC?<br>
Stay at &quot;The Zig&quot;<br>
1914 Trent Blvd. New Bern, NC 28560<br>
<span class="marilyn">Look for Marilyn</span></h2>
<img src="/images/Marilyn.png"><br>

<!-- Marilyn: The Ziegler Suites Video -->
<div id="youtube-vidio">
<iframe 
    src="https://www.youtube-nocookie.com/embed/nGNz27RjAok?rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&autoplay=0&playsinline=1"
    frameborder="0"
    allow="autoplay; encrypted-media; fullscreen; picture-in-picture; clipboard-write"
    referrerpolicy="origin"
    loading="lazy">
</iframe>

</div>

<img src="/images/zig sign.jpg">
<img src="/images/blues bros.JPG">
<img src="/images/zig-fOUNTAIN.JPG"><br>
</div>
<hr>

<!-- image of dogs -->
<img src="/images/Ziegler.JPG">
<p>
The Ziegler is one of the few pet-friendly hotels.<br>
Stella and BoBo welcome your pet in one of our pet-friendly hotel rooms or suites for an additional $20 per day or $75 weekly.</p>
<hr class="clear">

<!-- TV, bath, fridge images -->  
<img src="/images/zieglertv.JPG">
<img src="/images/zieglerbath.JPG">
<img src="/images/ZIG5-Fridge.JPG">

<p>Queen beds, flat-screen TVs, updated baths,<br>
refrigerator and microwave,<br>
coffee pot, DVR, and FREE WiFi in all rooms.
</p>
<br class="clear">
<hr>

<!-- Fun theme rooms --> 
<h2>Fun Themed Rooms</h2>

<!-- 40s Room -->
<h3>Hotel Room #5<br>
The 1940's Room</h3>
<img src="/images/Frank-Sinatra.jpg">
<img src="/images/1940's hotel room photos.jpg">
<img src="/images/1940's room2.jpg">
</h3>
<hr>

<!-- 50s Room -->
<h3>Hotel Room #4<br>
1950's room<br>
Sorry no pets allowed in Room #4<br>
<img src="/images/DSC04408.JPG">
<img src="/images/1950's hotel room.jpg">
<img src="/images/ZIG4-Bathroom.JPG">
</h3>
<hr>

<!-- 60s Room -->
<img src="/images/an-lav~1.gif">
<h3>Lost in the '60s?<br>
We have a place for you. Room 3 is our '60s room.</h3>

<br class="clear">
<div id="sixties">
<div>
Hippies welcome<br>
<img src="/images/Hippies2.jpg">
</div>
<div>
Free '60s movies for our Room 3 guests.<br>
Relax and watch Bewitched the entire second season.
<img src="/images/bewitched-2.jpg">
</div>
<div>
Or the hilarious Dick Van Dyke Show<br>
<img src="/images/The_Dick_Van_Dyke_Show1.jpg">
</div>
<div>
Or &quot;Listen to the Story of a Man Named Jeb&quot;<br>
<img src="/images/clampetts1.jpg">
</div>
<div>
Feeling like something is out there?<br>
<img src="/images/twlight zone.gif"><br>
It's free Twilight Zone movies
</div>
</div>

<!-- Marilyn Suite -->
<h3>Perfect For You!<br>
The spacious Marilyn Suite<br>
Room #2<br>
<img border="0" src="/images/Marilyn-1.gif">
<br>
<img src="/images/marilyn-r1.png">
<img src="/images/marilyn-r2.png">
<img src="/images/marilyn-r3.png">
<img src="/images/DSCN0665.jpg">
<img src="/images/DSCN0664.jpg">
<img src="/images/DSCN0661.jpg">
</h3>

<img src="/images/marilynmarquee.gif">
<hr>

<!-- Elvis Suite -->
<h2>The Elvis Hotel Suite</h2>
<img src="/images/animatedElvis5.gif"> <!-- float left -->
<h3>Elvis says<br>
&quot;Thank you, thank you very much&quot;<br>
for choosing &quot;The Zig&quot; Hotel</h3>
<br style="clear: left">
<img src="/images/ELVIS 9-16 001.png">
<img src="/images/ELVIS 9-16 002.png">
<img src="/images/ELVIS 9-16 004.png">
<img src="/images/ELVIS 9-16 005.png">
<img src="/images/ELVIS 9-16 007.png">
<img src="/images/ELVIS 9-16 008.png">
<hr>
<hr>

<!-- Abbot Cottage -->  
<h2>Want a larger place?</h2>
<h3>The Abbot Cottage<br>
Two bedrooms, one bath, full kitchen.<br>
Fully furnished, linens, cookware,<br>
WIFI and cable TV included.<br>
Maid service available for an extra charge.<br>
$189 per night, $399 for three nights or $550 per week.<br>
Extended-stay discounts negotiated.<br>
<br>
<img src="/images/8TH STREET12.JPG">
<img src="/images/8th.JPG">
<img src="/images/8TH STREET04.JPG">
<img src="/images/8TH STREET08.JPG"">
<img src="/images/8TH STREET06.JPG">
<img src="/images/8TH STREET07.JPG"><br>
Call for details, some pets OK.<br>
Extra charge for pets and maid service<br>
<a href="mailto:NewBernZig@Gmail.com?subject=The Ziegler Suites New Bern NC">newbernzig@gmail.com</a></h3>
<hr>

<!-- Conveniently located -->
<h2>The Ziegler Suites Hotel is conveniently located nine blocks from historic downtown New Bern, NC. Only three blocks to the hospital,
four blocks from the mall and all major shopping. It is about 10 minutes to the airport, 20 minutes to Cherry Point Marine 
Air Station, 15 minutes to Weyerhaeuser, 10 minutes to Bosch, 
and 15 minutes to the Industrial Park.<br>
<br>

<!-- Map images -->
<img src="/images/ziegler map.jpg"><br>
<hr>

<!-- NO Smoking images and text -->
<h2 class="center"><img src="/images/ZIG4-NoSmoke.JPG"><br>
If you choose to smoke, it is allowed on covered porches just outside the rooms. Benches and ashtray provided.<br>
Please <span class="nosmoking">Do Not Smoke in the Rooms</span></h2>
<hr>

<!-- Address -->
<h2 class="center">No phones in rooms - bring your cell phone.<br>
Reserve your hotel room today!</h2>
</div>

<!-- Standard Footer -->
$footer
</div> <!-- End grid-section from banner.i.php -->
</body>
</html>
<!-- END -->
EOF;
