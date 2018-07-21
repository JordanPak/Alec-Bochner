<?php
/*
Template Name: Contact
*/

/* ---------------------------------------------------- */
/* Error Handling										*/
/* ---------------------------------------------------- */
$chloe_nameError ="";
$chloe_emailError ="";
$chloe_commentError ="";

if(isset($_POST['submitted'])) {

    if(trim($_POST['contactName']) === '') {
        $chloe_nameError = __('Please enter your name.', 'chloe');
        $chloe_hasError = true;
    } else {
        $chloe_name = trim($_POST['contactName']);
    }

    if(trim($_POST['email']) === '')  {
        $chloe_emailError = __('Please enter your email address.', 'chloe');
        $chloe_hasError = true;
    } else if (!@eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $chloe_emailError = __('You entered an invalid email address.', 'chloe');
        $chloe_hasError = true;
    } else {
        $chloe_email = trim($_POST['email']);
    }

    if(trim($_POST['comments']) === '') {
        $chloe_commentError = __('Please enter a message.', 'chloe');
        $chloe_hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $chloe_comments = stripslashes(trim($_POST['comments']));
        } else {
            $chloe_comments = trim($_POST['comments']);
        }
    }

    if(!isset($chloe_hasError)) {
        $chloe_emailTo = $chloe_data['chloe_author_email'];
        if (!isset($chloe_emailTo) || ($chloe_emailTo == '') ){
            $chloe_emailTo = get_option('admin_email');
        }
        $chloe_subject = 'Contact Form from '.$chloe_name;
        $chloe_body = "Name: $chloe_name \n\nEmail: $chloe_email \n\nComments: $chloe_comments";
        $chloe_headers = 'From: '.$chloe_name.' <'.$chloe_emailTo.'>' . "\r\n" . 'Reply-To: ' . $chloe_email;

        @mail($chloe_emailTo, $chloe_subject, $chloe_body, $chloe_headers);
        $chloe_emailSent = true;
    }

}

get_header(); ?>
		
		
		<!-- Section Start -->
		<section id="section-contact">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- Contant page start -->
			<div class="content page-<?php the_ID(); ?>" id="contact-page">
			
				<!-- page title -->
				<h2 class="page-heading"><?php the_title(); ?>. <?php chloe_the_subtitle(); ?></h2>
	
						<?php if(isset($chloe_emailSent) && $chloe_emailSent == true) { ?>
								<h3 class="success_email"><i class="fa fa-check"></i> <?php _e('Thanks, your email was sent successfully.', 'chloe'); ?></h3>
						<?php } else { ?>
						
						<div class="the-content">
							<?php the_content(); ?>
						</div>
						
						<!-- contact form -->
						<form id="contact-form" action="<?php the_permalink(); ?>" method="POST">

							<div class="row-fluid">
								<?php if(empty($chloe_nameError)){ ?>
								<input name="contactName" class="span11" type="text" tabindex="1" placeholder="<?php _e('Name', 'chloe'); ?>" />
								<?php }else{ ?>
								<input name="contactName" class="span11 input_error" type="text" tabindex="1" placeholder="<?php echo $chloe_nameError; ?>" />
								<?php } ?>
							</div>
							
							<div class="row-fluid">
								<?php if(empty($chloe_emailError)){ ?>
								<input name="email" class="span11" type="text" tabindex="2" placeholder="<?php _e('E Mail', 'chloe'); ?>" />
								<?php }else{ ?>
								<input name="email" class="span11 input_error" type="text" tabindex="2" placeholder="<?php echo $chloe_emailError; ?>" />
								<?php } ?>
							</div>
							
							<div class="row-fluid">
								<?php if(empty($chloe_commentError)){ ?>
								<textarea name="comments" class="span12" placeholder="<?php _e('Message', 'chloe'); ?>" tabindex="3" rows="5"></textarea>
								<?php }else{ ?>
								<textarea name="comments" class="span12 input_error" placeholder="<?php echo $chloe_commentError; ?>" tabindex="3" rows="5"></textarea>
								<?php } ?>
							</div>
							
							<div class="text-right form-submit">
								<input class="button" id="submit" type="submit" tabindex="4" value="<?php _e('Send', 'chloe'); ?>" />
							</div>
							<input type="hidden" name="submitted" id="submitted" value="true" />
							
						</form>
						<!-- contact form -->
						
				<?php } ?>
				
			</div>
			<!-- Contant page end -->
	
		<?php endwhile; endif; ?>
			
		</section>
		<!-- Section End -->
		
	<?php get_sidebar(); ?>


<?php get_footer(); ?>