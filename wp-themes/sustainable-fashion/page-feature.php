<?php
/*
Template Name: Page - Feature
*/
?>
<?php get_header(); ?>
<div id="main" class="grid_22 prefix_2">
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php display_custom_banner_image(); ?>
			
			<!--<div class="full-width add-bottom"><iframe src="http://player.vimeo.com/video/32634186?title=0&amp;byline=0&amp;portrait=0&amp;color=ff0179" width="869" height="489" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>-->
			
			<div id="content" class="grid_15 alpha">
						
			<article class="full-width">
				<?php the_content(); ?>
			</article>
			
			<?php endwhile; endif; ?>
				
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