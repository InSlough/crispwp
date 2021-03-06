<?php

function wpb_adding_scripts() {

    wp_register_script('custom', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(),'1', true);
    wp_enqueue_script('custom');

    wp_register_script('countTo', get_template_directory_uri() . '/js/jquery.countTo.js', array(),'1', true);
    wp_enqueue_script('countTo');

    wp_register_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(),'1', true);
    wp_enqueue_script('magnific-popup');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'1', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('gmaps', get_template_directory_uri() . '/js/gmaps.min.js', array(),'1', true);
    wp_enqueue_script('gmaps');

    wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(),'1', true);
    wp_enqueue_script('isotope');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(),'1', true);
    wp_enqueue_script('main');

    wp_register_script('map', get_template_directory_uri() . '/js/map.js', array(),'1', true);
    wp_enqueue_script('map');

    wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(),'1', true);
    wp_enqueue_script('masonry');

    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(),'1', true);
    wp_enqueue_script('carousel');

    wp_register_script('parsley', get_template_directory_uri() . '/js/parsley.js', array(),'1', true);
    wp_enqueue_script('parsley');

    wp_register_script('scrollIt', get_template_directory_uri() . '/js/scrollIt.min.js', array(),'1', true);
    wp_enqueue_script('scrollIt');

}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 );

function podklyucheniye_stiley(){

    wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(),'1', 'all' );
    wp_enqueue_style( 'responsive' );

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(),'1', 'all' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'line', get_template_directory_uri() . '/css/et-line-font/et-line-font.css', array(),'1', 'all' );
    wp_enqueue_style( 'line' );

    wp_register_style( 'awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css', array(),'1', 'all' );
    wp_enqueue_style( 'awesome' );

    wp_register_style( 'popup', get_template_directory_uri() . '/css/magnific-popup/magnific-popup.css', array(),'1', 'all' );
    wp_enqueue_style( 'popup' );

    wp_register_style( 'carouselm', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.min.css', array(),'1', 'all' );
    wp_enqueue_style( 'carouselm' );

    wp_register_style( 'carouseld', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.min.css', array(),'1', 'all' );
    wp_enqueue_style( 'carouseld' );

    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(),'1', 'all' );
    wp_enqueue_style( 'style' );

    wp_register_style( 'g-red', get_template_directory_uri() . '/css/colors/g-red.css', array(),'1', 'all' );
    wp_enqueue_style( 'g-red' );


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

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'true_register_post_type_init' );

function true_register_post_type_init() {
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

add_action( 'init', 'create_book_taxonomies' );

// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies(){

  // Добавляем древовидную таксономию 'genre' (как категории)
  register_taxonomy('portfolio category', array('portfolio'), array(
    'hierarchical'  => true,
    'labels'        => array(
      'name'              => _x( 'Portfolio Categorys', 'taxonomy general name' ),
      'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
      'search_items'      =>  __( 'Search Portfolio Category' ),
      'all_items'         => __( 'All Portfolio Category' ),
      'parent_item'       => __( 'Parent Portfolio Category' ),
      'parent_item_colon' => __( 'Parent Portfolio Category:' ),
      'edit_item'         => __( 'Edit Portfolio Category' ),
      'update_item'       => __( 'Update Portfolio Category' ),
      'add_new_item'      => __( 'Add New Portfolio Category' ),
      'new_item_name'     => __( 'New Portfolio Category Name' ),
      'menu_name'         => __( 'Portfolio Category' ),
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

 add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
  register_sidebar( array(
    'name'          => sprintf(__('Sidebar %d'), $i ),
    'id'            => "sidebar-$i",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => "</li>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => "</h2>\n",
  ) );
}