<section id="blog" class="blog">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field( "blog-h" ); ?></h2>
                        <p><?php the_field( "blog-t" ); ?></p>
                    </div>
                    <div class="row">

                         <?php
                        if(get_field('blog-img')):
                        while (the_repeater_field('blog-img')) { ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="blog_post">
                                <div class="post_img">
                                    <a href="<?php the_sub_field( "blog-imgl" ); ?>"><img src="<?php the_sub_field( "blog-imeg" ); ?>" alt="img"></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_header">
                                        <h2 class="post_title"><a href="<?php the_sub_field( "blog-imgl" ); ?>"><?php the_sub_field( "blog-imgh" ); ?></a></h2>
                                        <div class="read_more"><a href="<?php the_sub_field( "blog-imgl" ); ?>"><?php the_sub_field( "blog-imgt" ); ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php }
                         endif;
                        ?>

                    </div>
                </div>
            </section>