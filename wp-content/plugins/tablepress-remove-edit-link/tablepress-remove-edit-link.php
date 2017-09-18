<?php
/*
Plugin Name: TablePress Extension: Remove Edit Link
Plugin URI: https://tablepress.org/extensions/remove-edit-link/
Description: Custom Extension for TablePress to remove the "Edit" link next to tables for all users
Version: 1.0
Author: Tobias Bäthge
Author URI: https://tobias.baethge.com/
*/

add_filter( 'tablepress_edit_link_below_table', '__return_false' );

/*
For more fine-grained control, use something like
add_filter( 'tablepress_edit_link_below_table', 'tablepress_remove_edit_link', 10, 2 );
function tablepress_remove_edit_link( $show_edit_link, $table_id ) {
	if ( ! in_array( $table_id, array( '1', '3' ), true ) ) {
		$show_edit_link = false;
	}
	return $show_edit_link;
}
*/
