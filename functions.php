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
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// Fancy Fontage
function google_fonts() {
    echo '<link href="http://fonts.googleapis.com/css?family=Vollkorn:400,700|Open+Sans:400italic,400,600" rel="stylesheet" type="text/css" />' . "\n";
}
add_action( 'wp_head', 'google_fonts' );

// standardizing log in logo
function stswr_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(http://stswrdev.wpengine.com/wp-content/themes/wordpress-theme-stswr/stswr_icon.gif);
            padding-bottom: 30px;
            background-size: 150px 150px;
            height: 150px;
            width: 150px;
            background-repeat: no-repeat;
        }
    	.message {
		    background-color: #f9fbff;
    	}
	    #login_error {
	    	background-color: #fffefe;
	    }
	    .login {
	    	background-color: #fff;
	    }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'stswr_login_logo' );
// setting the url
function stswr_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'stswr_login_logo_url' );
