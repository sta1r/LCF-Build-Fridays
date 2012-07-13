		<div id="footer">

		<div class="footer_left">
			<ul id="f_page_list">
				<?php wp_list_pages('title_li=' ); ?>
				<li><?php wp_register(); ?></li>
				<li><?php wp_loginout(); ?></li>
			</ul>
		</div>	
			
		<div class="footer_right">
			<ul>
				<li>A <a href="http://www.fashion.arts.ac.uk/">London College of Fashion</a> website</li>
				<li><a href="<?php bloginfo('rss2_url'); ?>">Latest Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Latest Comments (RSS)</a></li>
			</ul>

		</div>
		
		<?php wp_footer(); ?>
		
		</div><!-- #footer -->
		
		</div><!-- #body-wrap -->
		
		<div class="clear"></div>
		
	<!--	<?php if ( is_home()) { ?>
	<div id="flickr_block">
		<h2>Flickr Pool</h2>
		<ul>
<?php if ( (function_exists('get_flickrRSS')) ) { ?>
	
		<?php get_flickrRSS(); ?>
		
		<?php if (get_option('flickrRSS_tagtype') == "userid") { $flickrurl = "photos/" . get_option('flickrRSS_tag'); }
		elseif (get_option('flickrRSS_tagtype') == "tag") { $flickrurl = "photos/tags/" . get_option('flickrRSS_tag'); }
		elseif (get_option('flickrRSS_tagtype') == "group") { $flickrurl = "groups/" . get_option('flickrRSS_tag') . "/pool"; }
		elseif (get_option('flickrRSS_tagtype') == "usertag") { $flickrurl = "photos/" . get_option('flickrRSS_tag') . "/tags/" . get_option('flickrRSS_tag2'); } ?>
		</ul>
		<ul class="flickr_sub">
			<li class="join_link"><a href="http://www.flickr.com/groups/pigeonsandpeacocks/">Join the group!</a></li>
		</ul>
<?php } else { ?>

		<p>If you have a Flickr account, you can display your photos here using the <a href="http://eightface.com/code/wp-flickrrss/">flickrRSS</a> plugin.</p>

		<p>If you have already downloaded the flickrRSS plugin, but are getting this message, <a href="<?php echo get_settings('home'); ?>/wp-admin/plugins.php">click here to make sure that the plugin is activated</a>.</p>

		<p>If you do not have a Flickr account you can:
			<ul>
				<li>Create a Flickr account at <a href="http://www.flickr.com/signup/">flickr.com</a>.</li>
				<li>Remove this block.</li>
			</ul>
		</p>

<?php } ?>
	</div>
<?php } ?>-->
	
	
		</div><!-- #wrapper -->
	
	</div><!-- #container -->

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-182294-6";
urchinTracker();
</script>
	
</body>

</html>
