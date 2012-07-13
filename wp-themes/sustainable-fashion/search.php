<?php get_header(); ?>
	<div id="main" class="grid_22 prefix_2">
		<div id="content" class="grid_15 alpha">	
			<div class="visual">
            	<img src="http://blogs.fashion.arts.ac.uk/sustainable-fashion/files/2009/09/Fashioning-the-Future.jpg" alt="Challenging what we learn" /><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEARCH</h2> 
            </div>						
			
			<div class="article">
				<?php if (have_posts()) : ?>

                <h2 class="pagetitle">Search Results</h2>
        		<br />
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
        
        
                <?php while (have_posts()) : the_post(); ?>
        
                    <div <?php post_class() ?>>
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" class="nostyle" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <br/>
                        <small><?php the_excerpt(); ?><?php the_time('l, F jS, Y') ?></small>
        
                    </div>
                    <br/>
                    <br/>
        
                <?php endwhile; ?>
        
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
        
            <?php else : ?>
        
                <h2 class="center">No posts found. Try a different search?</h2>
                <?php get_search_form(); ?>
        
            <?php endif; ?>

			</div>	
            
			
		</div>
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
