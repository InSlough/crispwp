<?php get_header(); ?>


        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">
                            <div class="blog-list">

                                <?php // Display blog posts on any page @ http://m0n.co/l
                                    $temp = $wp_query; $wp_query= null;
                                    $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
                                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                                        <article class="blog_post">
                                            <div class="post_header">
                                                <h4 class="post_cat">Category : <a href="<?the_category()?>">Company</a></h4>
                                                <h2 class="post_title"><a href="blog.html#"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="post_img">
                                                <a href="blog.html#"><img src="images/blog/blog-1.jpg" alt="img"></a>
                                            </div>
                                            <div class="post_content">
                                                <div class="post_intro">
                                                    <p><?the_excerpt_rss()?></p>
                                                </div>

                                                <div class="post_footer">
                                                    <ul class="post_meta">
                                                        <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#">Williams Earls</a></span></li>
                                                        <li><span class="date"><a href="blog.html#"><?the_date()?></a></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>

                                    <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                                    <?php the_excerpt(); ?>

                                    <?php endwhile; ?>

                                    <?php if ($paged > 1) { ?>

                                    <nav id="nav-posts">
                                        <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                                        <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                                    </nav>

                                    <?php } else { ?>

                                    <nav id="nav-posts">
                                        <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                                    </nav>

                                    <?php } ?>

                                <?php wp_reset_postdata(); ?>

                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat">Category : <a href="blog.html#">Company</a></h4>
                                        <h2 class="post_title"><a href="blog.html#">Lorem ipsum is simply dummy text sed ut perspiomnis iste error sit</a></h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="blog.html#"><img src="images/blog/blog-1.jpg" alt="img"></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusadoloreLorem Ipsum is simply type setting Ipsum is simply dummy Sed ut perspiomnis iste error sit voluccusa dolordummy text of the printing and typesetting Loremsimply dummy text Sed ut perspiciatis ude voluptateLorem Ipsum is simply type fgdx Ipsum is simply dummy Sed ut persiomns iste error sit voluem accusa dolorduyiyext of the printing  unde voluptat accusa dolore....</p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#">Williams Earls</a></span></li>
                                                <li><span class="date"><a href="blog.html#">10 August, 2018</a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>

                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat">Category : <a href="blog.html#">Company</a></h4>
                                        <h2 class="post_title"><a href="blog.html#">Lorem ipsum is simply dummy text sed ut perspiomnis iste error sit</a></h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="blog.html#"><img src="images/blog/blog-2.jpg" alt="img"></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusadoloreLorem Ipsum is simply type setting Ipsum is simply dummy Sed ut perspiomnis iste error sit voluccusa dolordummy text of the printing and typesetting Loremsimply dummy text Sed ut perspiciatis ude voluptateLorem Ipsum is simply type fgdx Ipsum is simply dummy Sed ut persiomns iste error sit voluem accusa dolorduyiyext of the printing  unde voluptat accusa dolore....</p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#">Williams Earls</a></span></li>
                                                <li><span class="date"><a href="blog.html#">18 August, 2018</a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>

                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat">Category : <a href="blog.html#">Company</a></h4>
                                        <h2 class="post_title"><a href="blog.html#">Lorem ipsum is simply dummy text sed ut perspiomnis iste error sit</a></h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="blog.html#"><img src="images/blog/blog-3.jpg" alt="img"></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusadoloreLorem Ipsum is simply type setting Ipsum is simply dummy Sed ut perspiomnis iste error sit voluccusa dolordummy text of the printing and typesetting Loremsimply dummy text Sed ut perspiciatis ude voluptateLorem Ipsum is simply type fgdx Ipsum is simply dummy Sed ut persiomns iste error sit voluem accusa dolorduyiyext of the printing  unde voluptat accusa dolore....</p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#">Williams Earls</a></span></li>
                                                <li><span class="date"><a href="blog.html#">24 August, 2018</a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="pagination-div">
                                <ul class="pagination">
                                    <li><a class="page-numbers current" href="blog.html#">1</a></li>
                                    <li><a class="page-numbers" href="blog.html#">2</a></li>
                                    <li><a class="page-numbers" href="blog.html#">3</a></li>
                                    <li><a class="page-numbers" href="blog.html#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4 sidebar">

                            <div id="search-2" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="sidebar_search_form" action="http://wpthemebooster.com/demo/themeforest/html/carrby/search.php">
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
                                                <h6><a href="blog.html#">Get the best quote for your service</a></h6>
                                                <p class="date">08 June, 2018</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/blog/post-thumb-2.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog.html#">Get the best quote for your service</a></h6>
                                                <p class="date">15 May, 2018</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/blog/post-thumb-3.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog.html#">Get the best quote for your service</a></h6>
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
                                        <li><a href="blog.html#">December 2017</a></li>
                                        <li><a href="blog.html#">January 2018</a></li>
                                        <li><a href="blog.html#">March 2018</a></li>
                                        <li><a href="blog.html#">June 2018</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div id="categories-2" class="widget widget_categories">
                                <h4 class="widget_title"><span>Categories</span></h4>
                                <div class="sidebar_categories">
                                    <ul class="category_list">
                                        <li><a href="blog.html#">Marketing <span>(5)</span></a></li>
                                        <li><a href="blog.html#">Consultancy <span>(5)</span></a></li>
                                        <li><a href="blog.html#">Finance <span>(5)</span></a></li>
                                        <li><a href="blog.html#">Agency <span>(5)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

                        <?php get_template_part('parts/content/contact');?>


        <?php get_footer(); ?>