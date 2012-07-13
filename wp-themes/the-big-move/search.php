<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<div id="page-header">
		<h2>Search Results</h2>
	</div>

	<div class="navigation">
		<div><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>


	<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_time('l, F jS, Y') ?></p>
			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		</div>

	<?php endwhile; ?>

	<div class="navigation">
		<div><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

<?php else : ?>

	<h2>No posts found. Try a different search?</h2>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>