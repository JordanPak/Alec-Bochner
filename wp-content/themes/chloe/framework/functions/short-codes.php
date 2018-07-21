<?php 


/* ---------------------------------------------------- */
/* Flexslider shotcode									*/
/* ---------------------------------------------------- */
function chloe_slideshow($atts, $content = null){

	$content = trim($content);
	$images = !empty($content)?preg_split("/(\r?\n)/", $content):'';
	
	$themePath = get_template_directory_uri();
	
	if(!empty($images) && is_array($images)){
		$content = '';
		foreach($images as $image){
			$image = trim(strip_tags($image));
			
			if(!empty($image)){
				$content .= '<li><img src="'.strip_tags($image).'" title="" alt="" /></li>';
			}
		}
	}

	return '<div class="flexslider inpageslider"><ul class="slides">'.$content.'</ul></div>';
}
add_shortcode('slideshow', 'chloe_slideshow');



/* ---------------------------------------------------- */
/* Bootstrap 2.3.2 row shotcode							*/
/* ---------------------------------------------------- */
function chloe_bootstrap_row($params, $content = null){
    extract(shortcode_atts(array(
        'class' => 'row-fluid'
    ), $params));
    $result = '<div class="'.$class.'">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('row', 'chloe_bootstrap_row');


/* ---------------------------------------------------- */
/* Bootstrap 2.3.2 span1-span2 shotcodes				*/
/* ---------------------------------------------------- */
function chloe_bootstrap_span1($params,$content=null){
    $result = '<div class="span1">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span1', 'chloe_bootstrap_span1');


function chloe_bootstrap_span2($params,$content=null){
    $result = '<div class="span2">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span2', 'chloe_bootstrap_span2');


function chloe_bootstrap_span3($params,$content=null){
    $result = '<div class="span3">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span3', 'chloe_bootstrap_span3');


function chloe_bootstrap_span4($params,$content=null){
    $result = '<div class="span4">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span4', 'chloe_bootstrap_span4');


function chloe_bootstrap_span5($params,$content=null){
    $result = '<div class="span5">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span5', 'chloe_bootstrap_span5');


function chloe_bootstrap_span6($params,$content=null){
    $result = '<div class="span6">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span6', 'chloe_bootstrap_span6');


function chloe_bootstrap_span7($params,$content=null){
    $result = '<div class="span7">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span7', 'chloe_bootstrap_span7');


function chloe_bootstrap_span8($params,$content=null){
    $result = '<div class="span8">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span8', 'chloe_bootstrap_span8');


function chloe_bootstrap_span9($params,$content=null){
    $result = '<div class="span9">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span9', 'chloe_bootstrap_span9');


function chloe_bootstrap_span10($params,$content=null){
    $result = '<div class="span10">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span10', 'chloe_bootstrap_span10');


function chloe_bootstrap_span11($params,$content=null){
    $result = '<div class="span11">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span11', 'chloe_bootstrap_span11');


function chloe_bootstrap_span12($params,$content=null){
    $result = '<div class="span12">';
    $result .= do_shortcode($content );
    $result .= '</div>'; 
    return force_balance_tags( $result );
}
add_shortcode('span12', 'chloe_bootstrap_span12');


/* ---------------------------------------------------- */
/* Bootstrap 3.0 buttons								*/
/* ---------------------------------------------------- */
function chloe_bootstrap_buttons($params, $content = null){
    extract(shortcode_atts(array(
        'size' => 'default',
        'type' => 'default',
        'href' => "#"
    ), $params));

    $result = '<a class="btn btn-'.$size.' btn-'.$type.'" href="'.$href.'">'.$content.'</a>';
    return force_balance_tags( $result );
}
add_shortcode('button', 'chloe_bootstrap_buttons');


/* ---------------------------------------------------- */
/* Blockquote shortcode									*/
/* ---------------------------------------------------- */
function chloe_bootstrap_blockquote($params,$content=null){
    extract(shortcode_atts(array(), $params));
    $result = '<blockquote>';
    $result .= do_shortcode($content );
    $result .= '</blockquote>'; 
    return force_balance_tags( $result );
}
add_shortcode('blockquote', 'chloe_bootstrap_blockquote');


/* ---------------------------------------------------- */
/* Title shortcode									*/
/* ---------------------------------------------------- */
function chloe_title($params,$content=null){
	extract(shortcode_atts(array(
        'size' => 'normal'
    ), $params));
    extract(shortcode_atts(array(), $params));
    $result = '<h3 class="'.$size.'-title">';
    $result .= do_shortcode($content );
    $result .= '</h3>'; 
    return force_balance_tags( $result );
}
add_shortcode('title', 'chloe_title');


/* ---------------------------------------------------- */
/* Chloe list shortcodes								*/
/* ---------------------------------------------------- */
function chloe_bootstrap_list( $atts, $content = null ) {
    extract(shortcode_atts(array(), $atts));
	$result = '<ul class="list">'. do_shortcode($content) . '</ul>';
    return force_balance_tags($result);
}
add_shortcode('list', 'chloe_bootstrap_list');

function chloe_bootstrap_li( $atts, $content = null ) {
	$result = '<li>'. do_shortcode($content) . '</li>';
    return force_balance_tags($result);
}
add_shortcode('li', 'chloe_bootstrap_li');


/* ---------------------------------------------------- */
/* Hr and clearfix shortcodes							*/
/* ---------------------------------------------------- */
function chloe_bootstrap_hr() { 
    return '<hr>';  
}
add_shortcode('hr', 'chloe_bootstrap_hr');

function chloe_bootstrap_clear() {  
    return '<div class="clearfix"></div>';  
}
add_shortcode('clear', 'chloe_bootstrap_clear');



/* ---------------------------------------------------- */
/* Contributors: Jonua									*/
/* ---------------------------------------------------- */
function chloe_shortcode_empty_paragraph_fix($content) {   
        $array = array (
            '<p>[' => '[', 
            ']</p>' => ']', 
            ']<br />' => ']'
        );

        $content = strtr($content, $array);

		return $content;
}
add_filter('the_content', 'chloe_shortcode_empty_paragraph_fix');

?>