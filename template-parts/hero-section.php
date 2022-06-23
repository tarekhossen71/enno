<?php
    $options = get_option( 'my_framework' );
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>
        <?php
            if( isset( $options['hero_section_title'] ) ){
                echo $options['hero_section_title'];
            }
        ?>
      </h1>
      <h2>
        <?php
            if( isset( $options['hero_section_content'] ) ){
                echo $options['hero_section_content'];
            }
        ?>
      </h2>
      <div class="d-flex">
        <a href="<?php echo $options['hero_section_button_id']; ?>" class="btn-get-started scrollto">
            <?php
                if( isset( $options['hero_section_button_name'] ) ){
                    echo $options['hero_section_button_name'];
                }
            ?>
        </a>
        <a href="<?php echo $options['hero_section_video_url']; ?>" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>
            <?php
                if( isset( $options['hero_section_video_button_name'] ) ){
                    echo $options['hero_section_video_button_name'];
                }
            ?>
        </span></a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="<?php echo $options['hero_section_image']['url']; ?>" class="img-fluid animated" alt="<?php echo $options['hero_section_image']['alt']; ?>">
    </div>
  </div>
</div>

</section><!-- End Hero -->