<?php
/*
Template Name: FTFA
*/
?>
<?php get_header('ftfa'); ?>
		
		<div class="grid_12">
			<h1 id="unique">Fashioning the Future Awards</h1>
		</div>
		
		<div id="intro" class="grid_12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this text', '<p>', '</p>'); ?>
			<?php endwhile; endif; ?>	
		</div>
	  </header>
  
	  <div id="main">
		<div id="ftfa-side-menu" class="grid_5">
			<h4>Resources</h4>
			<?php wp_nav_menu(  array( 'theme_location' => 'FTFA-menu' ));  ?>	
		</div>
		<!--
		<div class="grid_6 suffix_1">
			
			<div class="step-block active">
				<a class="step-link" href="index.php">
					<h4>Step 01.</h4>
					<p>Register to access this year’s categories and briefs and to receive updates on valuable resources, announcements, prize details, showcasing and submission process.</p>
				</a>	
			</div>
			
			<div class="step-block">
				<a class="step-link" href="step-02/">
					<h4>Step 02.</h4>
					<p>Select a category or categories, read your chosen brief(s) and guidelines carefully, use the resources to inform and inspire your work and then submit your response(s) according to the instructions.</p>
				</a>
			</div>
			
			<div class="step-block">
				<a class="step-link" href="step-03/">
					<h4>Step 03.</h4>
					<p>Please make sure that you look carefully at the formatting guidelines *.pdf file included when you download the brief from your chosen category before submitting your work otherwise we may not be able to judge it.</p>
				</a>	
			</div>
			
		</div>

		<div id="main-content" class="article grid_12">
			<h2>Register</h2>
			
			<?php echo do_shortcode( '[contact-form 3 "Fashioning the Future 2011 Registration"]' ); ?>
			
		</div>
		-->
		<div class="grid_6 suffix_1"><?php echo nggShowGallery(8); ?></div>

		<div id="main-content" class="article grid_12">
			
			<?php
			query_posts(array(
				'page_id' => 7379
				)
			);
			
			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this text', '<p>', '</p>'); ?>
			<?php endwhile; endif; ?>	

		</div>

	  </div><!-- #main -->
  
<?php get_footer('ftfa'); ?>