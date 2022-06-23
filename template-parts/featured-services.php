<?php
    $options = get_option( 'my_framework' );
?>
<main id="main">
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container">

    <div class="row">
    <?php
        $features = $options['featured_service_repeater'];
        foreach( $features as $feature ):
    ?>
        <div class="col-lg-4 col-md-6">
            <div class="icon-box">
            <div class="icon">
                <?php
                    if( isset( $feature['featured_service_icon'] ) ){
                        echo $feature['featured_service_icon'];
                    }
                ?>
            </div>
            <h4 class="title">
                <a href="">
                    <?php
                        if( isset( $feature['featured_service_title'] ) ){
                            echo $feature['featured_service_title'];
                        }
                    ?>
                </a>
            </h4>
            <p class="description">
                <?php
                    if( isset( $feature['featured_service_shortdes'] ) ){
                        echo $feature['featured_service_shortdes'];
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
</section><!-- End Featured Services Section -->