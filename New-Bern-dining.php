<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->banner = "<h1>Dining Out in New Bern</h1>";
$S->meta = "<meta name='Editor' content='Bonnie Burch 5/20/23'>";

$S->css = <<<EOF
.list { list-style-type: disc; }
.list li { margin-bottom: 10px; }
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<div id="content">
<p>List of New Bern area restaurants in alphabetical order</p>
<ul class="list">
<li>ANNABELLE'S  3100 MLK Blvd., Inside Twin Rivers Mall.<br />
Victorian Nouveau atmosphere. Prime rib dinner or sandwich, chef salad, 
fettuccine, hamburger, French silk pie, this restaurant has it all, 
especially ribs and fajitas. (252)633-6401

<li>APPLEBEE'S 3450 MLK Blvd.<br>
A well-known franchise. Ribs, burgers, 
all the fancy salads you could dream of. Pastas especially varied. Quesadillas 
the best. Desserts yummy! Drink specialties every day. (252)637-8050

<li>ARTURO'S 1906 S. Glenburnie Rd.<br>
<i>Hola, muchachos!</i> The Mexican restaurant is packing them 
in. Entertainment on weekends. Prices reasonable, menu very extensive, good food. (262)634-1894

<li>BAKER'S KITCHEN 227 Middle St.<br>
You'll love the home cooking. Wonderful smothered 
pork chops and fried chicken with all the trimmings, homemade breads and 
desserts. Specials every day, try the Dutch potatoes as a side dish or the 
fried sweet potato strips. Breakfasts great, with the homemade bread toasted. 
Yum! (252)637-0304

<li>BEARTOWN BISTRO &amp; PIZZA CO. 1200 US Hwy 70.<br>
Little things, hand-held, salads, best pizza in town. Don't miss the tantalizing Weekly Specials.
New deck and bar area. Best food for the price in town. (252)635-3396

<li>THE CAROLINA BAGEL CO. 3601 Trent Rd.<br>
Where the New Bern elite 
meet to greet and eat. Packs 'em in and only the limited space holds it back. 
You'll love breakfasts there; you can get the works (even pancakes) or their 
homemade gourmet bagels and muffins with a variety of cream cheese flavors. 
Lunch is terrific too. (252)636-0133

<li>CAPTAIN RATTY'S SEAFOOD and STEAKHOUSE 202 Middle St.<br>
Ratty's is a restaurant/oyster bar in the best location in town. Upstairs is 
a piano bar with live entertainment several nights a week, and rootop dining is available when weather permits. It has become the 
&quot;in&quot; place to relax and take friends. World's best clam 
chowder. PS, the filet is the best we've ever had. Somewhat pricey 
but delicious. (252)633-2088

<li>CYPRESS HALL KITCHEN and BAR 219 Middle St.<br>
Provides a culinary adventure of Southern cuisine using fresh ingredient.
Upscale dining experience in a beautiful historic building.
A classy place, reservation needed at night (252)633-5909.

<li>THE CHELSEA 335 Middle St.<br>
Great location after sightseeing downtown, features better-than-good specials every day, 
brand new terrific menu. We consider it the best in town. Wonderful lunch 
menu, dinners are packed on weekends, call for reservations. Our all-time 
favorite. Opulent New Bern 1920's style 
atmosphere. Upbeat. Can take groups if you call ahead (252)637-5469.

<li>CHINA GARDEN 1216 S. Glenburnie Rd.<br>
Great buffet. Small place, spotless. friendly staff; you'll love it.
You may also order from the menu. (252)637-8118

<li>COW CAFE 319 Middle St.<br>
Kids of all ages, including adults, love this home-made ice cream factory. Flavors range from the 
ever-popular Moonilla to Chocolate CowPie! A New Bern icon, you can watch the 
ice cream being made while you chomp. South's best barbecue is offered here, the 
famed Raymond's brand. Nowhere else in the eastern NC has this pork 
delectable. Lunches with chicken, burgers and dogs, salads too.
Holstein-themed, even the stools have udders! You'll love the fun. 

<li>EL CERRO GRANDE 2503 MLK Blvd.<br>
The number 2 in Mexican food now. Small place, tasty and huge servings. <i>Aqui se habla espanol, y hay 
chimichangas y burritos extraordinarios!</i>

<li>EL TACO LOCO 2408 MLK Blvd.<br>
Not snazzy, no atmosphere, but the best authentic Mexican food in town. Their giant burito feeds two.
Must try the Asada Fries. (252)633-3326

<li>FRIDAY'S 1890 SEAFOOD 2307 Neuse Blvd.<br>
Fried seafood and the usual Carolina 
BBQ; may be the oldest seafood place in town. This old gal is showing her 
wrinkles, but the food is pretty darned good. Lots of it. (252)637-2276

<li>FAMOUS SUBS AND PIZZA  2210 Neuse Blvd.<br>
The name says it 
all. It's known for the subs. Pizza is also a winner. Lunch 
and dinner specials. Old-time New Bernians have always loved this place with its own special spaghetti sauce. Greek or Italian style. Nice 
atmosphere. There is also a top-notch bakery attached. (252)637-2809

<li>HABACHI SUPER BUFFET 3342 MLK Blvd.<br>
All-you-can-eat buffet (food varies from day to day) and try their Hibachi grill. (252)633-9888

<li>INTERNATIONAL HOUSE OF PANCAKES(IHOP) 3400 MLK Blvd..<br>
A calorie lover's dream for breakfast. The votes are still out on lunch and dinner. (252)633-7800

<li>KITCHEN ON TRENT 2500 Trent Rd.<br>
Here's a great place to eat, 
especially if you want healthy choices. Warm, welcoming, the chicken salad is 
to die for. Nothing fried. You'll like their style; low-fat choices are super. 
Desserts, breakfast goodies, must try. (252)638-2241

<li>MOORE'S OLDE TYME BARBECUE 3615 MLK Blvd..<br>
If you haven't tried barbecue North Carolina-style, this is 
the place to start. Don't expect beef slabs with tomato sauce, that's not their 
way. Vinegar-based BBQ sauce is the norm. Shredded pork is the only TRUE barbecue. Fried shrimp sandwich also a good 
choice. No frills, (to understate the case). Try the shrimp and 
fish platters. Moore's serves food, not fancy. It's an eatin' place, period. (252)638-3937

<li>MORGAN'S TAVERN &amp; GRILL 235 Craven St.<br> 
Diverse menu and unique atomosphere, inside and outside dining. Full bar.
Buttery croissants come with every meal. Lobster bisque to die for! Parking lot on 
the left a real plus. Charming decor takes advantage of the old building with exposed beams and
raw brick walls. These folks know their business. (252)636-2430

<li>MJ'S RAW BAR &amp; GRILLE 216 Middle St.<br>
Understated decor, set up for eatin'
the good stuff. Full bar. Crabcakes tasty. Little Neck clams, Lots of creative specials. No reservations. (252)635-6890


<li>MUSASHI STEAK &amp; SEAFOOD RESTAURANT 2041 S. Glenburnie Rd.<br>
Good theater with meals cooked at your table and a fun atmosphere. Very heavy on the 
veggies here; a nice night out but hard to find. (252)637-0063

<li>OUTBACK STEAKHOUSE 111 Howell Rd.<br>
What can you say? It's the best. Coconut shrimp is 
at least as good as the steaks and the chops. The absolute best pork chops 
anywhere. (252)672-9394

<li>PAULA'S ITALIAN RESTERANT &amp; PIZZA 3946 MLK Blvd..<br>
Great pizza, and other Italian specialties. They seem to have their ducks in 
the proverbial row, salads are ho-hum. Good food, fast service, friendly 
personnel. Seniors delight with reasonably priced entrees. Voted best pizza in town. (252)636-2324

<li>37th ST. PIZZERIA 2402 Nuese Blvd.<br>
Old-timer, with a late bar scene, Italian food and more Italian food. Deep-dish pizza. If you're not hungry 
for delicious old-style Italian, go elsewhere. Good lunch menu, calzones a
specialty item. Pizza really tasty. Draft beer and wine. Delivery. (252)633-5444

<li>SCHLOTZSKY'S 3335 MLK Blvd..<br>
Steve's favorite place to eat. Try lunch here with the Original sandwich, founded in Austin TX. You'll 
be satisfied and immediately decide to come back and try other things. Our 
favorite: those little pizzas. New sandwiches on the menu; don't pass up the Reubens or the soups. (252)638-2508

<li>SPUNKY McDOOGLE'S 1908 S. Glenburnie Rd.<br>
Short orders done right. Ask for the macaroni and cheese 
casserole. Super cool bar, just a great neighborhood homey place, offering good food and service. (252)637-5705

<li>THAI ANGEL 247 Craven St.<br>
Fantastic Thai cuisine, featuring duck and soft-shelled crab. No reservations. (252)631-5461

<li>WAFFLE HOUSE 3303 MLK Blvd..<br>
Doing that voo-doo that they do so-o-o-o 
well, with all that great cholesterol. (252)635-5220

<li>ANDY'S 3200 MLK Blvd..<br>
Absolute best cheese-steak and orangeades anywhere. 9252)514-2893

<li>SONIC 3510 MLK Blvd.<br>
A 1950's drive-in fix. (252)636-9803

<li>BOJANGLES 3770 MLK Blvd.<br>  
Spicy fried chicken and lots of fixings. (252)514-6610
</ul>

</div>
$footer
</div>
</body>
</heml>
EOF;
