    <?php
        $options = get_option( 'my_framework' );
    ?>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <span>
            <?php
                if( isset( $options['team_section_title'] ) ){
                    echo $options['team_section_title'];
                }
            ?>
          </span>
          <h2>
            <?php
                if( isset( $options['team_section_title'] ) ){
                    echo $options['team_section_title'];
                }
            ?>
          </h2>
          <p>
            <?php
                if( isset( $options['team_section_content'] ) ){
                    echo $options['team_section_content'];
                }
            ?>
          </p>
        </div>

        <div class="row">
            <?php 
                $teams = $options['team_section_repeater'];
                foreach( $teams as $team ):
            ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?php echo $team['team_media']['url']; ?>" alt="<?php echo $team['team_media']['alt']; ?>">
                        <h4>
                            <?php
                                echo $team['team_name'];
                            ?>
                        </h4>
                        <span>
                            <?php
                                echo $team['team_designation'];
                            ?>
                        </span>
                        <p>
                            <?php
                                echo $team['team_about'];
                            ?>
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->