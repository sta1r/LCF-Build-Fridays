<?php if (have_posts()) : ?>
<ul class="full-width items">
<?php while ( have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>">

			<?php the_post_thumbnail('medium');	

			$snippet = get_post_meta($post->ID, 'Snippet', true);
			if ($snippet == "") { $snippet = substr($post->post_content, 0 ,70); }

			echo '<strong>' . $snippet . '</strong>'; ?>
			
		</a>
	</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>