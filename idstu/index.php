<?php get_header(); ?>

<main>
    <div class="title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Логотип.png" alt="" class="title_logo">
        <span class="title_text">Федеральное государственное бюджетное учреждение науки Институт динамики систем и теории управления имени В.М. Матросова Сибирского отделения Российской академии наук</span>
        <img class="title_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/Картинка.png" alt="">
    </div>
    <div class="slider">
        <div>
            <img class="slider_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/slider.svg" alt="">
        </div>
    </div>
    <div class="main_menu">
        <div class="submenu">
            <div class="submenu_item" id="about_ins">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="">
                <p>Об институте</p>
            </div>
            <div class="submenu_item" id="scientific_activity">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Научная деятельность.svg" alt="">
                <p>Деятельность</p>
            </div>
            <div class="submenu_item" id="events">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Мероприятия.svg" alt="">
                <p>Мероприятия</p>
            </div>
            <div class="submenu_item" id="postgraduate_study">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Аспирантура.svg" alt="">
                <p>Аспирантура</p>
            </div>
            <div class="submenu_item" id="certification">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Сертификация.svg" alt="">
                <p>Сертификация</p>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="title_news">
            <h1>Новости</h1>
            <div class="see_all">
                <p class="view_all">Посмотреть все</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/header-arrow.svg"" alt="">
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
                    <p class="view_all">Календарь</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/header-arrow.svg" alt="">
                </div>
            </div>
            <hr>
            <div class="seminars_slider">
                <div class="slider_wrapper">
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
        <div class="title_news">
            <h1>Публикации</h1>
            <div class="see_all">
                <p class="view_all">Посмотреть все</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/header-arrow.svg"" alt="">
            </div>
        </div>
        <hr>
        <div class="slider_wrapper">
            <div class="general_slider" id="publications_slider">
                <div class="publications_menu">
                    <div class="publications_other">
                        <div>
                            <img class="publications_other_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/book_1.svg" alt="">
                        </div>
                        <div class="publications_other_text">
                            <p class="publications_other_text_title">Александров А.Ю., Косов А.А. Об устойчивости гироскопических систем</p>
                            <p class="publications_other_text_p">«Вестник Санкт-Петербургского университета. Математика. Механика. Астрономия» — научно-теоретический рецензируемый журнал, публикующий исследования в области математики, механики и астрономии, а также математического моделирования.</p>
                            <p class="publications_other_text_look">Посмотреть</p>
                        </div>  
                    </div>
                    <div class="publications_other">
                        <div>
                            <img class="publications_other_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/book_2.svg" alt="">
                        </div>
                        <div class="publications_other_text">
                            <p class="publications_other_text_title">Антонов И.А., Федоров Р.К., Гаченко А.С., Агафонова Т.А. Интеграция базы данных по хвоегрызущим насекомым </p>
                            <p class="publications_other_text_p">В журнале «Известия Иркутского государственного университета» публикуются научные обзоры, статьи и краткие сообщения, основанные на значимых результатах оригинальных научных исследований отечественных и зарубежных авторов по основным разделам биологии и экологии</p>
                            <p class="publications_other_text_look">Посмотреть</p>
                        </div>  
                    </div>
                </div>
                <div class="publications_menu">
                    <div class="publications_other">
                        <div>
                            <img class="publications_other_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/book_1.svg" alt="">
                        </div>
                        <div class="publications_other_text">
                            <p class="publications_other_text_title">Название 1</p>
                            <p class="publications_other_text_p">Описание 1</p>
                            <p class="publications_other_text_look">Посмотреть</p>
                        </div>  
                    </div>
                    <div class="publications_other">
                        <div>
                            <img class="publications_other_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/book_2.svg" alt="">
                        </div>
                        <div class="publications_other_text">
                            <p class="publications_other_text_title">Название 2</p>
                            <p class="publications_other_text_p">Описание 2</p>
                            <p class="publications_other_text_look">Посмотреть</p>
                        </div>  
                    </div>
                </div>
                <div class="publications_menu">
                    <div class="publications_other">
                        <div>
                            <img class="publications_other_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/book_1.svg" alt="">
                        </div>
                        <div class="publications_other_text">
                            <p class="publications_other_text_title">Название 3</p>
                            <p class="publications_other_text_p">Описание 3</p>
                            <p class="publications_other_text_look">Посмотреть</p>
                        </div>  
                    </div>
                    <div class="publications_other">
                        <div>
                            <img class="publications_other_image" src="<?php echo get_template_directory_uri(); ?>/assets/image/book_2.svg" alt="">
                        </div>
                        <div class="publications_other_text">
                            <p class="publications_other_text_title">Название 4</p>
                            <p class="publications_other_text_p">Описание 4</p>
                            <p class="publications_other_text_look">Посмотреть</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="seminars_slider_ellipse" id="publications_slider_ellipse">
            <div class="ellipse_1" id="0"></div>
            <div class="ellipse_2" id="1"></div>
            <div class="ellipse_3" id="2"></div>
        </div>
    </div>
    <div class="partners">
        <div class="partners_wrapper">
            <div class="partners_title">
                <h1>Партнёры</h1>
            </div>
            <div class="partners_menu">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_1.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_2.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_3.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_4.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_5.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_6.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_7.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_8.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/partner_9.svg" alt="">
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
