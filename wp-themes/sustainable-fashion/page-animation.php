<?php
/*
Template Name: Page with animation
*/
?>
<?php get_header(); ?>
<div id="main" class="grid_22 prefix_2">
	<div id="content" class="grid_15 alpha">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
			<?php display_custom_banner_image(); ?>

						<div id="animation-window">
							<table width="558" border="0" align="center">
							  <tr>
							    <th width="565" height="200" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><div style="overflow:hidden;">
							<div id="motioncontainer" style="width:450; height:300px; overflow:hidden; position: relative;">
							<div id="motiongallery" style="position:absolute; left:0; top:0;"></a>
							<div align="center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/purplecircles.gif" width="450" height="574" border=0 usemap="#Map" ></a>
							  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/bluecircles.gif" width="448" height="595" border=0 usemap="#Map2" ></a>
							  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/greencircles.gif" width="448" height="490" border=0 usemap="#Map3" ></a>
							  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/yellowcircles.gif" width="448" height="605" border=0 usemap="#Map4" class="font" ></a>
							  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/orangecircles.gif" width="448" height="578" border=0 usemap="#Map5" ></a>
							  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/redcircles.gif" width="448" height="491" border=0 usemap="#Map6" ></div></a></th>
							  </tr>
							</table>

				<?php 
				// get section links
				$link1 = get_post_meta($post->ID, 'link1', true); 
				$link2 = get_post_meta($post->ID, 'link2', true); 
				$link3 = get_post_meta($post->ID, 'link3', true); 
				$link4 = get_post_meta($post->ID, 'link4', true); 
				$link5 = get_post_meta($post->ID, 'link5', true); 
				$link6 = get_post_meta($post->ID, 'link6', true); 
				?>

							<map name="Map" id="Map"><!-- Design philosophy & practice -->
							  <area shape="rect" coords="87,303,223,344" href="<?php echo $link1; ?>" />
							</map>

							<map name="Map2" id="Map2">
							  <area shape="rect" coords="196,233,317,273" href="<?php echo $link2; ?>"/>
							</map>

							<map name="Map3" id="Map3">
							  <area shape="rect" coords="69,332,238,367" href="<?php echo $link3; ?>"/>
							</map>

							<map name="Map4" id="Map4">
							  <area shape="rect" coords="184,331,324,372" href="<?php echo $link4; ?>"/>
							</map>

							<map name="Map5" id="Map5">
							  <area shape="rect" coords="84,325,233,367" href="<?php echo $link5; ?>" />
							</map>

							<map name="Map6" id="Map6">
							  <area shape="rect" coords="91,214,225,255" href="<?php echo $link6; ?>"  />
							</map>
						</div><!-- #animation-window -->	
						
						<div class="article">
							<?php the_content(); ?>
						</div>
				<?php endwhile; ?>				
				<?php endif; ?>
				<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>
				
			<div class="boxes">
				<ul>
					<?php show_subpages_from_parent($post->ID); ?>
					
				</ul>				
			</div>
			<?php //comments_template(); ?>
		</div><!-- #content -->

		<?php get_sidebar(); ?>

	</div><!-- #main -->
	
<?php get_footer(); ?>
