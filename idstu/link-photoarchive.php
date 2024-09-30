<?php
/* Template Name: Фотоархив */

get_header(); ?>

<main>
    <div class="page_info">
        <nav class="page_navigation">
            <a onclick="location.href='/'">Главная</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <a onclick="">Прочее</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <a onclick="">Фотоархив</a>
        </nav>
    </div>

    <?php the_content(); ?>
</main>

<?php get_footer(); ?>