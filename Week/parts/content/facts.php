    <!-- ====== START FACTS ======  -->
    <section class="sections facts">
      <div class="container">
        <div class="row">


          <!-- START FACTS TITLE -->
          <div class="facts-title col-md-8">
            <h3><?php the_field( "facts-tittle" ); ?></h3>
            <p><?php the_field( "facts-text" ); ?></p>
          </div>
          <!-- END FACTS TITLE -->


          <!-- START FACTS CONTENT -->
          <div class="facts-c col-md-12">

            <!-- FUN FACTS ITEM -->
            <?php
                 if(have_rows('facts') ):
                 while( have_rows('facts') ): the_row();  ?>
                  <div class="fact-item col-md-3">
                  <div class="counting-icon">
                            </div>
                            <!-- NUMBER -->
                            <span class="count" data-from="0" data-to="<?php echo the_sub_field('facts-number') ?>">0</span>
                            <!-- TITLE -->
                            <h4><?php echo the_sub_field('facts-description') ?></h4>
                </div>
                          <?php endwhile;
                   endif;
              ?>

          </div>
          <!-- END FACTS CONTENT -->


        </div>
      </div>
    </section>
    <!-- ====== END FACTS ======  -->