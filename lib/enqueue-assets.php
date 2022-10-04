<?php
/**************************************************************************
 * Après avoir cloner le projet:
 * changer le mot _themename par le nom du projet
 * en terme d'organiser, on renomme les handle par le
 * nom du projet pour mieux s'y retrouver
 * ex: _themename_assets -> myProject_assets
 ***********************************************************************/

/*
 * Starter Theme  stylesheet
 */
function _themename_assets() {
    // $cssFile = get_stylesheet_directory_uri() .'/bundle.css';
    // $cssFilePath = get_template_directory().'/bundle.css';
    // wp_enqueue_style( '_themename-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/bundle.css', [], '1.0.0' ,  'all' );
    // // wp_enqueue_style( '_themename-stylesheet', $cssFile, array(), $cssFilePath,  'all' );
    // // $jsFile = get_stylesheet_directory_uri() .'/assets/js/main-min.js';
    // // $jsFilePath = get_template_directory().'/assets/js/main-min.js';
    // wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/main.js', [], '2.0.1' ,   true );
    // // wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/main.js', [], '2.0.1' ,   true );
    wp_enqueue_style( '_themename-stylesheet-home', get_stylesheet_directory_uri() . '/dist/assets/css/bundle.css', [], filemtime( get_template_directory().'/dist/assets/css/bundle.css' ) ,  'all' );
    wp_enqueue_script( '_themename-scripts-home', get_stylesheet_directory_uri() . '/dist/assets/js/main.js',[] , filemtime( get_template_directory().'/dist/assets/js/main.js' ) ,   true );

}
add_action( 'wp_enqueue_scripts', '_themename_assets' );

/*
 * Admin stylesheet
 */

// function _themename_admin_assets() {
//     wp_enqueue_style( '_themename-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/admin.css', [], '1.0.0', 'all');
//     wp_enqueue_script( '_themename-admin-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/admin.js', [], '1.0.0' , true );
// }

// add_action( 'admin_enqueue_scripts', '_themename_admin_assets' );

/*
 * Login Stylesheet
 */
function _themename_login_assets() {
    wp_enqueue_style( '_themename-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/login.css', [], '1.0.0', 'all' );
    // wp_enqueue_script( '_themename-admin-scripts', get_stylesheet_directory_uri() . '/dist/assets/css/login.js', [], '1.0.0', 'all' );
}
add_action( 'login_enqueue_scripts', '_themename_login_assets' );

/***********************************************************************
 *
 * Defer JavaScript Scripts
 *
 ***********************************************************************/

function _themename_defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', '_themename_defer_parsing_of_js', 10 );

/***********************************************************************
 *
 * Remove jQuery
 *
 ***********************************************************************/

function _themename_no_more_jquery(){
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', '_themename_no_more_jquery');

/***********************************************************************
 *
 * Remove jQuery Migrate
 *
 ***********************************************************************/

function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            // Check whether the script has any dependencies

            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
