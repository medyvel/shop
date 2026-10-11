<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child', get_stylesheet_uri(), ['astra-parent']);
    wp_enqueue_script('basket', get_stylesheet_directory_uri() . '/js/basket.js', [], null, true);
    wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/js/menu.js', [], null, true);
});

// Регистрация меню
add_action('after_setup_theme', function() {
    register_nav_menus([
        'primary' => 'Главное меню'
    ]);
});

// Регистрация типа записей "Товары"
add_action('init', function() {
    register_post_type('product', [
        'labels' => ['name' => 'Товары', 'singular_name' => 'Товар'],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'has_archive' => true,
    ]);
});
?>