<?php


/* ---------------------------------------------------- */
/* register font-awesome taxonomy meta fiel				*/
/* ---------------------------------------------------- */
function chloe_taxonomy_add_new_meta_field()
{
		// this will add the custom meta field to the add new term page
	?>
	   <div class="form-field">
			<label for="term_meta[font_awesome]"><?php
		_e('Font-Awesome Icon Class', 'chloe');
	?></label>
			<input type="text" name="term_meta[font_awesome]" id="term_meta[font_awesome]" value="">
			<p class="description">this option will show category name with your selected icon. Use a font-awesome class. E.g. "fa-home" <a target="_blank" href="http://fontawesome.io/icons/">Click here to See icon classes.</a></p>
		</div>
	<?php
}
add_action('resume_category_add_form_fields', 'chloe_taxonomy_add_new_meta_field', 10, 2);


// Edit term page
function chloe_taxonomy_edit_meta_field($term)
{
		// put the term ID into a variable
		$t_id = $term->term_id;
		
		// retrieve the existing value(s) for this meta field. This returns an array
		$term_meta = get_option("taxonomy_$t_id");
	?>
	   <tr class="form-field">
		<th scope="row" valign="top"><label for="term_meta[font_awesome]"><?php
		_e('Font-Awesome Icon Class', 'chloe');
	?></label></th>
			<td>
				<input type="text" name="term_meta[font_awesome]" id="term_meta[font_awesome]" value="<?php
		echo esc_attr($term_meta['font_awesome']) ? esc_attr($term_meta['font_awesome']) : '';
	?>">
				<p class="description">this option will show category name with your selected icon. Use a font-awesome class. E.g. "fa-home" <a target="_blank" href="http://fontawesome.io/icons/">Click here to See icon classes.</a></p>
			</td>
		</tr>
	<?php
}
add_action('resume_category_edit_form_fields', 'chloe_taxonomy_edit_meta_field', 10, 2);


// Save extra taxonomy fields callback function.
function chloe_save_taxonomy_custom_meta($term_id)
{
    if (isset($_POST['term_meta'])) {
        $t_id      = $term_id;
        $term_meta = get_option("taxonomy_$t_id");
        $cat_keys  = array_keys($_POST['term_meta']);
        foreach ($cat_keys as $key) {
            if (isset($_POST['term_meta'][$key])) {
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        // Save the option array.
        update_option("taxonomy_$t_id", $term_meta);
    }
}

add_action('edited_resume_category', 'chloe_save_taxonomy_custom_meta', 10, 2);
add_action('create_resume_category', 'chloe_save_taxonomy_custom_meta', 10, 2);
	
?>