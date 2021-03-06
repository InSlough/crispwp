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

wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/fonts/font-awesome/css/font-awesome.css', array(),'1', 'all' );
wp_enqueue_style( 'font-awesome' );

wp_register_style( 'ionicon', get_template_directory_uri() . '/css/fonts/ionicons/css/ionicon.css', array(),'1', 'all' );
wp_enqueue_style( 'ionicon' );

wp_register_style( 'ionicon-font', get_template_directory_uri() . '/css/fonts/ionicons/fonts/ionicons.woff_v=4.3.0', array(),'1', 'all' );
wp_enqueue_style( 'ionicon-font' );

wp_register_style( 'ionicon-font2', get_template_directory_uri() . '/css/fonts/ionicons/fonts/ionicons.woff2_v=4.3.0', array(),'1', 'all' );
wp_enqueue_style( 'ionicon-font2' );

wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(),'1', 'all' );
wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'podklyucheniye_stiley' );

add_theme_support('menus');

add_image_size ('slider-thumb', 180, 180, true);
add_image_size ('single-post-thumb', 275, 75, false);
add_image_size ('archive-thumb', 300, 150, true);
add_image_size ('special-thumb', 279, 133, true);
add_image_size ('list', 750, 550, true);

function sgr_filter_image_sizes( $sizes) {
unset( $sizes['thumbnail']);
unset( $sizes['medium']);
unset( $sizes['large']);
return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука

function true_register_post_type_init() {
$labels = array(
'name' => 'Services',
'singular_name' => 'Services', // админ панель Добавить->Функцию
'add_new' => 'Add Services',
'add_new_item' => 'Addd new Services', // заголовок тега <title>
'edit_item' => 'Edit Services',
'new_item' => 'New Services',
'all_items' => 'All Services',
'view_item' => 'View services in site',
'search_items' => 'Search Services',
'not_found' => 'Services not found',
'not_found_in_trash' => 'In trash not services',
'menu_name' => 'Services' // ссылка в меню в админке
);
$args = array(
'labels' => $labels,
'public' => true,
'show_ui' => true, // показывать интерфейс в админке
'has_archive' => true,
'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
// 'menu_position' => 20, // порядок в меню
'supports' => array( 'title', 'editor', 'author')
);
register_post_type('services', $args);
}

add_action( 'init', 'true_register_post_type_init2' );

function true_register_post_type_init2() {
$labels = array(
'name' => 'Portfolio',
'singular_name' => 'Portfolio', // админ панель Добавить->Функцию
'add_new' => 'Add Portfolio',
'add_new_item' => 'Addd new Portfolio', // заголовок тега <title>
'edit_item' => 'Edit Portfolio',
'new_item' => 'New Portfolio',
'all_items' => 'All Portfolio',
'view_item' => 'View portfolio in site',
'search_items' => 'Search Portfolio',
'not_found' => 'Portfolio not found',
'not_found_in_trash' => 'In trash not portfolio',
'menu_name' => 'Portfolio' // ссылка в меню в админке
);
$args = array(
'labels' => $labels,
'public' => true,
'show_ui' => true, // показывать интерфейс в админке
'has_archive' => true,
'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
// 'menu_position' => 20, // порядок в меню
'supports' => array( 'title', 'editor', 'author', 'thumbnail')
);
register_post_type('portfolio', $args);
}

add_action( 'init', 'true_register_post_type_init3' );

function true_register_post_type_init3() {
$labels = array(
'name' => 'Testmonial',
'singular_name' => 'Testmonial', // админ панель Добавить->Функцию
'add_new' => 'Add Testmonial',
'add_new_item' => 'Addd new Testmonial', // заголовок тега <title>
'edit_item' => 'Edit Testmonial',
'new_item' => 'New Testmonial',
'all_items' => 'All Testmonial',
'view_item' => 'View Testmonial in site',
'search_items' => 'Search Testmonial',
'not_found' => 'Testmonial not found',
'not_found_in_trash' => 'In trash not Testmonial',
'menu_name' => 'Testmonial' // ссылка в меню в админке
);
$args = array(
'labels' => $labels,
'public' => true,
'show_ui' => true, // показывать интерфейс в админке
'has_archive' => true,
'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
// 'menu_position' => 20, // порядок в меню
'supports' => array( 'title', 'editor', 'author', 'thumbnail')
);
register_post_type('testmonial', $args);
}

add_action( 'init', 'create_book_testmonial' );

// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_testmonial(){

  // Добавляем древовидную таксономию 'genre' (как категории)
  register_taxonomy('testmonial_category', array('testmonial'), array(
    'hierarchical'  => true,
    'labels'        => array(
      'name'              => _x( 'Testmonial Categorys', 'taxonomy general name' ),
      'singular_name'     => _x( 'Testmonial Category', 'taxonomy singular name' ),
      'search_items'      =>  __( 'Search Testmonial Category' ),
      'all_items'         => __( 'All Testmonial Category' ),
      'parent_item'       => __( 'Parent Testmonial Category' ),
      'parent_item_colon' => __( 'Parent Testmonial Category:' ),
      'edit_item'         => __( 'Edit Testmonial Category' ),
      'update_item'       => __( 'Update Testmonial Category' ),
      'add_new_item'      => __( 'Add New Testmonial Category' ),
      'new_item_name'     => __( 'New Testmonial Category Name' ),
      'menu_name'         => __( 'Testmonial Category' ),
    ),
    'show_ui'       => true,
    'query_var'     => true,
    //'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
  ));

}

function ea_acf_options_page() {
if ( function_exists( 'acf_add_options_page' ) ) {
acf_add_options_page( array(
'title'      => 'Site Options',
'capability' => 'manage_options',
) );
}
}

 if( function_exists('acf_add_options_page') ) { acf_add_options_page(); }


function register_my_widgets(){
  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'my_sidebar',
    'class'         => '<div class="widget %2$s">',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget_title"><span>',
    'after_title'   => '</span></h4><div class=" %2$s">',
  ) );
}
add_action( 'widgets_init', 'register_my_widgets' );

function my_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" class="sidebar_search_form" action="' . home_url( '/' ) . '" >
  <label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
  <input type="text" value="' . get_search_query() . '" name="search" id="s" class="form-control" placeholder="Search" />
  <button type="submit" class="form-control form-control-submit" value="'. esc_attr__( 'Search' ) .'"><i class="ion-ios-search"></i></button>
  </form>';

  return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

