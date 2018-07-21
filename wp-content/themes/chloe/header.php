<!DOCTYPE html>
<html class="<?php echo chloe_get_browser_class(); ?>" <?php language_attributes(); ?>>
	<head>

		<!-- Basic -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title><?php
  			global $page, $paged, $chloe_data;
  			wp_title('|', true, 'right');
  			bloginfo('name');
  			$chloe_site_description = get_bloginfo('description', 'display');
  			if ($chloe_site_description && (is_home() || is_front_page())) { echo " | $chloe_site_description"; }
  			if ( $paged >= 2 || $page >= 2 ) { echo ' | ' . sprintf('Page %s', max($paged, $page)); }
  		?></title>
		
		<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
		<?php } ?>
		
		<?php if($chloe_data['chloe_favicon']){ ?>
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo $chloe_data['chloe_favicon']; ?>">
		<?php } ?>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php
		
		// Custom background function
		chloe_custom_background();
		
		echo chloe_google_map_initialize();
		
		if(!empty($chloe_data['space_head'])){echo $chloe_data['space_head'];}
		
		wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- Header Start -->
	<header <?php if(is_page_template('page-contact.php')){ ?>class="contact-header-none-for-alec"<?php }else{ if(!empty($chloe_data['header_second_style'])){if($chloe_data['header_second_style'] == '1'){ ?>class="header_second_style"<?php } } } ?>>
	
		<div class="container">
			<div class="header-content">
			
				<!-- header top start -->
				<div class="row-fluid header-top">
				
					<!-- Author Infos Start -->
					<div class="span7 left-shadow">
						
						<?php if(!empty($chloe_data['chloe_photo'])){ ?>
						<!-- author photo Start -->
						<div class="pull-left author-image-column">
							<?php
								if(!empty($chloe_data['author_picture_link'])){
									if($chloe_data['author_picture_link'] == "1"){
										if($chloe_data['aboutme_page'] != "Select a page:"){ ?><a href="<?php echo get_permalink(get_page_by_path($chloe_data['aboutme_page'])->ID); } ?>"><?php 
								} } ?>
							<div class="author-background"></div>
								<img src="<?php echo $chloe_data['chloe_photo']; ?>" id="author-image" alt="<?php echo @$chloe_data['chloe_author_name']; ?>" />
							<?php
								if(!empty($chloe_data['author_picture_link'])){
									if($chloe_data['author_picture_link'] == "1"){
										if($chloe_data['aboutme_page'] != "Select a page:"){ ?></a><?php 
								} } }
							?>
						</div>
						<!-- author photo end -->
						<?php } ?>
						
						<!-- author name and description Start -->
						<div class="pull-left author-infos-column">
						
							<div class="author-info">
								<?php
								if(!empty($chloe_data['chloe_name_link'])){
									if($chloe_data['chloe_name_link'] == "1"){
										if($chloe_data['aboutme_page'] != "Select a page:"){ ?><a href="<?php echo get_permalink(get_page_by_path($chloe_data['aboutme_page'])->ID); } ?>"><?php 
								} }
								
								echo $chloe_data['chloe_author_name'];
								
								if(!empty($chloe_data['chloe_name_link'])){
									if($chloe_data['chloe_name_link'] == "1"){
										if($chloe_data['aboutme_page'] != "Select a page:"){ ?></a><?php 
								} } }
								?>
								<span class="author-work"><?php if($chloe_data['chloe_author_work']){ ?>/ <?php } echo @$chloe_data['chloe_author_work']; ?></span>
							</div>
							
							<div class="hr"></div>
							
							<div class="author-about">
								<?php echo @$chloe_data['chloe_author_about']; ?>
							</div>
							
						</div>
						<div class="clearfix"></div>
						<!-- author name and description end -->
						
					</div>
					<!-- Author Infos End -->
					
					
					<!-- Contact Infos Start -->
					<div class="span5 text-right" id="contact">
					
						<?php if(!empty($chloe_data['chloe_author_phone'])){ ?>
						<div>
							<i class="fa fa-phone"></i> <?php echo @$chloe_data['chloe_author_phone']; ?>
						</div>
						<?php } ?>
						
						<?php if(!empty($chloe_data['chloe_author_address'])){ ?>
						<div class="address" id="my_adress">
							<i class="fa fa-map-marker"></i> <?php echo @$chloe_data['chloe_author_address']; ?>
						</div>
						<?php } ?>
						
						<div class="hr hr_right"></div>
				
						<?php if(!empty($chloe_data['chloe_author_email'])){ ?>
						<div class="email">
							<a href="mailto:<?php echo @$chloe_data['chloe_author_email']; ?>">
								<i class="fa fa-envelope"></i> <?php echo @$chloe_data['chloe_author_email']; ?>
							</a>
						</div>
						<?php } ?>
						
					</div>
					<div class="clearfix"></div>
					<!-- Contact Infos End -->
					
					
					<!-- Google Map Area Start -->
					<!-- DISABLED FOR ALEC. FIND THE ORIGINAL! -->
					<!-- Google Map Area End -->					
					
					
				</div> <!-- header top end -->
				
				
				<!-- Search Form Start -->
				<form autocomplete="off" method="get" id="search-form" action="<?php echo home_url(); ?>/">
					<input name="s" id="s" placeholder="<?php _e('Search','chloe'); ?>" type="text" />
					<button type="submit"></button>
				</form>
				<!-- Search Form end -->
				
				
				<!-- header bottom start -->
				<div class="row-fluid header-bottom">

				
					<!-- breadcrumb Start -->
					<div class="pull-left">
						<div class="mobile-menu">
							<i class="fa fa-align-justify"></i>
						</div>
						<div class="custom-breadcrumb">
							<i class="fa fa-location-arrow"></i> <?php chloe_the_breadcrumb(); ?>
						</div>
					</div>
					<!-- breadcrumb End -->
					
					
					<!-- Social Icons Start -->
					<div class="pull-right text-right">
						<?php if(!empty($chloe_data['twitter_url'])){ ?><a target="_blank" rel="nofollow" href="<?php echo $chloe_data['twitter_url']; ?>" id="twitter-icon"></a><?php } ?>
						<?php if(!empty($chloe_data['facebook_url'])){ ?><a target="_blank" rel="nofollow" href="<?php echo $chloe_data['facebook_url']; ?>" id="facebook-icon"></a><?php } ?>
						<?php if(!empty($chloe_data['gplus_url'])){ ?><a target="_blank" rel="nofollow" href="<?php echo $chloe_data['gplus_url']; ?>" id="gplus-icon"></a><?php } ?>
						<?php if(!empty($chloe_data['dribbble_url'])){ ?><a target="_blank" rel="nofollow" href="<?php echo $chloe_data['dribbble_url']; ?>" id="dribbble-icon"></a><?php } ?>
						<?php if(!empty($chloe_data['pinterest_url'])){ ?><a target="_blank" rel="nofollow" href="<?php echo $chloe_data['pinterest_url']; ?>" id="pinterest-icon"></a><?php } ?>
						<?php if(!empty($chloe_data['vimeo_url'])){ ?><a target="_blank" rel="nofollow" href="<?php echo $chloe_data['vimeo_url']; ?>" id="vimeo-icon"></a><?php } ?>
						<a target="_blank" rel="nofollow" href="<?php bloginfo('rss2_url'); ?>" id="rss-icon"></a>
						<a href="#" id="search-icon"></a>
					</div>
					<!-- Social Icons End -->

					
					<div class="clearfix"></div>
				
				</div> <!-- header bottom End -->
				
			</div> <!-- .header-content End -->
			
		</div> <!-- .container End -->
		
	</header>
	<!-- Header End -->
	
	
	<!-- Main container Start -->
	<div class="container main-container">