<?php

function wpb_adding_scripts() {

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(),'1', true);
    wp_enqueue_script('custom');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'1', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(),'1', true);
    wp_enqueue_script('jquery');

    wp_register_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(),'1', true);
    wp_enqueue_script('fancybox');

    wp_register_script('mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array(),'1', true);
    wp_enqueue_script('mixitup');

    wp_register_script('menu', get_template_directory_uri() . '/js/menu.js', array(),'1', true);
    wp_enqueue_script('menu');

    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(),'1', true);
    wp_enqueue_script('carousel');

    wp_register_script('typed', get_template_directory_uri() . '/js/typed.min.js', array(),'1', true);
    wp_enqueue_script('typed');

}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 );

function podklyucheniye_stiley(){


wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(),'1', 'all' );
wp_enqueue_style( 'animate' );

wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(),'1', 'all' );
wp_enqueue_style( 'bootstrap' );

wp_register_style( 'jquery', get_template_directory_uri() . '/css/jquery.fancybox.css', array(),'1', 'all' );
wp_enqueue_style( 'jquery' );

wp_register_style( 'menu', get_template_directory_uri() . '/css/menu.css', array(),'1', 'all' );
wp_enqueue_style( 'menu' );

wp_register_style( 'carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(),'1', 'all' );
wp_enqueue_style( 'carousel' );

wp_register_style( 'theme', get_template_directory_uri() . '/css/owl.theme.default.css', array(),'1', 'all' );
wp_enqueue_style( 'theme' );

wp_register_style( 'font-awesome', get_template_directory_uri() . 'css/fonts/font-awesome/css/font-awesome.css', array(),'1', 'all' );
wp_enqueue_style( 'font-awesome' );

wp_register_style( 'ionicon', get_template_directory_uri() . 'css/fonts/ionicons/css/ionicon.css', array(),'1', 'all' );
wp_enqueue_style( 'ionicon' );

wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(),'1', 'all' );
wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'podklyucheniye_stiley' );

add_theme_support('menus');

add_image_size ('slider-thumb', 180, 180, true);
add_image_size ('single-post-thumb', 275, 75, false);
add_image_size ('archive-thumb', 300, 150, true);
add_image_size ('special-thumb', 279, 133, true);

function sgr_filter_image_sizes( $sizes) {
unset( $sizes['thumbnail']);
unset( $sizes['medium']);
unset( $sizes['large']);
return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');
