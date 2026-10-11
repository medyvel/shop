<?php
/* Template Name: Новости */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$news = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged,
]);
?>

<section class="container news">
    <h2>Новости</h2>
    <div id="news-list">
        <?php while ($news->have_posts()) : $news->the_post(); ?>
            <div class="news-item">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <div class="pagination">
        <?php
        echo paginate_links([
            'total' => $news->max_num_pages,
            'current' => $paged,
        ]);
        ?>
    </div>
</section>

<?php
wp_reset_postdata();
get_footer();
?>