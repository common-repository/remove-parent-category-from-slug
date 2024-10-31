<?php
/**
 * Plugin Name: Remove Parent Category from Slug
 * Plugin URI: https://wordpress.org/plugins/sp-remove-parent-category-from-slug/
 * Description: Simply Remove Parent Category from Slug and show only child category in WordPress permalink.
 * Version: 1.0
 * Author: Sirius Pro
 * Author URI: https://siriuspro.pl
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

//Remove Parent Category from Slug
function sp_remove_parent_category_slug() {
    $category_args = get_taxonomy( 'category' ); 
    $category_args->rewrite['hierarchical'] = false;
    register_taxonomy( 'category', 'post', (array) $category_args );
}
add_action( 'init', 'sp_remove_parent_category_slug', 11 );