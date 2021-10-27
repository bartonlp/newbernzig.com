<?php
if($this->noTrack === true || $this->nodb === true) {
  $trackerStr = '';
} else {
  // The tracker.js script has a attrubute of data-lastid which the script then grabs and add the
  // csstest-{LAST_ID}.css before the script with the data-lastid attribute. See the start of
  // tracker.js
  // For this to work we MUST have a RewriteRule that changes the csstest into a call to
  // tracker.php?id={LAST_ID}&csstest. See .htaccess
  
  $trackerStr =<<<EOF
<!-- Add tracker.js and csstest-{LAST_ID} before it. -->
<script data-lastid="$this->LAST_ID" src="https://bartonphillips.net/js/tracker.js"></script>
EOF;
}

return <<<EOF
<head>
  <title>{$h->title}</title>
  <!-- METAs -->
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta charset='utf-8'>
  <meta name="copyright" content="$this->copyright">
  <meta name="Author" content="$this->author">
  <meta name="description" content="{$h->desc}">
  <meta name="keywords" content="{$h->keywords}">
  <!-- More meta data -->
{$h->meta}
  <!-- ICONS, RSS -->
  <link rel="shortcut icon" href="{$h->favicon}">
  <!-- default CSS -->
  <link rel="stylesheet" href="{$h->defaultCss}" title="default">
{$h->link}
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
  <script>jQuery.migrateMute = false; jQuery.migrateTrace = false;</script>
$trackerStr
{$h->extra}
{$h->script}
{$h->css}
</head>
EOF;
