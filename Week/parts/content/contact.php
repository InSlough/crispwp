    <!-- ====== START CONTACT ======  -->
    <section class="sections contact" id="contact" data-scroll-index="5">
      <div class="container">
        <div class="row">


          <!-- START CONTACT SECTION TITLE -->
          <div class="cont-title col-md-5">
            <h3><?php the_field( "contact-tittle" ); ?></h3>
            <p><?php the_field( "contact-text" ); ?></p>
            <ul class="info">
              <?php
                 if(have_rows('contact') ):
                 while( have_rows('contact') ): the_row();  ?>
                    <li>
                      <span class="icon icon-<?php echo the_sub_field('contact-icon') ?>"></span>
                      <p><?php echo the_sub_field('contact-info') ?></p>
                    </li>
                  <?php endwhile;
                  endif;
                ?>

            </ul>
          </div>
          <!-- END CONTACT SECTION TITLE -->


          <!-- START CONTACT FORM -->
          <div class="contact-form col-md-7">
            <form action="http://joker-themes.com/multix-dd/demos/Waves-Version/php/contact.php" method="POST" class="cont-fo">


              <div class="contact-item col-md-12">
                <input type="text" name="name" placeholder="Name *" required="required">
              </div>
              <div class="contact-item col-md-12">
                <input type="email" name="email" placeholder="Email *" required="required">
              </div>
              <div class="contact-item col-md-12">
                <input type="text" name="subject" placeholder="Subject">
              </div>
              <div class="contact-item col-md-12">
                <textarea id="form_message" name="message" placeholder="Message *" rows="4" required="required" data-error="Message."></textarea>
              </div>
              <div class="contact-item col-md-12">
                <input type="submit" class="button disabled" value="Send Message">
              </div>


            </form>
          </div>
          <!-- END CONTACT FORM -->


        </div>
      </div>
    </section>
    <!-- ====== END CONTACT ======  -->