<?php
/*
Template Name: About Me + Resume
*/

get_header(); ?>


		<!-- Section Start -->
		<section>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- about me page start -->
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
									echo '<li><img src="'.$chloe_this_image.'" /></li>';
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
				
				
				<!-- Resume start -->
				<div class="row-fluid">
				
					<div class="span8">
					
					  <?php $chloe_resume_categories = get_categories(array('title_li' => '', 'taxonomy' => 'resume_category'));
							if($chloe_resume_categories){
							foreach ( $chloe_resume_categories as $chloe_category )
							{
								$chloe_c_id = $chloe_category->term_id;
								$chloe_this_tax_array = get_option("taxonomy_$chloe_c_id"); ?>
						
						
							<div class="resume_category_list">
							
								<h3 class="dotted_border resume_category">
									<?php if($chloe_this_tax_array['font_awesome']){ ?>
										<i class="fa <?php echo $chloe_this_tax_array['font_awesome']; ?>"></i> <?php } ?><?php echo $chloe_category->name; ?>
								</h3>

								<?php
								// resume loop
								$chloe_loop = new WP_Query( array( 'post_type' => 'resume', 'tax_query' => array(array('taxonomy' => 'resume_category', 'terms' => ''.$chloe_category->term_id.'')), 'posts_per_page' => 999 ) );
								while ( $chloe_loop->have_posts() ) : $chloe_loop->the_post(); ?>
								
								<div class="resume_article">
								
									<div class="row-fluid resume-title">
										<div class="pull-left"><a rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
										<div class="pull-right"><?php echo get_post_meta( get_the_ID(), 'chloe_year', true ) ?></div>
										<div class="clearfix"></div>
									</div>
									
									<div class="resume_article_content the-content">
										<?php
										if (is_sticky()) {
										  global $more;
										  $more = 1;
										  the_content();
										} else {
										  global $more;
										  $more = 0;
										  the_content('');
										}
										?>
									</div>
									
								</div>
								
								<?php endwhile;  wp_reset_query(); ?>
								
							</div>
							
						<?php
							} // foreach end
						}
						?>
						
					</div>
					
					<!-- skill area start -->
					<div class="span4 dynamic_skill_area_right">
					
						<?php if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('chloe_skills_area')); ?>

					</div>
					<!-- skill area end -->

				</div>
			
			</div>
			<!-- About me page end -->
	
		<?php endwhile; endif; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>


<?php get_footer(); ?>