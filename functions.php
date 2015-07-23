<?php

// Load up all the lovely styles from the WRDSB Theme
/* see https://codex.wordpress.org/Child_Themes if there are conflicts or the child styles do not load */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/addtohomescreen.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/bootstrap-theme.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/icon-styles.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/timely.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Favicon
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );
