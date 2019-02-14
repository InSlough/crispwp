 <?php get_header(); ?>

        <div class="main-wrapper">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <section class="inner-page">
                <div class="container">
                    <div class="singlepage-details-content">
                        <div class="portfolio-details-img">
                            <? the_post_thumbnail(); ?>
                        </div>
                        <div class="portfolio-details">
                            <div class="full_content">
                                <h6><?php the_title(); ?></h6>
                                <h2 class="project_title">Mobile Interface for shoe.corp</h2>
                                <p>Ut enim ad minima veniam, quis nostrum exercitationem corporate loorem commosequatur? Quis aut em vel eum iure veniam, quis nostruction dolorsequatur? Quis autem vel eum Quis autem vel eum iure veniam lorem quis nostru iure.Ut enim ad minima veniam, quis nostrum exercitationem corporate loo rem commosequatur? Quis aut em vel eum iure veniam, quis nostruction dolorsequatur? Quis autemvel eum Quis autem vel eum iure veniam lorem quis nostru iure.</p>

                                <p>Ut enim ad minima veniam, quis nostrum exercitationem corporate loorem commosequatur? Quis aut em vel eum iure veniam, quis nostruction dolorsequatur? Quis autem vel eum Quis autem vel eum iure veniam lorem quis nostru iure.</p>
                            </div>
                            <div class="portfolio-content-img">
                                <img src="images/portfolio/inner-img.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

             <?php endwhile; ?>
            <?php endif; ?>

            <section class="video-banner">
                <div class="container">
                    <div class="video-content">Video presentation <span class="video_btn"><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><i class="ion-ios-play"></i></a></span> About the project</div>
                </div>
            </section>

            <section class="project_desc">
                <div class="container">
                    <div class="section-title">
                        <h2>Project Description</h2>
                        <p>Lorem ipsum dolor sit, consectet ipsum dolor sit</p>
                    </div>
                    <div class="project_desc_inner">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="desc_txt">
                                    <p>Ut enim ad mini ma veniam, quis nostrum exercitati onem cop in orate loorem commosequatur? Quis aut em vel eum iuredilor veniam, quis nostruction dolorsequatur? Quis autem vel eumyi Quis autem vel eum iure veniam lorem quis nostru iure.Ut enim ad minima veniam</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="desc_txt">
                                    <p>Ut enim ad mini ma veniam, quis nostrum exercitati onem cop in orate loorem commosequatur? Quis aut em vel eum iuredilor veniam, quis nostruction dolorsequatur? Quis autem vel eumyi Quis autem vel eum iure veniam lorem quis nostru iure.Ut enim ad minima veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project_desc_bottom">
                    <div class="container">
                        <div class="project_info_grid">
                            <div class="info_grid">
                                <h5>Client</h5>
                                <p>Adevertising corp.</p>
                            </div>
                            <div class="info_grid">
                                <h5>Product</h5>
                                <p>Mobile Handset</p>
                            </div>
                            <div class="info_grid">
                                <h5>Destination</h5>
                                <p>Singapore</p>
                            </div>
                            <div class="info_grid">
                                <h5>Date</h5>
                                <p>05 January 2018</p>
                            </div>
                            <div class="info_grid">
                                <h5>Cost</h5>
                                <p>$3000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonials" class="testimonials testimonials1">
                <div class="container">
                    <?php

                            $posts = get_posts(array(
                                'posts_per_page'    => -1,
                                'post_type'         => 'testmonial'
                            ));

                            if( $posts ): ?>

                                <ul>

                                <?php foreach( $posts as $post ):

                                    setup_postdata( $post );

                                    ?>
                    <div class="owl-carousel owl-theme testimonial_carousel">


                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="<?php the_field( "testi-img" ); ?>" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>

                                        <?php
                                             while( have_rows('testi-star') ): the_row();  ?>

                                              <li><i class="ion-ios-<?php the_sub_field( "ios-star" ); ?>"></i></li>
                                                      <?php endwhile;

                                            ?>
                                    </ul>
                                    <p><?php the_field( "testimonial-feed" ); ?></p>
                                    <h4><?php the_field( "testimonial-name" ); ?></h4>
                                    <h6><?php the_field( "testimonial-position" ); ?></h6>
                                </div>
                            </div>
                        </div>

                                <?php endforeach; ?>

                                </ul>

                                <?php wp_reset_postdata(); ?>

                            <?php endif; ?>

                    </div>
                </div>
            </section>


        <?php get_template_part('parts/content/contact');?>


        <?php get_footer(); ?>
