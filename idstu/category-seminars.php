<?php
/**
 * Template Name: Семинары
 * Template Post Category: seminars
 */

get_header(); ?>

<main>
    <div class="seminars_info">
        <div class="seminars_navigation">
            <a onclick="location.href='/'">Главная</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="seminars_vector" alt="Стрелка">
            <a>Деятельность</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="seminars_vector" alt="Стрелка">
            <?php echo '<a href="' . esc_url(get_permalink(get_page_by_path('vse-seminary')->ID)) . '">Семинары</a>';?>
        </div>
    </div>
    <div class="seminar_wrapper">
        <?php
        the_title( '<h1>', '</h1>' );
        the_content();
        ?>
    </div>
</main>

<?php get_footer(); ?>