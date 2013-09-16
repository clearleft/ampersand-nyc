<!DOCTYPE html>
<?php $thisPage="speakerspage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand New York &middot; Speakers</title>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
	  var top = $('.speaker-nav').offset().top - parseFloat($('.speaker-nav').css('marginTop').replace(/auto/, 0));
	  $(window).scroll(function (event) {
	    // what the y position of the scroll is
	    var y = $(this).scrollTop();

	    // whether that's below the form
	    if (y >= top) {
	      // if so, ad the fixed class
	      $('.speaker-nav').addClass('fixed');
	    } else {
	      // otherwise remove it
	      $('.speaker-nav').removeClass('fixed');
	    }
	  });

	  $('a[href^="#"]').bind('click.smoothscroll',function (e) {
	      e.preventDefault();
	      var target = this.hash;
	          $target = $(target);
	      $('html, body').stop().animate({
	          'scrollTop': $target.offset().top
	      }, 500, 'swing', function () {
	          window.location.hash = target;
	      });
	  });
	});


</script>

</head>

<body id="wrapper" class="vevent home">

	<?php include("includes/header.php"); ?>


<div class="main-content">

	<?php include("includes/nav.php"); ?>
<?php /*
    <section class="speakers-container" id="erik-spiekermann">

   	<div class="speaker-copy" >
    		<h1>Keynote</h1>
    		<p></p>

   		<h2>Erik Spiekermann</h2>
    		<p class="speaker-bio">Erik Spiekermann is information architect, type designer and author of books and articles on type and typography. Two of his typefaces, FF Meta and ITC Officina, are considered to be modern classics.  In 1979 he founded MetaDesign and in 1989 FontShop. Today he is managing partner and creative director of Edenspiekermann. He is also Honorary Royal Designer for Industry in Britain.</p>
    	</div>	<!-- END SPEAKER-BIO -->

   	<div class="speaker-more">
    		    		<ul>
    			<li><a href="http://www.twitter.com/spiekermann">@espiekermann</a></li>
    			<li><a href="http://spiekermann.com/">spiekermann.com</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPIEKERMANN ###### -->
*/ ?>
   <section class="speakers-container" id="keynote">

  		<div class="speaker-copy" >
   		<h1>Keynote</h1>
   		<p></p>

  		<h2>Very Special Guest</h2>
   		<p class="speaker-bio"></p>
   	</div>	<!-- END SPEAKER-BIO -->

  		<div class="speaker-more">
  	 		  	 		<ul>
  	 			<li></li>
  	 		</ul>
  	 	</div><!-- END MORE-BIO -->
  </section>

   <section class="speakers-container" id="mark-boulton">

  		<div class="speaker-copy" >
   		<h1>Typography in Responsive Design</h1>
   		<p>Drawing on all the tools we currently have at our disposal, Mark will take you through the decisions you can make to make your typography as responsive as your layout.</p>

  		<h2>Mark Boulton</h2>
   		<p class="speaker-bio">Mark Boulton is a web designer and author, and member of the ISTD. He is the founder of Mark Boulton Design, and co-founder of indie publisher Five Simple Steps. Sometimes outspoken, always passionate, Mark is obsessed with applying the fundamentals of good typographic design on the web. Mark lives in South Wales with his wife and daughter, a small collection of neglected bonsai and a guitar he wish he owned when he was 18.</p>
   	</div>	<!-- END SPEAKER-BIO -->

  		<div class="speaker-more">
  	 		  	 		<ul>
  	 			<li><a href="http://www.twitter.com/markboulton">@MarkBoulton</a></li>
  	 			<li><a href="http://www.markboulton.co.uk">www.markboulton.co.uk</a></li>
  	 		</ul>
  	 	</div><!-- END MORE-BIO -->
</section>


 <section class="speakers-container" id="jonathan-hoefler">

	<div class="speaker-copy">
		<h1>Putting the Fonts into Webfonts</h1>
		<p></p>

		<h2>Jonathan Hoefler</h2>
		<p class="speaker-bio"></p>
	</div>	<!-- END SPEAKER-BIO -->

	<div class="speaker-more">
					<ul>
			<li><a href="http://www.twitter.com/@h_fj">@H_FJ</a></li>
			</ul>
	</div><!-- END MORE-BIO -->
</section>

<section class="speakers-container" id="trent-walton">

<div class="speaker-copy" >
	<h1>Get Your Hands Dirty</h1>
	<p>How far can we push type on the web? As webfont choices have expanded over the years, so have our options for what we can do with them. We’ll explore what’s possible with CSS, Javascript, and a little bit of elbow grease.</p>
	<h2>Trent Walton</h2>
	<p class="speaker-bio">Trent Walton is founder and 1/3 of Paravel,  a custom web design and development shop based out of the Texas Hill Country. In his spare time, Trents writes about what he learns at his blog,  and on Twitter.  Trent’s wife has put him on a font allowance.</p>
</div>	<!-- END SPEAKER-BIO -->

<div class="speaker-more">
			<ul>
		<li><a href="http://TrentWalton.com/">TrentWalton.com</a></li>
		<li><a href="http://www.twitter.com/@trentwalton">@TrentWalton</a></li>
		</ul>
</div><!-- END MORE-BIO -->
</section>

<section class="speakers-container" id="nick-sherman">

<div class="speaker-copy" >
		<h1>The Future of Responsive Typography</h1>
		<p></p>

	<h2>Nick Sherman</h2>
		<p class="speaker-bio"></p>
	</div>	<!-- END SPEAKER-BIO -->

<div class="speaker-more">
					<ul>
			<li><a href="http://www.twitter.com/@nicksherman">@NickSherman</a></li>
		</ul>
	</div><!-- END MORE-BIO -->
</section>


<section class="speakers-container" id="jenn-lukas">

<div class="speaker-copy" >
	<h1>On Icon Fonts &amp; Working with Designers</h1>
	<p>Ever spent countless hours crafting a totally awesome type system for your beautiful design, only to have it lost in translation when it goes to development? Let’s examine type and icon fonts through a developer lense and see how to work together to get everyone on the same page!</p>

	<h2>Jenn Lukas</h2>
	<p class="speaker-bio">Jenn Lukas is a web developer working with Happy Cog in Philadelphia. She writes for The Nerdary and has a regular column in .net magazine. When she’s not crafting sites with the finest of web standards, Jenn teaches HTML and CSS for GirlDevelopIt and runs <a href="http://ladiesintech.com">ladiesintech.com</a>.</p>
</div>	<!-- END SPEAKER-BIO -->

<div class="speaker-more">
			<ul>
		<li><a href="http://www.twitter.com/@jennlukas">@JennLukas</a></li>
		<li><a href="http://jennlukas.com/">JennLukas.com</a></li>
	</ul>
</div><!-- END MORE-BIO -->
</section>

<section class="speakers-container" id="christian-schwartz">

<div class="speaker-copy" >
	<h1>Webfonts are Just Fonts</h1>

	<h2>Christian Schwartz</h2>
	<p class="speaker-bio">Christian Schwartz is a type designer and typography consultant. Christian is one half of Commercial Type, a joint venture with Paul Barnes, with whom he has collaborated since 2004 on various typeface projects, most notably the award winning Guardian Egyptian.</p>

</div>	<!-- END SPEAKER-BIO -->

<div class="speaker-more">
			<ul>
		<li><a href="http://www.twitter.com/@commercialtype">@CommercialType</a></li>
		<li><a href="http://www.christianschwartz.com/">ChristianSchwartz.com</a></li>
	</ul>
</div><!-- END MORE-BIO -->
</section>


 <section class="speakers-container" id="luc-de-groot">

	<div class="speaker-copy" >
		<h1>Readability Per Square Centimeter</h1>
		<p>Luc(as) likes to introduce a new terminology named "readability per square centimeter" and explains that it often works contrary to our expectations. The readability per square cm does not depend on font choice in the first place, but on many other factors, that also play an important role in the web.</p>

		<h2>Luc(as) de Groot</h2>
		<p class="speaker-bio">Berlin-based Dutch type designer Luc(as) de Groot has worked with and for many well-known companies and publications. He has made custom fonts for prestigious newspapers such as Folha de S.Paulo, Le Monde, Metro and Der Spiegel in addition to creating corporate type for international companies including Sun Microsystems, Bell South, Heineken, Siemens and Miele. He designed two font families for Microsoft: the ‘monospaced’ font family Consolas, the new alternative to Courier; and Calibri, the new default typeface in Microsoft Word. </p>
	</div>	<!-- END SPEAKER-BIO -->

	<div class="speaker-more">
					<ul>
			<li><a href="http://www.twitter.com/@fontfabrik">@FontFabrik</a></li>
		</ul>
	</div><!-- END MORE-BIO -->
</section>

	<div class="speaker-nav">
		<h2>Speakers &amp; Sessions</h2>
		<ul>
			<?php /*<li><a href="#erik-spiekermann">Erik Spiekermann</a></li>*/ ?>
			<li><a href="#keynote">Special Guest TBA</a></li>
			<li><a href="#mark-boulton">Mark Boulton</a></li>
			<li><a href="#jonathan-hoefler">Jonathan Hoefler</a></li>
			<li><a href="#luc-de-groot">Luc(as) de Groot</a></li>
			<li><a href="#trent-walton">Trent Walton</a></li>
			<li><a href="#nick-sherman">Nick Sherman</a></li>
			<li><a href="#jenn-lukas">Jenn Lukas</a></li>
			<li><a href="#christian-schwartz">Christian Schwartz</a></li>
		</ul>
	</div><!-- END SPEAKER-NAV -->

</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
