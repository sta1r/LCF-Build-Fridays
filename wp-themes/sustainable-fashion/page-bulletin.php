<?php
/*
Template Name: Bulletin
*/
?>

<?php get_header(); ?>
	<div id="main" class="grid_22 prefix_2">
		<div id="content" class="grid_15 alpha">		

			<?php display_custom_banner_image(); ?>
	
			<?php	
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts(array(
								'category_name' => 'THE BULLETIN',
								'paged' => $paged
								)
					);
			?>
							
			<?php get_template_part('loop'); ?>
			
		</div><!-- #content -->

		<?php get_sidebar('bulletin'); ?>

	</div><!-- #main -->
<?php get_footer(); ?>

