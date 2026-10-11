<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="main-header">
    <div class="container header-inner">
        <a href="<?php echo home_url(); ?>" class="logo">🩺 МедТехника</a>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'menu_class' => 'menu',
        ]);
        ?>
        <a href="#" id="cart-link">Корзина (<span id="cart-count">0</span>)</a>
    </div>
</header>