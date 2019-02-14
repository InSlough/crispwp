    <!-- ====== START EXPERIENCES ======  -->
    <section class="sections experiences">
      <div class="container">
        <div class="row">


          <!-- START EXPERIENCES LEFT SIDE -->
          <div class="col-md-5 exp-lf">
            <h3>Building <span>flexible</span>, design-driven <span>websites</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ipsam ullam incidunt itaque nemo omnis temporibus totam quibusdam repellat vero, recusandae excepturi dignissimos velit et alias amet, quia facilis perferendis,consectetur adipisicing elit. Aliquam ipsam ullam incidunt itaque nemo omnis.</p>
          </div>
          <!-- END EXPERIENCES LEFT SIDE -->


          <!-- START SKILLS -->
                  <div class="skills col-md-7">

            <ul>
                <?php
                   if(have_rows('experiences-progress') ):
                   while( have_rows('experiences-progress') ): the_row();  ?>
                    <li>
                          <span><?php echo the_sub_field('progress-text') ?></span>
                      <div class="progress">
                        <div class="progress-bar" data-percent="<?php echo the_sub_field('progress-persent') ?>" style="width: <?php echo the_sub_field('progress-persent') ?>%;">
                          <span><?php echo the_sub_field('progress-persent') ?>%</span>
                       </div>
                     </div>
                    </li>
                   <?php endwhile;
                   endif;
                ?>
            </ul>

                  </div>
                  <!-- END SKILLS -->

        </div>
      </div>
    </section>
    <!-- ====== END EXPERIENCES ======  -->