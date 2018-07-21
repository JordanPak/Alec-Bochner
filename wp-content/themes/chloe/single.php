<?php get_header(); ?>
		
		
		<!-- Section Start -->
		<section>

			<?php while (have_posts()) : the_post(); ?>
			
			<!-- single post Start -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			
				<!-- post date start -->
					<div class="post-date">
						<span class="month"><?php echo get_the_date('M'); ?>.</span>
						<span class="day"><?php echo get_the_date('d'); ?></span>
						<span class="year"><?php echo get_the_date('Y'); ?></span>
					</div>
				<!-- post date end -->
				
				
				<!-- Post share -->
				<div class="post-share">
				
					<div class="share-here">
						<span class="share fa fa-plus"></span>
					</div>
					
					<div class="icons">
						<a onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>', 'Facebook Share', 'height=306, width=650, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no');" class="p_facebook_icon"><i class="fa fa-facebook"></i></a>
						<a onclick="window.open('http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>', 'Twitter Tweet', 'height=420, width=550, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no');" class="p_twitter_icon"><i class="fa fa-twitter"></i></a>
						<a onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'Google Plus Share', 'height=520, width=620, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no');" class="p_gplus_icon"><i class="fa fa-google-plus"></i></a>
					</div>
					
				</div>
				<!-- Post share end -->
							
			
				<!-- post title -->
				<div class="post-header">
				
					<h2 class="post-title">
						<?php if(is_sticky()){ ?><i class="fa fa-star sticky-icon"></i> <?php } ?><?php the_title(); ?> <?php chloe_the_subtitle(); ?>
					</h2>
						
					<!-- post type start -->
					<div class="post-type">
						<span class="<?php echo chloe_get_post_format(); ?>"></span>
					</div>
					<div class="clearfix"></div>
					<!-- post type end -->
					
				</div>
				
				
					<?php chloe_post_formats(); ?>
				
					<div class="the-content">
					<?php the_content(); ?>
					</div>
					
					<?php wp_link_pages(array('before' => '<div class="pages_nav">', 'nextpagelink' => __('Next Page <i class="fa fa-angle-right"></i>', 'chloe'), 'previouspagelink' => __('<i class="fa fa-angle-left"></i> Previous Page', 'chloe'), 'next_or_number' => 'next', 'after' => '</div>')); ?>
				
					<div class="post-meta row-fluid <?php if (!get_the_tags()) {echo "chloe_no_has_tags";} ?>">
					
						<div class="span2 post-meta-left">
							<div class="post-next-previous">
								<?php //paginate_links(); ?>
								<?php next_post_link('<div class="posts-prev">%link</div>', ''); ?> 
								<?php previous_post_link('<div class="posts-next">%link</div>', ''); ?>
							</div>
						</div>
					
						<div class="span10 text-right">
						<div class="categories">
							<span class="posted_text"><?php _e('Posted by','chloe'); ?> <?php the_author_meta('nickname'); ?> / <?php _e('Posted in','chloe'); ?></span>
							<?php the_category(', '); ?>
						</div>
					
						<?php if (get_the_tags()) { ?>
							<ul class="tags">
								<li class="posted_text"><?php _e('Tagged in:','chloe'); ?></li>
								<?php the_tags('<li>',',</li> <li>','</li>'); ?>
							</ul>
						<?php } ?>
						</div>
						<div class="clearfix"></div>
						
					</div>
					
				<?php comments_template(); ?>
				
			</article>
			<!--  single post End -->
			
			<?php endwhile; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>