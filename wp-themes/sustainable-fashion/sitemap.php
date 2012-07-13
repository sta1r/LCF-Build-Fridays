<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<div class="visual">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
						<?php         
							$Homepage = get_post_meta($post->ID, 'Homepage', true);
							if (!empty($Homepage))echo $Homepage;
						?>
				<?php endwhile; ?>
				<?php endif; ?>	
			</div>
			
			<div class="sitemap-list">				
				<ul>
                	<li class="header-menu"><a href="/?page_id=7">Challenging what we do</a>
                    <ul>
                    	<?php
						$posts = get_pages("child_of=7");
						foreach ($posts as $post)
						{
							echo '<li class="page_item"><a href="'.get_permalink($post->ID).'">'. $post->post_title . '</a></li>';	
						
						}
						?>
                    </ul>
                    </li>
                    
                    <li class="header-menu"><a href="/?page_id=9">Challenging what we learn</a>
                    <ul>
                    	<?php
						$posts = get_pages("child_of=9");
						foreach ($posts as $post)
						{
							echo '<li class="page_item"><a href="'.get_permalink($post->ID).'">'. $post->post_title . '</a></li>';	
						
						}
						?>
                    </ul>
                    </li>
                    
                    <li class="header-menu"><a href="/?page_id=11">Challenging what we know</a>
                    <ul>
                    	<?php
						$posts = get_pages("child_of=11");
						foreach ($posts as $post)
						{
							echo '<li class="page_item"><a href="'.get_permalink($post->ID).'">'. $post->post_title . '</a></li>';	
						
						}
						?>
                    </ul>
                    </li>
                    
                    <li class="header-menu" style="clear:both"><a href="/?page_id=13">The Bulletin</a>
                    <ul>
                    	<?php
						$post_cat_id = get_cat_id("THE BULLETIN");
						$posts = get_posts("category=$post_cat_id");
						foreach ($posts as $post)
						{
							echo '<li class="page_item"><a href="'.get_permalink($post->ID).'">'. $post->post_title . '</a></li>';	
						
						}
						?>
                    </ul>
                    </li>
                    
                    <li class="header-menu"><a href="/?page_id=15">About CSF</a>
                    <ul>
                    	<?php
						$posts = get_pages("child_of=15");
						foreach ($posts as $post)
						{
							echo '<li class="page_item"><a href="'.get_permalink($post->ID).'">'. $post->post_title . '</a></li>';	
						
						}
						?>
                    </ul>
                    </li>
							
				</ul>
			</div>			
		</div>
		
	</div>
<?php get_footer(); ?>