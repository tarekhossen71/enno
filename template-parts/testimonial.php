    <?php
        $options = get_option( 'my_framework' );
    ?>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <span>
            <?php
                if( isset( $options['testimonial_section_title'] ) ){
                    echo $options['testimonial_section_title'];
                }
            ?>
          </span>
          <h2>
            <?php
                if( isset( $options['testimonial_section_title'] ) ){
                    echo $options['testimonial_section_title'];
                }
            ?>
          </h2>
          <p>
			<?php
				if( isset( $options['testimonial_section_description'] ) ){
					echo $options['testimonial_section_description'];
				}
			?>
          </p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
			<?php
				$testimonials = $options['testimonial_section_repeater'];
				foreach( $testimonials as $testimonial ):
			?>
				<div class="swiper-slide">
					<div class="testimonial-item">
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								<?php
									if( isset( $testimonial['testimonial_about'] ) ){
										echo $testimonial['testimonial_about'];
									}
								?>
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="<?php echo $testimonial['testimonial_media']['url']; ?>" class="testimonial-img" alt="<?php echo $testimonial['testimonial_media']['alt']; ?>">
						<h3>
							<?php
								if( isset( $testimonial['testimonial_name'] ) ){
									echo $testimonial['testimonial_name'];
								}
							?>
						</h3>
						<h4>
							<?php
								if( isset( $testimonial['testimonial_designation'] ) ){
									echo $testimonial['testimonial_designation'];
								}
							?>
						</h4>
					</div>
				</div>
			<?php
				endforeach;
			?>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->