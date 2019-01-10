	<section id="slider" class="slider_1" style="background-image:url(wp-content/themes/startit/images/slider/slider-bg1.jpg)">
            <div class="slider">
                <div class="container">
                    <div class="slide-content">
                        <h6 class="sub_heading"><?php the_field( "slider-h" ); ?></h6>
                        <div class="typing_content">
                            <h2 class="heading">
                                <?php the_field( "slider-t" ); ?> <span class="typed-element"><?php the_field( "slider-span" ); ?></span>
                            </h2>
                            <div class="typed-strings">
                        <?php
                        if(get_field('slider-text')):
                        while (the_repeater_field('slider-text')) { ?>
                                <p><?php the_sub_field('typed-strings'); ?></p>
                                <?php }
                         endif;
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll_btn"><a href="index.html#about"><i class="fa fa-angle-down"></i></a></div>
                <div class="section-shape">
                    <img src="wp-content/themes/startit/images/shape1.png" alt="shape image">
                </div>
            </div>
        </section>