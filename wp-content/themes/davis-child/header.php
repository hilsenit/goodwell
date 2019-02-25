<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

  <head>

    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- jQuery -->
   <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

    <!-- SPECTRE -->
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

    <!-- SLICK IMAGE SLIDER -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>

<header>

  <p class="toggle-menu" onclick="document.querySelector('body').classList.toggle('show-menu')"><?php _e( 'Menu', 'davis' ); ?></p>

  <?php if ( has_nav_menu( 'primary-menu' ) ) wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>

  <!-- <h2><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h2>

    <?php if ( get_bloginfo( 'description' ) ) : ?>
    <p><?php bloginfo( 'description' ); ?></p>
    <?php endif; ?> -->

</header><!-- header -->
