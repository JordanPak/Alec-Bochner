<?php


/* ------------------------------------------------------------------------------------ */
/* Theme Comment function 																*/
/* ------------------------------------------------------------------------------------ */
function chloe_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <div class="row-fluid">
            <div class="author-avatar span1">
                <?php echo get_avatar($comment, $size = '60'); ?>
           </div>
                                
            <div class="comment-right span11">
                <div class="row-fluid comment-meta">
                    <div class="author-name span6"><?php
						printf(__('%s', 'chloe'), strip_tags(get_comment_author_link()));
					?></div>
                    <div class="span6 text-right"><?php
						printf(__('%1$s at %2$s', 'chloe'), get_comment_date(), get_comment_time());
						edit_comment_link(__('(Edit)', 'chloe'), '  ', ''); ?> &#183; <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?></div>
                </div><?php
					
				comment_text();

				if ($comment->comment_approved == '0'):
					echo "<em>";
					_e('Your comment is awaiting moderation.', 'chloe');
					echo "</em><br />";
				endif; ?>
            </div>
        </div>
    </li>
<?php } ?>