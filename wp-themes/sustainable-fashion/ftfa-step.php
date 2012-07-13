<?php
/*
Template Name: FTFA Steps
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php edit_post_link('Edit this text', '<p>', '</p>'); ?>
<?php endwhile; endif; ?>