<!DOCTYPE html>
<html lang="en">
    <head>

         <?php wp_head();?>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/v4-shims.css">

    </head>
    <body>


        <!-- ====== Preloader ======  -->
        <div class="loading">
            <div class="load-circle">
            </div>
        </div>
        <!-- ======End Preloader ======  -->

        <!-- ====== HEADER START ======  -->
        <section class="s-header" id="home" data-scroll-index="0">
            <div class="header-overlay">


                <!-- ====== NAVGITION ======  -->
                <nav class="navbar land-nav">
                    <div class="container">
                        <div class="row">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <!-- logo -->
                                <a class="logo navbar-brand" href="index.html#home" data-scroll-nav="0">

                                    <!-- WHITE LOGO -->
                                    <img class="white-logo" width="200" src="<?php the_field( "logo" ); ?>" alt="logo" />

                                    <!-- DARK LOGO -->
                                    <img class="dark-logo" width="200" src="<?php the_field( "black-logo" ); ?>" alt="logo" />

                                </a>
                            </div>

                            <!-- Collect the nav links, and other content for toggling -->
                            <!-- <div class="collapse navbar-collapse" id="collapse">
 -->
                                <!-- links -->
                                <!-- <ul class="nav navbar-nav navbar-right" id="navbar"> -->
                                     <?php

                                wp_nav_menu( array(
                                    'theme_location'  => '',
                                    'menu'            => '2',
                                    'container'       => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id'    => 'collapse',
                                    'menu_class'      => 'nav navbar-nav navbar-right',
                                    'menu_id'         => 'navbar',
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
                                    <!-- <li><a href="index.html#home" data-scroll-nav="0" class="active">Home</a></li>
                                    <li><a href="index.html#services" data-scroll-nav="1">Services</a></li>
                                    <li><a href="index.html#about" data-scroll-nav="2">About</a></li>
                                    <li><a href="index.html#work" data-scroll-nav="3">Work</a></li>
                                    <li><a href="index.html#price" data-scroll-nav="4">Price</a></li>
                                    <li><a href="index.html#contact" data-scroll-nav="5">Contact</a></li> -->
                                <!-- </ul> -->
                            <!-- </div> --><!-- /.navbar-collapse -->
                        </div>
                    </div><!-- /.container -->
                </nav>
                <!-- ====== END NAVGITION ======  -->


                <!-- ====== START HEADER CONTENT ======  -->
                <div class="middle-c text-center">
                    <div class="container">
                        <div class="row">
                            <div class="capt col-md-8 col-sm-11">

                                <h1><?php the_field( "slider-text" ); ?></h1>

                                <a href="index.html#about" data-scroll-nav="2" class="cta-btn">
                                    <?php the_field( "slider-button" ); ?>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ====== END HEADER CONTENT ======  -->


                <div class="header-shap">
                    <img src="<?php the_field( "sbi" ); ?>" alt="Shape">
                </div>


            </div>
        </section>
        <!-- ====== END HEADER ======  -->