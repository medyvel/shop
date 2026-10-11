<?php
/* Template Name: Контакты */
get_header();
?>

<section class="container feedback">
    <h2>Свяжитесь с нами</h2>
    <p>Адрес: г. Шексна, ул. Медицинская, д. 1</p>
    <p>Телефон: +7 (800) 123-45-67</p>
    <p>Email: info@medtehnika.ru</p>

    <h3>Форма обратной связи</h3>
    <?php echo do_shortcode('[contact-form-7 id="1" title="Форма обратной связи"]'); ?>
</section>

<?php get_footer(); ?>