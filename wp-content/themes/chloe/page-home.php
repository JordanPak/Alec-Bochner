<?php
/*
Template Name: Home
*/

get_header(); ?>
		
		<!-- Section Start -->
		<section class="home">
		
			<?php
			// Home page Layout Manager start
			$chloe_layout = $chloe_data['homepage_blocks']['enabled'];

			if ($chloe_layout):

			foreach ($chloe_layout as $chloe_key=>$chloe_value) {

				switch($chloe_key) {

				case 'recent_works':
				
				
				// Portfolio loop
				if(empty($chloe_data['max_recent_works'])){
					$chloe_maximum_per_page = "8";
				}else{
					$chloe_maximum_per_page = $chloe_data['max_recent_works'];
				}
				
				$chloe_loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $chloe_maximum_per_page ) );
				if ($chloe_loop->have_posts()) :
				?>
				
				<!-- Recent projects Start -->
				<div class="heading small-heading">
					<div class="pull-left"><?php _e('Recent Works', 'chloe'); ?></div>
					<div class="pull-right">
						<a rel="bookmark" href="<?php if($chloe_data['portfolio_page'] != "Select a page:"){ echo @get_permalink(get_page_by_path($chloe_data['portfolio_page'])->ID); } ?>">
							<?php _e('See All Works', 'chloe'); ?> &rsaquo;&rsaquo;
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<?php
				
				// Video Embed codes not in slider "ul" tag for slider working faster and without problem
				while ( $chloe_loop->have_posts() ) : $chloe_loop->the_post(); ?>
				<?php if(get_post_meta( get_the_ID(), 'chloe_embed', true ) != "" AND get_post_meta( get_the_ID(), 'chloe_source', true ) == 'own'){ ?>
					<div class="hidden">
						<div class="embed_code" id="embed_code_<?php echo get_the_id(); ?>">
							<?php echo get_post_meta( get_the_ID(), 'chloe_embed', true ); ?>
						</div>
					</div>
				<?php } ?>
				<?php endwhile; ?>

				<!-- List projects -->
				<div class="projects-list">
					<div class="list_carousel">
					
						<ul class="caroufredsel">
						
						<?php while ( $chloe_loop->have_posts() ) : $chloe_loop->the_post(); ?>
						
							<!-- project Start -->
							<li>
								<a rel="bookmark" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="icon_link"></a>
								<a class="<?php echo chloe_check_portfolio_item_type('class'); ?>" href="<?php echo chloe_check_portfolio_item_type('link'); ?>">
									<span><i class='icon'></i></span>
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail('item-thumb', array( 'class'	=> "thumbnails"));
										}else{
										echo '<img class="thumbnails" src="' . get_stylesheet_directory_uri( 'stylesheet_directory' ) . '/framework/img/no-thum.jpg" />';
										}
									?>
								</a>
								
								
								<div class="description">
									<h4>
										<a rel="bookmark" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>
									<?php if((get_post_meta( get_the_ID(), 'chloe_description', true ) != "")){ ?>
									<span><?php echo get_post_meta( get_the_ID(), 'chloe_description', true ); ?></span>
									<?php } ?>
								</div>
								
							</li>
							<!-- project end -->
							
						
						<?php endwhile; ?>
							
						 <?php wp_reset_query(); ?> 
							
						</ul>
						<div class="clearfix"></div>
						<div class="fix_carousel"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- Recent projects end -->

				<?php
				endif;
				break;
				
				case 'recent_posts':
				?>
				
				<!-- recent posts Start -->
				<div class="heading heading-middle">
					<div class="pull-left"><?php _e('Recent Posts', 'chloe'); ?></div>
					<div class="pull-right">
						<a href="<?php echo get_permalink(get_option( 'page_for_posts' )); ?>">
							<?php _e('See All Posts', 'chloe'); ?> &rsaquo;&rsaquo;
						</a>
					</div>
					<div class="clearfix"></div>
				</div>				
				
				
				<!-- .blog Start -->
				<div class="blog">
				
					<?php
					// Blog loop
					
					if(empty($chloe_data['max_recent_posts'])){
						$chloe_maximum_per_page = "6";
					}else{
						$chloe_maximum_per_page = $chloe_data['max_recent_posts'];
					}
					$chloe_loop = new WP_Query( array( 'posts_per_page' => $chloe_maximum_per_page ) );
					$chloe_i=0;
					if ($chloe_loop->have_posts()) :
					
					while ( $chloe_loop->have_posts() ) : $chloe_loop->the_post(); $chloe_i++; ?>
				
					<!-- Post Start -->
					<article data-no="<?php echo $chloe_i; ?>" <?php if($chloe_i=="1"){ echo 'class="first_article"';} ?> id="post-<?php the_ID(); ?>">
					
						<!-- post date start -->
						<div class="post-date">
							<span class="month"><?php echo get_the_date('M'); ?>.</span>
							<span class="day"><?php echo get_the_date('d'); ?></span>
							<span class="year"><?php echo get_the_date('Y'); ?></span>
						</div>
						<!-- post date end -->
						
						
						<!-- read more start -->
						<a class="read-more" rel="bookmark" href="<?php the_permalink(); ?>"><i></i></a>
						<!-- read more start -->
						
						
						<div class="post-header">
						
						
							<!-- post title start -->
							<h2 class="post-title">
								<a rel="bookmark" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
									<?php if(is_sticky()){ ?><i class="fa fa-star sticky-icon"></i> <?php } ?><?php the_title(); ?>
								</a>
							</h2>
							<!-- post title end -->
							
							
							<!-- post type start -->
							<div class="post-type">
								<span class="<?php echo chloe_get_post_format(); ?>"></span>
							</div>
							<div class="clearfix"></div>
							<!-- post type end -->
							
							
						</div>
						
						<?php chloe_post_formats(); ?>
						
						<div class="the-content">
						<?php
							if ( "type-quote" === chloe_get_post_format() ){
								the_content();
							}else{
								the_excerpt();
							}
						?>
						</div>
								
					</article>
					<!-- Post End -->
					<?php endwhile; ?>
					
					<?php else : ?>

					<div class="no-search-result">
						<p><?php _e('Nothing found', 'chloe'); ?>.</p>
					</div>

					<?php endif;  wp_reset_query(); ?>
					
				</div> <!-- .blog end -->
				<!-- recent posts end -->
				
				<?php
				break;
				case 'resume':
				?>
				
				<!-- Resume start -->
				<div class="heading heading-middle">
					<div class="pull-left"><?php _e('My Resume', 'chloe'); ?></div>
					<div class="pull-right">
						<a href="<?php if($chloe_data['aboutme_page'] != "Select a page:"){ echo get_permalink(get_page_by_path($chloe_data['aboutme_page'])->ID); } ?>">
							<?php _e('See more about me', 'chloe'); ?> &rsaquo;&rsaquo;
						</a>
					</div>
					<div class="clearfix"></div>
				</div>

				
				<div class="content" id="resume-page">
					
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
				<!-- Resume end -->
				
				<?php
				break;
				case 'custom_content':
				
					
					if(!empty($chloe_data['home_custom_content'])){
						echo '<article>';
							echo do_shortcode($chloe_data['home_custom_content']);
						echo '</article>';
					}
					
				break;
				
					} // switch end

				} // foreach end
				
				endif;
				// // Home page Layout Manager end
				?>
				
		</section>
		<!-- Section End -->
		
	<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>