<?php get_header(); ?>
	<div id="main" class="grid_22 prefix_2">
		
		<div id="slides" class="full-width">
			<?php for ($i = 1; $i <= 3; $i++ ) { // loop through home page slides 
				if (get_option('slide-'.$i) && 
					get_option('slide'.$i.'text') && 
					get_option('slide'.$i.'uri')) { // check that all fields are filled out
				?>
			<section id="slide-<?php echo $i ?>" class="slide full-width">
				<div class="splash-img"><a href="<?php echo get_option('slide'.$i.'uri'); ?>" title="Read the full article"><img src="<?php echo get_option('slide-'.$i); ?>" alt="Image for <?php echo get_option('slide'.$i.'desc'); ?>" width="590" height="225"></a></div>
				<div class="splash-quote-container">
					<div class="splash-quote">
						<blockquote><?php echo get_option('slide'.$i.'text'); ?></blockquote>
					</div>
				</div>
				

			</section>	
			<?php } // field check
			} // end loop ?>
		</div><!-- #slides -->
		
		<div id="content" class="grid_15 alpha">	
			
			<div class="bars full-width">
				
					<?php
					$do_id = get_ID_by_slug('challenging-what-we-do');
					$learn_id = get_ID_by_slug('challenging-what-we-learn');
					$know_id = get_ID_by_slug('challenging-what-we-know');
					
					$sections = array( $do_id, $learn_id, $know_id );
										
					/*foreach ($sections as $section_id) : ?>
						<div class="bar full-width half-bottom">
							<h2><a href="<?php echo get_permalink($section_id); ?>"><?php echo get_the_title($section_id); ?></a></h2>
							<?php	
							$args = array(
								'post_type' => 'page',
								'posts_per_page' => 3,
								'post_parent' => $section_id
							);
							query_posts($args);
							get_template_part('home-bar'); 
							wp_reset_query();
						 	?>
						</div>
					<?php endforeach; */?>
					<?php
					$args = array(
						'post_type' => 'page',
						'post__in' => $sections
					);
					query_posts($args);
					
					if (have_posts()) : while ( have_posts()) : the_post(); 
					// usually needed
					global $custom_metabox;
					// get the meta data for the current post
					$custom_metabox->the_meta();
					?>
						<div class="bar full-width half-bottom">
							<h2><?php echo get_the_title(); ?></h2>
							<div class="bar-content">
								<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<p><?php $custom_metabox->the_value('description'); ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				
	 		</div><!-- .bars -->
		</div><!-- #content -->
				
		<?php get_sidebar(); ?>

	</div><!-- #main -->

<?php get_footer(); ?>