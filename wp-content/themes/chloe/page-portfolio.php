<?php
/*
Template Name: Portfolio
*/

get_header(); ?>
		
		
		<!-- Section Start -->
		<section class="portfolio_section">
		
			<?php
			// portfolio loop
			$chloe_loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 999 ) ); ?>
			
			<?php
				// Video Embed codes not in slider "ul" tag for slider working faster and without problem
				while ( $chloe_loop->have_posts() ) : $chloe_loop->the_post(); ?>
				
				<?php if(get_post_meta( get_the_ID(), 'chloe_embed', true ) != "" AND get_post_meta( get_the_ID(), 'chloe_source', true ) == 'own'){ ?>
				<div class="hidden">
					<div class="embed_code" id="embed_code_<?php echo get_the_id(); ?>">
						<?php echo get_post_meta( get_the_ID(), 'chloe_embed', true ); ?>
					</div>
				</div>
			<?php } endwhile; ?>

			
			<!-- portfolio filters start -->
			<div class="section_portfolio_filters">
				<div class="pull-left">
					<h2 class="page-heading portfolio-heading"><?php echo get_the_title(get_queried_object_id()); ?>. <?php echo chloe_the_subtitle(); ?></h2>
				</div>
				
				<div class="pull-right">
					<div class="controls">	
						<ul>
							<li class="filter active" data-filter="all"><?php _e('Show All', 'chloe'); ?></li>
							<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'filters', 'walker' => new chloe_Works_Walker())); ?>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- portfolio filters end -->
			
			
			<!-- portfolio Area start -->
			<div class="projects-list portfolio-list">
				<ul id="portfolio-area">

				<?php while ( $chloe_loop->have_posts() ) : $chloe_loop->the_post(); ?>
				
					<!-- Item start -->
					<?php $chloe_terms = get_the_terms( get_the_ID(), 'filters' ); ?>
					<li class="mix all <?php if($chloe_terms) : foreach ($chloe_terms as $chloe_term) { if(!empty($chloe_term)){echo 'term'.$chloe_term->term_id.'';} } endif; ?>" data-cat="<?php if(!empty($chloe_term)){ echo $chloe_term->term_id; } ?>">
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
					<!-- Item End -->
					
				
				<?php endwhile; ?>
				</ul>
			</div>
			<!-- portfolio Area end -->
			
		</section>
		<!-- Section End -->
		
		<?php get_sidebar(); ?>
		
		
<?php get_footer(); ?>