<?php


/* ---------------------------------------------------- */
/* Register Portfolio post type							*/
/* ---------------------------------------------------- */
add_action( 'init', 'chloe_register_portfolio_page' );

function chloe_register_portfolio_page() {

    $labels = array( 
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search Items',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in Trash',
        'parent_item_colon' => 'Parent Item:',
        'menu_name' => 'Portfolio'
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Display all your items with this fantastic filterable Portfolio',
        'supports' => array( 'title', 'editor', 'comments', 'revisions', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => get_template_directory_uri() . '/framework/img/portfolio.png',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array(
            'slug' => 'item'
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'portfolio', $args );
}


/* ---------------------------------------------------- */
/* Register portfolio filter taxonomy					*/
/* ---------------------------------------------------- */
add_action( 'init', 'chloe_register_taxonomy_filters' );

function chloe_register_taxonomy_filters() {

    $labels = array( 
        'name' => 'Filters',
        'singular_name' => 'Filter',
        'search_items' => 'Search Filters',
        'popular_items' => 'Popular Filters',
        'all_items' => 'All Filters',
        'parent_item' => 'Parent Filter',
        'parent_item_colon' => 'Parent Filter:',
        'edit_item' => 'Edit Filter',
        'update_item' => 'Update Filter',
        'add_new_item' => 'Add New Filter',
        'new_item_name' => 'New Filter',
        'separate_items_with_commas' => 'Separate Filters with commas',
        'add_or_remove_items' => 'Add or remove Filters',
        'choose_from_most_used' => 'Choose from the most used Filters',
        'menu_name' => 'Filters'
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'filters', array('portfolio'), $args );
}


/* ---------------------------------------------------- */
/* Register Resume post type							*/
/* ---------------------------------------------------- */
add_action('init', 'chloe_register_resume_page');

function chloe_register_resume_page()
{
    
    $labels = array(
        'name' => 'Resume',
        'singular_name' => 'Resume',
        'add_new' => 'Add New Resume',
        'add_new_item' => 'Add New Resume',
        'edit_item' => 'Edit Resume',
        'new_item' => 'New Resume',
        'view_item' => 'View Resume',
        'search_items' => 'Search',
        'not_found' => 'No found',
        'not_found_in_trash' => 'No found in Trash',
        'parent_item_colon' => 'Parent:',
        'menu_name' => 'Resume'
    );
    
    $args = array(
        'public' => true,
        'labels' => $labels,
        'rewrite' => array(
            'slug' => 'resume'
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'comments'
        )
    );
    
    register_post_type('resume', $args);
}



/* ---------------------------------------------------- */
/* Register Resume category taxonomy					*/
/* ---------------------------------------------------- */
function chloe_register_taxonomy_resume()
{
    
    $labels = array(
        'name' => 'Resume Categories',
        'singular_name' => 'Resume Categories',
        'search_items' => 'Search Categories',
        'popular_items' => 'Popular Categories',
        'all_items' => 'All Categories',
        'parent_item' => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item' => 'Edit Category',
        'update_item' => 'Update Category',
        'add_new_item' => 'Add New Category',
        'new_item_name' => 'New Category',
        'separate_items_with_commas' => 'Separate Categories with commas',
        'add_or_remove_items' => 'Add or remove Categories',
        'choose_from_most_used' => 'Choose from the most used Categories',
        'menu_name' => 'Categories'
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
        
        'rewrite' => true,
        'query_var' => true
    );
    
    register_taxonomy('resume_category', array(
        'resume'
    ), $args);
}
add_action('init', 'chloe_register_taxonomy_resume');

?>