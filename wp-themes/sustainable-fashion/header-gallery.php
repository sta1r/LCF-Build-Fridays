<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta name="description" content="<?php echo(get_post_meta($post->ID, 'meta_description', true)); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="css/lt7.css" media="screen"/>
		<script type="text/javascript" src="js/ie-hover-pack.js"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/jcarousel/lib/jquery.jcarousel.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/jcarousel/skins/tango/skin.css" />
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/open-close.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.galleria.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jcarousel/lib/jquery.jcarousel.pack.js"></script>
	
	<script type="text/javascript">
	jQuery(document).ready(function($) {


		$('.ngg-widget > a').wrapAll('<ul id="carousel" class="jcarousel-skin-tango">').wrap('<li>');
		
		$('#carousel > li:first').addClass('active');
		
		$('#carousel').jcarousel({
			vertical: true,
			scroll: 4
		});
		
		$('.jcarousel-skin-tango').addClass('main-gallery');

		var options = {
		    insert : '#main-image-gallery',
		    clickNext : true,
		    onImage : function(image) {
		        image.css('display','none').fadeIn(200);
		        var top = ($('#gallery-left-col ').height() - $('#main-image-gallery').height()) / 2;
		        //$('#main-image-gallery').css('margin-top', top);
		    },
		    onThumb : function() {}
		};

		$('ul.main-gallery').galleria(options);

		// count total gallery items for pager
		$("#image-total").html($("#carousel").children().size());
		$("#image-num").html($("#carousel li.active").attr("jcarouselindex"));

		$('#prev-image').click(function() { 
		    $.galleria.prev();
		    $("#image-num").html($("#carousel li.active").attr("jcarouselindex"));
		});

		$('#next-image').click(function() { 
		    $.galleria.next();
		    $("#image-num").html($("#carousel li.active").attr("jcarouselindex"));
		});

		$("#carousel li img").click(function(){
		    $("#image-num").html($(this).parent('li').attr("jcarouselindex"));
		});



		$(".jcarousel-next-vertical").css({top: '348px'});

		//urlG = window.location.href;
		//newURL = urlG.split('#');
		//$('#main-image-gallery').append('<img src="'+newURL[1]+'" alt=" " />');

		//resize the image on image gallery
		$('#main-image-gallery img').each(function(){
		    $(this).load(function(){
		        var maxWidth = $(this).width(); // Max width for the image
		        var maxHeight = $(this).height();       // Max height for the image
		        $(this).css("width", "auto").css("height", "auto"); // Remove existing CSS
		        $(this).removeAttr("width").removeAttr("height"); // Remove HTML attributes
		        var width = $(this).width();    // Current image width
		        var height = $(this).height();  // Current image height

		        if(width > height) {
		            // Check if the current width is larger than the max
		            if(width > maxWidth){
		                var ratio = maxWidth / width;   // get ratio for scaling image
		                $(this).css("width", maxWidth); // Set new width
		                $(this).css("height", height * ratio);  // Scale height based on ratio
		                height = height * ratio;        // Reset height to match scaled image
		            }
		        } else {
		            // Check if current height is larger than max
		            if(height > maxHeight){
		                var ratio = maxHeight / height; // get ratio for scaling image
		                $(this).css("height", maxHeight);   // Set new height
		                $(this).css("width", width * ratio);    // Scale width based on ratio
		                width = width * ratio;  // Reset width to match scaled image
		            }
		        }
		        $(this).width() = ($(this).width() > 508)? "508px" : "auto";
		    });
		});
	});
	</script>
	
	
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div class="top-box">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			</h1>
			<div class="form-search">
				<form method="get" id="searchform" action="<?php echo home_url(); ?>">
					<fieldset>
						<div><input type="text" value="Search" name="s" id="s" title="Search" onfocus="clearDefault(id, 'Search');" onblur="restoreDefault(id, 'Search');" /></div>
						<input type="image" src="<?php bloginfo('template_url'); ?>/images/btn-search.gif" onclick="document.getElementById('searchform').submit();" />							
					</fieldset>
				</form>
			</div>		
		</div>
		<div class="nav-holder">
			<ul id="nav">
				<?php wp_nav_menu(  array( 'theme_location' => 'header-menu' ));  ?>				
			</ul>			
		</div>
	</div>