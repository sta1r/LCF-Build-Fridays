<?php
// Check for mobile device.
   	require_once '../Mobile_Detect.php';
   	$detect = new Mobile_Detect();
   	//$layout = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');
		$iframeWidth = 640;
		$iframeHeight = 360;
		if ($detect->isTablet()) {
			$videoWidth = 728;
			$videoHeight = 410;
		} elseif ($detect->isMobile()) {
			$iframeWidth = 280;
			$iframeHeight = 158;
		}
?>
<!doctype html>
<html>
<head>
		<meta charset="UTF-8">
		<title>MA Catwalk Show 2013 - London College of Fashion</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="London College of Fashion presents the 2013 MA Catwalk Show" />

		<link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />

		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script>
		// google analytics tracking
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-182294-6']);
		_gaq.push(['_trackPageview']);

		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
		<!-- Twitter embeds-->
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<!-- We use Modernizr to facilitate HTML5 localstorage 
		<script src="../js/vendor/modernizr-2.5.3.min.js"></script>-->
  		
</head>

<body class="live-stream">
	
	<div id="mobile-nav" class="navbar navbar-inverse visible-phone">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="../index.htm">View schedule</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		
	<div id="wrapper" class="container">
	    <header class="row">
			<div class="span12">
				<h1>MA13</h1>
			</div>
		</header>

		<div class="row">
			
			<div id="hero-container" class="span12">
				<div id="slate" class="centered">
					<!--<div id="mark">
						<div id="mark-img">
							<img src="../img/mark-white150.png" alt="London College of Fashion: MA 2013 logo" />
						</div>
					</div>-->
					<iframe width="853" height="480" src="http://www.youtube.com/embed/VD957ztFz6k" frameborder="0" allowfullscreen></iframe>
					
				<!--	<iframe src='http://live.3xscreen.com/lcf/embed/' width='<?php echo $iframeWidth; ?>' height='<?php echo $iframeHeight; ?>' frameborder='0'></iframe>
					<div id="countdown" class="aligncenter"><p>Live catwalk show begins: <span id="ticker"></span></p></div> -->
				</div> <!-- #slate -->	
			</div><!-- #player -->
	
		</div><!-- .row -->
				
		<div id="ancillary" class="row">
			
			<div id="running-order" class="span6">
				<h2 class="column-head">Catwalk Show Running Order</h2>
				<ol>
					<li>
						<div class="name">Maddalena Mangialavori</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/maddalenamangialavori">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/05/ma13-designer-a-day-maddalena-mangialavori/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Na Di</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/NaDi">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/07/ma13-designer-a-day-na-di/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Nadia Scullion</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/nadiascullion">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/06/ma13-designer-a-day-nadia-scullion/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Yan Yu "Octo" Cheung</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/octocheung">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/12/ma13-designer-a-day-octo-yan-yu-cheung/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Min Wu</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/minwu">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/08/ma13-designer-a-day-min-wu/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Antonia Lloyd</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/AntoniaLloyd">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/04/ma13-designer-a-day-antonia-lloyd/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Sian Davies</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/menaisian">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/09/ma13-designer-a-day-sian-davies/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Yi Xie</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/YIXIE">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/13/ma13-designer-a-day-yi-xie/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Xin "Gina" Sun</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/ginaxsun">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/11/ma13-designer-a-day-gina-xin-sun/">Interview</a>
						</div>
					</li><hr>
					<li>
						<div class="name">Keiko Nishiyama</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink">
							<a target="_blank" href="http://showtime.arts.ac.uk/MA2013">Showtime profile</a> |
							<a target="_blank" href="http://blogs.fashion.arts.ac.uk/snapshot/2013/02/10/ma13-designer-a-day-keiko-nishiyama/">Interview</a>
						</div>
					</li><hr>
			
				</ol>
				
			</div> <!-- #running-order-->
			
			<div id="tweet-section" class="relative span5 offset1" >
				<h2 class="column-head">Twitter</h2>
				<div id="tweet-key">
					<p>Use <a href="http://www.twitter.com/LCFLondon">@LCFLondon</a> or #MA13</p>
				</div>
<!--				<div id="live-tweets"></div> -->

<blockquote class="twitter-tweet"><p>JUST IN: see the @<a href="https://twitter.com/lcflondon">lcflondon</a> MA catwalk pictures - <a href="http://t.co/r7gQosuK" title="http://bit.ly/XSHarZ">bit.ly/XSHarZ</a></p>&mdash; VOGUE.CO.UK (@BritishVogue) <a href="https://twitter.com/BritishVogue/status/302439198475051008">February 15, 2013</a></blockquote>

<blockquote class="twitter-tweet" data-cards="hidden"><p>@<a href="https://twitter.com/lcflondon">lcflondon</a> <a href="https://twitter.com/search/%23MA13">#MA13</a> amazing styling from @<a href="https://twitter.com/kim_howells">kim_howells</a> SO MANY LOOKS <a href="http://t.co/BKh6e8bp" title="http://twitter.com/thepop/status/302443569615093761/photo/1">twitter.com/thepop/status/…</a></p>&mdash; POP MAGAZINE (@thepop) <a href="https://twitter.com/thepop/status/302443569615093761">February 15, 2013</a></blockquote>

<blockquote class="twitter-tweet"><p>London College of Fashion: Photos and reviews of the London College of Fashion Collections Fall Winter 2013-14 c... <a href="http://t.co/eui4H8Jv" title="http://bit.ly/12LSmMV">bit.ly/12LSmMV</a></p>&mdash; Vogue Italia(@vogue_italia) <a href="https://twitter.com/vogue_italia/status/304199261996859392">February 20, 2013</a></blockquote>

<blockquote class="twitter-tweet"><p>English garden florals from Keiko Nishiyama <a href="https://twitter.com/search/%23ma13">#ma13</a> lcflondon <a href="http://t.co/IHhnX2S0" title="http://instagr.am/p/Vv8-DqKavQ/">instagr.am/p/Vv8-DqKavQ/</a></p>&mdash; susiebubble (@susiebubble) <a href="https://twitter.com/susiebubble/status/302372670752841728">February 15, 2013</a></blockquote>

<blockquote class="twitter-tweet" data-cards="hidden"><p>Yi Xie look from LCF MA show - tight collection with commercial bite that would look good on a rack <a href="https://twitter.com/search/%23lfw">#lfw</a> <a href="http://t.co/n22ECBws" title="http://twitter.com/simonchilvers/status/302389509381828608/photo/1">twitter.com/simonchilvers/…</a></p>&mdash; Simon Chilvers (@simonchilvers) <a href="https://twitter.com/simonchilvers/status/302389509381828608">February 15, 2013</a></blockquote>

<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<blockquote class="twitter-tweet" data-cards="hidden"><p>A catwalk shorts-off! Antonia Lloyd's boyish LCF MA collection also featured a parrot print <a href="https://twitter.com/search/%23lfw">#lfw</a> <a href="http://t.co/m9yeX3Hi" title="http://twitter.com/simonchilvers/status/302390491046100993/photo/1">twitter.com/simonchilvers/…</a></p>&mdash; Simon Chilvers (@simonchilvers) <a href="https://twitter.com/simonchilvers/status/302390491046100993">February 15, 2013</a></blockquote>

<blockquote class="twitter-tweet" data-cards="hidden"><p>My favourite <a href="https://twitter.com/search/%23lcf">#lcf</a> <a href="https://twitter.com/search/%23lfw">#lfw</a> designer Na Di - a menswear mashup of gentlemanly tailoring and hiphop style <a href="http://t.co/0uK3pYAa" title="http://twitter.com/Disneyrollrgirl/status/302387879081021441/photo/1">twitter.com/Disneyrollrgir…</a></p>&mdash; Disneyrollergirl (@Disneyrollrgirl) <a href="https://twitter.com/Disneyrollrgirl/status/302387879081021441">February 15, 2013</a></blockquote>

<blockquote class="twitter-tweet"><p>LCF MA is showing today! And we got the preview @<a href="https://twitter.com/lcfpressoffice">lcfpressoffice</a> <a href="http://t.co/9xSErN1F" title="http://ow.ly/hIO4G">ow.ly/hIO4G</a></p>&mdash; Fashion156.com (@Fashion156) <a href="https://twitter.com/Fashion156/status/302349226367668225">February 15, 2013</a></blockquote>

			</div> <!-- #tweet-section -->
			
			<div id="downloads" class="span12">
	 			<h2 class="column-head">Downloads</h2>
	 			<ul>
	 				<li><a href="https://s3.amazonaws.com/lcfaudio/LCF-MA13-MIX.mp3">Catwalk show soundtrack - MA13 MIX [55MB, mp3 format]</a> (click to play, right-click to download and save)</li>
	 			</ul>	
 			</div><!-- #downloads -->	

 		</div><!-- #ancillary -->

 		

		<div class="row">
					<div class="span12 border-top" id="link-row">
						<ul id="link-list">
							<span>
							<li><a href="http://www.fashion.arts.ac.uk/graduate-school/" title="View postgraduate course information">Graduate School courses</a> </li>
							<span>|</span>
							<li><a href="mailto:g.j.evans@fashion.arts.ac.uk">Contact the Events Office</a></li>
							</span>
						</ul>
					</div>
				</div>

			<footer id="logo-panel" class="row">
		<!--			<div id="sponsor-logos" class="span9">
						<img src="img/sponsors.gif">
					</div>
		-->
					<div id="lcf-logo" class="span3 offset9">
						<a class="logo" href="http://www.fashion.arts.ac.uk"><img src="../img/lcf-logo.jpg"></a>
					</div>
				</footer>

	</div> <!-- .container -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>	
	<script src="../js/bootstrap-collapse.js"></script>	
	<script src="../js/jquery.countdown.pack.js"></script>	
  	<script src="../js/jquery.juitter.js"></script>
  	<script src="../js/main.js"></script>
  	

</body>
</html>