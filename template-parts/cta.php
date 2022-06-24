    <?php
        $options = get_option( 'my_framework' );
    ?>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>
            <?php
                if( isset( $options['cta_section_title'] ) ){
                    echo $options['cta_section_title'];
                }
            ?>
          </h3>
          <p>
            <?php
                if( isset( $options['cta_section_content'] ) ){
                    echo $options['cta_section_content'];
                }
            ?>
          </p>
          <a class="cta-btn" href="<?php echo $options['cta_section_button_url']; ?>">
            <?php
                if( isset( $options['cta_section_button_name'] ) ){
                    echo $options['cta_section_button_name'];
                }
            ?>
          </a>
        </div>

      </div>
    </section><!-- End Cta Section -->