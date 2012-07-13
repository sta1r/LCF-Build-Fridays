<div id="sidebar" class="grid_6 prefix_1 omega">	
	
	<?php if (is_page()) :
	$parent = $post->post_parent;
	
	if ($parent) :
		$children = wp_list_pages("title_li=&child_of=$parent&echo=0&depth=1");
	else : 
		$children = wp_list_pages("title_li=&child_of=$post->ID&echo=0&depth=1");
	endif;	
	?>
		<ul class="subnav">
			<?php echo $children; ?>
		</ul>
	<?php endif; ?>			

<!--	<div class="box">
		<h4><a href="?page_id=1916">Profiling business</a></h4>
		<ul class="lists">
			<?php display_post_frontpage_profiling(2,'Profiling Business'); ?>			
		</ul>
	</div>
-->	
	
	<?php if (is_home()) dynamic_sidebar( 'Home Page Boxes'); ?>					
</div><!-- #sidebar -->
