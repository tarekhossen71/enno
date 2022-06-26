<?php
    $options = get_option( 'my_framework' );
?>
<!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>
            <?php
                if( isset( $options['contact_section_title'] ) ){
                    echo $options['contact_section_title'];
                }
            ?>
          </span>
          <h2>
            <?php
                if( isset( $options['contact_section_title'] ) ){
                    echo $options['contact_section_title'];
                }
            ?>
          </h2>
          <p>
            <?php
                if( isset( $options['contact_section_description'] ) ){
                    echo $options['contact_section_description'];
                }
            ?>
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>
                    <?php
                        if( isset( $options['contact_address_title'] ) ){
                            echo $options['contact_address_title'];
                        }
                    ?>
                </h4>
                <p>
                    <?php
                        if( isset( $options['contact_address_description'] ) ){
                            echo $options['contact_address_description'];
                        }
                    ?>
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>
                    <?php
                        if( isset( $options['contact_email_title'] ) ){
                            echo $options['contact_email_title'];
                        }
                    ?>
                </h4>
                <p>
                    <?php
                        if( isset( $options['contact_email'] ) ){
                            echo $options['contact_email'];
                        }
                    ?>
                </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>
                    <?php
                        if( isset( $options['contact_Phone_title'] ) ){
                            echo $options['contact_Phone_title'];
                        }
                    ?>
                </h4>
                <p>
                    <?php
                        if( isset( $options['contact_Phone_number'] ) ){
                            echo $options['contact_Phone_number'];
                        }
                    ?>
                </p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            
                <!-- 
            <div class="php-email-form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Your Name</label>
                        [text* your-name id:name class:form-control]
                    </div>
                    <div class="form-group col-md-6 mt-3 mt-md-0">
                        <label for="name">Your Email</label>
                        [email* your-email id:email class:form-control]
                    </div>
                </div>
                    <div class="form-group mt-3">
                        <label for="name">Subject</label>
                        [text* subject id:name class:form-control]
                    </div>
                <div class="form-group mt-3">
                    <label for="name">Message</label>
                    [textarea* your-message 10x10 class:form-control]
                </div>
                <div class="text-center">
                    [submit "Send Message"]
                </div>
            </div>
             -->
             
            
            <?php
                echo do_shortcode( '[contact-form-7 id="21" title="Contact form 1"]' );
             ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->