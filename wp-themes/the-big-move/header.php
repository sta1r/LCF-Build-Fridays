<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title>London College of Fashion - <?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/styles/ie6.css" type="text/css" media="screen" />
	<![endif]-->	

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
	<base href="<?php echo bloginfo('wpurl'); ?>/">
	
	<script type="text/javascript" src="http://www.fashion.arts.ac.uk/pigeonsandpeacocks/js/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="http://www.fashion.arts.ac.uk/js/nicemenu.js"></script>
	
</head>

<body class="<?php if ( is_home() ) { ?>home<?php } elseif ( is_page() ) { ?>page<?php } elseif ( is_single() ) { ?>single<?php } elseif ( is_category() ) { ?>category<?php } elseif ( is_month() ) { ?>month<?php } elseif ( is_tag() ) { ?>tag<?php } ?>">
	
	<div id="container">

		<div id="wrapper">
			
			<div id="header-wrap">
			

			
				<div id="header">
				
					<a href="<?php echo get_option('home'); ?>/"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/tbm-logo.png" alt="The Big Move"/></a>
					<h1 class="hidden">The Big Move</h1>

						
				</div><!-- #header -->
				
				<div id="header-nav">
					<ul id="h_page_list">
					<li class="home_link"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
					<?php wp_list_pages('title_li=&exclude=111' ); ?>
					</ul>
					
					<!--<div id="nicemenu" class="peacock">
						<ul>
							<li>
							<span class="head_menu">Jump to month<img src="http://www.fashion.arts.ac.uk/js/img/arrow.png" class="arrow" /></span>
							<div class="sub_menu">
							<?php $params = array( 'type'   => 'monthly',
				                       'limit'  => 5,
				                       'format' => 'custom'
				                        );
								wp_get_archives($params); ?>
							</div>	
							</li>
						</ul>
					</div>--><!-- #nicemenu -->
					
					
				</div><!-- #header_nav -->
			
			</div><!-- #header-wrap -->
			