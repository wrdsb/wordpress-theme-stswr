<?php

// Load up all the lovely styles from the WRDSB Theme
/* see https://codex.wordpress.org/Child_Themes if there are conflicts or the child styles do not load */

function theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/addtohomescreen.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/bootstrap-theme.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/icon-styles.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/timely.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Favicon
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="';
    bloginfo('stylesheet_directory');
    echo '/favicon.png" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// Fancy Fontage
function google_fonts() {
    echo '<link href="https://fonts.googleapis.com/css?family=Vollkorn:400,700|Open+Sans:400italic,400,600" rel="stylesheet" type="text/css" />' . "\n";
}
add_action( 'wp_head', 'google_fonts' );

// Ninja Forms PDF adjustments
add_filter( 'ninja_forms_submission_pdf_fetch_sequential_number', '__return_true' );
add_filter( 'ninja_forms_submission_pdf_fetch_date', '__return_true' );

function custom_pdf_name( $name, $sub_id ) { 
     $name = 'STSWR Report' . $sub_id; 
     return $name; 
  } 
add_filter( 'ninja_forms_submission_pdf_name', 'custom_pdf_name', 20, 2 );

//Remove dashboard widgets
function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
        remove_meta_box( 'wpe_dify_news_feed', 'dashboard', 'normal');
        remove_meta_box( 'jetpack_summary_widget', 'dashboard', 'normal');
    if (! current_user_can ('manage_options')) {
    }
}
add_action ('admin_init', 'remove_dashboard_meta');