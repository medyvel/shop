<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1>Медицинская техника и товары для здоровья</h1>
        <p>Широкий ассортимент: тонометры, глюкометры, ингаляторы, термометры.</p>
        <a href="<?php echo get_permalink(get_page_by_path('catalog')); ?>" class="btn">Перейти в каталог</a>
    </div>
</section>

<section class="container products">
    <h2>Популярные товары</h2>
    <div class="product-grid" id="popular-products"></div>
</section>

<section class="container feedback">
    <h2>Обратная связь</h2>
    <?php echo do_shortcode('[contact-form-7 id="1" title="Форма обратной связи"]'); ?>
</section>

<?php get_footer(); ?>