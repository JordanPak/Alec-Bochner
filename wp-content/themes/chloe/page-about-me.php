<?php
/*
Template Name: About Me
*/

get_header(); ?>
		
		
		<!-- Section Start -->
		<section>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- About me page start -->
			<div class="content page-<?php the_ID(); ?>" id="about-me-page">
				
				<div class="row-fluid page-about-row">

					<div class="span6">
					
						<?php $chloe_gallery_attachment_ids = get_post_meta( get_the_ID(), 'chloe_me', false ); ?>
						<?php if(!empty($chloe_gallery_attachment_ids[0]) and !empty($chloe_gallery_attachment_ids[1])){ ?>
						<div class="flexslider about-me-slider">
						  <ul class="slides">
							<?php
								
								foreach ( $chloe_gallery_attachment_ids as $chloe_this_attachment_id) :
									$chloe_this_image = wp_get_attachment_image( $chloe_this_attachment_id );
									echo '<li>'.$chloe_this_image.'</li>';
								endforeach;

							?>
						  </ul>
						  </div>
						<?php }else{
						
							if(empty($chloe_gallery_attachment_ids[0])){
								echo '<img class="about-me-slider" src="' . get_stylesheet_directory_uri( 'stylesheet_directory' ) . '/framework/img/default-author-image.jpg"  />';
							}else{
								$chloe_this_photo = wp_get_attachment_image_src($chloe_gallery_attachment_ids[0], true);
								echo '<img class="about-me-slider" src="'.$chloe_this_photo[0].'" />';
							}
						}
						?>
						
					</div>

					<div class="span6 page-about-content">
						<h3 class="dotted_border page-about-title"><?php the_title(); ?> <?php chloe_the_subtitle(); ?></h3>
						<div class="the-content">
						<?php the_content(); ?>
						</div>
					</div>

				</div>	
			
			</div>
			<!-- about me page end -->
	
		<?php endwhile; endif; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>