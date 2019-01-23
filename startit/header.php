<!doctype html>
<html <?php language_attributes(); ?>>
 <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title>Carrby - Agency Template</title>

        <!-- Favicon and Touch Icons -->
        <link href="wp-content/themes/startit/images/favicon.png" rel="shortcut icon" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Lead Style -->


        <?php wp_head();?>

    </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>



		<header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo get_field('logo', 'option'); ?>" alt="logo"></a>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <?php

wp_nav_menu( array(
    'theme_location'  => '',
    'menu'            => '2',
    'container'       => 'div',
    'container_class' => 'nav-menu1',
    'container_id'    => '',
    'menu_class'      => 'main-menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="%2$s"><li>%3$s</li></ul>',
    'depth'           => 0,
    'walker'          => '',
) );

// wp_nav_menu( array('menu' =>'2', 'container_class' => 'nav-menu1', 'menu_class' =>  'main-menu', 'theme_location' => 'primary' ));
add_filter( 'main-menu', 'change_menu_item_css_classes', 10, 4 );

?>
                            <!-- <ul class="main-menu">
                                <li class="menu-item"><a class="active" href="index.html#slider">Home</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#about">About Us</a></li>
                                <li class="menu-item"><a href="index.html#works">Portfolio</a></li>
                                <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.html#contact">Contact</a></li>
                            </ul> -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>

	<div id="content" class="site-content">
