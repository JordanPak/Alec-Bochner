<?php get_header(); ?>
		
		
		<!-- Section Start -->
		<section>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- Item Start -->
			<article class="item-<?php the_ID(); ?>">
			
				<!-- item title -->
				<h3 class="page-heading">
					<?php the_title(); ?>. <?php chloe_the_subtitle(); ?>
					
					<div class="pull-right spn_b">
						<?php next_post_link('<div class="posts-prev spn_b">%link</div>', ''); ?> 
						<?php previous_post_link('<div class="posts-next spn_b">%link</div>', ''); ?>
					</div>
				</h3>
				<!-- item title end -->	
				
				<div class="row-fluid">
				
					<!-- item image -->
					<div class="span7">
						<?php echo chloe_single_portfolio_item(); ?>
					</div>
					<!-- item image end -->
					
					
					<!-- item Description -->
					<div class="span5 item">
						<aside>
						
							<h4 class="item-description-title"><?php the_title(); ?></h4>
							
							<div class="item-type">
								<?php 
								$chloe_taxonomy = strip_tags( get_the_term_list($post->ID, 'filters', '', ' / ', '') );
								echo $chloe_taxonomy;
								?>
							</div>
							
							<div class="the-content">
							<?php the_content(); ?>
							</div>
							
							<?php if( get_post_meta( get_the_ID(), 'chloe_link', true ) != "") { ?>
								<a target="_blank" href="<?php echo get_post_meta( get_the_ID(), 'chloe_link', true ); ?>" class="btn btn-default project-link">
									<?php _e('Visit Website', 'chloe'); ?>
								</a>
							<?php } ?>
							
						</aside>
					</div>
					<div class="clearfix"></div>
					<!-- item Description end -->
					
				</div>
				
				<div class="comment_padding"></div>
				<?php comments_template(); ?>
				
			</article>
			<!-- Item End -->
			<?php endwhile; endif; ?>
			

		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>