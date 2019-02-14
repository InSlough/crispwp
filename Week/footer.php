<!-- ====== START FOOTER ======  -->
        <section class="sections footer">
            <div class="container">
                <div class="row">


                    <!-- START FOOTER LOGO -->
                    <div class="ft-logo col-md-3 col-sm-4 col-xs-7">
                        <img src="<?php the_field( "footer-logo" ); ?>" width="80" alt="Footer Logo" />
                    </div>
                    <!-- END FOOTER LOGO -->


                    <!-- START SOCIAL ICONS -->
                    <div class="sc-icon">
                        <?php
                 if(have_rows('soc') ):
                 while( have_rows('soc') ): the_row();  ?>
                        <a href="<?php echo the_sub_field('soc-link') ?>">
                            <span>
                                <i class="fa fa-<?php echo the_sub_field('soc-icon') ?>" aria-hidden="true"></i>
                            </span>
                        </a>
                          <?php endwhile;
                   endif;
                ?>

                    </div>
                    <!-- END SOCIAL ICONS -->


                    <!-- START RIGHTS -->
                    <div class="sub-footer">
                        <h5>CopyRight © By Joker-Themes 2018 | All Rights Reserved.</h5>
                    </div>


                </div>
            </div>
        </section>
        <!-- ====== END FOOTER ======  -->



    </body>
</html>

<?php wp_footer(); ?>

