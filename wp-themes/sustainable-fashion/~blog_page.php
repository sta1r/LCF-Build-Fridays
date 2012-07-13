<?php
/*
Template Name: Blog_page
*/
?>
<?php get_header(); ?>
	<div id="main" class="grid_22 prefix_2">
		<div id="content">
			<div class="visual">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php         
					$Homepage = get_post_meta($post->ID, 'Homepage', true);
					if (!empty($Homepage))echo $Homepage;
				?>
			</div>
			<div class="article">
				<?php the_content(); ?>
			</div>
				
				<?php endwhile; ?>
				<?php endif; ?>
			<div class="video-gallery-holder">
				<div class="boxes">
					<ul>
						<?php show_posts_from_category_blog(2,'Blog') ?>
					</ul>
				</div>
			</div>					
		</div>
		<div id="sidebar">	
			<!--h3><span>Subnav</span></h3-->
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>