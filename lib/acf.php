<?php
/*
 * everything ACF related
 */

if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title'	=> 'Bureau',
        'menu_title'	=> 'Bureau',
        'menu_slug' 	=> 'acf-bureau',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
    ));

}
?>
