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
                            $args = array( 'posts_per_page' => 8, 'post_type' => 'portfolio', 'order' => 'ASC' );
                            $lastposts = get_posts( $args );

                            foreach( $lastposts as $key=>$post ){
                                setup_postdata($post); // устанавливаем данные
                                ?>

                            <div class="col-md-4 col-lg-3 portfolio <?php $cur_terms = get_the_terms( $post->ID, 'portfolio category');
                            if( is_array( $cur_terms ) ){
    foreach( $cur_terms as $cur_term ){
        echo $cur_term->name.' ';
    }
} ?>">
                                <div class="portfolio-wrapper">
                                    <div class="works-img">
                                        <a href="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" data-fancybox="images">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                            <h4><?php the_title(); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <?php
                            }
                            wp_reset_postdata(); // сброс
                            ?>


                        </div>
                    </div>
                </div>
            </section>