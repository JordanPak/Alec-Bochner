<?php get_header(); ?>

		
		<!-- Section Start -->
		<section>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- Page start -->
			<article class="page-<?php the_ID(); ?>">
				
				<h2 class="page-heading"><?php the_title(); ?>. <?php chloe_the_subtitle(); ?></h2>
				
				<div class="the-content">
				<?php the_content(); ?>
				</div>
			
				<?php comments_template(); ?>
			
			</article>
			<!-- Page end -->
	
		<?php endwhile; endif; ?>
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>