<?php


/* ---------------------------------------------------- */
/* Chloe skills widget									*/
/* ---------------------------------------------------- */
add_action( 'widgets_init', 'chloe_skills_widget' );

function chloe_skills_widget() {
	register_widget( 'chloe_skills_widget' );
}

class chloe_skills_widget extends WP_Widget {

	function chloe_skills_widget() {
		$widget_ops = array( 'classname' => 'chloe_skills', 'description' => __('A widget that displays the author skills ','chloe') );
		
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'chloe_skills_widget' );
		
		$this->WP_Widget( 'chloe_skills_widget', 'Wasp themes - Skills', $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$chloe_title = apply_filters('widget_title', $instance['chloe_title'] );
		
		echo $before_widget;
		?>
		
		<h3 class="dotted_border"><?php echo $chloe_title; ?></h3>

		<?php
		
		for ($i=1; $i<12; $i++){

			if($instance['chloe_skill_title'.$i.''])
				{
				?>
				<div class="progress-bar">
					<div class="progress" data-width="<?php echo $instance['chloe_skill_level'.$i.'']-8; ?>%" style="background:#<?php echo $instance['chloe_skill_color'.$i.'']; ?>;">
						
						<div class="pull-left">
							<?php echo $instance['chloe_skill_title'.$i.'']; ?>
						</div>
						
						<div class="pull-right">
							<?php echo $instance['chloe_skill_level'.$i.'']; ?>%
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php
				}

		}
		echo $after_widget;

	}

	//Update the widget 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['chloe_title'] = strip_tags( $new_instance['chloe_title'] );
		$instance['chloe_skill_title1'] = strip_tags( $new_instance['chloe_skill_title1'] );
		$instance['chloe_skill_title2'] = strip_tags( $new_instance['chloe_skill_title2'] );
		$instance['chloe_skill_title3'] = strip_tags( $new_instance['chloe_skill_title3'] );
		$instance['chloe_skill_title4'] = strip_tags( $new_instance['chloe_skill_title4'] );
		$instance['chloe_skill_title5'] = strip_tags( $new_instance['chloe_skill_title5'] );
		$instance['chloe_skill_title6'] = strip_tags( $new_instance['chloe_skill_title6'] );
		$instance['chloe_skill_title7'] = strip_tags( $new_instance['chloe_skill_title7'] );
		$instance['chloe_skill_title8'] = strip_tags( $new_instance['chloe_skill_title8'] );
		$instance['chloe_skill_title9'] = strip_tags( $new_instance['chloe_skill_title9'] );
		$instance['chloe_skill_title10'] = strip_tags( $new_instance['chloe_skill_title10'] );
		$instance['chloe_skill_title11'] = strip_tags( $new_instance['chloe_skill_title11'] );
		$instance['chloe_skill_title12'] = strip_tags( $new_instance['chloe_skill_title12'] );
		
		$instance['chloe_skill_level1'] = strip_tags( $new_instance['chloe_skill_level1'] );
		$instance['chloe_skill_level2'] = strip_tags( $new_instance['chloe_skill_level2'] );
		$instance['chloe_skill_level3'] = strip_tags( $new_instance['chloe_skill_level3'] );
		$instance['chloe_skill_level4'] = strip_tags( $new_instance['chloe_skill_level4'] );
		$instance['chloe_skill_level5'] = strip_tags( $new_instance['chloe_skill_level5'] );
		$instance['chloe_skill_level6'] = strip_tags( $new_instance['chloe_skill_level6'] );
		$instance['chloe_skill_level7'] = strip_tags( $new_instance['chloe_skill_level7'] );
		$instance['chloe_skill_level8'] = strip_tags( $new_instance['chloe_skill_level8'] );
		$instance['chloe_skill_level9'] = strip_tags( $new_instance['chloe_skill_level9'] );
		$instance['chloe_skill_level10'] = strip_tags( $new_instance['chloe_skill_level10'] );
		$instance['chloe_skill_level11'] = strip_tags( $new_instance['chloe_skill_level11'] );
		$instance['chloe_skill_level12'] = strip_tags( $new_instance['chloe_skill_level12'] );
		
		$instance['chloe_skill_color1'] = strip_tags( $new_instance['chloe_skill_color1'] );
		$instance['chloe_skill_color2'] = strip_tags( $new_instance['chloe_skill_color2'] );
		$instance['chloe_skill_color3'] = strip_tags( $new_instance['chloe_skill_color3'] );
		$instance['chloe_skill_color4'] = strip_tags( $new_instance['chloe_skill_color4'] );
		$instance['chloe_skill_color5'] = strip_tags( $new_instance['chloe_skill_color5'] );
		$instance['chloe_skill_color6'] = strip_tags( $new_instance['chloe_skill_color6'] );
		$instance['chloe_skill_color7'] = strip_tags( $new_instance['chloe_skill_color7'] );
		$instance['chloe_skill_color8'] = strip_tags( $new_instance['chloe_skill_color8'] );
		$instance['chloe_skill_color9'] = strip_tags( $new_instance['chloe_skill_color9'] );
		$instance['chloe_skill_color10'] = strip_tags( $new_instance['chloe_skill_color10'] );
		$instance['chloe_skill_color11'] = strip_tags( $new_instance['chloe_skill_color11'] );
		$instance['chloe_skill_color12'] = strip_tags( $new_instance['chloe_skill_color12'] );
		
		return $instance;
		
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array(
		'chloe_title' => '',
		'chloe_skill_title1' => '',
		'chloe_skill_title2' => '',
		'chloe_skill_title3' => '',
		'chloe_skill_title4' => '',
		'chloe_skill_title5' => '',
		'chloe_skill_title6' => '',
		'chloe_skill_title7' => '',
		'chloe_skill_title8' => '',
		'chloe_skill_title9' => '',
		'chloe_skill_title10' => '',
		'chloe_skill_title11' => '',
		'chloe_skill_title12' => '',
		
		'chloe_skill_level1' => '0',
		'chloe_skill_level2' => '0',
		'chloe_skill_level3' => '0',
		'chloe_skill_level4' => '0',
		'chloe_skill_level5' => '0',
		'chloe_skill_level6' => '0',
		'chloe_skill_level7' => '0',
		'chloe_skill_level8' => '0',
		'chloe_skill_level9' => '0',
		'chloe_skill_level10' => '0',
		'chloe_skill_level11' => '0',
		'chloe_skill_level12' => '0',
		
		'chloe_skill_color1' => '',
		'chloe_skill_color2' => '',
		'chloe_skill_color3' => '',
		'chloe_skill_color4' => '',
		'chloe_skill_color5' => '',
		'chloe_skill_color6' => '',
		'chloe_skill_color7' => '',
		'chloe_skill_color8' => '',
		'chloe_skill_color9' => '',
		'chloe_skill_color10' => '',
		'chloe_skill_color11' => '',
		'chloe_skill_color12' => ''

		);
		
		wp_enqueue_style('chloe-color-picker',  get_template_directory_uri().'/framework/css/colorpicker.css');
		wp_enqueue_script('chloe-color-picker', get_template_directory_uri().'/framework/js/colorpicker.js');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		
		<div class="chloe_skills">
			<p>
				<label for="<?php echo $this->get_field_id( 'chloe_title' ); ?>">Title</label>
				<input class="title_skill" id="<?php echo $this->get_field_id( 'chloe_title' ); ?>" name="<?php echo $this->get_field_name( 'chloe_title' ); ?>" value="<?php echo $instance['chloe_title']; ?>" />
			</p>	
			
			
			<div id="skill_copy1" class="chloe_skill_row">
			
				<p class="title">
					<label for="<?php echo $this->get_field_id( 'chloe_skill_title1' ); ?>">Skill Title:</label>
					<input id="<?php echo $this->get_field_id( 'chloe_skill_title1' ); ?>" name="<?php echo $this->get_field_name( 'chloe_skill_title1' ); ?>" value="<?php echo $instance['chloe_skill_title1']; ?>" />
					</p>
					
				<p class="level">
					<label for="<?php echo $this->get_field_id( 'chloe_skill_level1' ); ?>">Level:</label>
					<input id="<?php echo $this->get_field_id( 'chloe_skill_level1' ); ?>" name="<?php echo $this->get_field_name( 'chloe_skill_level1' ); ?>" value="<?php echo $instance['chloe_skill_level1']; ?>" />%
					</p>
					
				<p class="color">
					<label>Color:</label>
					<input id="<?php echo $this->get_field_id( 'chloe_skill_color1' ); ?>" name="<?php echo $this->get_field_name( 'chloe_skill_color1' ); ?>" value="<?php echo $instance['chloe_skill_color1']; ?>" class="iColorPicker" />
					</p>
					
			</div>		

			
			<?php
			for ($i=2; $i<12; $i++){
			?>

			<div id="skill_copy<?php echo $i; ?>" class="chloe_skill_row" <?php if($instance['chloe_skill_title'.$i.''] == ""){ ?>style="display:none;"<?php } ?>>
			
				<p class="title">
					<label for="<?php echo $this->get_field_id( 'chloe_skill_title'.$i.'' ); ?>">Skill Title:</label>
					<input id="<?php echo $this->get_field_id( 'chloe_skill_title'.$i.'' ); ?>" name="<?php echo $this->get_field_name( 'chloe_skill_title'.$i.'' ); ?>" value="<?php echo $instance['chloe_skill_title'.$i.'']; ?>" />
					</p>
					
				<p class="level">
					<label for="<?php echo $this->get_field_id( 'chloe_skill_level'.$i.'' ); ?>">Level:</label>
					<input id="<?php echo $this->get_field_id( 'chloe_skill_level'.$i.'' ); ?>" name="<?php echo $this->get_field_name( 'chloe_skill_level'.$i.'' ); ?>" value="<?php echo $instance['chloe_skill_level'.$i.'']; ?>" />%
					</p>
					
				<p class="color">
					<label>Color:</label>
					<input id="<?php echo $this->get_field_id( 'chloe_skill_color'.$i.'' ); ?>" name="<?php echo $this->get_field_name( 'chloe_skill_color'.$i.'' ); ?>" value="<?php echo $instance['chloe_skill_color'.$i.'']; ?>" class="iColorPicker" />
					</p>
					
			</div>
			
			<?php } ?>
			
		</div>
		
		
		 <script type="text/javascript">
			var i = 0;
			
			jQuery(function(){
				"use strict";
				
				i++;
				
				if(i == 1){

					jQuery(".chloe_add_skills").click(function (){
						
						var widgetid = jQuery(this).parent().parent().parent().parent().attr("id");
						var click = jQuery( "#"+widgetid+" .chloe_skill_row:visible" ).last().attr("id").replace("skill_copy","");
						click++;
						jQuery( "#"+widgetid+" div#skill_copy"+click).show();
						
					});
				
				
				jQuery('.iColorPicker').ColorPicker({
						onSubmit: function(hsb, hex, rgb, el) {
							jQuery(el).val(hex);
							jQuery(el).ColorPickerHide();
						},
						onBeforeShow: function () {
							jQuery(this).ColorPickerSetColor(this.value);
						}
					})
					.bind('keyup', function(){
						jQuery(this).ColorPickerSetColor(this.value);
					});
					
				}
				
			});
		</script>
		
		<style type="text/css">
		.chloe_skills .title_skill{
			display:block;padding:4px;border:1px solid #ccc;width:60%;
		}
			
		.chloe_skills .chloe_skill_row {
			overflow: hidden;
			padding-top:6px;
		}
		.chloe_skills  .chloe_skill_row p {
			float:left;
			margin:0;
		}
		.chloe_skills  .chloe_skill_row p.title {
			width:110px;
		}
		.chloe_skills  .chloe_skill_row p.title input {
			width: 104px;
			margin:0;
			font-size:11px;
			border:1px solid #ccc;
		}
		.chloe_skills  .chloe_skill_row p.level {
			width:50px;
			margin-left:8px;
		}
		.chloe_skills  .chloe_skill_row p.level input {
			width:25px;
			text-align:right;
			font-size:11px;
			border:1px solid #ccc;
		}
		.chloe_skills  .chloe_skill_row p.color {
			width:40px;
			margin-left:8px;
		}
		.chloe_skills  .chloe_skill_row p.color input {
			display:block;
			width:100%;
			cursor:pointer;
			font-size:11px;
			color: #ccc;
			border:1px solid #ccc;
		}

		.chloe_add_skills
			{
			display:block;
			padding-top:5px;
			}
		</style>
		
		<a class="chloe_add_skills" href="javascript:void(0);">Add Skill</a>
		
	<?php
	}
}
	
?>