<?php

function idstu_assets() {
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array(), '20151215', true );

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'idstu_assets' );

show_admin_bar(false);

add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-thumbnails', array( 'news' ) );

function get_first_paragraph(){
    $content = get_the_content();
    $content = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
    $content = strip_tags($content, '<a><strong><em>');
    echo $content;
}