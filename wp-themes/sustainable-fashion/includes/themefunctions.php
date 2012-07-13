<?php 
// THEME FUNCTIONS //
function get_first_image($id) {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	return $first_img;
}

function listPages() {
$listPages = array();
$pages=  get_posts('post_type=page&numberposts=-1&orderby=menu_order'); 
$listPages[0] = "";
foreach ($pages as $page) {
	$listPages[$page->ID] = $page->post_title;
}
return $listPages;
}