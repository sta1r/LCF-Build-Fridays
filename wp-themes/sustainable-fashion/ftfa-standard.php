<?php
/*
Template Name: FTFA Standard
*/
?>
<?php get_header('ftfa'); ?>
		
		<div class="grid_12">
			<h1 id="unique"><a title="Back to Fashioning the Future" href="<?php bloginfo('url'); ?>/fashioning-the-future/">Fashioning the Future Awards</a></h1>
		</div>
		
		<div id="intro" class="grid_12">
			<?php 
			
			query_posts(array(
				'page_id' => 211 // 211 live
				)
			);
			
			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this text', '<p>', '</p>'); ?>
			<?php endwhile; endif; 
			
			wp_reset_query();
			
			?>
		</div>
	  </header>
  
	  <div id="main">
		<div id="ftfa-side-menu" class="grid_5">
			<h4>Resources</h4>
			<?php wp_nav_menu(  array( 'theme_location' => 'FTFA-menu' ));  ?>
		</div>
		
		<div class="grid_6 suffix_1">
			
			<?php 
			$excerpt = get_post_meta($post->ID, 'excerpt', true); 
			if ($excerpt) {
				echo '<p>' . $excerpt . '</p>';
			}	
			
			$nggallery = get_post_meta($post->ID, 'nggallery', true); ?>

			<div id="col-gallery">
				<?php
				if (function_exists("nggShowGallery")) { 
					if ($nggallery) {
						echo nggShowGallery($nggallery);
					}
				} 
				?>
			</div>
			<p><!-- spacer to make the column flex -->
			
		</div>
		
		<div id="main-content" class="grid_12">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this text', '<p>', '</p>'); ?>
			<?php endwhile; endif; ?>
			
			
		</div>

	  </div><!-- #main -->
	
<?php get_footer('ftfa'); ?>