            <section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field( "services-h2" ); ?></h2>
                        <p><?php the_field( "services-text" ); ?></p>
                    </div>
                    <div class="row">

                        <?php
                            $args = array( 'posts_per_page' => 3, 'post_type' => 'services', 'order' => 'ASC' );
                            $lastposts = get_posts( $args );
                            $number = array('01','02','03');

                            foreach( $lastposts as $key=>$post ){
                                setup_postdata($post); // устанавливаем данные
                                ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="servicebox">
                                <div class="srv_desc">
                                    <h5 class="count"><?php echo wp_sprintf( '%l', $number[$key]); ?></h5>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>

                                <?php
                            }
                            wp_reset_postdata(); // сброс
                            ?>
                    </div>
                </div>
            </section>