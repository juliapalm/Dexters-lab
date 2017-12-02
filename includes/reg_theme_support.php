<?php
//Active featured image
add_theme_support('post-thumbnails');
//Echo out the featured image HTML
the_post_thumbnail( 'grid_thumbnail' );
//Logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' )
) );
?>
