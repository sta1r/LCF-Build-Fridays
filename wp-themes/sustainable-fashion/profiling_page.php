<?php
/*
Template Name: Profiling
*/
?><?php get_header(); ?>
<div id="main" class="grid_22 prefix_2">
	<div id="content" class="grid_15 alpha">	
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="visual">
						<img src="http://blogs.fashion.arts.ac.uk/sustainable-fashion/files/2009/09/R-Cassar2.jpg" alt="<?php echo $post->post_title; ?>"/>
						<h2><span class="pinkdash"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet-pink.gif" /></span><?php echo $post->post_title; ?></h2>
                     </div>						
						<div class="article">
							<?php the_content(); ?>
							<div class="profilingGallery">
							<h2>Business List</h2>
							<?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$sort = $_GET['orderby']=='title' ? $_GET['orderby'] : 'date';
								$post_obj = $wp_query->get_queried_object();
								$post_name = $post_obj->post_name;
								
								display_post_grid(50, $paged, $sort, $post_name); 
							?>
							</div>
						</div>
						
						<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>
				<?php endwhile; ?>				
				<?php endif; ?>				

			<?php //comments_template(); ?>
		</div>
			
		<?php get_sidebar(); ?>

	</div>
	
<?php get_footer(); ?>