<?php 
header("Content-type: text/css");

if(file_exists('../../../../wp-load.php')) :
	include '../../../../wp-load.php';
else:
	include '../../../../../wp-load.php';
endif;

global $chloe_data;
?>

	<?php if(!empty($chloe_data['affix_chloe_logo_top'])){ ?>
	.affix-enable #logo
		{
		margin-top:<?php echo $chloe_data['affix_chloe_logo_top']; ?> !important;
		}
	<?php } ?>
	
	<?php if(empty($chloe_data['chloe_logo'])){ ?>
	#logo h1
		{
		font-family:<?php echo $chloe_data['logo_font_family']; ?>;
		font-style:<?php echo $chloe_data['logo_font_style']; ?>;
		font-weight:<?php echo $chloe_data['logo_font_weight']; ?>;
		font-size:<?php echo $chloe_data['logo_font_size']; ?>;
		color:<?php echo $chloe_data['logo_font_color']; ?>;
		}
	<?php } ?>
	
	.menu li a
		{
		font-family:<?php echo @$chloe_data['navigation_font']; ?>;
		}
		
	article,footer
		{
		font-family:<?php echo @$chloe_data['article_font']; ?>;
		}
		
	body,input,textarea
		{
		font-family:<?php echo @$chloe_data['article_font']; ?>;
		}
		
	section
		{
		font-size:<?php echo @$chloe_data['article_font_size']; ?>;
		line-height:<?php echo @$chloe_data['article_line_height']; ?>;
		}
		
	section .post-title
		{
		font-style:<?php echo @$chloe_data['post_title_style']; ?>;
		}
		
	#logo
		{
		margin-top:<?php echo @$chloe_data['chloe_logo_top']; ?> !important;
		margin-bottom:<?php echo @$chloe_data['chloe_logo_bottom']; ?>;
		}
		
	header
		{
		font-family:<?php echo @$chloe_data['header_font']; ?>;
		}
		
	h1,h2,h3,h4,h5,h6,.post-date
		{
		font-family:<?php echo @$chloe_data['heading_font']; ?>;
		}
		
		
	<?php if(!empty($chloe_data['main_color'])){ ?>
	nav,section .post-date
		{
		background-color:<?php echo @$chloe_data['main_color']; ?>;
		}
		
	.post-date
		{
		border-right:1px solid <?php echo @$chloe_data['main_color']; ?>;
		border-top:1px solid <?php echo @$chloe_data['main_color']; ?>;
		}
		
	.menu li a,.menu li a:hover,.date
		{
		color:<?php echo @$chloe_data['menu_link_color']; ?> !important;
		}
		
	.side_title,.side_title a, .side_title a,nav .widget ul li a,.widget_tag_cloud a
		{
		color:<?php echo @$chloe_data['menu_link_color']; ?>;
		}
		
	nav .widget,nav .widget_rss cite,nav .rssSummary
		{
		color:<?php echo @$chloe_data['nav_text_color']; ?>;
		}
		
	nav .widget a:hover
		{
		color:<?php echo @$chloe_data['menu_link_color_hover']; ?>;
		}
		
	::selection
		{
		background: <?php echo @$chloe_data['main_color']; ?>;
		color:<?php echo @$chloe_data['menu_link_color']; ?>;
		}
		
	::-moz-selection
		{
		background: <?php echo @$chloe_data['main_color']; ?>;
		color:<?php echo @$chloe_data['menu_link_color']; ?>;
		}
		
	.projects-list li:hover > .icon_link
		{
		background-color:<?php echo @$chloe_data['main_color_light']; ?>;
		}
		
	.projects-list li:hover .thumbnails
		{
		border-bottom:4px solid <?php echo @$chloe_data['main_color_light']; ?> !important;
		}
		
	.projects-list li:hover
		{
		border-bottom:1px solid <?php echo @$chloe_data['main_color_light']; ?> !important;
		}
		
	.menu li ul
		{
		background-color:<?php echo @$chloe_data['sub_menu_Background_color']; ?> !important;
		}
		
	article .post-share .icons a:hover,.mobile-menu:hover,#top_button:hover
		{
		background-color:<?php echo @$chloe_data['post_share_color']; ?> !important;
		}
		
	.resume_category .fa,.controls li.active
		{
		color:<?php echo @$chloe_data['main_color']; ?> !important;
		}
		
	.posts-next:hover a,.posts-prev:hover a
		{
		background-color:<?php echo @$chloe_data['main_color']; ?> !important;
		}
		
	header #contact a,header #contact #my_adress:hover,header  .click .fa,.custom-breadcrumb a,header .custom-breadcrumb .fa-location-arrow,
	header #contact a:hover,header #contact #my_adress:hover,header  .click .fa:hover,.custom-breadcrumb a:hover,header .custom-breadcrumb .fa-location-arrow:hover,
	header #contact a:focus,header #contact #my_adress:hover,header  .click .fa:focus,.custom-breadcrumb a:focus,header .custom-breadcrumb .fa-location-arrow:focus
		{
		color:<?php echo @$chloe_data['header_link_colors']; ?>;
		}
		
	header .author-info,header .author-info a,header .author-info a:hover
		{
		color:<?php echo @$chloe_data['header_author_color']; ?> !important;
		}
		
	blockquote
		{
		border-left-color:<?php echo @$chloe_data['main_color']; ?>;
		}
		
	.projects-list li:hover,.projects-list li:hover .thumbnails
		{
		border-bottom-color:<?php echo @$chloe_data['main_color']; ?>;
		}
		
	.projects-list li:hover > .description a,a
		{
		color:<?php echo @$chloe_data['link_color']; ?>;
		}
		
	a:hover,a:focus
		{
		color:<?php echo @$chloe_data['link_hover_color']; ?>;
		}
		
	<?php } ?>
	<?php if(!empty($chloe_data['custom_css'])){echo $chloe_data['custom_css'];}
	
	if(!empty($chloe_data['header_second_style'])){
			if($chloe_data['header_second_style'] == '1')
				{ ?>
	section{margin-top:46px !important;}
	header{top:-152px !important;position:fixed !important;}
	
	.page-template-page-contact-php section{margin-top:592px !important;}
	.page-template-page-contact-php header{top:84px !important;position:absolute !important;}
	header[class="affix"] .header-bottom{top:3px !important;}
	header{overflow:hidden;}
				<?php
				}
		}
	?>