<?php get_header(); ?>

<?php is_tag(); ?>
	
	<div id="body-wrap">

		<?php if (have_posts()) : ?>
	<div id="page-header">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	 		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>more about &#8216;<?php single_cat_title(); ?>&#8217;</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>tagged with &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
	 		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive for <?php the_time('F, Y'); ?></h2>
	 		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive for <?php the_time('Y'); ?></h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
			<?php } ?>
	</div><!-- #page-header -->

	<div class="content">

	<div class="navigation">
		<div class="nav-previous"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="nav-next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	<div class="clear"></div>
	</div>

	<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_time('l, F jS, Y') ?></p>
		<?php the_content() ?>
		<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
	</div>

	<?php endwhile; ?>

	<div class="navigation">
		<div><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

	</div><!-- .content -->
	
	<?php get_sidebar(); ?>
	
<?php else : ?>
	<div id="page-header">
	
		<h2>Not Found</h2>
		
	</div>

	
		
	
	
	<div class="content">
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div><!-- .content -->

<?php endif; ?>



<?php get_footer(); ?>
