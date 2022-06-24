<?php
    $options = get_option( 'my_framework' );
?>
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>
            <?php
                if( isset( $options['services_section_title'] ) ){
                    echo $options['services_section_title'];
                }
            ?>
          </span>
          <h2>
            <?php
                if( isset( $options['services_section_title'] ) ){
                    echo $options['services_section_title'];
                }
            ?>
          </h2>
          <p>
            <?php
                if( isset( $options['services_section_description'] ) ){
                    echo $options['services_section_description'];
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
                        if( isset( $service['services_icon'] ) ){
                            echo $service['services_icon'];
                        }
                    ?>
                </div>
                <h4><a href="">
                    <?php
                        if( isset( $service['services_title'] ) ){
                            echo $service['services_title'];
                        }
                    ?>
                </a></h4>
                <p>
                    <?php
                        if( isset( $service['services_description'] ) ){
                            echo $service['services_description'];
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
