<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<?php _e('This post is password protected. Enter the password to view comments.', 'chloe'); ?>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h3 class="comment-title" id="comments">
		<i class="fa fa-comments-o"></i>
		<?php comments_number(__('No Comments', 'chloe'), __('1 Comment', 'chloe'), __('% Comments', 'chloe'));?>
	</h3>

	<ol id="comment-list">
		 <?php wp_list_comments('type=comment&callback=chloe_comment'); ?>
	</ol>

	<div class="pages_nav comment_nav">
		<?php previous_comments_link(__('<i class="fa fa-angle-left"></i> Older Comments','chloe')); ?>
		<?php next_comments_link(__('Newer Comments <i class="fa fa-angle-right"></i>','chloe')); ?>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		
		<?php if ( 'post' == get_post_type() ){ ?>
		<h3 class="comments_closed"><?php _e('Comments are closed.', 'chloe'); ?></h3>
		<?php } ?>
			
	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

	<div id="response">

	<?php
	$args = array(
	  'id_form'           => 'comment-form',
	  'id_submit'         => 'submit',
	  'title_reply'       => __( '<i class="fa fa-mail-reply"></i> Leave a Reply', 'chloe' ),
	  'title_reply_to'    => __( '<i class="fa fa-mail-reply"></i> Leave a Reply to %s', 'chloe' ),
	  'cancel_reply_link' => __( 'Cancel Reply', 'chloe' ),
	  'label_submit'      => __( 'Send', 'chloe' ),

	  'comment_field' =>  '<div class="row-fluid"><textarea id="comment" name="comment" rows="5" class="span12" placeholder="'.__("Comment","chloe").'" aria-required="true">' .
		'</textarea></div>',

	  'comment_notes_before' => '',

	  'comment_notes_after' => '',

	  'fields' => apply_filters( 'comment_form_default_fields', array(

		'author' =>
		  '<div class="row-fluid">
		  <input id="author" name="author" type="text" class="span11" placeholder="'.__("Name","chloe").'" value="' . esc_attr( $commenter['comment_author'] ) .
		  '" size="30" /></div>',

		'email' =>
		  '<div class="row-fluid"><input id="email" class="span11" placeholder="'.__("E Mail","chloe").'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		  '" size="30" /></div>'
		)
	  ),
	);
	?>

		<?php comment_form($args); ?>
		
	</div>

<?php endif; ?>