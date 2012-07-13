<?php get_header(); ?>
<div id="main" class="grid_22 prefix_2">
	<div id="content" class="grid_15 alpha">

		<!--<?php if ( is_day() ) : ?>
			<?php echo 'Archives for <span>' . get_the_date() . '</span>'; ?>
		<?php elseif ( is_month() ) : ?>
			<?php echo 'Archives for <span>' . get_the_date( 'F Y' ) . '</span>'; ?>
		<?php elseif ( is_year() ) : ?>
			<?php echo 'Archives for <span>' . get_the_date( 'Y' ) . '</span>'; ?>
		<?php elseif ( is_tag() ) : ?>
			<?php echo "Posts tagged with <i>"; ?>
			<?php single_term_title(); ?>
			<?php echo "</i>"; ?>
		<?php else : ?>
			<?php echo 'Blog Archives'; ?>
		<?php endif; ?>-->
						
		<?php display_custom_banner_image(); ?>
				
		<?php get_template_part('loop'); ?>
	
	</div>

	<?php get_sidebar('bulletin'); ?>
	</div>

<?php get_footer(); ?>
	
