            <section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field( "services-h2" ); ?></h2>
                        <p><?php the_field( "services-text" ); ?></p>
                    </div>
                    <div class="row">
                        <?php
                        if(get_field('services-p')):
                        while (the_repeater_field('services-p')) { ?>
                            <div class="col-lg-4 col-md-6">
                            <div class="servicebox">
                                <div class="srv_desc">
                                    <h5 class="count"><?php the_sub_field('services-n'); ?></h5>
                                    <h4><a href="<?php the_sub_field('services-l'); ?>"><?php the_sub_field('services-h'); ?></a></h4>
                                    <p><?php the_sub_field('services-d'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php }
                    endif;
                        ?>
                    </div>
                </div>
            </section>