<?php get_header(); ?>

<main>
    <div class="title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Логотип.png" alt="" class="title_logo">
        <span class="title_text">Федеральное государственное бюджетное учреждение науки Институт динамики систем и теории управления имени В.М. Матросова Сибирского отделения Российской академии наук</span>
        <img class="title_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/Картинка.png" alt="">
    </div>
    <?php
    echo do_shortcode('[smartslider3 slider="3"]');
    ?>
    <!-- <div class="slider">
        <div>
            <img class="slider_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/slider.svg" alt="">
        </div>
    </div> -->
    <div class="main_menu">
        <div class="submenu">
            <div class="submenu_item" id="about_ins">
                <img class="submenu_img" src="<?php echo get_template_directory_uri(); ?>/assets/image/Info.svg" alt="">
                <p class="submenu_text">Об институте</p>
            </div>
            <div class="submenu_item" id="scientific_activity">
                <img class="submenu_img" src="<?php echo get_template_directory_uri(); ?>/assets/image/Научная деятельность.svg" alt="">
                <p class="submenu_text">Научная деятельность</p>
            </div>
            <div class="submenu_item" id="events">
                <img class="submenu_img" src="<?php echo get_template_directory_uri(); ?>/assets/image/Аспирантура.svg" alt="">
                <p class="submenu_text">Образовательная деятельность</p>
            </div>
            <div class="submenu_item" id="postgraduate_study">
                <img class="submenu_img" src="<?php echo get_template_directory_uri(); ?>/assets/image/Code.svg" alt="">
                <p class="submenu_text">ИТ-деятельность</p>
            </div>
            <div class="submenu_item" id="certification">
                <img class="submenu_img" src="<?php echo get_template_directory_uri(); ?>/assets/image/Сертификация.svg" alt="">
                <p class="submenu_text">Сертификация</p>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="title_news">
            <h1>Новости</h1>
            <div class="see_all">
            <?php
            echo '
                <a class="view_all" href="' . esc_url(get_permalink(get_page_by_path('vse-novosti')->ID)) . '">Посмотреть все 
                <img src="' . get_template_directory_uri() . '/assets/image/header-arrow.svg" alt=""></a>
            ';
            ?>                   
            </div>
        </div>
        <hr>
        <div class="grid_wrapper">
            <div class="article_grid">
            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => 5,
                    'category_name' => 'news', // Ярлык рубрики
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  => '',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                        <article class="article_item">
                            <a class="article_link" aria-label="news" href="<?php the_permalink(); ?>">
                                <img class="article_image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <div class="article_text">
                                    <p class="article_text_title"><?php the_title(); ?></p>
                                    <p class="article_text_paragraph"><?php echo get_first_paragraph(); ?></p>
                                    <p class="article_text_date"><?php the_date(); ?></p>
                                </div>
                            </a>
                        </article>
                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>
            </div>
        </div>
    </div>
    <div class="seminars">
        <div class="seminars_wrapper">
            <div class="title_seminars">
                <h1>Семинары</h1>
                <div class="see_all">
                    <?php
                    echo '
                        <a class="view_all" href="' . esc_url(get_permalink(get_page_by_path('vse-seminary')->ID)) . '">Календарь
                        <img src="' . get_template_directory_uri() . '/assets/image/header-arrow.svg" alt=""></a>
                    ';
                    ?>                   
                </div>
            </div>
            <hr>
            <div class="seminars_slider">
                <div class="seminars_slider_wrapper">
                <?php 
                    // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 5,
                        'category_name' => 'seminars', // Ярлык рубрики
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => '',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                            <section class="seminars_item">
                                <p class="seminars_date"><?php 
                                    echo wp_date('D', strtotime(get_field('data_provedeniya', false, false))), ', '; // Отображение дня недели
                                    the_field('data_provedeniya'); // Отображение остальной даты проведения
                                ?> года</p>
                                <p class="seminars_title"><?php the_title(); ?></p>
                                <a class="seminars_link" aria-label="seminars" href="<?php the_permalink(); ?>">Читать далее</a>
                            </section>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
                </div>

                <div class="seminars_buttons">
                    <button class="seminars-slider__btn seminars-slider__btn_prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_left_default.svg" alt="Назад">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_left_hover.svg" alt="Назад" class="btn-img__hidden">
                    </button>
                    <button class="seminars-slider__btn seminars-slider__btn_next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_right_default.svg" alt="Вперед">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_right_hover.svg" alt="Вперед" class="btn-img__hidden">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="publications">
        <div class="title_publications">
            <h1>Публикации</h1>
            <div class="see_all">
                <?php
                echo '
                    <a class="view_all" href="' . esc_url(get_permalink(get_page_by_path('vse-publikaczii')->ID)) . '">Посмотреть все 
                    <img src="' . get_template_directory_uri() . '/assets/image/header-arrow.svg" alt=""></a>
                ';
                ?>                   
            </div>
        </div>
        <hr>

        <div class="publications_slider">
            <div class="publications_slider_wrapper">
            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => 4,
                    'category_name' => 'publications', // Ярлык рубрики
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  => '',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                ));

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                        <section class="publications_item">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Обложка" class="publications_img">
                            <div class="publications_info">
                                <p class="publications_title"><?php the_title(); ?></p>
                                <p class="publications_text"><?php echo get_first_paragraph(); ?></p>
                                <a href="<?php the_permalink(); ?>" aria-label="publications" class="publications_link">Посмотреть</a>
                            </div>
                        </section>
                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>
            </div>
            <div class="publications_buttons">
                <button class="publications-slider__btn publications-slider__btn_prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_left_default.svg" alt="Назад">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_left_hover.svg" alt="Назад" class="btn-img__hidden">
                </button>
                <button class="publications-slider__btn publications-slider__btn_next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_right_default.svg" alt="Вперед">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/button_arrow_right_hover.svg" alt="Вперед" class="btn-img__hidden">
                </button>
            </div>
        </div>
    </div>
    <div class="partners">
        <div class="partners-wrapper">
            <div class="partners-title">
                <h1>Партнёры</h1>
            </div>
            <div class="partners-slider">
                <div class="slider-track">
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_1_IrkNauCentre.png" alt="Иркутский Научный Центр"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_2_NaukaVSibiri.png" alt="Наука в Сибири"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_3_RFFI.png" alt="РФФИ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_4_IGU.png" alt="ИГУ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_5_ISEM.png" alt="ИСЭМ СО РАН"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_6_Minobr.png" alt="РФФИ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_7_RAN.png" alt="Российская академия наук"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_8_Politeh.png" alt="ИрНИТУ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_1_IrkNauCentre.png" alt="Иркутский Научный Центр"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_2_NaukaVSibiri.png" alt="Наука в Сибири"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_3_RFFI.png" alt="РФФИ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_4_IGU.png" alt="ИГУ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_5_ISEM.png" alt="ИСЭМ СО РАН"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_6_Minobr.png" alt="РФФИ"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_7_RAN.png" alt="Российская академия наук"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_8_Politeh.png" alt="ИрНИТУ"></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
