<?php
/* WPAlchemy */

include_once 'metaboxes/setup.php';

include_once 'metaboxes/custom-spec.php';

$wpalchemy_media_access = new WPAlchemy_MediaAccess;
 
//include_once 'metaboxes/full-spec.php';

//include_once 'metaboxes/checkbox-spec.php';

//include_once 'metaboxes/radio-spec.php';

//include_once 'metaboxes/select-spec.php';

/* end WPAlchemy */

// it is required to set a content width default that matches the large image size in any Wordpress theme
if ( ! isset( $content_width ) ) $content_width = 590;

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' =>'Home Page Boxes',
		'id' => 'sidebar-boxes',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
}

// Navigation menus
function register_my_menus() {
	register_nav_menus(
	array(
		'header-menu' => 'Header Menu',
		'footer-menu' => 'Footer Menu',
		'FTFA-menu' => 'FTFA Sidebar'
		)
	);
}

add_action( 'init', 'register_my_menus' );


function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}


function display_custom_banner_image() {
	// usually needed
	global $post, $custom_metabox;

	$Homepage = get_post_meta($post->ID, 'Homepage', true);
	$parentHomePage = get_post_meta($post->post_parent, 'Homepage', true);
	$customBannerImage = $custom_metabox->get_the_value('imgurl');
	$parentCustomBannerImage = get_post_meta($post->post_parent, $custom_metabox->get_the_id(), true);
									
	if (!empty($customBannerImage)) :
		$bannerImage = $customBannerImage;
	else :
		if (!empty($parentCustomBannerImage)) { // use the parent's custom banner image
			$bannerImage = $parentCustomBannerImage['imgurl'];
		} elseif (!empty($Homepage)) { // use the home page image (deprecated)
			$bannerImage = $Homepage;
		} elseif (empty($Homepage) && !empty($parentHomePage)) { // use the parent home page (deprecated)
			$bannerImage = $parentHomePage;
		} else { // use a dummy image from the theme folder
			$bannerImage = get_bloginfo('stylesheet_directory') . '/images/photo02.jpg';	
		}
	endif;
	
	if (in_category('the-bulletin') || in_category('event-list')) :
		$bannerTitle = 'THE BULLETIN';
	else :
		$bannerTitle = get_the_title();
	endif;				
	
	// get the meta data for the current post
	//var_dump($custom_metabox->the_meta());

	// set current field, then get value
	//$custom_metabox->the_field('name');
	

	// get value directly
	//$custom_metabox->the_value('description');
	$meta_values = get_post_custom($post->ID);
	
	//var_dump($meta_values);

?>
<div class="visual full-width add-bottom">
	<img src="<?php echo $bannerImage; ?>" alt="<?php echo get_the_title(); ?>"/>
	<h2><span class="pinkdash"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet-pink.gif" /></span><?php echo $bannerTitle; ?></h2>
</div>

<?php
}




function excerpt_length_sidebar($length) {
	return 20;
}

function show_subpages_from_parent ($parent)
{
	$args = array(
		'child_of' => $parent,
		'parent' => $parent, // retrieve ONLY children, not grand-children
		'hierarchical' => 0, // required for above
		'sort_order' => 'DESC',
		'sort_column' => 'post_date',
		'exclude' => array(1967, 1916, 1983, 1985)
	);
	$posts = get_pages($args);
	
	$count=1;
	foreach ($posts as $post)
    {
		echo '<li '.($count % 3 == 0 ? 'class="nomargin"' : '').'>';	
        echo '<a href="'.get_permalink($post->ID).'">';
		
		echo get_the_post_thumbnail($post->ID, 'medium');	
		
		$snippet = get_post_meta($post->ID, 'Snippet', true);
			
		if ($snippet == "") { $snippet = substr($post->post_content, 0 ,70); }
		
		echo '<strong>' . $snippet . '</strong></a>'; 	
		
		  echo '</li>'; 
		$count++;
	}
    
}


function show_posts_from_category( $numberofposts = 10, $category_name = 'Uncategorized' ) {
    $post_cat_id = get_cat_id($category_name);
    $posts = get_posts("numberposts=".$numberofposts."&category=".$post_cat_id);   
    
	
	echo '<h2>'. $category_name . '</h2>';
	echo '<ul class="items">';
	foreach ($posts as $post)
    {
        echo '<li><a href="'.get_permalink($post->ID).'">';
		$Images = get_post_meta($post->ID, 'Images', true);
		if (!empty($Images))
		{
			 echo '<img src="' . $Images . '" alt="pic" />'; 
		}		
		
		echo '<strong>' . substr($post->post_content, 0 ,70) . '</strong></a>'; 
		echo '</li>';
    }
    echo '</ul>';    
}


function show_posts_from_category_blog( $numberofposts = 10, $category_name = 'Uncategorized' ) {
    $post_cat_id = get_cat_id($category_name);
    $posts = get_posts("numberposts=".$numberofposts."&category=".$post_cat_id);     
	
	
	foreach ($posts as $post)
    {
        echo '<li class="roll">';
		echo '<h3>'. $post->post_title.'</h3>';
		echo '<div class="open-box">';
		echo '<div class="video-placeholder">';
		
		$Images = get_post_meta($post->ID, 'Images', true);
		if (!empty($Images))
		{
			 echo $Images; 
		}		
		echo '</div>';		
		echo '<strong>' .$post->post_content. '</strong></a>';
		echo '</li>';
    }       
}


function show_posts_from_bulletin( $numberofposts = 10, $category_name = 'Uncategorized' ) {
    $post_cat_id = get_cat_id($category_name);
    $posts = get_posts("numberposts=".$numberofposts."&category=".$post_cat_id);  	
	echo '<ul class="bulletin">';
	foreach ($posts as $post)
    {
        echo '<li>';
		echo '<p>' .$post->post_content. '</p>';
		echo '</li>';
    }
    echo '</ul>';    
}


function display_post_frontpage_bulletin($count_posts = 5, $category_slug = 'pop_stars')
{
        
	$_cat_id = get_category_by_slug($category_slug);
       
	$the_query = new WP_Query('showposts='.$count_posts.'&cat='.$_cat_id->term_id);
	if ($the_query->have_posts()):

?>		
			<ul class="bulletin">
				<?php while ($the_query->have_posts()) : $the_query->the_post();
				global $post;
				?>
					<li>
						<?php 
              $excerpt = get_the_excerpt();
							$new_excerpt = explode(' ', $excerpt, 12);
							array_pop($new_excerpt);
							$new_excerpt = implode(' ', $new_excerpt);
							echo $new_excerpt." [...]";                 
            ?>					
						<a href="<?php echo get_permalink($post->ID); ?>" class="plus">read more...</a>													
					</li>
				<?php endwhile; ?>
			</ul>			
	<?php endif; ?>
	<?php
}


function display_post_frontpage_profiling($count_posts = 5, $category_slug = 'pop_stars')
{
	$_cat_id = get_category_by_slug($category_slug);
	// echo $_cat_id->term_id;
	$the_query = new WP_Query('orderby=rand&showposts='.$count_posts.'&cat='.$_cat_id->term_id);
	if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post();
				global $post;
				?>
					<li>						
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>

						<div>
							<?php the_excerpt(); ?>					
							<a href="<?php echo get_permalink($post->ID); ?>" class="plus">Read more...</a>
						</div>		
													
					</li>
				<?php endwhile; ?>
					
	<?php endif; ?>
	<?php
}


function isChildOf($myid, $parent){
	if ($myid == $parent) return true;
	$mypage = get_page($myid);

	if ($mypage->post_parent == $parent){
		return true;
	} else if ($mypage->post_parent==0)
	{
		return false;
	}
	else{
		return isChildOf($mypage->post_parent, $parent);
	}

}

function display_post_grid($count_posts = 9, $page=1, $order='date', $category_slug = 'profiling-business'  )
{
	$_cat_id = get_category_by_slug($category_slug);
	
	//Only two types of order by, date and title
	$orderAD='DESC';
	if ($order != 'title') $order='date';
	else {$orderAD='ASC';}
	$category = $_cat_id->term_id;

 	$queryParams = array (
		'posts_per_page'=>$count_posts,
		'nopaging'=>false,
		'cat'=>$category,
		'orderby'=>$order,
 		'order'=>$orderAD,
		'paged'=>$page
		);
		
	$query = new WP_Query();
	$query->query($queryParams);

	if ($query->have_posts()):
		?>		
				<ul class="grid">
				<?php
				while ($query->have_posts()) : $query->the_post();
				global $post;
				?>
				 
					<li>						
						<?php
						$Profiling = get_post_meta($post->ID, 'PreviewImage', true);
						if (!empty($Profiling))
						{
							?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img width="75" height="75" src="<?php echo $Profiling; ?>" alt="pic" /></a>
							<?php
						} else { ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($post->ID, array(75,75));	?></a>
							<?php
						}
							?>
						<div>
							<a href="<?php echo get_permalink($post->ID); ?>" class="plus"><?php the_excerpt(); ?></a>
						</div>		
													
					</li>
				<?php endwhile; ?>
				</ul>
				<div style="clear: both;"></div>

	<?php endif; ?>
	
	<?php

}


function theme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
        <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <?php echo 'Your comment is awaiting moderation.'; ?>
         <br />
      <?php endif; ?>

      <?php comment_text(); ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
}

        

/* START NEW ADMIN PANEL */
require_once (TEMPLATEPATH.'/includes/themefunctions.php');
require_once (TEMPLATEPATH.'/includes/themeoptions.php');

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {

        if ( 'save' == $_REQUEST['action'] ) 
		{
				foreach ($options as $value)
				{
					
                    if( $value['type'] == 'file' )
					{
						$upload = wp_handle_upload( $_FILES[$value['id']], array('action' => 'save') );
						
						if( isset( $upload['url'] ) )
						{
							update_option( $value['id'], $upload['url'] );
						}
					}
					else
					{
						update_option( $value['id'], $_REQUEST[ $value['id'] ] );
					}
				}

                //foreach ($options as $value) {
                 //   if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_theme_options', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

require_once (TEMPLATEPATH.'/includes/themeoptionscss.php');
?>


<div class="wrap">


<form method="post" enctype="multipart/form-data" action="themes.php?page=functions.php">

<?php foreach ($options as $value) {

switch ( $value['type'] ) {

case "open":
?>
<div class="block">

<?php break;

case "close":
?>

</div></div>

<?php break;

case "title":
?>
<?php echo $value['name']; ?>


<?php break;


case "titleWithSaveButton":
?>
<h2><span><?php echo $value['name']; ?></span><input name="save" type="submit" value="Save changes" /></h2><div class="inner">

<?php break;

case 'text':

?>

<p><label><?php echo $value['name']; ?></label>
<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
<small> <?php echo $value['desc']; ?></small></p>

<?php 
break;

case 'file':
?>
<p><label><?php echo $value['name']; ?></label>
<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="" />
<small> <?php echo $value['desc']; ?></small></p>
<img src="<?php echo get_option( $value['id'] ); ?>" />

<?php
break;
case 'textarea':
?>

<p><label><?php echo $value['name']; ?></label>
<textarea  name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option($value['id']) ); } else { echo $value['std']; } ?></textarea>
<small> <?php echo $value['desc']; ?></small>
</p>


<?php
break;

case 'select':
?>

<p><label><?php echo $value['name']; ?></label>
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_option( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select>
<small> <?php echo $value['desc']; ?></small>
</p>


<?php
break;

case "checkbox":
?>

<p><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
<input style="width:20px;margin:10px 0 0 0;" type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
</p>
<?php         break;
}
}
?>

<div class="buttons">
<input name="save" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<input  style="right:120px;" name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</form></div>
</div>
<?php
}

add_action('admin_menu', 'mytheme_add_admin');
/* END NEW ADMIN PANEL */
?>