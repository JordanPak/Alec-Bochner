<?php get_header(); ?>


		<!-- Section Start -->
		<section class="blog" id="search">
		
		<?php $chloe_i=0; if (have_posts()) : ?>
		
			<h2 class="page-heading"><?php printf(__("Search Results for '%s'", 'chloe'), strip_tags(get_search_query())); ?></h2>
			
			<?php while (have_posts()) : the_post(); $chloe_i++; ?>
			
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
					
					<!-- post content -->
					<div class="the-content">
						<?php
							if ( "type-quote" === chloe_get_post_format() ){
								the_content();
							}else{
								the_excerpt();
							}
						?>
					</div>
					<!-- post content end -->
							
				</article>
				<!-- Post End -->

			<?php endwhile; ?>

				
			<?php chloe_kriesi_pagination(); ?>
				
				
				<?php else : ?>

					<h2 class="page-heading"><?php _e('No Search found', 'chloe'); ?></h2>
					<div class="no-search-result">
						<p><?php _e("Sorry, no results found. Try different words to describe what you are looking for.", 'chloe') ?></p>
					</div>

				<?php endif; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>