<?php


/*-----------------------------------------------------------------------------------*/
/*	Load Translation Text Domain													 */
/*-----------------------------------------------------------------------------------*/
load_theme_textdomain('chloe', get_template_directory() . '/languages');



/* ----------------------------------------------------- */
/* Variables											 */
/* ----------------------------------------------------- */
define('THEME_URL', trailingslashit(get_template_directory() . ''));
define('RWMB_URL', trailingslashit(get_template_directory_uri() . '/framework/functions/meta-box'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/framework/functions/meta-box'));




/* ----------------------------------------------------- */
/* Includes												 */
/* ----------------------------------------------------- */
include('admin/index.php');
include('framework/functions/meta-box/meta-box.php');
include('framework/functions/recent-tweets-widget/recent-tweets.php');
include('framework/functions/general.php');
include('framework/functions/chloe-functions.php');
include('framework/functions/menu_walker.php');
include('framework/functions/resume-taxonomy-field.php');
include('framework/functions/comment_function.php');
include('framework/functions/custom-post-types.php');
include('framework/functions/custom-meta-boxs.php');
include('framework/functions/short-codes.php');
include('framework/functions/skills-widget.php');
include('framework/functions/sidebar_generator.php');
include('framework/functions/shortcodes-editor-selector/shortcodeseditorselector.php');




/* ---------------------------------------------------- */
/* Register Theme Styles								*/
/* ---------------------------------------------------- */
function chloe_register_styles() {
	wp_enqueue_style('chloe-style', get_stylesheet_directory_uri().'/style.css', FALSE);
	wp_enqueue_style('chloe-bootstrap', get_template_directory_uri().'/framework/css/bootstrap.css', FALSE);
	wp_enqueue_style('chloe-bootstrap-responsive', get_template_directory_uri().'/framework/css/bootstrap-responsive.css', FALSE);
	wp_enqueue_style('chloe-template', get_template_directory_uri().'/framework/css/template.css', FALSE);
	wp_enqueue_style('chloe-template-responsive', get_template_directory_uri().'/framework/css/template-responsive.css', FALSE);
	wp_enqueue_style('chloe-flexslider', get_template_directory_uri().'/framework/css/flexslider.css', FALSE);
	wp_enqueue_style('chloe-font-awesome', get_template_directory_uri().'/framework/css/font-awesome.css', FALSE);
	wp_enqueue_style('chloe-perfect-scrollbar', get_template_directory_uri().'/framework/css/perfect-scrollbar.css', FALSE);
	wp_enqueue_style('chloe-colorbox', get_template_directory_uri().'/framework/css/colorbox/colorbox.css', FALSE);
	wp_enqueue_style('chloe-theme-colors', get_template_directory_uri().'/framework/css/color.php', FALSE);
}



/* ---------------------------------------------------- */
/* Register Google web fonts							*/
/* ---------------------------------------------------- */
function chloe_register_web_fonts()
	{
	global $chloe_data;
	$protocol = is_ssl() ? 'https' : 'http';

	
		// check font familys.
		if($chloe_data['heading_font'] && $chloe_data['heading_font'] != 'Select Font'):
		$chloe_google_font[urlencode($chloe_data['heading_font'])] = '' . urlencode($chloe_data['heading_font']);
		endif;
		
		if($chloe_data['article_font'] && $chloe_data['article_font'] != 'Select Font'):
		$chloe_google_font[urlencode($chloe_data['article_font'])] = '' . urlencode($chloe_data['article_font']);
		endif;
		
		if($chloe_data['navigation_font'] && $chloe_data['navigation_font'] != 'Select Font'):
		$chloe_google_font[urlencode($chloe_data['navigation_font'])] = '' . urlencode($chloe_data['navigation_font']);
		endif;
		
		if($chloe_data['header_font'] && $chloe_data['header_font'] != 'Select Font'):
		$chloe_google_font[urlencode($chloe_data['header_font'])] = '' . urlencode($chloe_data['header_font']);
		endif;		
		
		if($chloe_data['logo_font_family'] && $chloe_data['logo_font_family'] != 'Select Font'):
		$chloe_google_font[urlencode($chloe_data['logo_font_family'])] = '' . urlencode($chloe_data['logo_font_family']);
		endif;		
		
		
		 if($chloe_google_font): 
		
			if(is_array($chloe_google_font) && !empty($chloe_google_font)) {
				$chloe_google_fonts = implode($chloe_google_font, ', ');
			}
			
		 endif;
		 

			if(!empty($chloe_google_fonts)):
			
				foreach ( $chloe_google_font as $this_font) :
				$chloe_font_name = str_replace( '+', '', $this_font);
				wp_enqueue_style( 'chloe-'.strtolower($chloe_font_name).'', "$protocol://fonts.googleapis.com/css?family=$this_font:400,300,300italic,400italic,600,700,700italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese" );
				endforeach;
				
			endif;

	}
	
	

/* ---------------------------------------------------- */
/* Register Scripts										*/
/* ---------------------------------------------------- */
function chloe_register_scripts() {

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('chloe-placeholder', get_template_directory_uri() . '/framework/js/placeholder.js', 'jquery', '1.0', TRUE);
	wp_enqueue_script('chloe-colorbox', get_template_directory_uri() . '/framework/js/colorbox.js', 'jquery', '1.0', TRUE);
	wp_enqueue_script('chloe-flexslider', get_template_directory_uri() . '/framework/js/flexslider.js', 'jquery', '1.0', TRUE);
	
	if(is_page_template('page-home.php')) {
		wp_enqueue_script('chloe-carouFredSel', get_template_directory_uri() . '/framework/js/carouFredSel.js', 'jquery', '1.0', TRUE);
		wp_enqueue_script('chloe-touchSwipe', get_template_directory_uri() . '/framework/js/touchSwipe.js', 'jquery', '1.0', TRUE);
	}
	
	if(is_page_template('page-portfolio.php')) {
		wp_enqueue_script('chloe-mixitup', get_template_directory_uri() . '/framework/js/mixitup.js', 'jquery', '1.0', TRUE);
	}
	
	wp_enqueue_script('chloe-jquery.mousewheel', get_template_directory_uri() . '/framework/js/jquery.mousewheel.js', 'jquery', '1.0', TRUE);
	wp_enqueue_script('chloe-perfect-scrollbar', get_template_directory_uri() . '/framework/js/perfect-scrollbar.js', 'jquery', '1.0', TRUE);
	wp_enqueue_script('chloe-scripts', get_template_directory_uri() . '/framework/js/scripts.js', 'jquery', '1.0', TRUE);
	wp_enqueue_script('chloe-html5shiv', get_template_directory_uri() . '/framework/js/html5shiv.js', 'jquery', '1.0', FALSE);
	
	if(is_singular() && comments_open()) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}


/* ---------------------------------------------------- */
/* Register Admin Scripts								*/
/* ---------------------------------------------------- */
function chloe_register_post_formats_script()
	{
	wp_enqueue_script('chloe-chloe_post_formats', get_template_directory_uri() . '/framework/js/chloe_post_formats.js', array( 'jquery' ), '', TRUE);
	}

	
	
// Load Scripts and styles
add_action( 'wp_enqueue_scripts', 'chloe_register_styles' );
add_action( 'wp_enqueue_scripts', 'chloe_register_web_fonts' );
add_action( 'wp_enqueue_scripts', 'chloe_register_scripts' );
add_action( 'admin_enqueue_scripts', 'chloe_register_post_formats_script' );

?>