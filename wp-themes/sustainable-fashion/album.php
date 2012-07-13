<?php
/*
Template Name: Album
*/


/**
 * nggShowAlbumPictures() - return an array of all pictures in an album based on the id
 * 
 * @access public 
 * @param int | string $albumID
 * @return the content
 */
function nggShowAlbumPictures($albumID) {
	
	$images = nggdb::find_images_in_album($albumID) ;
	
	$out = nggCreateAllGallery( $images ) ;
	
	return $out ;
}

/**
 * Build all galleries output
 * 
 * @access internal
 * @param array $picturelist
 * @param bool $galleryID, if you supply a gallery ID, you can add a slideshow link
 * @param string $template (optional) name for a template file, look for gallery-$template
 * @return the content
 */
function nggCreateAllGallery($picturelist, $template = '') {
    global $nggRewrite;
    
    $ngg_options = nggGallery::get_option('ngg_options');
	    
    // $_GET from wp_query
	$nggpage  = get_query_var('nggpage');
	$pageid   = get_query_var('pageid');
	
	// we need to know the current page id
	$current_page = (get_the_ID() == false) ? 0 : get_the_ID();
    
    if ( !is_array($picturelist) )
		$picturelist = array($picturelist);
	
	// Populate galleries values from the first image
	// As these are all the pictures we do not have a Gallery ID?????			
	$first_image = current($picturelist);
	$gallery = new stdclass;
	$gallery->ID = 1;
	$gallery->show_slideshow = false;
	$gallery->name = stripslashes ( $first_image->name  );
	$gallery->title = stripslashes( $first_image->title );
	// Might want to loose this
	$gallery->description = html_entity_decode(stripslashes( $first_image->galdesc));
	$gallery->pageid = $first_image->pageid;
	$gallery->anchor = 'ngg-all-galleries';
	reset($picturelist);

	// This is number of images per page
	//$maxElement  = $ngg_options['galImages'];
	$maxElement  = 15;
	// These need to be hardwired
//	$thumbwidth  = $ngg_options['thumbwidth'];
//	$thumbheight = $ngg_options['thumbheight'];		
	$thumbwidth  = 120;
	$thumbheight = 80;		
	
	// fixed width if needed
	// and this
	//$gallery->columns    = intval($ngg_options['galColumns']);
	$gallery->columns    = 5 ;
	$gallery->imagewidth = ($gallery->columns > 0) ? 'style="width:'. floor(100/$gallery->columns) .'%;"' : '';
	
	// set thumb size 
	$thumbsize = '';

	// set thumb size 
	$thumbsize = '';
	if ($ngg_options['thumbfix'])  $thumbsize = 'width="'.$thumbwidth.'" height="'.$thumbheight.'"';
	if ($ngg_options['thumbcrop']) $thumbsize = 'width="'.$thumbwidth.'" height="'.$thumbwidth.'"';

	
 	// check for page navigation
 	if ($maxElement > 0) {
	 	if ( !is_home() || $pageid == $current_page ) {
	 		$page = ( !empty( $nggpage ) ) ? (int) $nggpage : 1;
		}
		else $page = 1;
		 
	 	$start = $offset = ( $page - 1 ) * $maxElement;
	 	
	 	$total = count($picturelist);
	 	
		// remove the element if we didn't start at the beginning
		if ($start > 0 ) array_splice($picturelist, 0, $start);
		
		// return the list of images we need
		array_splice($picturelist, $maxElement);
	
		$navigation = nggGallery::create_navigation($page, $total, $maxElement);
	} else {
		$navigation = '<div class="ngg-clear">&nbsp;</div>';
	}	

	foreach ($picturelist as $key => $picture) {

		list($width, $height, $type, $attr) = getimagesize($picture->imagePath);

		if( $width > $height ){
			$thumbsize = 'width=120';
		}else{
			$thumbsize = 'height=120';
		}
		// If it is it should be the link to the gallery page for this picture
		// So I need to get the link to the gallery page 
		// At present this is stored in the Gallery Description 
		
		$link =  get_option ('siteurl').'/?'.$picture->galdesc ;
		// get the effect code
		if ($galleryID)
			$thumbcode = ($ngg_options['galImgBrowser']) ? '' : $picture->get_thumbcode($picturelist[0]->name);
		else
			$thumbcode = ($ngg_options['galImgBrowser']) ? '' : $picture->get_thumbcode(get_the_title());
		
		
		// Ideally we resize depending on picture itself, what format Landscape or Portrat
		// Landscape we set width, portrait we set height 
		//		$picturelist[$key]->imageURL = apply_filters('ngg_create_gallery_link', $link, $picture);
		//		$picturelist[$key]->thumbnailURL = $picture->thumbURL;

		
		$picturelist[$key]->thumbnailURL = $picture->imageURL;

		$picturelist[$key]->imageURL = apply_filters('ngg_create_gallery_link', $link, $picture);
		$picturelist[$key]->size = $thumbsize;
		$picturelist[$key]->thumbcode = $thumbcode;
		
	
		$picturelist[$key]->caption = ( empty($picture->description) ) ? '&nbsp;' : html_entity_decode ( stripslashes(nggGallery::i18n($picture->description)) );
    	$picturelist[$key]->description = ( empty($picture->description) ) ? ' ' : htmlspecialchars ( stripslashes(nggGallery::i18n($picture->description)) );
		$picturelist[$key]->alttext = ( empty($picture->alttext) ) ?  ' ' : htmlspecialchars ( stripslashes(nggGallery::i18n($picture->alttext)) );
	
		// filter to add custom content for the output
		$picturelist[$key] = apply_filters('ngg_image_object', $picturelist[$key], $picture->pid);
	}

	// Need a new templater for the layout
	// look for gallery-$template.php or pure gallery.php
	$filename =  'gallery-all';
	
	//filter functions for custom addons
	$gallery     = apply_filters( 'ngg_gallery_object', $gallery, $galleryID );
	$picturelist = apply_filters( 'ngg_image_object', $picturelist, $galleryID );

	// create the output
	// Can we move the navigation to the top??????
	$out = nggGallery::capture ( $filename, array ('gallery' => $gallery, 'images' => $picturelist, 'pagination' => $navigation) );
	
	// apply a filter after the output
	$out = apply_filters('ngg_gallery_output', $out, $picturelist);
	
	return $out;
}

	
?>
<?php get_header(); ?>
	<div id="main">
			<?php echo nggShowAlbumPictures( 1 ) ; ?>
    </div>
      <?php get_footer(); ?>
      <?php

for ($i = 2009; $i > 1900; $i--)
{
	//printf("\"%s\" ", $i);
};

?>
	</div>
    