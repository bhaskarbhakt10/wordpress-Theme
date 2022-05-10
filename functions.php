<?php

/**this is the main function file */




// styles loaded
function easy2migrate_styles(){
    wp_enqueue_style( 'style',  get_stylesheet_uri(  ), array('bootstrap_css') );
    
    wp_register_style( 'bootstrap_css', get_template_directory_uri(  ).'/assests/css/bootstrap.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'bootstrap_css' );

    
}

add_action( 'wp_enqueue_scripts' ,'easy2migrate_styles' );




// scripts loaded
function easy2migrate_scripts(){

    wp_register_script( 'bootstrap_js', get_template_directory_uri(  ). '/assests/js/bootstrap.bundle.min.js' ,array( 'jquery'), '1.1', 'true' );
    wp_register_script( 'main_js', get_template_directory_uri(  ). '/assests/js/main.js' ,array(), '1.1', 'true' );
    
    // wp_enqueue_script( 'main_js' );
    wp_enqueue_script( 'bootstrap_js' );

}
add_action( 'wp_enqueue_scripts' ,'easy2migrate_scripts' );


//load menus in the apperance section
add_theme_support( 'menus' );

register_nav_menus( 
    array(
        'primary-menu' => __( 'Primary Menu', 'easy2migrate' ),
        'footer-menu' => __('Footer menu', 'easy2migrate')
    )
);





