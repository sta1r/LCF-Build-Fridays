<div id="sidebar" class="grid_6 prefix_1 omega">
	
<?php include( TEMPLATEPATH . '/bulletin_menu.php' ); ?>

<div class="box">
	<h4><a href="http://www.sustainable-fashion.com/fashioning-the-future/">Fashioning the Future Awards</a></h4>
	<div id="ftfa-banner"><a title="Fashioning the Future Awards 2011" href="http://www.sustainable-fashion.com/fashioning-the-future/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/unique-banner-red.jpg" /></a></div>
</div>	


<div class="box" >
	<h4>Categories</h4>
	<ul class="lists">
		<?php wp_list_categories( array( 'child_of'=>14,'title_li'=>'' )); ?>
	</ul>
</div>


<div class="box" >
	<h4>Feeds</h4>
	<ul class="feed">
	<li><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS">
<img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="RSS Feed" title="RSS Feed" height="15" width="15" />
</a><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS">
Posts</a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Syndicate this site using RSS">
<img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="RSS Feed" title="RSS Feed" height="15" width="15" />
</a><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Syndicate this site using RSS">
Comments</a></li>
</ul>
</div>	


<div class="box" >
	<h4>Share</h4>
		<ul class="social">
		<?php wp_reset_query(); ?>
		<li><a href="http://twitter.com/home/?status=CSF+<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/twitter-16x16.png" alt="Twitter Share"></a></li>
		<li><a href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/facebook-16x16.png" alt="Facebook Share"></a></li>
		<li><a href="http://www.stumbleupon.com/submit?url=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/stumbleupon-16x16.png" alt="Stumble Upon Share"></a></li>
		<li><a href="http://del.icio.us/post?url=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/delicious-16x16.png" alt="Delicious Share"></a></li>
		<li><a href="http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/google-16x16.png" alt="Google Share"></a></li>
		</ul>
</div>	

</div><!-- #sidebar -->