<section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                                <h2><?php the_field( "about-h" ); ?></h2>
                                <p><?php the_field( "about-h2" ); ?></p>
                            </div>
                            <div class="about_content_box box-left">
                                <div class="about_txt_box">
                                    <p><?php the_field( "about-text" ); ?></p>
                                </div>
                                <div class="about_img_box">
                                    <img src="<?php the_field( "about-img3" ); ?>" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content_box box-right">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?php the_field( "about-img" ); ?>" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?php the_field( "about-img2" ); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="about_txt_box">
                                    <p><?php the_field( "about-t" ); ?></p>
                                    <p><?php the_field( "about-t2" ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
