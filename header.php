<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style/main.min.css" rel="stylesheet" />
  <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/fontawesome/css/all.min.css" rel="stylesheet" />
  <?php wp_head(); ?>
</head>
<body>
  <div class="auto-columns">
    <div class="block-type-1">
      <nav class="nav-menu">
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '', 'menu_class' => 'nav-menu__items')); ?>
      </nav>
      <div class="header-image"></div>
    </div>
    <div class="centered-content background-image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/beach.png');">
      <a href="/" class="logo">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" alt="" class="logo-image">
      </a>
      <div>
        <p class="white headline"><span class="heading-font" style="font-size:1.5rem">SFBBO</span> pays close attention to impacts on birds and their habitats and gathers crucial data specific to local bird populations. We provide opportunities for people to be directly involved in the nature and science of the San Francisco Bay Area.</p>
        <a href="#" class="button primary">About</a>
      </div>
      <div class="social-media">
        <a href="#" target="_blank" rel="noopener noreferrer" class="social-media__link">
          <i class="fab fa-facebook-f social-media__icon"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="social-media__link">
          <i class="fab fa-twitter social-media__icon"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="social-media__link">
          <i class="fab fa-instagram social-media__icon"></i>
        </a>
      </div>
    </div>
  </div>
  <main class="page-content">
