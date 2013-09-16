<!DOCTYPE html>
<?php $thisPage="homepage"; ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Ampersand New York &middot; The Web Typography Conference</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	
	<meta name="description" content="Ampersand is an affordable one-day event for knowledgable web designers and typography enthusiasts, held in New York City on 2 November 2013." />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<script type="text/javascript">
		var html = document.getElementsByTagName('html')[0];
        html.className = 'js wf-loading';
        setTimeout(function() {
            html.className = html.className.replace(' wf-loading', '');
        }, 3000)
        WebFontConfig = { fontdeck: { id: 29643 } };
        (function() {
            var wf = document.createElement('script');
            wf.src = '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
		
	</script>
	<link rel="stylesheet" href="css/styles.css">
	

	
</head>

<body id="wrapper" class="vevent home">

	<?php include("includes/header.php"); ?>

	<!-- SPEAKERS -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	  <section class="section sessions">
		<h1>Ampersand is an affordable one-day event for knowledgable web designers and type enthusiasts, featuring:</h1>
		<ul class="speakers">
<?php /*
			<li class="li-spk5" ><a id="speaker5" href="/speakers.php#erik-spiekermann">Erik Spiekermann</a><p class="presentation-title">Keynote</p></li> */ ?>
			<li class="li-spk5" ><a id="speaker5" href="/speakers.php#keynote">Very Special Guest</a><p class="presentation-title">Keynote</p></li>
			<li class="li-spk2" ><a id="speaker2" href="/speakers.php#mark-boulton">Mark Boulton</a><p class="presentation-title">Typography in Responsive Design</p></li>
			<li class="li-spk7" ><a id="speaker7" href="/speakers.php#jonathan-hoefler">Jonathan Hoefler</a><p class="presentation-title">Putting the Fonts into Webfonts</p></li>
			<li class="li-spk4" ><a id="speaker4" href="/speakers.php#luc-de-groot">Luc(as) de Groot</a><p class="presentation-title">Readability Per Square Centimeter</p></li>
			<li class="li-spk6" ><a id="speaker6" href="/speakers.php#trent-walton">Trent Walton</a><p class="presentation-title">Get Your Hands Dirty</p></li>
			<li class="li-spk1" ><a id="speaker1" href="/speakers.php#nick-sherman">Nick Sherman</a><p class="presentation-title">The Future of Responsive Typography</p></li>
			<li class="li-spk3" ><a id="speaker3" href="/speakers.php#jenn-lukas">Jenn Lukas</a><p class="presentation-title">On Icon Fonts &amp; Working with Designers</p></li>
			<li class="li-spk9" ><a id="speaker9" href="/speakers.php#christian-schwartz">Christian Schwartz</a><p class="presentation-title">Webfonts are Just Fonts</p></li>

		</ul>
		<div class="clearfix">
	</section>
	
</div>		
<?php include("includes/footer.php"); ?>




</body>

</html>
