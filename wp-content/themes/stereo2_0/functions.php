<?php

/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

register_nav_menus( array(
        'menu-principal' => 'Menu principal'
) );

function theme_scripts() {
      global $wp_scripts;
      wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/librairie/js/bootstrap.bundle.min.js', null, true );
      wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/librairie/jquery/jquery.js', null, true );
      wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/script.js');
      }
   add_action( 'wp_enqueue_scripts', 'theme_scripts');

function theme_styles() {
      //wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/librairies/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );
      wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/librairie/bootstrap/css/bootstrap.min.css' );
      wp_enqueue_style( 'style', get_stylesheet_directory_uri() . 'style.css' );
      }
   add_action( 'wp_enqueue_scripts', 'theme_styles');
?>
