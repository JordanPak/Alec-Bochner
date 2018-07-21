<?php


/* ----------------------------------------------------- */
/* Show the Portfolio Format 							 */
/* ----------------------------------------------------- */
function chloe_single_portfolio_item()
{
    
    // Screenshot
    if (get_post_meta(get_the_ID(), 'chloe_screenshot', true) != "") {
        $screenshot_attachment_id = get_post_meta(get_the_ID(), 'chloe_screenshot', false);
        
        if (!isset($screenshot_attachment_id[1])) {
            $screenshot_link = wp_get_attachment_image_src($screenshot_attachment_id[0], true);
            echo '<img class="project-image" src="' . $screenshot_link[0] . '" />';
        } else {
            echo "<div class='flexslider item_slider'><ul class='slides'>";
            foreach ($screenshot_attachment_id as $this_attachment_id):
                $screenshot_link = wp_get_attachment_image_src($this_attachment_id, true);
                echo '<li><img src="' . $screenshot_link[0] . '" /></li>';
            endforeach;
            echo "</ul></div>";
        }
    }
    
    
    // Embed Code        
    if (get_post_meta(get_the_ID(), 'chloe_embed', true) != "") {
        if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'vimeo') {
            return '<iframe src="http://player.vimeo.com/video/' . get_post_meta(get_the_ID(), 'chloe_embed', true) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        }
        
        else if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'youtube') {
            return '<iframe width="600" height="338" src="http://www.youtube.com/embed/' . get_post_meta(get_the_ID(), 'chloe_embed', true) . '?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>';
        }
        
        else {
            return get_post_meta(get_the_ID(), 'chloe_embed', true);
        }
    }
    
    
    // Show Thumbnail if have notting.
    if (get_post_meta(get_the_ID(), 'chloe_screenshot', true) == "" AND get_post_meta(get_the_ID(), 'chloe_embed', true) == "") {
        return the_post_thumbnail('item-detail', array(
            'class' => "project-image"
        ));
    }
    
}


/* ----------------------------------------------------- */
/* Get Post Formats										 */
/* ----------------------------------------------------- */
function chloe_get_post_format()
{
    global $post;
    
    $format = get_post_format();
    
    if ($format == "image") {
        return $format = "type-image";
    }
    
    if ($format == "gallery") {
        return $format = "type-images";
    }
    
    if ($format == "video") {
        return $format = "type-video";
    }
    
    if ($format == "audio") {
        return $format = "type-sound";
    }
    
    if (false === $format) {
        return $format = 'type-quote';
    }
}



/* ----------------------------------------------------- */
/* Show The Post Format									 */
/* ----------------------------------------------------- */
function chloe_post_formats()
{
    global $post;
	
    if ("type-image" == chloe_get_post_format()) // post image
		{
        
			if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == 'yes') {
				$post_image_class = "zoom";
				$link             = chloe_get_post_thumbnail_url();
			} else {
				$post_image_class = "link";
				$link             = get_permalink();
			}
			?>
			<a class="<?php echo $post_image_class; ?>" href="<?php echo $link; ?>">
				<span><i class='icon'></i></span>
			<?php the_post_thumbnail('blog-thumb', array('class' => "thumbnails")); ?>
			</a><?php
	
		}
    
	if ("type-images" == chloe_get_post_format()) // post images
		{
		
			$gallery_attachment_ids = get_post_meta(get_the_ID(), 'chloe_gallery', false);
			echo "<div class='flexslider article_slider'><ul class='slides'>";

			foreach ($gallery_attachment_ids as $this_attachment_id):
				$this_image = wp_get_attachment_image( $this_attachment_id, "blog-thumb" );
				if(is_single()){
					echo '<li>'.$this_image.'</li>';
				}else{
					echo '<li><a href="'.get_permalink(get_the_ID()).'">'. $this_image .'</a></li>';
				}
			endforeach;

			echo "</ul></div>";
		}
    
	
    if ("type-video" == chloe_get_post_format()) // post video
        {
        
        if (get_post_meta(get_the_ID(), 'chloe_embed', true) != "")
			{
				if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'vimeo') {
					echo '<iframe src="http://player.vimeo.com/video/' . get_post_meta(get_the_ID(), 'chloe_embed', true) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
				}
				
				else if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'youtube') {
					echo '<iframe width="600" height="338" src="http://www.youtube.com/embed/' . get_post_meta(get_the_ID(), 'chloe_embed', true) . '?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>';
				}
				
				else {
					echo get_post_meta(get_the_ID(), 'chloe_embed', true);
				}
			}
        
        
    }
    
	
    if ("type-sound" == chloe_get_post_format()) // post audio
        {
        
        if (get_post_meta(get_the_ID(), 'chloe_audio_embed', true) != "")
			{
				echo get_post_meta(get_the_ID(), 'chloe_audio_embed', true);
			}
		}

}




/* ----------------------------------------------------- */
/* kriesi pagination, Thank to kriesi.at				 */
/* ----------------------------------------------------- */
function chloe_kriesi_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 0) + 1;
    
    global $paged;
    if (empty($paged))
        $paged = 1;
    
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    
    if (1 != $pages) {
        echo "<div class='pagination'>";
        echo "<ul>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo "<li class='link-first-page'><a href='" . get_pagenum_link(1) . "'><i class='fa fa-angle-double-left'></i></a></li>";
        if ($paged > 1 && $showitems < $pages)
            echo "<li class='link-prev-page'><a href='" . get_pagenum_link($paged - 1) . "'><i class='fa fa-angle-left'></i> " . __('prev', 'chloe') . "</a></a></li>";
        
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li class='active'><span>" . $i . "</span></li>" : "<li class='only_page'><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
            }
        }
        
        if ($paged < $pages && $showitems < $pages)
            echo "<li class='link-next-page'><a href='" . get_pagenum_link($paged + 1) . "'>" . __('next', 'chloe') . " <i class='fa fa-angle-right'></i></a></li>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            echo "<li class='link-last-page'><a href='" . get_pagenum_link($pages) . "'><i class='fa fa-angle-double-right'></i></li>";
        echo "</ul>";
        echo "</div>\n";
    }
}



/* ----------------------------------------------------- */
/* Get a url from atachment id							 */
/* ----------------------------------------------------- */
function chloe_get_post_thumbnail_url()
{
    global $post;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, '');
    return $src[0];
}



/* ----------------------------------------------------- */
/* Archive Title										 */
/* ----------------------------------------------------- */
function chloe_archive_title()
{
    global $posts;
    $post = $posts[0];
    
    if (is_category()) { /* If this is a category archive */
        
        _e('Archive for the', 'chloe');
        echo " '";
        single_cat_title();
        echo "' ";
        _e('Category', 'chloe');
        
    } elseif (is_tag()) { /* If this is a tag archive */
        
        _e('Posts Tagged', 'chloe');
        echo " '";
        single_cat_title();
        echo "' ";
        
    } elseif (is_day()) { /* If this is a daily archive */
        
        _e('Archive for', 'chloe');
        echo " ";
        the_time('F jS, Y');
        
    } elseif (is_month()) { /* If this is a monthly archive */
        
        _e('Archive for', 'chloe');
        echo " ";
        the_time('F, Y');
        
    } elseif (is_year()) { /* If this is a yearly archive */
        
        _e('Archive for', 'chloe');
        echo " ";
        the_time('Y');
        
    } elseif (is_author()) { /* If this is an author archive */
        
        _e('Author Archive', 'chloe');
        
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { /* If this is a paged archive */
        
        _e('Blog Archives', 'chloe');

    }
}



/* ----------------------------------------------------- */
/* Check portfolio item format.							 */
/* ----------------------------------------------------- */
function chloe_check_portfolio_item_type($return)
{
	$link = null;
	$class = null;
    
    if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == "no" AND get_post_meta(get_the_ID(), 'chloe_embed', true) != "") {
        $class = "link";
        $link  = get_permalink();
    }
    
    if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == "yes" AND get_post_meta(get_the_ID(), 'chloe_screenshot', true) != "") {
        $class         = "zoom";
        $attachment_id = get_post_meta(get_the_ID(), 'chloe_screenshot', true);
        $link          = wp_get_attachment_image_src($attachment_id, true);
        $link          = $link[0];
    }
    
    if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == "no" AND get_post_meta(get_the_ID(), 'chloe_screenshot', true) != "") {
        $class = "link";
        $link  = get_permalink();
    }
	
	if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == "yes" AND chloe_get_post_thumbnail_url(get_the_ID()) != "") {
        $class = "zoom";
        $link  = chloe_get_post_thumbnail_url(get_the_ID());
    }	
    
    if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == "no" AND get_post_meta(get_the_ID(), 'chloe_screenshot', true) == "" AND get_post_meta(get_the_ID(), 'chloe_embed', true) == "") {
        $class = "link";
        $link  = get_permalink();
    }
	
	if (get_post_meta(get_the_ID(), 'chloe_lightbox', true) == "yes" AND get_post_meta(get_the_ID(), 'chloe_embed', true) != "") {
        
        if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'vimeo') {
            $link  = get_post_meta(get_the_ID(), 'chloe_embed', true);
            $link  = "http://player.vimeo.com/video/$link?autoplay=1";
            $class = "video";
        }
        
        if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'youtube') {
            $link  = get_post_meta(get_the_ID(), 'chloe_embed', true);
            $link  = "http://youtube.googleapis.com/v/$link?rel=0&wmode=transparent&autoplay=1";
            $class = "video";
        }
        
        if (get_post_meta(get_the_ID(), 'chloe_source', true) == 'own') {
            $link = "#embed_code_";
            $link .= get_the_ID();
            $class = "inline-video";
            $id    = "embed_code_";
            $id .= get_the_ID();
        }
        
    }
    
    if ($return == "link") {
        return $link;
    }
    
    if ($return == "class") {
        return $class;
    }
    
}



/* ----------------------------------------------------- */
/* breadcrumb											 */
/* ----------------------------------------------------- */
function chloe_the_breadcrumb()
{
    if (!is_home()) {
        echo '<a href="';
        echo home_url();
        echo '">';
		echo wp_html_excerpt(get_bloginfo('name'), 40, '&hellip;'); // same length with wp admin bar site title.
        echo "</a>";
        if (is_category() || is_single()) {
            if (get_the_category()) {
                if (is_page_template('single-resume.php')) {
                    echo " <i class='fa fa-angle-double-right'></i> ";
                    the_category(' ');
                }
            }
            if (is_single()) {
                echo " <i class='fa fa-angle-double-right'></i> ";
                echo wp_trim_words(get_the_title(), $num_words = 10, $more = '...');
            }
        } elseif (is_page() && !is_page_template('page-home.php') && !is_page_template('page-portfolio.php')) {
            echo " <i class='fa fa-angle-double-right'></i> ";
            echo the_title();
        } elseif (is_page() && is_page_template('page-home.php')) {
            echo " <i class='fa fa-angle-double-right'></i> ";
            _e('Home', 'chloe');
        } elseif (is_page() && is_page_template('page-portfolio.php')) {
            echo " <i class='fa fa-angle-double-right'></i> ";
            _e('Portfolio', 'chloe');
        }
    } elseif (is_home()) {
        echo '<a href="';
        echo home_url();
        echo '">';
		echo wp_html_excerpt(get_bloginfo('name'), 40, '&hellip;'); // same length with wp admin bar site title.
        echo "</a>";
        echo " <i class='fa fa-angle-double-right'></i> ";
        echo __('Blog', 'chloe');
    }
}



/* ----------------------------------------------------- */
/* Get browser class (for css selector)					 */
/* ----------------------------------------------------- */
function chloe_get_browser_class()
{
    if (empty($_SERVER['HTTP_USER_AGENT']))
        return false;
    
    $u_agent  = $_SERVER['HTTP_USER_AGENT'];
    $bname    = 'Unknown';
    $platform = 'Unknown';
    $ub       = 'Unknown';
    $version  = "";
    
    //First get the platform?
    if (preg_match('!linux!i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('!macintosh|mac os x!i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('!windows|win32!i', $u_agent)) {
        $platform = 'windows';
    }
    
    // Next get the name of the useragent yes seperately and for good reason
    if (preg_match('!MSIE!i', $u_agent) && !preg_match('!Opera!i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub    = "MSIE";
    } elseif (preg_match('!Firefox!i', $u_agent)) {
        $bname = 'Mozilla Firefox';
        $ub    = "Firefox";
    } elseif (preg_match('!Chrome!i', $u_agent)) {
        $bname = 'Google Chrome';
        $ub    = "Chrome";
    } elseif (preg_match('!Safari!i', $u_agent)) {
        $bname = 'Apple Safari';
        $ub    = "Safari";
    } elseif (preg_match('!Opera!i', $u_agent)) {
        $bname = 'Opera';
        $ub    = "Opera";
    } elseif (preg_match('!Netscape!i', $u_agent)) {
        $bname = 'Netscape';
        $ub    = "Netscape";
    }
    
    // finally get the correct version number
    $known   = array(
        'Version',
        $ub,
        'other'
    );
    $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!@preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
    
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
            $version = $matches['version'][0];
        } else {
            $version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }
    
    // check if we have a number
    if ($version == null || $version == "") {
        $version = "?";
    }
    
    $mainVersion = $version;
    if (strpos($version, '.') !== false) {
        $mainVersion = explode('.', $version);
        $mainVersion = $mainVersion[0];
    }
    
    return strtolower($ub . " " . $ub . $mainVersion);
    
}



/* ----------------------------------------------------- */
/* Custom backgrounds									 */
/* ----------------------------------------------------- */
function chloe_custom_background()
{
    global $post;
    global $chloe_data;
	$patern_bg = $chloe_data['chloe_background_patterns'];
	$th = get_template_directory_uri();
    echo '<style type="text/css">body{';
    
    if (is_home()) { // if blog
        
        
        if (get_post_meta(get_option('page_for_posts'), 'chloe_background_color', true) != '') {
            $has_bg_color = '1';
            echo 'background-color: ' . get_post_meta(get_option('page_for_posts'), 'chloe_background_color', true) . ' !important;';
        }
        
        if (get_post_meta(get_option('page_for_posts'), 'chloe_background_image', true) != '') {
            $has_bg_image = '1';
            echo 'background-image: ' . 'url(' . wp_get_attachment_url(get_post_meta(get_option('page_for_posts'), 'chloe_background_image', true)) . ');';
            echo 'background-repeat: ' . get_post_meta(get_option('page_for_posts'), 'chloe_background_repeat', true) . ';';
            echo 'background-position: ' . get_post_meta(get_option('page_for_posts'), 'chloe_background_position', true) . ';';
            echo 'background-attachment: fixed;';
            
            if (get_post_meta(get_option('page_for_posts'), 'chloe_background_cover', true) == "yes") {
                echo ' -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;';
            }
        }
        
    } else { // if a other page
        
        if (is_single() || is_page() || is_singular('resume') || is_singular('portfolio')) {
            
            
            if (get_post_meta(get_the_ID(), 'chloe_background_color', true) != '') {
                $has_bg_color = '1';
                echo 'background-color: ' . get_post_meta(get_the_ID(), 'chloe_background_color', true) . ' !important;';
            }
            
            if (get_post_meta(get_the_ID(), 'chloe_background_image', true) != '') {
                $has_bg_image = '1';
                echo 'background-image: ' . 'url(' . wp_get_attachment_url(get_post_meta(get_the_ID(), 'chloe_background_image', true)) . ') !important;';
                echo 'background-repeat: ' . get_post_meta(get_the_ID(), 'chloe_background_repeat', true) . ' !important;';
                echo 'background-position: ' . get_post_meta(get_the_ID(), 'chloe_background_position', true) . ' !important;';
                echo 'background-attachment: fixed !important;';
                if (get_post_meta(get_the_ID(), 'chloe_background_cover', true) == "yes") {
                    echo ' -webkit-background-size: cover !important;-moz-background-size: cover !important;-o-background-size: cover !important;background-size: cover !important;';
                }
            }
            
        }
        
    }
    if (empty($has_bg_color) AND empty($has_bg_image)) {
        if (!empty($chloe_data['background_color'])) {
            echo 'background-color:' . $chloe_data['background_color'] . ' !important;';
        }
        if (!empty($chloe_data['chloe_background_image'])) {
            echo 'background-image:url(' . $chloe_data['chloe_background_image'] . ') !important;';
        }
		
		
        if (!empty($chloe_data['chloe_background_repeat'])) {
            echo 'background-repeat:' . $chloe_data['chloe_background_repeat'] . ' !important;';
        }
        if (!empty($chloe_data['chloe_background_attachment'])) {
            echo 'background-attachment:' . $chloe_data['chloe_background_attachment'] . ' !important;';
        }
        if (!empty($chloe_data['background_position'])) {
            echo 'background-position:' . $chloe_data['background_position'] . ' !important;';
        }
        if(!empty($chloe_data['chloe_background_cover'])){
			if ($chloe_data['chloe_background_cover'] == "Yes") {
				echo ' -webkit-background-size: cover !important;-moz-background-size: cover !important;-o-background-size: cover !important;background-size: cover !important;';
			}
		}
        
    }
	
    if (!empty($patern_bg) AND $patern_bg != "none" AND $chloe_data['chloe_background_image'] == "") {
            echo "background-image:url('$th/patterns/$patern_bg.png') !important;";
        }
		
    echo '}</style>';
}



/* ----------------------------------------------------- */
/* initialize google map								 */
/* ----------------------------------------------------- */
function chloe_google_map_initialize()
{
    global $chloe_data;
    if (!empty($chloe_data['chloe_map_latitude'])) {
        
        return '<script type="text/javascript">
            function initialize()
            {
            
                // Edit your Latlng
                var myLatlng = new google.maps.LatLng(' . $chloe_data["chloe_map_latitude"] . '); // <--- Edit your Latlng
                
                
                var mapOptions = {
                    zoom: 14,
                    scrollwheel: false,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                
                
                var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                
                
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
                
                
            }
        </script>';
        
    }
}



/* ----------------------------------------------------- */
/* Get the post sub title								 */
/* ----------------------------------------------------- */
function chloe_the_subtitle()
{
    global $post;
    $subtitle = get_post_meta(get_queried_object_id(), 'chloe_subtitle', true);
    if ($subtitle) {
        echo '<span class="subtitle">' . $subtitle . '</span>';
    }
}



?>