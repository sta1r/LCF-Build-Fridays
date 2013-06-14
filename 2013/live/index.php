<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
		<meta name="description" content="London College of Fashion presents the 2013 Undergraduate Catwalk Show" />
		<title>Runway - Catwalk Show 2013 - London College of Fashion</title>

		<link rel="stylesheet" href="../css/bootstrap.css">

		<!-- We use Modernizr to facilitate HTML5 localstorage -->
		<script src="../js/vendor/modernizr-2.5.3.min.js"></script>
  		
</head>


<body class="live-stream">
	
	<div id="container" class="clearfix">
		<div class="span16">
	    <header class="row add-top add-bottom" id="banner">				
	    </header>

	    <div id="main" class="row">
				
				
			<div id="player" class="span16" style="height: 400px">
				<div id="slate">
				<!--	<div id="countdown"><div id="ticker"></div></div> The countdown is breaking the Showtime feed.-->
				</div>				
			</div>
				
		</div><!-- #main -->
				
		<div id="ancillary" class="row">
			
			<div id="running-order" class="span8">
			<h2>Catwalk Show Running Order</h2>
				<?php include('../elements/running-order.php'); ?>
			</div>
			
			<div class="span8">
				<div class="row add-bottom">
					<div class="span8">
					<h2>Catwalk Show Live Stream 2013</h2>
					<div id="tweet-key"><p><strong>Date:</strong> Monday 1 July, 1800<br/>
					<strong>Venue:</strong> The Yard, London EC2A</p>
					<p><a href="http://blogs.arts.ac.uk/fashion/tag/ba13/">Check the 2013 page for the full exhibition schedule</a></p></div>
					<!--<div id="live-tweets" class="no-bullet"></div>-->
					</div>
				</div>
				<div class="row add-bottom">
					<div class="span8">
					<h2>Follow the shows on Twitter</h2>
					<div id="tweet-key"><p><strong>Use <a href="http://www.twitter.com/LCFLondon">@LCFLondon</a> - or the hashtag #LCF13</strong></p></div>
					<!--<div id="live-tweets" class="no-bullet"></div>-->
					</div>
				</div>	
				<div class="row add-bottom">
					<div class="span8">
						<h2>Browse the featured courses</h2>
						<?php include('../elements/catwalk-course-list.php'); ?>
					</div>
				</div>	
				<div class="row add-bottom">
					<div class="span8">
						<h2>Latest graduate work on Showtime</h2>
						<div id="showtime-json" data-limit="46">
							<ul class="thumb-list no-bullet clearfix"></ul>
						</div>
					</div>
				</div>
			</div>
				
 		</div><!-- #ancillary -->

		<hr>
		
    <footer class="row add-bottom">
			<div class="span8">
				<ul>
					<li><a href="http://www.fashion.arts.ac.uk/courses/honours-degrees/" title="View Honours Degree course information">Honours Degree courses</a></li>
					<li><a href="http://www.fashion.arts.ac.uk/courses/foundation-degrees/" title="View Foundation Degree course information">Foundation Degree courses</a></li>
					<li><a href="mailto:g.j.evans@fashion.arts.ac.uk">Contact the Events Office</a></li>
				</ul>	
			</div>
			<div id="lcf-logo" class="span6 offset2"><a class="logo pull-right" href="http://www.fashion.arts.ac.uk"><img src="../img/lcf-logo.jpg"></a></div>
		</footer>
    

	</div>	
</div> <!--! end of #container -->
	
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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