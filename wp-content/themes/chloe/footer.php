	<?php if(is_single()){  /* Back Top Button */ ?>
		<a href="#" id="top_button"><i class="fa fa-long-arrow-up"></i></a>
	<?php } ?>
	<footer>
		<div class="row-fluid">
				
			<div class="span6">
				<?php
					global $chloe_data;
					if(!empty($chloe_data['footer_copyright']))
						{
							echo $chloe_data['footer_copyright'];
						}else{
							echo "&copy; Copyright 2013. All Rights Reserved.";
						}
				?>
			</div>

			<div class="span6 text-right">
				<?php
					if(!empty($chloe_data['footer_right']))
						{
							echo $chloe_data['footer_right'];
						}else{
							echo "Coded and designed by <a target='_blank' href='http://www.waspthemes.com'>Wasp Themes</a>";
						}
				?>
			</div>
				
		</div>
	</footer>
		
		
</div><!-- Main container End -->
	
	<?php
	if(!empty($chloe_data['space_body'])){echo $chloe_data['space_body'];}
	if(!empty($chloe_data['tracking_codes'])){echo $chloe_data['tracking_codes'];}
	?>
	
	<?php wp_footer(); ?>
	</body>
</html>