<?php
$custom_metabox = new WPAlchemy_MetaBox(array
(
	'id' => '_custom_meta',
	'title' => 'Extra fields',
	'types' => array('page'),
	'template' => get_stylesheet_directory() . '/metaboxes/custom-meta.php',
));