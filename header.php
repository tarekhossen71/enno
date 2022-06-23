<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php wp_head(); ?>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo home_url(); ?>">
        <?php 
            if( has_custom_logo() ){
                the_custom_logo();
            }else{
                echo get_bloginfo( 'name' );
            }
        ?>
      </a></h1>

      <nav id="navbar" class="navbar">
        <?php
            wp_nav_menu( array(
                'theme_location'        => 'main-menu',
                'menu_class'            => ' ',
                'menu_id'               => ' ',
                'container'             => 'ul',
                'link_class'            => 'nav-link scrollto'
            ) );
        ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->