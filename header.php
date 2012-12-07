<?php   $gridly_options = get_option('plugin_options'); ?>
<!DOCTYPE html>
<!-- Gridly WordPress Theme by Eleven Themes (http://www.eleventhemes.com) - Proudly powered by WordPress (http://wordpress.org) -->
<!-- meta -->
<html <?php language_attributes();?>> 
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
  <!-- styles -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  <?php
    $gridly_logo = $gridly_options['gridly_logo'];
    if (!$gridly_logo) {
      $gridly_logo = get_template_directory_uri() . "/images/light/logo.png";
    }
    $gridly_responsive = $gridly_options['gridly_responsive'];
  ?>
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $gridly_options['gridly_color_scheme']; ?>.css" />
    
  <?php if ($gridly_responsive != 'no') : ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <link rel="stylesheet" type="text/css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" />
  <?php  endif ?>
    
   <!-- wp head -->
  <?php wp_head(); ?>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
  
</head>

<body <?php body_class(); ?>>
  
<div id="wrap">
  <div id="header">
    <div id="logo">
      <a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<?php echo $gridly_logo; ?>" alt="<?php bloginfo('sitename'); ?>">
      </a>
    </div>
        
    <?php if ( has_nav_menu( 'main_nav' ) ) : ?>
    <div id="nav"><?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?></div>
    <?php else : ?>
    <div id="nav"><ul><?php wp_list_pages("depth=1&title_li="); ?></ul></div>
    <?php endif ?>
  </div>
<!-- // header -->           