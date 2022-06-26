<?php
  $options =  get_option( 'my_framework' );
?>
<!-- ======= Footer ======= -->
<footer id="footer">

<div class="container footer-bottom clearfix">
  <div class="copyright">
    <?php
      if( isset( $options['copyright_section_text'] ) ){
        echo $options['copyright_section_text'];
      }
    ?>
  </div>
  <div class="credits">
    Designed by <a href="<?php echo $options['copyright_section_design_by_url']; ?>">
        <?php
            if( isset( $options['copyright_section_design_by'] ) ){
                echo $options['copyright_section_design_by'];
            }
        ?>
    </a>
  </div>
</div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php wp_footer(); ?>
</body>

</html>