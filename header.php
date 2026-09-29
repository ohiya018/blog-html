<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css/destyle.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="inner">
            <h1><img src="<?php echo esc_url(get_theme_file_uri('/images/headerLogo2.png')); ?>" href="<?php echo esc_url(home_url('/')); ?>" alt="#"></h1>
            <nav class="gnav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/archive/')); ?>">Archive</a></li>
                </ul>
            </nav>
        </div>
    </header>