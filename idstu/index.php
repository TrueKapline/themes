<?php get_header(); ?>

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
        <p class="view_all">Посмотреть все</p>
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
    <div class="news">
        <div class="title_news">
            <h1>Семинары</h1>
            <p class="view_all">Посмотреть календарь</p>
        </div>
        <hr>
        <div class="seminars_wrapper">
            <div class="seminars_slider" id="seminars_slider">
                <div class="seminars_menu">
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Пн, 16 мая 2022 года</p>
                            <p class="other_seminars_text_title">Методы и программные средства создания интеллектуальных систем с декларативными базами знаний на основе модельных трансформаций</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Чт, 5 мая 2022 года</p>
                            <p class="other_seminars_text_title">Погодаев Н.И., Старицын М.В. “Оптимальное управление нелокальным уравнением неразрывности”</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Чт, 28 апреля 2022 года</p>
                            <p class="other_seminars_text_title">Технология создания интеллектуальных систем с декларативными базами знаний на основе модельных трансформаций</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                </div>
                <div class="seminars_menu">
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Пн, 16 мая 2022 года</p>
                            <p class="other_seminars_text_title">Семинар номер 4</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Чт, 5 мая 2022 года</p>
                            <p class="other_seminars_text_title">Семинар номер 5</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Чт, 28 апреля 2022 года</p>
                            <p class="other_seminars_text_title">Семинар номер 6</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                </div>
                <div class="seminars_menu">
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Пн, 16 мая 2022 года</p>
                            <p class="other_seminars_text_title">Семинар номер 7</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Чт, 5 мая 2022 года</p>
                            <p class="other_seminars_text_title">Семинар номер 8</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                    <div class="seminars_other">
                        <div class="other_seminars_text">
                            <p class="other_seminars_text_date">Чт, 28 апреля 2022 года</p>
                            <p class="other_seminars_text_title">Семинар номер 9</p>
                            <p class="other_seminars_text_further">Читать далее</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seminars_slider_ellipse" id="seminars_slider_ellipse">
            <div class="ellipse_1"></div>
            <div class="ellipse_2"></div>
            <div class="ellipse_3"></div>
        </div>
    </div>
</div>
<div class="publications">
    <div class="title_news">
        <h1>Публикации</h1>
        <p class="view_all">Посмотреть все</p>
    </div>
    <hr>
    <div class="seminars_wrapper">
        <div class="seminars_slider" id="publications_slider">
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

<?php get_footer(); ?>
