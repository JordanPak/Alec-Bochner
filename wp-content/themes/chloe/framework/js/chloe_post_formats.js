(function($) {
	'use strict';

	if ($('#post-format-0').is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","none");
		}
		
	if ($('#post-format-image').is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","block");
		}
		
	if ($('#post-format-video').is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","block");
			$("#chloe_image_format").css("display","none");
		}
		
	if ($('#post-format-audio').is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","block");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","none");
		}
	
	if ($('#post-format-gallery').is(":checked")) {
			$("#chloe_gallery_format").css("display","block");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","none");
		}

		
		
	$('#post-format-gallery').click(function(){
		if ($(this).is(":checked")) {
			$("#chloe_gallery_format").css("display","block");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","none");
		}
	}); 
	
	$('#post-format-image').click(function(){
		if ($(this).is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","block");
		}
	}); 
	
	$('#post-format-video').click(function(){
		if ($(this).is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","block");
			$("#chloe_image_format").css("display","none");
		}
	}); 
	
	$('#post-format-audio').click(function(){
		if ($(this).is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","block");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","none");
		}
	}); 
	
	$('#post-format-0').click(function(){
		if ($(this).is(":checked")) {
			$("#chloe_gallery_format").css("display","none");
			$("#chloe_audio_format").css("display","none");
			$("#chloe_video_format").css("display","none");
			$("#chloe_image_format").css("display","none");
		}
	}); 
	
})(jQuery);