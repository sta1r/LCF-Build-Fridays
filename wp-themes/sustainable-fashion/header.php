<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php echo(get_post_meta($post->ID, 'meta_description', true)); ?>" />
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" media="screen" />
		
<?php 
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script('jquery');
 	wp_head(); 
?>

	<!-- called after wp_head() to override various styles -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/lt7.css" media="screen"/>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/ie-hover-pack.js"></script>
	<![endif]-->
	<!--[if gte IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" media="screen"/>
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	

	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-10726394-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="container_24 clearfix">
	<div id="header" class="grid_24">
		<div class="top-box full-width half-bottom">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			</h1>
			<div class="form-search"><?php get_search_form(); ?></div>		
		</div>
		<div class="nav-holder grid_22 alpha omega prefix_2">
				<?php wp_nav_menu(  array( 'menu_id' => 'nav', 'theme_location' => 'header-menu', 'depth' => 2 ));  ?>				
		</div>
	</div>