<?php
	// Include as a bulletin menu
			
	$menu[] = wp_list_pages('title_li=&include=13&echo=0');
						
	$pages = get_pages('child_of=13&sort_column=post_title');

	$count = 0;

	foreach($pages as $page)
	{ 
		$menu[] = '<li class="page_item page-item-'.$page->ID.'"><a href="'.get_page_link($page->ID).'" title="'.$page->post_title.'">'.$page->post_title.'</a></li>' ;
	}

	// Do I need to get subcats
	$subcats = get_categories( 'child_of=4' ) ;
	// Use the term_id property
	$include = array( 4 ) ;
	foreach( $subcats as $cat ){
		if( $cat->term_id != 21 ){
			$include[] = $cat->term_id  ;
		}
	}

	// Here we must reformat.
	// Wanted is Year with list underneath for months ???
	$archives = wp_get_archives('echo=0' );
	// How do we get archives as an array

	// Now we need to reformat and group by year
	$links = explode( '</li>', $archives ) ;	
	$years = array() ;
	foreach( $links as $archive )
	{
		$name = strip_tags( $archive );
			$name = strip_tags( $archive );
		// Get year at end
		$year = trim( substr($name, strrpos($name, ' ')) );  
		// Assuming this is the Year add tpo the array for that year
		
		$years[$year][] = str_replace( ' '.$year, '', $archive ) ;	// Need to remove the date
	}	

	// Now we create a further 2 dissappearing divs for each year
	$text = '<div class="archives">' ;
	foreach( $years as $key=>$year ){
		if ($key == '') continue;
		$text .= '<ul><li><a href="javascript:void(0);" onclick="jQuery(\'#'.$key.'\').slideToggle()">'.$key.'</a><div id="'.$key.'" style="display:none;"><ul>';
		
		$monthnames = array('january'=>1,'february'=>2,'march'=>3,'april'=>4,'may'=>5,'june'=>6,'july'=>7,'august'=>8,'september'=>9,'october'=>10,'november'=>11,'december'=>12);
		
		foreach( $year as $month )
		{
			$text .= $month;//'<li><a href="'.ucfirst(strip_tags($month)).'&year='.$key.'">'.ucfirst(strip_tags($month)).'</a></li>' ;
		}
		
		$text .= '</ul></div></li></ul>';
	}
	$text .='</div>' ;
	
	$archive = '<li class="page_item"><a href="javascript:void(0);" onclick="jQuery(\'.archives\').slideToggle()" title="Archive">Archive</a>'.$text.'</li>' ;

	array_splice($menu,2,0,$archive) ;

	echo '<ul class="subnav">' ;
    foreach( $menu as $child )echo $child ;
    echo '</ul>';
?>