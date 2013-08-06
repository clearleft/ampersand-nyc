<!DOCTYPE html>
<?php $thisPage="schedulepage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand NYC &middot; Schedule</title>
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

<body id="wrapper" class="vevent home">

	<?php include("includes/header.php"); ?>


<!-- SCHEDULE -->

<div class="main-content">

	<?php include("includes/nav.php"); ?>
	<article class="section schedule">
		<h1>Schedule</h1>
		<p>Ampersand NYC will be a fabulous day of nitty gritty details in all aspects of web typography, presented by experts in typeface design, layout, typesetting, and front-end development.</p>

			<table class="schedule-table" summary="Ampersand schedule for 2 November 2013">
<?php /*
                <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-01T20:00:00">Fri 20.00</time> </th>
                    <td>
                    	<h3 class="summary">Pre-Party <em>hosted by MyFonts</em></h3>
                    	<p class="vcard"><a href="/location.php" class="fn" >Brighton Music Hall</a></p>
                    </td>
                </tr>
*/ ?>
				<tr class="vevent break">
                    <th class="time"><time class="dtstart" title="2013-11-02T09:00:00">Saturday 09.00</time></th>
                    <td>
                   		<h3 class="summary">Registration</h3>
                    </td>
                </tr>

                <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T09:35:00">09.35</time> &ndash; <time class="dtend" title="2013-11-02T09:45:00">09.45</time></th>
                    <td>
                   		<h3 class="summary">Opening Remarks</h3>
                   	</td>
                </tr>

                <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T09:45:00">09.45</time> &ndash; <time class="dtend" title="2013-11-02T010:30:00">10.30</time></th>
                    <td>
                    	<h3 class="summary">Keynote</h3>
                    	<p class="vcard"><a href="/speakers.php#keynote" class="fn" >Very Special Guest</a></p>
                    </td>
                </tr>

               <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T10:30:00">10.30</time> &ndash; <time class="dtend" title="2013-11-02T11:15:00">11.15</time></th>
                    <td>
						<h3 class="summary">Typography in Responsive Design</h3>
                    	<p class="vcard"><a href="/speakers.php#mark-boulton" class="fn">Mark Boulton</a></p>
					</td>
                </tr>

                <tr class="vevent break">
                    <th class="time"><time class="dtstart" title="2013-11-02T11:15:00">11.15</time> &ndash; <time class="dtend" title="2013-11-02T11:45:00">11.45</time></th>
                    <td>
               			<h3 class="summary">Break <em>sponsored by Hoefler &amp; Frere-Jones</em></h3>
                   	</td>
                </tr>

                 <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T11:45:00">11.45</time> &ndash; <time class="dtend" title="2013-11-02T12:30:00">12.30</time></th>
                    <td>
						<h3 class="summary">Putting the Fonts into Webfonts</h3>
                    	<p class="vcard"><a href="/speakers.php#jonathan-hoefler" class="fn">Jonathan Hoefler</a></p>
                    </td>
                </tr>

               <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T12:30:00">12.30</time> &ndash; <time class="dtend" title="2013-11-02T13:15:00">13.15</time></th>
                    <td>
						<h3 class="summary">Readability per Square Centimetre</h3>
                    	<p class="vcard"><a href="/speakers.php#luc-de-groot" class="fn">Luc(as) de Groot</a></p>
					</td>
                </tr>

                 <tr class="vevent break">
                	<th class="time"><time class="dtstart" title="2013-11-02T13:15:00">13.15</time> &ndash; <time class="dtend" title="2013-11-02T14:45:00">14.45</time></th>
                	<td>
						<h3 class="summary">Lunch <em>(not provided)</em></h3>
                	</td>
                </tr>

                <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T14:45:00">14.45</time> &ndash; <time class="dtend" title="2013-11-02T15:30:00">15.30</time></th>
                    <td>
                    	<h3 class="summary">Get Your Hands Dirty</h3>
                		<p class="vcard"><a href="/speakers.php#trent-walton" class="fn url">Trent Walton</a></p>
                    </td>
                </tr>

               <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T11:15:30">15.30</time> &ndash; <time class="dtend" title="2013-11-02T16:15:00">16.15</time></th>
                    <td>
						<h3 class="summary">The Future of Responsive Typography</h3>
                    	<p class="vcard"><a href="/speakers.php#nick-sherman" class="fn">Nick Sherman</a></p>
					</td>
                </tr>

                <tr class="vevent break">
                    <th class="time"><time class="dtstart" title="2013-11-02T16:15:00">16.15</time> &ndash; <time class="dtend" title="2013-11-02T16:45:00">16.45</time></th>
                    <td>
               			<h3 class="summary">Break <em>sponsored by Hoefler &amp; Frere-Jones</em></h3>
                   	</td>
                </tr>

                <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T16:45:00">16.45</time> &ndash; <time class="dtend" title="2013-11-02T16:45:00">17.30</time></th>
                    <td>
						<h3 class="summary">On Icon Fonts &amp; Working with Designers</h3>
                    	<p class="vcard"><a href="/speakers.php#jenn-lukas" class="fn url">Jenn Lukas</a></p>
                    </td>
                </tr>
                 <tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T17:30:00">17.30</time> &ndash; <time class="dtend" title="2013-11-02T18:15:00">18.15</time></th>
                    <td>
						<h3 class="summary">Webfonts are Just Fonts</h3>
                    	<p class="vcard"><a href="/speakers.php#christian-schwartz" class="fn url">Christian Schwartz</a></p>
                    </td>
                </tr>
				<tr class="vevent">
                    <th class="time"><time class="dtstart" title="2013-11-02T18:15:00">18.15</time> &ndash; <time class="dtend" title="2013-11-02T18:30:00">18.30</time></th>
                    <td>
						<h3 class="summary">Closing Remarks</h3>
                   	</td>
                </tr>
                <tr class="vevent after-party last">
                    <th class="time"><time class="dtstart" title="2013-11-02T19:30:00">19.30</time> &ndash; <time class="dtend" >Late</time></th>
                    <td>
                    	<h3 class="summary">After Party <em>hosted by Typekit</em></h3>
                    	<p class="vcard"><a href="location.php" class="fn url">TBA</a></p>
                   	</td>
                </tr>
            </table>

            <p class="schedule-change">Schedule is subject to change.</p>

	</article>

</div><!-- END MAIN CONTENT -->


	<?php include("includes/footer.php"); ?>

</body>
</html>
