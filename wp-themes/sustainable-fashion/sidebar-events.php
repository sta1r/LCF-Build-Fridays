<?php include( TEMPLATEPATH . '/bulletin_menu.php' ); ?>

<div class="box" >
	<h4>Categories</h4>
	<ul class="lists">
		<?php wp_list_categories( array( 'child_of'=>4,'title_li'=>'' )); ?>
	</ul>
</div>	
<!--
<div class="box" >
	<h4>Feeds</h4>
</div>	
-->

<div class="box">
	<h4>Events Calendar</h4>
	<?php ec3_get_calendar(); ?>
</div>
<?php /*
<div class="box" >
	<h4>Share</h4>
		<ul class="social">
		<?php $pageURL = url_is() ; ?>
		<li><a href="http://twitter.com/home/?status=CSF+<?php echo $pageURL; ?>" target="_blank" rel="nofollow"><img src="wp-content/themes/cfsflcof/images/footer/01.jpg" alt="Twitter Share"></a></li>
		<li><a href="http://www.facebook.com/share.php?u=<?php echo $pageURL; ?>" target="_blank" rel="nofollow"><img src="wp-content/themes/cfsflcof/images/footer/02.jpg" alt="Facebook Share"></a></li>
		<li><a href="http://www.stumbleupon.com/submit?url=<?php echo $pageURL; ?>" target="_blank" rel="nofollow"><img src="wp-content/themes/cfsflcof/images/footer/03.jpg" alt="Stumble Upon Share"></a></li>
		<li><a href="http://del.icio.us/post?url=<?php echo $pageURL; ?>" target="_blank" rel="nofollow"><img src="wp-content/themes/cfsflcof/images/footer/04.jpg" alt="Delicious Share"></a></li>
		<li><a href="http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=<?php echo $pageURL; ?>" target="_blank" rel="nofollow"><img src="wp-content/themes/cfsflcof/images/footer/05.jpg" alt="Google Share"></a></li>
		</ul>
</div>	


*/?>
