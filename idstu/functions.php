<?php

// Ассеты для главной страницы
function idstu_assets() {
    // wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array(), date("h:i:s"), true );
    wp_enqueue_script( 'slider-script', get_template_directory_uri() . '/assets/js/slider.js', array(), date("h:i:s"), true );
    wp_enqueue_script( 'header-script', get_template_directory_uri() . '/assets/js/header.js', array(), date("h:i:s"), true );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );
    wp_enqueue_style( 'header-css', get_template_directory_uri() . '/assets/css/header.css', array(), filemtime( get_template_directory() . '/assets/css/header.css' ) );

    // Стили для отдельных страниц
    wp_enqueue_style('all-news-css', get_template_directory_uri() . '/assets/css/all-news.css', array(), filemtime( get_template_directory() . '/assets/css/all-news.css') );
    wp_enqueue_style('all-workers-css', get_template_directory_uri() . '/assets/css/all-workers.css', array(), filemtime( get_template_directory() . '/assets/css/all-workers.css') );
}
add_action( 'wp_enqueue_scripts', 'idstu_assets' );

// Ассеты для синглов
function idstu_single_assets() {
    if ( is_single() ) {
        // Получаем текущую категорию поста
        $categories = get_the_category();
        if ( !empty($categories) ) {
            if ( $categories[0]->slug == 'news' ) {
                // Загружаем стиль news.css для категории "news"
                wp_enqueue_style( 'news-css', get_template_directory_uri() . '/assets/css/news.css', array(), filemtime( get_template_directory() . '/assets/css/news.css' ) );
            } elseif ( $categories[0]->slug == 'seminars' ) {
                // Загружаем стиль seminars.css для категории "seminars"
                wp_enqueue_style( 'seminars-css', get_template_directory_uri() . '/assets/css/seminars.css', array(), filemtime( get_template_directory() . '/assets/css/seminars.css' ) );
            } elseif ( $categories[0]->slug == 'workers' ) {
                // Загружаем стиль seminars.css для категории "seminars"
                wp_enqueue_style( 'workers-css', get_template_directory_uri() . '/assets/css/workers.css', array(), filemtime( get_template_directory() . '/assets/css/workers.css' ) );
            }
        }
    }
}
add_action( 'wp_print_styles', 'idstu_single_assets' );

// Функция добавления класса к каждому параграфу, получаемого через the_content()
function add_paragraph_class($content) {
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="paragraph">', $content);
}
add_filter('the_content', 'add_paragraph_class');

show_admin_bar(false);

// Превью-изображения
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'news' ) );

// Первый параграф для новостей на главной
function get_first_paragraph(){
    $content = get_the_content();
    $content = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
    $content = strip_tags($content, '<a><strong><em>');
    echo $content;
}

// Отображение календаря для семинаров
function get_seminars_by_date($year, $month, $day) {
    $args = array(
        'post_type' => 'seminars', // Замените на ваш тип записи
        'posts_per_page' => -1,
        'meta_key' => 'seminar_date', // Замените на ваш мета-ключ
        'meta_value' => $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT),
        'meta_compare' => '='
    );
    return get_posts($args);
}