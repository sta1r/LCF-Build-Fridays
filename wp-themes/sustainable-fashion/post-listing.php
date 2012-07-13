<div class="article">
<h2><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" class="nostyle">
<?php the_title(); ?></a></h2>
<i><?php the_date() ?> by <?php the_author() ?>  </i>
<?php the_content(); ?>

	<div class="meta"><b>Posted in</b> <?php the_category(',') ?>
	<span style="color: magenta;font-size: 18px;position: relative; top: 3px"> |</span> 					
	  <?php the_tags('<b>Tagged </b>', ', ', ' '); ?>
	 
	  <?php edit_post_link('Edit This'); ?>
</div>
</div>
