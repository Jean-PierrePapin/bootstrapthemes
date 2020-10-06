<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <?php echo esc_html( get_theme_mod( 'set_header_title', __( 'Start Bootstrap', 'landing-page-gh-pages' ) ) ); ?>
      </a>
      <a class="btn btn-primary" href="#">
        <?php echo esc_html( get_theme_mod( 'set_signinbutton_title', __( 'Sign In', 'landing-page-gh-pages' ) ) ); ?>
      </a>
    </div>
  </nav>