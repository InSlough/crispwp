<section id="blog" class="blog">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field( "blog-h" ); ?></h2>
                        <p><?php the_field( "blog-t" ); ?></p>
                    </div>
                    <div class="row">

                         <?php
                            $args = array( 'posts_per_page' => 3, 'order' => 'ASC' );
                            $lastposts = get_posts( $args );

                            foreach( $lastposts as $key=>$post ){
                                setup_postdata($post); // устанавливаем данные
                                ?>


                        <div class="col-md-6 col-lg-4">
                            <div class="blog_post">
                                <div class="post_img">
                                    <a href="<?php the_sub_field( "blog-imgl" ); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_header">
                                        <h2 class="post_title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="read_more"><a href="<?php echo get_permalink(); ?>"><?php the_content(); ?></a></div>
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
            </section>