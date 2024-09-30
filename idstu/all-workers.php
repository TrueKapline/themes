<?php
/* Template Name: Все Сотрудники */

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

    <div class="workers_page_wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'category_name' => 'workers',
            'posts_per_page' => 10,    // Максимум 10 записей на странице
            'paged' => $paged
        );
        $workers_query = new WP_Query($args);

        if ($workers_query->have_posts()) :
            while ($workers_query->have_posts()) : $workers_query->the_post(); ?>
                <div class="workers_item">
                    <a href="<?php the_permalink(); ?>"><img class="workers_photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                    <p class="workers_title"><a href="<?php the_permalink(); ?>" class="workers_link"><?php the_title(); ?></a></p>
                </div>
            <?php endwhile; 
            wp_reset_postdata();?>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $workers_query->max_num_pages,
                ));
                ?>
            </div>

        <?php else : ?>
            <p><?php _e('Сотрудников не найдено', 'textdomain'); ?></p>
        <?php endif;

        wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer(); ?>