<?php

// Post Thumbnails
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'blog-thumb', 866, 450, true );
	add_image_size( 'item-thumb', 215, 140, true );
	add_image_size( 'item-detail', 480, 0, false );
}


// Content Width
if (!isset( $content_width )) $content_width = 866;



// Add Post Formats
add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'audio' ) );



// Add Post thumbnails
add_theme_support( 'post-thumbnails' );



// Register main menu
function chloe_register_main_menu()
	{
	register_nav_menu('main-menu',__( 'Main Menu' ));
	}
	
add_action( 'init', 'chloe_register_main_menu' );


// Register Blog sidebar
register_sidebar(array(
    'name' => __('Blog Sidebar', 'chloe'),
    'id' => 'chloe_blog_sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side_title">',
    'after_title' => '</h3><div class="side_border"></div>'
));


// Register Portfolio sidebar
register_sidebar(array(
    'name' => __('Portfolio Sidebar', 'chloe'),
    'id' => 'chloe_portfolio_sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side_title">',
    'after_title' => '</h3><div class="side_border"></div>'
));


// Register Resume sidebar
register_sidebar(array(
    'name' => __('Resume Sidebar', 'chloe'),
    'id' => 'chloe_resume_sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side_title">',
    'after_title' => '</h3><div class="side_border"></div>'
));


// Register Skills area sidebar
register_sidebar(array(
    'name' => __('Skills Area', 'chloe'),
    'id' => 'chloe_skills_area',
    'description' => __('"Wasp themes - Skills" drag and drop here.', 'chloe'),
    'before_widget' => '<div class="skills_widget">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => ''
));


// Feed links
add_theme_support('automatic-feed-links');

	

// excerpt_more: ..
function chloe_new_excerpt_more($more)
{
    global $post;
    return "..";
}
add_filter('excerpt_more', 'chloe_new_excerpt_more');


// max 30 words
function chloe_custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'chloe_custom_excerpt_length', 999);

?>