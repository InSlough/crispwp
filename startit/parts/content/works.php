<section id="works" class="works">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field( "portfolio-h" ); ?></h2>
                        <p><?php the_field( "portfolio-t" ); ?></p>
                    </div>

                    <ul id="filters" class="clearfix text-center">

                        <li><span class="filter active" data-filter="<?php the_field( "portfolio-actc" ); ?>"><?php the_field( "portfolio-act" ); ?></span></li>

                         <?php
                        if(get_field('portfolio-c')):
                        while (the_repeater_field('portfolio-c')) { ?>

                        <li><span class="filter" data-filter=".<?php the_sub_field( "portfolio-cc" ); ?>"><?php the_sub_field( "portfolio-ct" ); ?></span></li>

                        <?php }
                         endif;
                        ?>
                    </ul>

                    <div id="portfoliolist">
                        <div class="row">

                            <?php
                        if(get_field('portfolio-img')):
                        while (the_repeater_field('portfolio-img')) { ?>

                            <div class="col-md-4 col-lg-3 portfolio <?php the_sub_field( "works-c" ); ?>">
                                <div class="portfolio-wrapper">
                                    <div class="works-img">
                                        <a href="<?php the_sub_field( "works-l" ); ?>" data-fancybox="images">
                                            <img src="<?php the_sub_field( "works-img" ); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                            <h4><?php the_sub_field( "works-t" ); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                           <?php }
                         endif;
                        ?>


                        </div>
                    </div>
                </div>
            </section>