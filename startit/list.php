<?php
/*
    Template Name: Blog
*/
?>
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
                                                <h4 class="post_cat">Category : <a href="<?$category = get_the_category();
echo $category[0]->cat_name;?>"><? echo $category[0]->cat_name;?></a></h4>
                                                <h2 class="post_title"><a href="blog.html#"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="">
                                                <? the_post_thumbnail('list'); ?>
                                            </div>
                                            <div class="post_content">
                                                <div class="post_intro">
                                                    <p><?the_excerpt_rss()?></p>
                                                </div>

                                                <div class="post_footer">
                                                    <ul class="post_meta">
                                                        <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#"><?php the_author(); ?></a></span></li>
                                                        <li><span class="date"><a href="blog.html#"><?the_date()?></a></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>

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

    </article></div></div>
<div class="col-md-5 col-lg-4 sidebar">

                                <?php
                                if ( function_exists('dynamic_sidebar') )
                                    dynamic_sidebar('my_sidebar');
                                ?>
                        </div>
<?php get_footer(); ?>