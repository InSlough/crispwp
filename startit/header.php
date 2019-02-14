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
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <title><?php the_title(); ?></title>
        <?php endwhile; ?>
                                <?php endif; ?>

        <!-- Favicon and Touch Icons -->
        <link href="wp-content/themes/startit/images/favicon.png" rel="shortcut icon" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/v4-shims.css">
        <!-- Lead Style -->


        <?php wp_head();?>

    </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>


        <? if(is_front_page()){ ?>
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
       <? }
        else { ?>

        <header id="header" class="inner-header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <a href="index.html"><img src="<? echo get_template_directory_uri().'/images/logo2.png' ?>" alt="logo"></a>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <ul class="main-menu">
                                <li class="menu-item"><a class="active" href="index.html#slider">Home</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#about">About Us</a></li>
                                <li class="menu-item"><a href="index.html#works">Portfolio</a></li>
                                <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.html#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


    <?}?>
	<div id="content" class="site-content">
