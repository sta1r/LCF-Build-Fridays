<?php
/*
Template Name: Main Gallery
*/
?>

<?php get_header('gallery'); ?>
	<div id="main">
		<div id="content" class="main-gallery">
			<h1>Gallery</h1>
			
			<div id="gallery-left-col">
		
					<?php
					/*if (function_exists('nggShowRandomRecent'))
						{
							echo nggShowRandomRecent('random', 10, '', 0);
						}*/
						
						if (function_exists("nggDisplayRecentImages"))
							{nggDisplayRecentImages(10,50,50,'main-gallery-list');}	
					?>

			</div>
			<div id="album-details">
				<div id="main-image-gallery"></div>
				<div id="details-article-gallery">
					<span id="image-counter"></span>
					<div id="image-page"><p><em><span id="image-num"></span> <span class="image-page-spacer">/</span> <span id="image-total"></span></em></p></div>
					<h2></h2>
					<div id="image-gallery-desc"></div>
					<p><a href="#">Read the article</a></p>
					<div id="image-nav"><span id="prev-image">Previous</span> / <span id="next-image">Next</span></div>
				</div>
			</div>
		</div>
		
		<!--<script type="text/javascript" src="/<?php bloginfo('template_url'); ?>/js/gallery.js"></script>-->
	</div>
<?php get_footer(); ?>