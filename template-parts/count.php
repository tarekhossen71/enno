<?php
    $options = get_option( 'my_framework' );
?>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
      <div class="container">

        <div class="row counters">
        <?php
            $counters = $options['courser_section_repeater'];
            foreach( $counters as $counter):
        ?>
            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $counter['counter_number']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>
                    <?php
                        if( isset( $counter['counter_name'] ) ){
                            echo $counter['counter_name'];
                        }
                    ?>
                </p>
            </div>
        <?php
            endforeach;
        ?>
          

        </div>

      </div>
    </section><!-- End Counts Section -->