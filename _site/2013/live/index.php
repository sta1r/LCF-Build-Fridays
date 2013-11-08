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
<head>
  	<meta charset="utf-8">
	<title>Runway - BA Catwalk Show 2013 - London College of Fashion</title>	
	<meta name="description" content="London College of Fashion presents the 2013 Undergraduate Catwalk Show" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../css/bootstrap.css?v=1">

	<!-- We use Modernizr to facilitate HTML5 localstorage -->
	<script src="../js/vendor/modernizr-2.5.3.min.js"></script>
  		
</head>


<body class="live-stream">
	
	<div id="wrapper" class="container">

	    <header class="row add-top add-bottom">

				<div class="span3">
					<p><strong>Catwalk Show Live Stream 2013</strong></p>
				</div>	
			
				<div class="span4 offset5">	
					<p><strong>Date:</strong> Monday 1 July, 18.00<br/>
					<strong>Venue:</strong> The Yard, London EC2A</p>
					<p><a href="http://blogs.arts.ac.uk/fashion/tag/ba13/">Check the 2013 page for links to news and events info</a></p>
				</div>
				
	    </header>
		<div class="row">
    		<div id="hero-container" class="span12">
				
				<div id="player" class="clearfix">
					<div id="slate">
						<?php include('../elements/video-on-demand.php'); ?>
						<!--<div id="countdown" class="aligncenter"><p>Live catwalk show begins: <span id="ticker"></span></p></div>-->
					</div>				
				</div>
			</div>
				
		</div><!-- #hero-container -->
				
		<div id="ancillary" class="row">
			
			<div id="running-order" class="span6">
				<h2>Catwalk Show Running Order</h2>
				<?php include('../elements/running-order.php'); ?>
			</div>
			
			<div class="span5 offset1">
				<div class="row add-bottom">
					<div class="span5">
						<h2>Follow the shows on Twitter</h2>
						<div id="tweet-key">
							<p><strong>Use the hashtag #LCF13 and follow <a href="http://www.twitter.com/LCFLondon">@LCFLondon</a></strong></p>
						</div>
						<a class="twitter-timeline" href="https://twitter.com/search?q=%23lcf13" data-widget-id="348030047027863552">Tweets about "#lcf13"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					</div>
				</div>
				<div id="tweet-section" class="row">
					<div class="span5">
						<div class="row">
							<div class="span5">
								<div id="live-tweets"></div>
							</div>
						</div>
						<div class="row add-bottom">
							<div class="span5">
								<h2>Browse the featured courses</h2>
								<?php include('../elements/catwalk-course-list.php'); ?>
							</div>
						</div>	
					</div>
				</div>
				<!--<div class="row add-bottom">
					<div class="span5">
						<h2>Latest graduate work on Showtime</h2>
						<div id="showtime-json" data-limit="46">
							<ul class="thumb-list no-bullet clearfix"></ul>
						</div>
					</div>
				</div>-->
				
 		</div><!-- #ancillary -->

		<hr>
	</div>	<!--! end of #container -->	
	
    <footer class="row add-bottom">
		<div class="span12"><hr></div>
			<div class="span6">
				<ul>
					<li><a href="http://www.fashion.arts.ac.uk/courses/honours-degrees/" title="View Honours Degree course information">Honours Degree courses</a></li>
					<li><a href="http://www.fashion.arts.ac.uk/courses/foundation-degrees/" title="View Foundation Degree course information">Foundation Degree courses</a></li>
					<li><a href="mailto:g.j.evans@fashion.arts.ac.uk">Contact the Events Office</a></li>
				</ul>	
			</div>
			<div id="lcf-logo" class="span4 offset2">
				<a class="logo pull-right" href="http://www.fashion.arts.ac.uk"><img src="../img/lcf-logo.jpg"></a>
			</div>
	</footer>
    


	
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>	
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>					

		<script src="http://cdn.jquerytools.org/1.2.7/tiny/jquery.tools.min.js"></script>

		<!-- scripts concatenated and minified via build script -->
	  <script src="../js/plugins.js"></script>
	  <script src="../js/main.js"></script>
	  <!-- end scripts -->
		
		<script>
	    var _gaq=[['_setAccount','UA-182294-6'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	  </script>
	
</body>
</html>