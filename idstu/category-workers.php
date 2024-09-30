<?php
/**
 * Template Name: Сотрудники
 * Template Post Category: workers
 */

get_header(); ?>

<main>
    <div class="page_info">
        <nav class="page_navigation">
            <a onclick="location.href='/'">Главная</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <a onclick="">Об институте</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <?php echo '<a href="' . esc_url(get_permalink(get_page_by_path('vse-sotrudniki')->ID)) . '">Сотрудники</a>';?>
        </nav>
    </div>

    <div class="workers_wrapper">
        <div class="workers_side">
            <img class="workers_image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <p class="workers_profiles_info">Ссылки на профили:</p>
            <ul class="workers_profiles">
                <li class="workers_profile"><a href="" class="page-link">Web of Science</a></li>
                <li class="workers_profile"><a href="" class="page-link">Scopus</a></li>
                <li class="workers_profile"><a href="" class="page-link">ORCID</a></li>
                <li class="workers_profile"><a href="" class="page-link">РИНЦ</a></li>
            </ul>
        </div>
        
        <div class="workers_content">
            <h1 class="workers_name"><?php the_title(); ?></h1>
            <h2 class="workers_degree"><?php the_field('academic-degree'); ?></h2>
            <h3 class="workers_position"><?php the_field('position'); ?></h3>
            <p class="workers_laboratory">Лаборатория чего-нибудь</p>
            <hr>
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>