<?php

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->banner = "<h1>Ziegler Hotel Policies</h1>";
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";

[$top, $footer] = $S->getPageTopBottom($h);

echo <<<EOF
$top

<div id="content">
<hr>
<h2>Please Read</h2>
<h3>Rules and regulations for The Ziegler Suites</h3>
<ul>
<li>Check-in: 3 p.m. EST/EDT
<li>Check-out: 11 a.m. EST/EDT
<li>Early check-ins and check-outs may be requested but not guaranteed.
<li>Stays more than one hour past the required check-out without prior approval are subject to a charge for an additional night's stay.
<li>If you choose to Smoke, please Smoke Outside.
There is a covered porch for smoking with ashtray provided.
Any Indication of Smoking Inside the rooms will result in a $250 charge to the credit card on file for odor remediation.
<li>Pets are permitted only with prior approval. $20 Nightly or $75 Weekly pet fee applies. All pets must be on leashes at all 
times when outside the rooms. Pet owners are responsible for cleaning up of 
any/all pet waste. Pets are not allowed on furniture at any time. Any evidence 
of pets on furniture will result in $150 extra charge to the credit card on file for 
cleaning. All pets must be up to date on rabies and all other 
vaccinations. Heartworm preventive is highly recommended. All pets are to be 
treated with Advantage or similar topical flea and tick repellent three days 
prior to arrival. Fleas can cause harmful/fatal illness to humans and pets. All 
items above are the sole responsibility of the pet owner. The Ziegler owner's 
assume no responsibility for illness or injury that may incur to pets or humans 
while on the premises.
</ul>

<h3>Reservations and Cancellations</h3>
<ul>
<li>Reservations are not guaranteed until payment in full is received.
<li>Cancellations must be made 30 days in advance to qualify for a refund.
60 Days may be required at proprietor's discretion for reservations during timeframes surrounding special events in the 
area or holidays.
<li>A 13% cancellation fee applies.
<li>Any reservation that is not cancelled per the above noted guidelines will be non-refundable.
<li>Charges to credit card will be incurred if any of the following apply
<ol>
<li> Damage is done to the room or its contents, beyond normal wear and tear.
<li>Charges are incurred due to contraband, pets or collection of payments or services rendered during the stay.
<li>Keys are not returned to office (place in drop-slot if no one is there).
<li>All charges accrued during the stay are not paid prior to departure.
<li>Linens, towels, wash cloths, pillows, blankets or any other items; including but not limited to DVDs, books, electronics, decorative 
accessories or furnishings, are lost or damaged.
</ol>
</ul>
</div>
$footer
</div>
</body>
</html>
EOF;
