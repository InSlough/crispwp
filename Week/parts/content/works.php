    <!-- ====== START WORK ======  -->
    <section class="sections text-center work" id="work" data-scroll-index="3">
      <div class="container">
        <div class="row">


          <!-- START WORK TITLE -->
          <div class="col-md-9 wo-title">
            <h2><?php the_field( "Portfolio-tittle" ); ?></h2>
            <p><?php the_field( "Portfolio-text" ); ?></p>
          </div>
          <!-- END WORK TITLE -->


          <!-- WORK FILTER BUTTONS -->
          <div class="button-group filter-work">
            <a class="button is-checked" data-filter="*">All</a>
            <?php  $terms = get_terms( 'portfolio category' );

                        if( $terms && ! is_wp_error($terms) ){

                            foreach( $terms as $term ){?>
                              <a class="button" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name ?></a>
                              <?}

            }?>

          </div>
          <!-- END WORK FILTER BUTTONS -->

        </div>
      </div>


      <!-- WORK CONTENT START -->
      <div class="work-content">


        <?php
            $args = array( 'posts_per_page' => 6, 'post_type' => 'portfolio', 'order' => 'ASC' );
            $lastposts = get_posts( $args );

            foreach( $lastposts as $key=>$post ){
                setup_postdata($post);
                ?>

          <div class="work-item <?php $cur_terms = get_the_terms( $post->ID, 'portfolio category');
            if( is_array( $cur_terms ) ){
                foreach( $cur_terms as $cur_term ){
                    echo $cur_term->slug.' ';
                }
            } ?>">
            <div class="work-caption">

                        <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="Image Title" />
                         <!-- WORK TITLE -->
                      <div class="overlay">
                        <div class="info-content">
                          <h4><?php the_title(); ?></h4>
                          <p><?php the_content(); ?></p>
                      </div>
                      <div class="know-more">
                        <a class="modal-image" href="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>">
                          <span class="icon icon-focus"></span>
                        </a>
                      </div>
                      </div>

                  </div>
                </div>

                <?php
            }
            wp_reset_postdata(); // сброс
            ?>


      </div>
      <!-- WORK CONTENT END -->


    </section>
    <!-- ====== END WORK ======  -->