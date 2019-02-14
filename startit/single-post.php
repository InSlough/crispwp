
        <?php get_header(); ?>
        <!-- Start Header -->


        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">
                            <div class="blog-list">
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                 <article class="blog_post post-box">
                                    <div class="post_header">

                                        <h4 class="post_cat">Category : <a href="<?$category = get_the_category();
echo $category[0]->cat_name;?>"><? echo $category[0]->cat_name;?></a></h4>
                                        <h2 class="post_title"> <?php the_title(); ?></h2>
                                    </div>
                                    <div class="post_img">
                                        <? the_post_thumbnail(  ); ?>
                                    </div>
                                    <div class="post_content">
                                        <div class="full_content">
                                            <?php the_content(); ?>

                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog-single.html#"><?php the_author(); ?></a></span></li>
                                                <li><span class="date"><a href="blog-single.html#"><?php echo get_the_date(); ?></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                 <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php

                                $prev_post = get_previous_post();
                                $next_post = get_next_post();

                                ?>
                            <div class="inner_posts">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="inner-post prev_post">
                                    <?php echo get_the_post_thumbnail($prev_post->ID, array(100,100) );?>
                                <div class="post_block">
                                    <h4><a class="link_to" href="<?php echo get_permalink( $prev_post->ID ); ?>">
                                                <?php _e( 'Previous post', '' ); ?>
                                    </a></h4>
                                    <a  href="<?php echo get_permalink( $prev_post->ID ); ?>">
                                        <?php echo get_the_title( $prev_post->ID ); ?>
                                    </a>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="inner-post next_post">
                                    <?php echo get_the_post_thumbnail($next_post->ID, array(100,100) );?>
                                    <div class="post_block">
                                    <h4><a class="link_to" href="<?php echo get_permalink( $next_post->ID ); ?>">
                                                <?php _e( 'Next post', '' ); ?>
                                    </a></h4>
                                    <a  href="<?php echo get_permalink( $next_post->ID ); ?>">
                                        <?php echo get_the_title( $next_post->ID ); ?>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4 sidebar">

                                <?php
                                if ( function_exists('dynamic_sidebar') )
                                    dynamic_sidebar('my_sidebar');
                                ?>

                        </div>
                    </div>
                </div>
            </section>



            <?php get_template_part('parts/content/contact');?>


        <?php get_footer(); ?>
