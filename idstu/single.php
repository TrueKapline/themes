<?php
/**
 * Template Name: Пустой шаблон
 * Template Post Type: post
 */

get_header(); ?>

<?php
the_post();
$categories = get_the_category();
if ( !empty($categories) && $categories[0]->slug == 'news' ) {
    // Загружаем шаблон для рубрики "news"
    get_template_part( 'category', 'news' );
} else if ( !empty($categories) && $categories[0]->slug == 'seminars' ) {
    // Загружаем шаблон для рубрики "news"
    get_template_part( 'category', 'seminars' );
} else {
    // Загружаем общий шаблон рубрик
    get_template_part( 'category', get_post_type() );
}
?>

<?php get_footer(); ?>