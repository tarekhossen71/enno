<?php
    $options = get_option( 'my_framework' );
?>
<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?php echo $options['about_image']['url']; ?>" class="img-fluid" alt="<?php echo $options['about_image']['alt']; ?>">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>
                <?php
                    if( isset( $options['about_title'] ) ){
                        echo $options['about_title'];
                    }
                ?>
            </h3>
            <p class="fst-italic">
                <?php
                    if( isset( $options['about_description'] ) ){
                        echo $options['about_description'];
                    }
                ?>
            </p>
            <ul>
                <?php
                    $abouts = $options['about_repeater'];
                    foreach( $abouts as $about ):
                ?>
                <li>
                    <i class="bi bi-check-circle"></i> 
                    <?php
                        if( isset( $about['about_list'] ) ){
                            echo $about['about_list'];
                        }
                    ?>
                </li>
                <?php
                    endforeach;
                ?>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->