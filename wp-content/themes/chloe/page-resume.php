<?php
/*
Template Name: Resume
*/

get_header(); ?>
		
		
		<!-- Section Start -->
		<section id="resume">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2 class="page-heading"><?php the_title(); ?>. <?php chloe_the_subtitle(); ?></h2>
			
			<!-- resume start -->
			<div class="content page-<?php the_ID(); ?>" id="resume-page">
				
				<?php the_content(); ?>
				
				<div class="row-fluid resume-row">
				
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
										<div class="pull-left"><a rel="bookmark" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
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
			<!-- resume page end -->
	
		<?php endwhile; endif; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>