<?php
/* Template Name: Контакты */

get_header(); ?>

<main>
    <div class="page_info">
        <nav class="page_navigation">
            <a onclick="location.href='/'">Главная</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <a onclick="">Контакты</a>
        </nav>
    </div>

    <?php the_content(); ?>
</main>

<?php get_footer(); ?>