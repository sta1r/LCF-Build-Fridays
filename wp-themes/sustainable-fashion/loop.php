<?php 
if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<article class="post full-width">
	
		<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<em><?php the_date() ?> by <?php the_author() ?></em>
		<?php the_content(); ?>
		<div class="meta"><strong>Posted in</strong> <?php the_category(', ') ?>
			<?php the_tags(__('<span style="color: magenta;font-size: 18px;position: relative; top: 3px"> |</span> <b>Tagged </b>'), ', ', ' '); ?>
			<?php edit_post_link(__('Edit'), '| '); ?>
		</div>
</article>
<?php endwhile; ?>

<?php else : ?>

<article class="full-width">

	<h2 class='center'>No posts found.</h2>
	
	<?php get_search_form(); ?>
	
</article>

<?php endif; ?>	

<div class="navigation">
	<div class="floatleft"><?php next_posts_link('&larr; Older posts') ?></div>
	<div class="floatright"><?php previous_posts_link('Newer posts &rarr;') ?></div>
</div>
