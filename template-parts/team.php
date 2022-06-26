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
                            <?php
                                if( !empty( $team['team_member_social_meida'] ) ):
                                    foreach( $team['team_member_social_meida'] as $social ):
                            ?>
                                <a href="<?php echo $social['social_icon_url']; ?>">
                                    <i class="<?php echo $social['social_icon_class']; ?>"></i>
                                </a>
                            <?php
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->