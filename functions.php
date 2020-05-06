<?php

function addAssets(){
    wp_enqueue_style('bootstrapCSS', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('mainCSS', get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_script('bootstrapJS', get_template_directory_uri().'/assets/js/bootstrap.min.js', ['jquery'] );
}
//adding hook
add_action("wp_enqueue_scripts","addAssets");
//adding thumbnail
add_theme_support( "post-thumbnails" );
add_theme_support( "menus");

register_nav_menus( array(
    "main-menu" => "Main Menu",
    
) );


 ?>