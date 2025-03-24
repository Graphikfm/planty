<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
// test
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function afficher_lien_pour_admin_connecte($items, $args) {
    // conditions si un admin est connecté 
    if (is_user_logged_in() && current_user_can('manage_options')) {
        // on stock dans une variable php l'element html a inserer
        $items .= '<li id="admin-link" class="menu-item"><a class="link_Ad" href="http://planty.local:10010/wp-admin/index.php">Admin</a></li>';
    }
    return $items;
}
// on utilise le hook wp_nav_menu_items pour inserer le lien dasn l'element nav 
add_filter('wp_nav_menu_items', 'afficher_lien_pour_admin_connecte', 10, 2);
