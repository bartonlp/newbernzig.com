<?php
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->css =<<<EOF
<style>
.marilyn { color: red; }
.nosmoking { color: red; } 
img[src*="https://www.newbern-nc.info/images/Marilon.png"] { height: 600px; }
img[src*="animatedElvis5.gif"] { float: left; padding-right: 10px; width: 200px;}
img[src*="blues bros.JPG"] { height: 400px; }
img[src*="zig-fOUNTAIN.JPG"] { width: 353px; height: 400px; }
img[src*="Ziegler.JPG"] { float: left; margin-right: 10px; margin-bottom: 10px; width: 300px;}
img[src*="twlight zone.gif"] { width: 303px; }
img[src*="Marilyn-1.gif"] { width: 400px; }
img[src*="an-lav~1.gif"] { float: left; margin-right: 10px;}
iframe { width: 680px; height: 450px; }
form input[src*="https://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif"] { width: 300px; }
@media (hover: none) and (pointer: coarse) {
  iframe { width: 300px; height: 200px; }
  #content img[src*="animatedElvis5.gif"] {width: 30%; }
  #content img[src*="an-lav~1.gif"] { width: 30%; }
}
@media (max-width: 770px) {
  iframe { width: 300px; height: 200px; }
  #content img[src*="animatedElvis5.gif"] {width: 30%; }
  #content img[src*="an-lav~1.gif"] { width: 30%; }
}
</style>
EOF;
$h->banner = "<h1>The Ziegler Suites</h1>";

list($top, $footer) = $S->getPageTopBottom($h, $b);

echo <<<EOF
$top
<div id="content">
<h2>
Stay in one of our fun theme suites or<br>
request one of our pet-friendly rooms</h2>

<div id="youtube-vidio">
<iframe src="http://www.youtube.com/embed/nGNz27RjAok?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<h2>Going to be in New Bern NC?<br>
Stay at &quot;The Zig&quot;<br>
The Elvis Hotel Suite has a full kitchen and washer-dryer.<br>
Available nightly, weekly, or monthly</h2>

<img src="/images/animatedElvis5.gif"> <!-- float left -->
<h3>Elvis says<br>
&quot;Thank you, thank you very much&quot;<br>
for choosing &quot;The Zig&quot; Hotel</h3>
<br style="clear: left">
<hr>
<div class="center">
<h2>1914 Trent Blvd. New Bern, NC 28560<br>
<span class="marilyn">Look for Marilyn</span></h2>

<!--<img src="zig-marilyn-small.jpg"><br>-->
<img src="https://www.newbern-nc.info/images/Marilon.png"><br>
<img src="/images/zig sign.jpg">
<img src="/images/blues bros.JPG">
<img src="/images/zig-fOUNTAIN.JPG"><br>
</div>
<hr>

<p>
<!-- image of dogs -->
<img src="/images/Ziegler.JPG">One of the only pet-friendly hotels<br>
River and Roscoe welcome your pet to stay with you in one of our<br>
pet-friendly hotel rooms or hotel suites for $20 per day pet fee.<br>
$75 weekly pet rate.</p>
<p>Standard hotel rooms complete with<br>
refrigerator and microwave<br>
HDTVs and coffee pot.<br>
FREE wireless internet</p>
<hr class="clear">
<h2>Fun Themed Rooms</h2>
<h3>Hotel Room #5<br>
The 1940's Room</h3>
<img src="/images/Frank-Sinatra.jpg">
<img src="/images/1940's hotel room photos.jpg">
<img src="/images/ZIG5-Fridge.JPG"
<img src="/images/1940's room2.jpg">
</h3>
<h3>Flat-screen TVs and updated baths in all rooms<br>
<img src="/images/zieglertv.JPG">
<img src="/images/zieglerbath.JPG"></h2>
</h3>
<hr>
<h3>Hotel Room #4<br>
1950's room<br>
Sorry no pets allowed in Room #4<br>
<img src="/images/DSC04408.JPG">
<img src="/images/1950's hotel room.jpg">
<img src="/images/ZIG4-Bathroom.JPG">
</h3>
<hr>
<h3>Perfect For You!<br>
The spacious Marilyn Suite<br>
Room #2<br>
<img border="0" src="/images/Marilyn-1.gif">
<br>
<img src="/images/DSCN0665.jpg">
<img src="/images/DSCN0664.jpg">
<img src="/images/DSCN0661.jpg"><br>
with full kitchen and stack washer/dryer<br>
<img src="/images/DSCN0663.jpg">
</h3>

<img src="/images/marilynmarquee.gif">
<h2>
Extended-stay discounts.<br>
Traveling nurses, pilots, flight attendants, business travelers or 
just relocating and need temporary lodging.<br>
All are welcome.
</h2>
<hr>
<img src="/images/an-lav~1.gif">
<h3>Lost in the '60s?<br>
We have a place for you. Room 3 is our '60s room.<br>
Hippies welcome</h3>
<br class="clear">
<img src="/images/Hippies2.jpg"><br>
Free '60s movies for our Room 3 guests.<br>
Relax and watch Bewitched the entire second season.<br>
<img src="/images/bewitched-2.jpg"><br>
Or the hilarious Dick Van Dyke Show<br>
<img src="/images/The_Dick_Van_Dyke_Show1.jpg"><br>
Or &quot;Listen to the Story of a Man Named Jeb&quot;.<br>
<img src="/images/clampetts1.jpg">
</h3>
<hr>
<h3>Feeling like something is out there?<br>
<img src="/images/twlight zone.gif"><br>
It's free Twilight Zone movies</h3>

<hr>
<h2>Want a larger place?</h2>
<h3>The Abbot Cottage<br>
Two bedrooms, one bath, full kitchen.<br>
Fully furnished, linens, cookware,<br>
WIFI and cable TV included.<br>
Maid service available for an extra charge<br>
$189 per night, $399 for three nights or $550 per week.<br>
Extended-stay discounts negotiated<br>
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
<h2>The Ziegler Suites Hotel is conveniently located nine blocks from historic downtown New Bern, NC. Only three blocks to the hospital,
four blocks from the mall and all major shopping. It is about 10 minutes to the airport, 20 minutes to Cherry Point Marine 
Air Station, 15 minutes to Weyerhaeuser, 10 minutes to Bosch, 
and 15 minutes to the Industrial Park.<br>
<br>
<img src="/images/ziegler map.jpg"><br>
<img src="/images/ziegler6.JPG"><br>
Free Wireless Internet.<br>
No phones in rooms - bring your cell phone<br>
<img src="/images/ZIG4-NoSmoke.JPG"><br>
If you choose to smoke,<br>
it is allowed on covered porches<br>
just outside the rooms.<br>
Benches and ashtray provided.<br>
Please <span class="nosmoking">Do Not Smoke in the Rooms</span></h2>
<hr>
<h2>Reserve your hotel room today!<br>
The Ziegler Hotel Suites<br>
1914 Trent Blvd. <br>
New Bern, North Carolina 28560<br>
Call: 252-638-6868 or 252-514-9157<br>
Email: <a href="mailto:NewBernZig@Gmail.com?cc=stevetyson55@gmail.com">newbernzig@gmail.com</a>
</h2>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" name="RE">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" style="font-weight: 700">
<input type="hidden" name="cmd" value="_s-xclick"><br>
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" name="submit"><br>
<b>Payment required to guarantee reservation</b>.<br>
Payment in full must be received prior to occupancy.<br>
<a href="Policies.htm">Please read hotel policies</a><br>
<br>
</form>
</div>

$footer
</div> <!-- End grid-section -->
</body>
</html>
<!-- END -->
EOF;
