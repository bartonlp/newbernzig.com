<?php
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->css =<<<EOF
<style>
.even { color: red; }
.odd { color: green; }
ul { list-style: none; }
</style>
EOF;
$h->banner = "<h1>Guest Comments</h1>";
list($top, $footer) = $S->getPageTopBottom($h, $b);

echo <<<EOF
$top

<div id="content">
<ul class="even">
<li>
I'm back here in Maine and missing NC already. Staying in your hotel 
was a great experience Everything was neat and clean as promised.
You were a big help to me in so may ways: finding my way around, 
finding local realtors, and even helping me set up my trac phone. 
Everyone I met there from staff, Jolea and Tony, to other visitors were 
friendly and fun to meet. It felt like a little home away from home. 
If I find myself in the New Bern area again, I will surely be staying at the 
Zig. Thanks for everything. Hope all is well with you and your family.<br>
<br>
God bless,<br>
Kathy</li>
</ul>
<hr>
<ul class="odd">
	<li>
I just wanted to thank you for being so accommodating, 
welcoming, and helpful this past weekend during our 2 night stay at The 
Ziegler. We really enjoyed our time at “The Zig,” exploring New Bern (such a 
charming little town!)... The room was really nice and with the Ziegler 
located only a short distance away from downtown, we were able to ride our 
bikes into town each day for the ride which was very convenient. Hope to be 
back again next year!</li>
<li><br>
Marcia from Raleigh, NC</li>
</ul>
<hr>
<ul class="even">
	<li>My stay there was 
	exceptional!! The room would rival some of the four star motels here in 
	Saint Augustine, Fl. The amenities were well appreciated, and were of the 
	highest standards available. I would have loved to just live there forever 
	in the room.</li>
<li><br>Jan from St. Augustine, Fl</li>
</ul>
<hr>
<ul class="odd">
	<li>We 	enjoyed our stay. The bed was VERY comfortable... We will recommend you to 
	others.</li>
<li><br>Jim from, NC</li>
</ul>
<hr>
<ul class="even">
	<li>The room was really nice and 
	very tastefully decorated. If I am in New Bern again I will stay again.</li>
<li><br>Steve from Fuquay-Varina, NC</li>
</ul>
<hr>
<ul class="odd">
<li>I	just wanted to tell you what a wonderful time we had staying at &quot;The 
Zig&quot;.` We enjoyed the decor of the room. It was so interesting. We 
were in room #4. The room was very comfortable. Most of all the bed 
was so comfortable. We are usually up around 6 or 6:30, we found we 
were sleeping till 8 or 9. I certainly hope you will have a vacancy 
when we come down to visit next year.&quot;</li>
<li><br>Thank you,<br>
Shirley from East Troy, WI</li>
</ul>
<hr>
<ul class="even">
<li>Jordan, Just wanted to drop a line or 2 to say &quot;Thanks&quot; for the great accommodation's
during my stay 8/17-8/20.  It was great to find a place where I can bring my Lab &quot;Riley&quot; to
stay with me.  He's a rescue dog and I really won't go anywhere without having him with me.  
		
The &quot;Zig&quot; was wonderful, in a great location and a perfect place with 
lots of places for walks. The refrigerator and microwave were greatly 
appreciated and of good use. The &quot;Zig&quot; is so conveniently located to 
downtown New Bern as well as only a short drive to many places to go and 
see. I came down to look for a futurehome purchase and the &quot;Zig&quot; was 
the best place to stay. Thanks to Julie at Keller Williams for 
recommending your place. I hope to be able to get back late fall or 
early spring next year and the &quot;Zig&quot; will be the place where I come, 
hopefully for more than a few days.<br>
Thanks again Jordan, I would recommend the &quot;Zig&quot; to anyone who I know 
will be coming down to the area.</li>
<li><br>Ed Poles, (room 5)</li>
</ul>
</div>
$footer
</div>
</body>
</html>
EOF;
