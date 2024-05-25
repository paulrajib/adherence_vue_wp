<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php echo esc_url(home_url()); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg" />

    <link rel="canonical" href="<?php echo esc_url(home_url()); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />



    
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <!-- WordPress Head Hook -->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div id="app">
        <!-- Your Vue.js app will be mounted here -->
