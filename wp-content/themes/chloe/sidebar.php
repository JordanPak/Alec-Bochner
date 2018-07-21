<?php

	global $chloe_data;
	if(is_page() || is_home())
		{
		
			$chloe_sidebar_fixed = get_post_meta( get_queried_object_id(), 'chloe_fixed', true);
			
		}else{
			
			// If post type is portfolio; Show portfolio Sidebar
			if(is_singular( 'portfolio'))
				{
				$chloe_sidebar_fixed = $chloe_data['portfolio_sidebar_fixed'];
				}
				
			// If post type is resume; Show resume Sidebar
			if(is_singular( 'resume'))
				{
				$chloe_sidebar_fixed = $chloe_data['resume_sidebar_fixed'];
				}
				
			// If blog; Show blog Sidebar
			if(is_singular( 'post') || is_archive() || is_category() || is_date() || is_tag())
				{
				$chloe_sidebar_fixed = $chloe_data['blog_sidebar_fixed'];
				}
	
		}
		
		// if is null, get default
		if(empty($chloe_sidebar_fixed))
			{
			$chloe_sidebar_fixed = "fixed";
			}
?>
		
		<!-- Nav Start -->
		<nav>
			<div class="<?php if($chloe_sidebar_fixed == "fixed"){echo "affix ";} ?>nav-affix">
			
				<!-- Logo Start -->
				<div id="logo">
					<a href="<?php echo home_url(); ?>">
					<?php if(!empty($chloe_data['chloe_logo'])){ ?>
						<img src="<?php echo $chloe_data['chloe_logo']; ?>" alt="<?php wp_title(); ?>" />
					<?php }else{ ?>
						<h1><?php if(empty($chloe_data["logo_text"])){ echo wp_html_excerpt(get_bloginfo('name'), 40, '&hellip;'); }else{ echo $chloe_data['logo_text']; } ?></h1>
					<?php } ?>
					</a>
				</div>
				<!-- Logo End -->
				
				
					<?php
						if ( has_nav_menu( 'main-menu' ) ) { ?>
					<!-- Menu Start -->
					<div class="default-menu"><?php
							wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</div>
					<!-- Menu End --><?php
						}
					?>
				
				<?php 
				if(is_page() || is_home())
				{
					if(get_option( 'page_for_posts' ) != get_queried_object_id())
						{
							// Page dynamic Sidebar
							chloe_generated_dynamic_sidebar();
						}else{
							if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('chloe_blog_sidebar'));
						}				
					
				}else{
				
					// If post type is portfolio; Show portfolio Sidebar
					if(is_singular( 'portfolio'))
						{
						if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('chloe_portfolio_sidebar'));
						}
						
					// If post type is resume; Show resume Sidebar
					if(is_singular( 'resume'))
						{
						if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('chloe_resume_sidebar'));
						}
						
					// If blog; Show blog Sidebar
					if(is_singular( 'post') || is_archive() || is_category() || is_date() || is_tag())
						{
						if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('chloe_blog_sidebar'));
						}
						
				}
				?>
				

				
			</div>
		</nav>
		<!-- Nav End -->