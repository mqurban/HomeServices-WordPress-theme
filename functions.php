<?php 

function homeservices_files(){

    // website css
    wp_enqueue_style( 'css linking here', get_stylesheet_uri() );
    wp_enqueue_style( 'website css1', get_theme_file_uri('./css/style.css') );
    wp_enqueue_style( 'website css2', get_theme_file_uri('./css/bootstrap.css') );
    wp_enqueue_style( 'website css3', get_theme_file_uri('./css/font-awesome.min.css') );
    wp_enqueue_style( 'website css4', get_theme_file_uri('./css/responsive.css') );
    wp_enqueue_style( 'website css5', get_theme_file_uri('./css/style.css.map') );
    wp_enqueue_style( 'website css6', get_theme_file_uri('./css/style.scss') );

    // website fonts
    wp_enqueue_style( 'website font1', get_theme_file_uri('./fonts/fontawesome-webfont.ttf') );
    wp_enqueue_style( 'website font2', get_theme_file_uri('./fonts/fontawesome-webfont.woff') );
    wp_enqueue_style( 'website font3', get_theme_file_uri('./fonts/fontawesome-webfont.woff2') );

    // website javascript
    wp_enqueue_script( 'my js loading through this1', get_theme_file_uri('./js/bootstrap.js') );
    wp_enqueue_script( 'my js loading through this2', get_theme_file_uri('./js/custom.js') );
    wp_enqueue_script( 'my js loading through this3', get_theme_file_uri('./js/jquery-3.4.1.min.js') );


}
add_action('wp_enqueue_scripts', 'homeservices_files');

