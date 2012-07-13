<?php get_header(); ?>
<div id="main" class="grid_22 prefix_2">
	<div id="content" class="grid_15 alpha">
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php display_custom_banner_image(); ?>
						
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
