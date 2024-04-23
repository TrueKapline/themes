<?php
/**
 * Template Name: Новости
 * Template Post Category: news
 */

get_header(); ?>

<main>
    <div class="news_info">
        <div class="news_navigation">
            <a onclick="location.href='/';">Главная</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="news_vector" alt="Стрелка">
            <a>Научная деятельность</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="news_vector" alt="Стрелка">
            <a>Новости</a>
        </div>
        <div class="news_date">
            <p class><?php the_date(); ?></p>
        </div>
    </div>
    <div class="news_wrapper">
        <?php
        the_title( '<h1>', '</h1>' );
        the_content();
        ?>
    </div>
</main>

<?php get_footer(); ?>