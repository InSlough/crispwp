    <!-- ====== START ABOUT ======  -->
    <section class="sections about" id="about" data-scroll-index="2">
            <?php

$images = get_field('header_background');
$array = array();

if( $images ): ?>
<ul>
  <?php foreach( $images as $image ):
    $array[] = $image[ID];
  endforeach;

  $rand = rand(0, count($array));
  $ID = $array[$rand];

  echo wp_get_attachment_image( $ID, 'medium' );
  ?>
</ul>
<?php endif; ?>
      <div class="container">
        <div class="row">


          <!-- START ABOUT PICTURE -->
          <div class="col-lg-4 col-md-5 ab-pic">

            <img src="<?php the_field( "about-picture" ); ?>" style="width: 100%;" alt="About picture" />

          </div>
          <!-- END ABOUT PICTURE -->


          <!-- START ABOUT CONTENT -->
          <div class="col-lg-8 col-md-7 ab-cont">

            <h3><?php the_field( "about-tittle" ); ?></h3>
            <p><?php the_field( "about-text" ); ?> </p>
            <div class="features">
               <?php
                 if(have_rows('about-advantage') ):
                 while( have_rows('about-advantage') ): the_row();  ?>

                  <p>
                    <span class="icon <?php echo the_sub_field('advantage-icon') ?>"></span>
                    <?php echo the_sub_field('advantage-text') ?>
                  </p>
                          <?php endwhile;
                   endif;
                ?>

            </div>

          </div>
          <!-- END ABOUT CONTENT -->


        </div>
      </div>
    </section>
    <!-- ====== END ABOUT ======  -->