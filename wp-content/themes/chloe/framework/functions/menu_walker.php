<?php


/* ------------------------------------------------------------------------------------ */
/* Menu walker and other menu scripts													*/
/* ------------------------------------------------------------------------------------ */
class chloe_Menu_With_Description extends Walker_Nav_Menu
{
	function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0)
	{
        global $wp_query;
        
        $indent = ($depth) ? str_repeat(" ", $depth) : '';
        
        $class_names = $value = '';
        
        $classes = empty($object->classes) ? array() : (array) $object->classes;
        
		if(!empty($classes['0']))
		{
			if (stristr($classes['0'], "fa-")){
				$fa_icon = $classes['0'];
				$fa_icon = '<i class="fa '.$fa_icon.'"></i>';
				unset($classes['0']);
			}else{
				$fa_icon = "";
			}
		}else{
			$fa_icon = "";
		}
			
        if ($object->description) {
            $has_description = " has_description";
        } else {
            $has_description = "";
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $object));
        $class_names = ' class="' . esc_attr($class_names) . '' . $has_description . '"';
        
        $output .= $indent . '<li id="menu-item-' . $object->ID . '"' . $value . $class_names . '>';
        
        $attributes = !empty($object->attr_title) ? ' title="' . esc_attr($object->attr_title) . '"' : '';
        $attributes .= !empty($object->target) ? ' target="' . esc_attr($object->target) . '"' : '';
        $attributes .= !empty($object->xfn) ? ' rel="' . esc_attr($object->xfn) . '"' : '';
        $attributes .= !empty($object->url) ? ' href="' . esc_attr($object->url) . '"' : '';
        
        
        $item_output = $args->before;
        
        // menu link output
		$item_output .= '<a' . $attributes . '>'.$fa_icon.'';
        $item_output .= $args->link_before . apply_filters('the_title', $object->title, $object->ID) . $args->link_after;
        
        // menu description output based on depth
        if ($object->description) {
            $item_output .= '<br /><small>' . $object->description . '</small>';
        }
        
        // close menu link anchor
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $object, $depth, $args);
	}
}


add_filter('wp_nav_menu_args', 'chloe_my_add_menu_descriptions');
function chloe_my_add_menu_descriptions($args)
{
    $args['walker'] = new chloe_Menu_With_Description;
    return $args;
}


// First and last class to menu
function chloe_add_first_and_last($output)
{
    $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
    $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
    return $output;
}
add_filter('wp_nav_menu', 'chloe_add_first_and_last');



/* ------------------------------------------------------------------------------------ */
/* Portfolio filter walker 																*/
/* ------------------------------------------------------------------------------------ */
class chloe_Works_Walker extends Walker_Category
{
	function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0)
    {
        
        $cat_name = esc_attr($object->name);
        $link     = ' class="filter" data-filter="term' . $object->term_id . '">' . $cat_name . '';
        
        if ('list' == $args['style']) {
            $output .= '<li';
            $class = 'cat-item cat-item-' . $object->term_id;
            if (isset($current_category) && $current_category && ($object->term_id == $current_category))
                $class .= ' current-cat';
            elseif (isset($_current_category) && $_current_category && ($object->term_id == $_current_category->parent))
                $class .= ' current-cat-parent';
            $output .= '';
            $output .= "$link\n";
        } else {
            $output .= "\t$link<br />\n";
        }
        
    }
}

?>