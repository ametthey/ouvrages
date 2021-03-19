<?php
function _themename_image_configuration() {
    // add_image_size( 'nom', hauteur(chiffre), largeur(chiffre) );
    add_image_size( 'home-grid', 1000, 1000 );

}
add_action( 'after_setup_theme', '_themename_image_configuration' );

// LAZY LOAD ON IMAGES
add_filter( 'post_thumbnail_html', 'wpdd_modify_post_thumbnail_html', 10, 5 );
/**
 * Add `loading="lazy"` attribute to images output by the_post_thumbnail().
 *
 * @param  string $html	The post thumbnail HTML.
 * @param  int $post_id	The post ID.
 * @param  string $post_thumbnail_id	The post thumbnail ID.
 * @param  string|array $size	The post thumbnail size. Image size or array of width and height values (in that order). Default 'post-thumbnail'.
 * @param  string $attr	Query string of attributes.
 *
 * @return string	The modified post thumbnail HTML.
 */
function wpdd_modify_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {

    return str_replace( '<img', '<img loading="lazy"', $html );

}
