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
			
			<div id="player" class="span12">
				<div id="slate">
					<img src="../img/mark-white150.png" alt="London College of Fashion: MA 2013 logo" />
				<!--<iframe src='http://live.3xscreen.com/lcf/embed/' width='<?php echo $iframeWidth; ?>' height='<?php echo $iframeHeight; ?>' frameborder='0'></iframe>-->
				</div><!-- #slate -->	
			</div><!-- #player -->
	
		</div><!-- .row -->
				
		<div id="ancillary" class="row">
			
			<div id="running-order" class="span6">
				<h2 class="column-head">Catwalk Show Running Order</h2>
				<ol>
					<li>
						<div class="name">Antonia Lloyd</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/AntoniaLloyd">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Keiko Nishyama</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<!--<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/">View gallery</a></div>-->
					</li><hr>
					<li>
						<div class="name">Maddalena Mangialavori</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/maddalenamangialavori">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Min Wu</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/minwu">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Na Di</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/NaDi">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Nadia Scullion</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/nadiascullion">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Sian Davies</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<!--<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/">View gallery</a></div>-->
					</li><hr>
					<li>
						<div class="name">Xin "Gina" Sun</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/ginaxsun">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Yan Yu "Octo" Cheung</div>
						<div class="course">MA Fashion Design Technology (Menswear)</div>
						<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/octocheung">View gallery</a></div>
					</li><hr>
					<li>
						<div class="name">Yi Xie</div>
						<div class="course">MA Fashion Design Technology (Womenswear)</div>
						<!--<div class="slink"><a class="btn" target="_blank" href="http://showtime.arts.ac.uk/">View gallery</a></div>-->
					</li><hr>
			
				</ol>
				
			</div> <!-- #running-order-->
			
			<div id="tweet-section" class="relative span5 offset1" >
					<h2 class="column-head">Live Tweets</h2>
					<div id="tweet-key">
						<p>Use <a href="http://www.twitter.com/LCFLondon">@LCFLondon</a> or #MA13</p>
					</div>
					<div id="live-tweets"></div>
			</div> <!-- #tweet-section -->
				
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
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>	
	<script src="../js/bootstrap-collapse.js"></script>	
  	<script src="../js/plugins.js"></script>
  	<script>
	$(function() {
	// For additional Juitter config options, check the original download
		if ($('#live-tweets').length > 0) {
			$.Juitter.start({
				searchType:"searchWord", // needed, you can use "searchWord", "fromUser", "toUser"
				searchObject:"LCF2013,lcf2013,MA13,ma13,LCFLondon",
				lang:"en",
				placeHolder:"live-tweets",
				loadMSG: "image/gif",
				imgName: "../img/ajax-loader.gif",
				total: 10,
				readMore: "Read it on Twitter",
				nameUser:"image",
				openExternalLinks:"newWindow",
				filter:"sex->*censored*,porn->*censored*,fuck->*censored*,shit->*censored*,crap->*censored*,cunt->*censored*,wank->*censored*,tits->*censored*"
			});
		}
	});
  	</script>

</body>
</html>