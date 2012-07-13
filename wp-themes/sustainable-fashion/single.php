<?php get_header(); ?>
<div id="main" class="grid_22 prefix_2">
	<div id="content" class="grid_15 alpha">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
					
			<?php display_custom_banner_image(); ?>

			<article class="post full-width">
				<h3><?php the_title(); ?></h3>
				<?php if (!in_category('Profiling business')) { ?><p class="post-data"><em><?php the_date() ?> by <?php the_author() ?>  </em></p><?php } ?>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				
				<div class="meta"><b>Posted in</b> <?php the_category(',') ?>
					<span style="color: magenta;font-size: 18px;position: relative; top: 3px"> |</span> 					
						
					<?php the_tags('<b>Tagged </b>', ', ', ' '); ?>

							<?php edit_post_link('Edit This'); ?>
				</div>
			</article>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>				
			
			
		</div>
		<?php get_sidebar('bulletin'); ?>
</div>
<?php get_footer(); ?>