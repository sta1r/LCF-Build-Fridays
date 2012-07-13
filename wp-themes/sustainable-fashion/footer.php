	<div id="footer" class="grid_22 push_2">
		<div class="nav-footer">
			<ul>
				<?php wp_nav_menu(  array( 'theme_location' => 'footer-menu' ));  ?> 	
			</ul>
			<ul class="right">
			<?php wp_reset_query(); ?>
			<li><a title="Follow us on Twitter" href="http://twitter.com/sustfash" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/twitter-16x16.png" alt="Twitter Share"></a></li>
			<li><a title="Visit our Facebook page" href="http://www.facebook.com/#!/pages/Centre-for-Sustainable-Fashion/348750745622" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/facebook-16x16.png" alt="Facebook Share"></a></li>
			<li><a title="Visit our Youtube channel" href="http://www.youtube.com/cfsustainablefashion" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/youtube-16x16.png" alt="Youtube Share"></a></li>
			<li><a href="http://www.stumbleupon.com/submit?url=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/stumbleupon-16x16.png" alt="Stumble Upon Share"></a></li>
			<li><a href="http://del.icio.us/post?url=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/delicious-16x16.png" alt="Delicious Share"></a></li>
			<li><a href="http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/footer/google-16x16.png" alt="Google Share"></a></li>
			</ul>

         
         
         
		</div>
		<div id="bottomfooter" class="bottom-box">
			<div class="bottom-left">
				<a href="http://www.lda.gov.uk/our-work/european-funds/index.aspx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/logo-european.jpg" alt="logo" /></a>
				<p><img src="<?php bloginfo('template_url'); ?>/images/footer-text01.gif" alt="" /></p>
			</div>
			<div class="bottom-right">
				<p><img src="<?php bloginfo('template_url'); ?>/images/copy.gif" alt="copy" /></p>
				<a href="http://www.fashion.arts.ac.uk"><img src="<?php bloginfo('template_url'); ?>/images/logo2.gif" alt="London College of Fashion logo" /></a>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jcarousellite_1.0.1.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/open-close.js"></script>

<?php if (is_page_template('page-animation.php')) { ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/motiongallery2.js"></script>
<?php } ?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle.min.js"></script>
	<script>
	jQuery(function($) { 

		// HOMEPAGE SLIDESHOW
		$('#slides').cycle({ 
		    fx:     'fade', 
		    speed:  1000, 
		    timeout: 8000, 
		    pause: true
		});

	});
	</script>


</body>
</html>
