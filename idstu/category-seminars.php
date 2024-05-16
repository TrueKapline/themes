<?php
/**
 * Template Name: Семинары
 * Template Post Category: seminars
 */

get_header(); ?>

<main>
    <?php
    the_title( '<h1>', '</h1>' );
    the_content();
    ?>
</main>

<?php get_footer(); ?>