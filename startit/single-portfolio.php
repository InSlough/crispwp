
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

                                        <h4 class="post_cat">Category : <a href="<?the_category()?>"><?php the_title(); ?></a></h4>
                                        <h2 class="post_title"> <?php the_title(); ?></h2>
                                    </div>
                                    <div class="post_img">
                                        <img src="images/blog/blog-1.jpg" alt="img">
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

                            <div class="inner_posts">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="inner-post prev_post">
                                    <img src="images/blog/blog-2.jpg" alt="img">
                                <div class="post_block">
                                    <? echo previous_post_link('%link','Previous Post','','');?>
                                    <h4><a href="<?php previous_post_link('%link',''); ?>">Lorem Ipsum is simply...</a></h4>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="inner-post next_post">
                                    <img src="images/blog/blog-3.jpg" alt="img">
                                    <div class="post_block">
                                    <? echo next_post_link('%link','Next Post','','');?>
                                    <h4><a href="<?php echo get_next_posts_link(''); ?>">Lorem Ipsum dumm text...</a></h4>
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

                            <div id="search-2" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="sidebar_search_form">
                                        <input type="text" name="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="form-control form-control-submit"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div id="recent-posts-2" class="widget widget_recent_posts">
                                <h4 class="widget_title"><span>Recent Posts</span></h4>
                                <div class="sidebar_recent_posts">
                                    <ul class="recent_posts_list">
                                        <li>
                                            <img src="images/blog/post-thumb-1.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog-single.html#">Get the best quote for your service</a></h6>
                                                <p class="date">08 June, 2018</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/blog/post-thumb-2.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog-single.html#">Get the best quote for your service</a></h6>
                                                <p class="date">15 May, 2018</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/blog/post-thumb-3.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog-single.html#">Get the best quote for your service</a></h6>
                                                <p class="date">12 April, 2018</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="archives-1" class="widget widget_archive">
                                <h4 class="widget_title"><span>Archives List</span></h4>
                                <div class="sidebar_archive">
                                    <ul class="archive_list">
                                        <li><a href="blog-single.html#">December 2017</a></li>
                                        <li><a href="blog-single.html#">January 2018</a></li>
                                        <li><a href="blog-single.html#">March 2018</a></li>
                                        <li><a href="blog-single.html#">June 2018</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div id="categories-2" class="widget widget_categories">
                                <h4 class="widget_title"><span>Categories</span></h4>
                                <div class="sidebar_categories">
                                    <ul class="category_list">
                                        <li><a href="blog-single.html#">Marketing <span>(5)</span></a></li>
                                        <li><a href="blog-single.html#">Consultancy <span>(5)</span></a></li>
                                        <li><a href="blog-single.html#">Finance <span>(5)</span></a></li>
                                        <li><a href="blog-single.html#">Agency <span>(5)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>



            <?php get_template_part('parts/content/contact');?>


        <?php get_footer(); ?>
