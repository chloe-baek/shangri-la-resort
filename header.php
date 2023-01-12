<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <!-- <h1><?php bloginfo('name'); ?></h1> -->
        <!-- logo -->
        <h1>
            <a href="<?php print get_home_url(); ?>">
                <img src="<?php print get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Shangri-La resort logo"
                    width="150px" height="auto">
            </a>
        </h1>

        <!-- search -->
        <?php get_search_form(); ?>

        <!-- ⬇navbar -->
        <?php
           wp_nav_menu(
                array(
                    'theme_location' => 'header_menu',
                    'container' => 'nav',
                    'container_id' => 'main-nav'
                )
            );
        ?>

    </header>
    <main>