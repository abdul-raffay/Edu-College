<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Title -->
        <title><?php bloginfo('name'); ?></title>

        <!-- Header -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php
        wp_nav_menu(array( 
            'theme_location' => 'my-custom-menu', 
            'container_class' => 'custom-menu-class' 
        )); 
    ?>
      