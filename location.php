<!DOCTYPE html>
<?php $thisPage="locationpage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand NYC &middot; Location</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />

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

<body id="wrapper" class="vevent">

	<?php include("includes/header.php"); ?>

<!-- LOCATION -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	<article class="location">
		<header>
			<h1>Location</h1>
			<p>New York. Need we say more? New York is fabulous, cosmopolitan city with a rich typographic history. Why not spend a long weekend here, with Ampersand as the highlight!</p>
		</header>	
		<div id="conf-location">
			<?php /*
			<div class="location-a">
				<h2><em>MyFonts</em> Pre-Party</h2>
				<address>
					<span class="conf-location-name">Brighton Music Hall</span><br />
					127 Kings Road Arches, Brighton, <a href="https://www.google.com/maps/preview#!q=Brighton+Music+Hall%2C+BN1+2FN" title="See on Google Maps">BN1 2FN</a>
				</address>
			</div>
			*/ ?>
			<div class="location-b">
				<h2>Conference</h2>
				<address>
					<span class="conf-location-name">The TimesCenter</span> <br />
					242 W 41st St, New York, <a href="https://www.google.com/maps/preview#!q=TimesCenter%2C+NY+10036&data=!4m11!1m10!4m8!1m3!1d46509!2d-0.1061897!3d50.837418!3m2!1i1210!2i886!4f13.1!5b1" title="See on Google Maps">NY 10036</a>
				</address>
			</div>
			<div class="location-c">
				<h2><em>Typekit</em> After Party</h2>
				<address>
					<span class="conf-location-name">Venue TBA</span>
				</address>
			</div>
		</div><!-- END #conf-location -->	
		
		<?php /*		
		<div id="loc-container">
			<div class="map">
					<iframe src='http://a.tiles.mapbox.com/v3/mhjallan.map-dcw2v1k0.html#15/50.82346178463947/-0.14044046401978338'></iframe>
			</div>			
		</div><!-- END #conf-Location -->
		
		<div id="city-info">
			<h3>Getting Here</h3>
			<p>Brighton is only 30 minutes by train from London Gatwick airport. London itself is only 55 minutes by train.</p>
			<h3>Accommodation</h3>
			<p>Latest information is available from <a href="http://visitbrighton.com/accommodation">visitbrighton.com</a></p>
		</div><!-- END #city-info -->			

*/ ?>	

			
	</article>
	<div class="clearfix"></div>
</div>	
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
