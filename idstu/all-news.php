<?php
/* Template Name: Все Новости */

get_header(); ?>

<main>
    <div class="page_info">
        <nav class="page_navigation">
            <a onclick="location.href='/'">Главная</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <a onclick="">Об институте</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.svg" class="navigation_vector" alt="Стрелка">
            <?php echo '<a href="' . esc_url(get_permalink(get_page_by_path('vse-novosti')->ID)) . '">Новости</a>';?>
        </nav>
    </div>

    <div class="page_wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'category_name' => 'news',
            'posts_per_page' => 10,    // Максимум 10 записей на странице
            'paged' => $paged
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <article class="all-news_article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <p class="entry-date"><?php the_date(); ?></p>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php echo get_first_paragraph(); ?>
                    </div>
                </article>
            <?php endwhile; 
            wp_reset_postdata();?>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $news_query->max_num_pages,
                ));
                ?>
            </div>

        <?php else : ?>
            <p><?php _e('Новостей не найдено', 'textdomain'); ?></p>
        <?php endif;

        wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer(); ?>