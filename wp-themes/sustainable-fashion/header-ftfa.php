<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('&laquo;', true, 'right'); ?> Fashioning the Future Awards</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css">
		
	<?php wp_enqueue_script( 'jquery' ); ?>
	<?php wp_head(); ?>
	
	<!-- called afterwards to override various styles above -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/core.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ftfa.css">
  	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/lt7.css" media="screen"/>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/ie-hover-pack.js"></script>
	<![endif]-->
	<!--[if gte IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" media="screen"/>
	<![endif]-->
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/modernizr-1.6.min.js"></script>

</head>

<body id="ftfa">

<div id="gel">

	<div id="container" class="container_24 clearfix">
	  <header>
		<div class="top-box grid_24">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>" title="Back to Centre for Sustainable Fashion home page"><img alt="Centre for Sustainable Fashion logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-white.png"></a>
			</h1>
			<div class="form-search">
				<form method="get" id="searchform" action="<?php echo home_url(); ?>">
					<input type="text" value="Search" name="s" id="s" title="Search" onfocus="if (this.value=='Search') this.value = ''">						
				</form>
			</div>		
		</div><!-- .top-box -->