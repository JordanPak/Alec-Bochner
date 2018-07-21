<?php
/**
* Registering meta boxes
*
* All the definitions of meta boxes are listed below with comments.
* Please read them CAREFULLY.
*
* You also should read the changelog to know what has been changed before updating.
*
* For more information, please visit:
* @link http://www.deluxeblogtips.com/meta-box/
*/


$prefix = 'chloe_';

global $chloe_meta_boxes;

$chloe_meta_boxes = array();


// post gallery format
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_gallery_format',
	'title'		=> 'Gallery Format Options',
	'pages'		=> array( 'post' ),
	'fields'	=> array(
	
		array(
			'name'	=> 'Gallery',
			'desc'	=> 'Upload more than one picture for gallery slideshow.',
			'id'	=> "{$prefix}gallery",
			'type'	=> 'image_advanced'
		)
	)
	
);


// post image format
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_image_format',
	'title'		=> 'Image Format Options',
	'pages'		=> array( 'post' ),
	'fields'	=> array(
	
		array(
			'name'		=> 'Zoom On Click',
			'id'		=> "{$prefix}lightbox",
			'desc'	=> 'Only For Archive, Blog and on other pages. (On click will show more large image)<br /><br /><b>Note:</b> Use Featured Image Uploader for uplaod a image.',
			'type'		=> 'select',
			'options'	=> array(
				'no'		=> 'No',
				'yes'		=> 'Yes'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		)
		
	)
	
);


// post video format
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_video_format',
	'title'		=> 'Video Format Options',
	'pages'		=> array( 'post' ),
	'fields'	=> array(
	
		array(
			'name'		=> 'Video Source',
			'id'		=> "{$prefix}source",
			'type'		=> 'select',
			'options'	=> array(
				'youtube'		=> 'Youtube',
				'vimeo'			=> 'Vimeo',
				'own'			=> 'Own Embedd Code'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),
		
		array(
			'name'	=> 'Video URL or own Embedd Code',
			'id'	=> "{$prefix}embed",
			'desc'	=> 'Just paste the ID of the video you want to show, or insert own Embedd Code. <br />E.g. http://www.youtube.com/watch?v=<strong>GUEZCxBcM78</strong>',
			'type' 	=> 'textarea',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
		
	)
	
);


// post audio format
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_audio_format',
	'title'		=> 'Audio Format Options',
	'pages'		=> array( 'post' ),
	'fields'	=> array(
	
		array(
			'name'	=> 'Audio Embedd Code',
			'id'	=> "{$prefix}audio_embed",
			'desc'	=> 'Just paste your own Embedd Code. Take a look at this site soundcloud.com',
			'type' 	=> 'textarea',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
	)
);


// General options FOR ONLY PAGE
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_general_options_p',
	'title'		=> 'General Options',
	'pages'		=> array( 'page' ),

	'fields'	=> array(
	
		array(
			'name'	=> 'Sub Title',
			'desc'	=> 'The Subtitle that appears next to the Page-Name.',
			'id'	=> "{$prefix}subtitle",
			'type'	=> 'text'
			),
		
		array(
			'name'	=> 'Sidebar Position',
			'desc'	=> 'fixed or use normal',
			'id'	=> "{$prefix}fixed",
			'type'	=> 'select',
			'options'	=> array(
				'fixed'		=> 'Fixed',
				'normal'		=> 'Normal'
			)
		)
	)
);


// General options FOR ONLY post, portfolio, resume post types.
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_general_options',
	'title'		=> 'General Options',
	'pages'		=> array( 'post','portfolio','resume' ),

	'fields'	=> array(
	
		array(
			'name'	=> 'Sub Title',
			'desc'	=> 'The Subtitle that appears next to the Page-Name.',
			'id'	=> "{$prefix}subtitle",
			'type'	=> 'text'
			)
	)
);


// Portfolio Information
$chloe_meta_boxes[] = array(
        'id' => 'chloe_portfolio_information',
        'title' => __( 'Portfolio Information', 'rwmb' ),
        'pages' => array( 'portfolio' ),
        'context' => 'normal',
        'priority' => 'high',
        'autosave' => true,
        'fields'	=> array(
			array(
				'name'	=> 'Short Project Description',
				'id'	=> "{$prefix}description",
				'type' 	=> 'textarea',
				'std' 	=> "",
				'cols' 	=> "40",
				'rows' 	=> "3"
			),
			array(
				'name'	=> 'Project Link',
				'id'	=> "{$prefix}link",
				'type' 	=> 'text',
				'std' 	=> ""
			),
			array(
				'name'		=> 'Enable Lightbox',
				'id'		=> "{$prefix}lightbox",
				'type'		=> 'select',
				'options'	=> array(
					'no'		=> 'No',
					'yes'		=> 'Yes'
				),
				'multiple'	=> false,
				'std'		=> array( 'no' )
			)
	)
);


// Portfolio image
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_portfolio_image',
	'title'		=> 'Portfolio Images',
	'pages'		=> array( 'portfolio' ),

	'fields'	=> array(
		array(
			'name'	=> 'Portfolio Slider Images',
			'desc'	=> 'Upload as many portfolio items as you like for a Slideshow - or only one to display a single image',
			'id'	=> "{$prefix}screenshot",
			'type'	=> 'image_advanced'
		)
	)
);


// Portfolio video
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_portfolio_video',
	'title'		=> 'Portfolio Video',
	'pages'		=> array( 'portfolio' ),

	'fields'	=> array(
		array(
			'name'		=> 'Video Source',
			'id'		=> "{$prefix}source",
			'type'		=> 'select',
			'options'	=> array(
				'youtube'		=> 'Youtube',
				'vimeo'			=> 'Vimeo',
				'own'			=> 'Own Embedd Code'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),
		array(
			'name'	=> 'Video URL or own Embedd Code',
			'id'	=> "{$prefix}embed",
			'desc'	=> 'Just paste the ID of the video you want to show, or insert own Embedd Code. <br />E.g. http://www.youtube.com/watch?v=<strong>GUEZCxBcM78</strong>',
			'type' 	=> 'textarea',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
	)
);


// Resume
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_date_year',
	'title'		=> 'Additional info',
	'pages'		=> array( 'resume' ),

	'fields'	=> array(
		array(
			'name'	=> 'Period',
			'desc'	=> 'E.g. 2008 - 2010',
			'id'	=> "{$prefix}year",
			'type'	=> 'text'
		)
	)
);


// custom background
$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_custom_background',
	'title'		=> 'Custom Background',
	'pages'		=> array( 'page','post','portfolio','page','resume' ),

	'fields'	=> array(
	
		array(
			'name'	=> 'Background Image',
			'desc'	=> 'Only the first uploaded image will be taken as background-image',
			'id'	=> "{$prefix}background_image",
			'type'	=> 'image_advanced'
			),
			
		array(
			'name'	=> 'Background Color',
			'desc'	=> '',
			'id'	=> "{$prefix}background_color",
			'type'	=> 'color'
			),
			
		array(
			'name'	=> 'Background Repeat',
			'desc'	=> '',
			'id'	=> "{$prefix}background_repeat",
			'type'	=> 'select',
				'options'	=> array(
				'no-repeat'		=> 'no-repeat',
				'repeat-x'		=> 'repeat-x',
				'repeat-y'		=> 'repeat-y',
				'repeat'		=> 'repeat'
				)
			),
			
			
		array(
			'name'	=> 'Background Cover',
			'desc'	=> 'Background Cover (full page background)',
			'id'	=> "{$prefix}background_cover",
			'type'	=> 'select',
				'options'	=> array(
				'yes'		=> 'Yes',
				'no'		=> 'No'
				)
			),
			
		array(
			'name'	=> 'Background Position',
			'desc'	=> 'Background Position',
			'id'	=> "{$prefix}background_position",
			'type'	=> 'select',
				'options'	=> array(
				'top left'		=> 'top left',
				'top center'		=> 'top center',
				'top right'		=> 'top right',
				'center left'		=> 'center left',
				'center center'		=> 'center center',
				'center right'		=> 'center right',
				'bottom left'		=> 'bottom left',
				'bottom center'		=> 'bottom center',
				'bottom right'		=> 'bottom right'
				)
			)
	)
);


$chloe_meta_boxes[] = array(
	'id'		=> 'chloe_about_me',
	'title'		=> 'About Me Page',
	'pages'		=> array( 'page' ),

	'fields'	=> array(
		array(
			'name'	=> 'Upload Your Pictures',
			'id'	=> "{$prefix}me",
			'desc'	=> 'Please first select "about me" Template and upload your pictures/picture.',
			'type' 	=> 'image_advanced'
		)
	)
);




/********************* META BOX REGISTERING ***********************/

/**
* Register meta boxes
*
* @return void
*/
function chloe_register_meta_boxes()
{
        // Make sure there's no errors when the plugin is deactivated or during upgrade
        if ( !class_exists( 'RW_Meta_Box' ) )
                return;

        global $chloe_meta_boxes;
        foreach ( $chloe_meta_boxes as $chloe_meta_box )
        {
                new RW_Meta_Box( $chloe_meta_box );
        }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'chloe_register_meta_boxes' );

?>