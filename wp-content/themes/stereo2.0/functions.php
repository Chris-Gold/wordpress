<?php

/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

register_nav_menus( array(
        'menu-principal' => 'Menu principal'
) );

?>
