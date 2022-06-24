<?php
    $options = get_option( 'my_framework' );
?>
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>
            <?php
                if( isset( $options['service_section_bg_title'] ) ){
                    echo $options['service_section_bg_title'];
                }
            ?>
          </span>
          <h2>
            <?php
                if( isset( $options['service_section_bg_title'] ) ){
                    echo $options['service_section_bg_title'];
                }
            ?>
          </h2>
          <p>
            <?php
                if( isset( $options['service_section_description'] ) ){
                    echo $options['service_section_description'];
                }
            ?>
          </p>
        </div>

        <div class="row">
        <?php
            $services = $options['services_section_repeater'];
            foreach( $services as $service ):
        ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                <div class="icon">
                    <?php
                        if( isset( $service['service_icon'] ) ){
                            echo $service['service_icon'];
                        }
                    ?>
                </div>
                <h4><a href="">
                    <?php
                        if( isset( $service['service_title'] ) ){
                            echo $service['service_title'];
                        }
                    ?>
                </a></h4>
                <p>
                    <?php
                        if( isset( $service['service_description'] ) ){
                            echo $service['service_description'];
                        }
                    ?>
                </p>
                </div>
            </div>
        <?php
            endforeach;
        ?>
        </div>
      </div>
    </section><!-- End Services Section -->
