<?php get_header(); ?>
		
		
		<!-- Section Start -->
		<section>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- Page start -->
			<article class="resume-<?php the_ID(); ?>">
				
				<!-- item title -->
				<h3 class="page-heading">
					<?php the_title(); ?>. <?php chloe_the_subtitle(); ?>
					
					<div class="pull-right">
						<?php next_post_link('<div class="posts-prev">%link</div>', ''); ?> 
						<?php previous_post_link('<div class="posts-next">%link</div>', ''); ?>
					</div>
				</h3>
				<!-- item title end -->	
				
				<div class="the-content">
				<?php the_content(); ?>
				</div>
			
				<div class="comment_padding"></div>
				<?php comments_template(); ?>
			
			
			</article>
			<!-- Page end -->
	
		<?php endwhile; endif; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>