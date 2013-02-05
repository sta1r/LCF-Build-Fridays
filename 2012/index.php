<?php
// Check for mobile device.
   	require_once 'Mobile_Detect.php';
   	$detect = new Mobile_Detect();
   	//$layout = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');
		$videoWidth = 960;
		$videoHeight = 540;
		if ($detect->isTablet()) {
			$videoWidth = 728;
			$videoHeight = 410;
		} elseif ($detect->isMobile()) {
			$videoWidth = 280;
			$videoHeight = 160;
		}
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>London College of Fashion - 2012 Shows Season</title>
  <meta name="description" content="An at-a-glance guide to the London College of Fashion undergraduate summer shows season 2012">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.css">
	<?php if ($detect->isTablet()) { ?>
	<link rel="stylesheet" href="css/tablet.css">
	<?php } else { ?>
	<link rel="stylesheet" href="css/responsive.css">
	<?php } ?>
	
	<!--[if lt IE 9]>
	 <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<div id="super-container" role="main" class="top-level-container">
		<div class="padbox clearfix">
			<div class="span48">
				<div class="row">
					<div class="span20 relative">		
						<header id="main-header" class="row">
							<div class="span3">
								<h1>London College<br>of Fashion</h1>
							</div>
							<div class="span8">
								<div id="logo2012" class="relative">
									<img src="img/2012.gif" alt="LCF 2012">
									<div id="logo-bg"></div>
								</div>
							</div>
						</header>	
						<div class="row">
							<section id="events-tile" class="span18 add-bottom clearfix">
								<header><h2><span class="visible-desktop">1.</span> Events</h2></header>
								<div class="row">
									<!--<iframe src="http://www.fashion.arts.ac.uk/show/test/" frameborder="0" width="1080" height="720" scrolling="no"></iframe>-->
									<?php include('elements/events-info.php'); ?>								
								</div><!-- .row -->
							</section>
						</div><!-- .row -->
						
						<div class="row">
							<section id="drawing-tile" class="span18 offset12">
								<a class="router" href="#events"></a>
								<h2><span class="visible-desktop">6.</span> Drawing</h2>
								<div class="row">
									<div class="span5 illo">
										<img src="img/ekaterina-gerasimova1.jpg">
									</div>
									<div class="span5 illo">	
										<img src="img/ekaterina-gerasimova2.jpg">
									</div>
								</div>
								<div class="row">		
									<div class="span5">	
										<img src="img/ekaterina-gerasimova3.jpg">
									</div>
									<div class="span5">
										<p>Illustrations by <a href="http://showtime.arts.ac.uk/ekaterina">Ekaterina Gerasimova</a></p>
										<p>BA (Hons) Fashion Design Technology: Womenswear</p>
										<p>Ekaterina is the 2012 winner of the Nina de Yorke Fashion Illustration Award.</p>
										<p>To celebrate her work and that of the previous four years, we have put together a portfolio that marks London College of Fashion’s drawing and illustration success, and demonstrates how important drawing is to our design community.</p>
										<ul>
											<li><a href="http://issuu.com/london_college_of_fashion/docs/drawing">View full drawing portfolio</a></li>
										</ul>		
									</div>
								</div>	
							</section>
						</div><!-- .row -->
						
						<div class="row">
							<section id="showtime-tile" class="span9">
								<a class="router" href="#events"></a>
								<h2><span class="visible-desktop">5.</span> Showtime</h2>
								<div class="row">
									<div class="span5 gallery-container">
										<div class="<?php	if (!$detect->isTablet() && !$detect->isMobile()) { ?>scroll<?php } else { ?>no-scroll clearfix<?php } ?>">
											<div class="items">
												<div class="item">
													<a class="img" href="http://showtime.arts.ac.uk/sethyeung"><img src="img/seth-yeung.jpg" alt="Design by Seth Chun Yip Yeung"></a>
												</div>
												<div class="item">	
													<a class="img" href="http://showtime.arts.ac.uk/reanamorris"><img src="img/reana-morris.jpg" alt="Design by Reana Morris"></a>
												</div>
												<div class="item">	
													<a class="img" href="http://showtime.arts.ac.uk/Sim"><img src="img/jihye-sim.jpg" alt="Design by Jihye Sim"></a>
												</div>			
											</div><!-- .items -->
										</div><!-- .scroll -->
										<div class="navi-container hidden-phone"><div class="navi"></div></div>
									</div><!-- .span5 -->
									<div class="span4">
										<p>Our portfolio website Showtime presents new work from this year's graduates. These images are a very small selection of the work on offer.</p>
										<ul>
											<li><a href="http://showtime.arts.ac.uk/lcf/2012/">View all 2012 graduate work</a></li>
										</ul>	
										<p>Featured: <a href="http://showtime.arts.ac.uk/sethyeung">Seth Chun Yip Yeung</a>, <a href="http://showtime.arts.ac.uk/reanamorris">Reana Morris</a> and <a href="http://showtime.arts.ac.uk/Sim">Jihye Sim</a>.</p>
									</div>
								</div><!-- .row -->
							</section>
						</div><!-- .row -->
						<div id="live-stream-link"><a href="live/"><p><small>View Catwalk<br>Show video</small></p></a></div>
					</div><!-- .span20 -->
				
					<div class="span8">
						<section id="news-tile">
							<a class="router" href="#events"></a>
							<h2><span class="visible-desktop">2.</span> News</h2>
							<ul class="feed no-bullet"></ul>
						</section>
						

						
					</div><!-- .span8 -->
					
					

					
					<div class="span20">
						<section id="featured-tile" class="span20">
							<a class="router down" href="#events"></a>
							<h2><span class="visible-desktop">3.</span> Featured</h2>
							<div class="row">
								<div id="annual" class="span20 add-bottom">
									<video loop width="<?php echo $videoWidth; ?>" height="<?php echo $videoHeight; ?>" preload="none" poster="img/poster-ba-hons-video.jpg" controls>
										<source src="https://s3-eu-west-1.amazonaws.com/lcfvideo/BAHONS2012.mp4" type="video/mp4" />
										<source src="https://s3-eu-west-1.amazonaws.com/lcfvideo/BAHONS2012.ogv" type="video/ogg" />
									</video>
									<?php include('elements/video-fallback.php'); ?>
								</div>
							</div>
							<?php // don't display the issuu embed on phone or tablet
							if (!$detect->isTablet() && !$detect->isMobile()) { ?>
							<div class="row issuu-embed">
								<header class="span6">
									<h3>Annual 2012</h3>
									<p>An overview from the School of Design &amp; Technology</p>
								</header>	
								<div id="drawing" class="span13 offset1">
									<object style="width:560px;height:340px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;embedBackground=%23ffffff&amp;pageNumber=4&amp;backgroundColor=%23222222&amp;documentId=120520210409-64ea68e596a24b30a82fa3e4a3b55223" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:560px;height:340px" flashvars="mode=mini&amp;embedBackground=%23ffffff&amp;pageNumber=4&amp;backgroundColor=%23222222&amp;documentId=120520210409-64ea68e596a24b30a82fa3e4a3b55223" /></object>
								</div><!-- .span13 -->
							</div><!-- .row -->
							<?php } // end mobile detect ?>
						</section>
					</div><!-- .span20 -->	
				</div><!-- .row -->	
			</div><!-- .span48 -->		
		
			<div class="span48">	
				<div class="row">
					<section id="debate-tile" class="span16 offset16">
						<a class="router" href="#events"></a>
						<h2><span class="visible-desktop">4.</span> Debate</h2>
						<div class="row">
							<div id="hypernature" class="span20 add-bottom">
								<video loop width="<?php echo $videoWidth; ?>" height="<?php echo $videoHeight; ?>" preload="none" poster="img/poster-hypernature.jpg" controls>
									<source src="https://s3-eu-west-1.amazonaws.com/lcfvideo/HYPERNATURE.mp4" type="video/mp4" />
									<source src="https://s3-eu-west-1.amazonaws.com/lcfvideo/HYPERNATURE.ogv" type="video/ogg" />
								</video>
								<?php include('elements/video-fallback.php'); ?>
							</div>
						</div>
						<div class="row">
							<div class="span6">
								<p>Debate and dialogue is an essential component of the student journey at London College of Fashion. Our students are encouraged to have strong opinions about many current debates including ethics in fashion and sustainability.</p>  
								<p>An example of this is our 2012 projects ‘For Fur’ and ‘Foe Fur’ which have explored the controversial issue of the use of fur in the fashion industry.</p>
								<p>On one side, students who were sponsored by Saga Furs explored the appeal and techniques of an age-old craft, in a challenging and modernizing way. The outcomes were not about simply using fur but respecting it, understanding it and relating it to contemporary fashion. Our Saga editorial will be published on this page shortly.</p>
							</div>
							<div class="span6">
								<p>On the other side, a competition called ‘Design Against Fur’ run by Respect For Animals, set our students the task of designing without animal products. We took it one step further by asking students to use areas of nature and the animal kingdom as their inspiration. The results were beautifully handmade pieces that incorporated traditional craftsmanship and new technologies.</p>
								<p>Both the editorial feature and film ‘HyperNatureSuperHuman’, demonstrate that no animal need be used to produce beautiful fashion.</p>
							</div>
						</div><!-- .row -->	
						<?php // don't display the issuu embed on phone or tablet
						if (!$detect->isTablet() && !$detect->isMobile()) { ?>
						<div class="row issuu-embed">
							<header class="span5">
								<h3>Saga Furs project</h3>
								<p>A unique celebration of fur craft across three major fashion disciplines: Womenswear, Menswear, Surface Textiles Knitwear and Accessories.</p>
							</header>
							<div id="saga-furs" class="span10 offset1">
								<object style="width:560px;height:300px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;embedBackground=%23ffffff&amp;pageNumber=2&amp;backgroundColor=%23222222&amp;documentId=120619140030-9b72cc364b214c839bdc466f86f01cc9" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:560px;height:300px" flashvars="mode=mini&amp;embedBackground=%23ffffff&amp;pageNumber=2&amp;backgroundColor=%23222222&amp;documentId=120619140030-9b72cc364b214c839bdc466f86f01cc9" /></object>
							</div><!-- .span13 -->
						</div><!-- .row -->
						<div class="row issuu-embed">
							<header class="span5">
								<h3>Design Against Fur project</h3>
								<p>Respect For Animals set our students the task of designing without animal products. We took it one step further by asking students to use animals and nature as their inspiration and information.</p>
								<!--<ul>
									<li>Related: HyperNatureSuperHuman video</li>
								</ul>	
								<a class="router down" href="#debate"></a>-->
							</header>
							<div id="hyper-nature" class="span10 offset1">
								<object style="width:560px;height:300px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;embedBackground=%23ffffff&amp;pageNumber=2&amp;backgroundColor=%23222222&amp;documentId=120619141811-a0fe19e180004e66b8b1e6f58c00ac9c" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:560px;height:300px" flashvars="mode=mini&amp;embedBackground=%23ffffff&amp;pageNumber=2&amp;backgroundColor=%23222222&amp;documentId=120619141811-a0fe19e180004e66b8b1e6f58c00ac9c" /></object>
							</div>
						</div><!-- .row -->
						<?php } // end mobile detect ?>
					</section>
				</div><!-- .row -->	
			</div><!-- .span48 -->	
		</div><!-- .padbox -->
	
		<div id="controls" class="span6 visible-desktop">
			<div class="button top">
				<a id="twitter" href="http://twitter.com/LCFLondon" class="hover" data-id="hashtag">Follow us on Twitter</a>
			</div>
			<div class="button">
				<a id="navigator" href="#" class="toggle" data-id="nav-tile">Click to view navigation</a>
			</div>	
			<nav id="nav-tile">
				<div class="inner">
					<?php include('elements/navigator.php'); ?>
				</div>	
			</nav>	
			<div id="hashtag" class="hide">#LCF2012</div>
		</div>
	
	</div><!-- #super-container -->
	
	<footer id="footer-container" class="top-level-container" role="contentinfo">
		<div class="padbox clearfix">
			<div class="span24">
				<div class="row">
					<div class="span8">
						<p>Thank you for visiting this showcase of new work from our 2012 graduates. The Summer Shows season has now finished, but there's plenty of great content to browse both on this page and <a href="http://www.fashion.arts.ac.uk">back on our main website</a>.</p>
						<p>Simply use the navigator in the top right to browse between projects.</p>
						<p>All work displayed by London College of Fashion at organised events, catwalk shows, exhibitions and other forms of showcase has been selected by a panel of senior staff and industry.</p>
					</div>	
					<div class="span5 offset1">
						<h3>With thanks</h3>
						<ul class="no-bullet">
							<li><a href="http://www.bunker-london.com/">Bunker</a></li>
							<li><a href="http://www.hillandaubrey.com/">Hill &amp; Aubrey</a></li>
							<li><a href="http://www.sagafurs.com/">Saga Furs</a></li> 
							<li><a href="http://www.respectforanimals.co.uk/">Respect For Animals</a></li> 
							<li><a href="http://kin-design.com/">KIN</a></li> 
							<li><a href="http://www.britishfashioncouncil.com/content.aspx?CategoryID=1147">British Fashion Council College Council</a></li> 
						</ul>	
					</div>
					<div class="span4">
						<h3>Connect</h3>
						<ul class="no-bullet">
							<li class="facebook"><a href="http://www.facebook.com/LCFOfficial" title="Connect with us on Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://twitter.com/LCFLondon" title="Follow us on Twitter">Twitter</a></li>
						</ul>	
					</div>
					<div class="span6">
						<h3>Links</h3>
						<ul class="no-bullet">
							<li><a href="http://www.fashion.arts.ac.uk">London College of Fashion</a></li>
							<li><a href="http://www.arts.ac.uk">University of the Arts London</a></li>
						</ul>
					</div>		
				</div>
			</div><!-- .span24 -->
		</div><!-- .padbox -->
	</footer><!-- #footer-container -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-182294-6'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>