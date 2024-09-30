<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ИДСТУ СО РАН</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>

<header class="header" id="header">
    <nav class="navbar container">
        <div class="navbar-mobile">
            <div class="burger" id="burger">
                <input
                    hidden=""
                    class="check-icon"
                    id="check-icon"
                    name="check-icon"
                    type="checkbox"
                />
                <label class="icon-menu" for="check-icon">
                    <div class="bar bar--1"></div>
                    <div class="bar bar--2"></div>
                    <div class="bar bar--3"></div>
                </label>
            </div>
        </div>
        <div class="navbar-desktop" id="menu">
            <ul class="menu">
                <a class="wrapper-link" href="/"><li class="menu-item">Главная</li></a>
                <li class="menu-item dropdown">
                    <span class="dropdown-toggle menu-link">
                        Институт 
                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                    </span>
                    <div class="dropdown-content">
                        <div class="dropdown-column">
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Info.svg" alt="" draggable="false">
                                    </span>
                                    <span>Об институте</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('istoriya')->ID)) . '">История</a>';?>></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('uchenyj-sovet')->ID)) . '">Ученый совет</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('direkcziya')->ID)) . '">Дирекция</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('biblioteka')->ID)) . '">Библиотека</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('vse-novosti')->ID)) . '">Новости</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('vse-sotrudniki')->ID)) . '">Сотрудники</a>';?></li>
                                </ul>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Research.svg" alt="" draggable="false">
                                    </span>
                                    <span>Исследования</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('proekty')->ID)) . '">Проекты</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('vazhnejshie-rezultaty')->ID)) . '">Важнейшие результаты</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('godovye-otchety')->ID)) . '">Годовые отчеты</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('vse-publikaczii')->ID)) . '">Публикации сотрудников</a>';?></li>
                                </ul>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Other.svg" alt="" draggable="false">
                                    </span>
                                    <span>Прочее</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('profkom')->ID)) . '">Профком</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('fotoarhiv')->ID)) . '">Фотоархив</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('antikorrupczionnaya-deyatelnost')->ID)) . '">Антикоррупционная деятельность</a>';?></li>
                                    <li><?php echo '<a class="dropdown-link" href="' . esc_url(get_permalink(get_page_by_path('sovet-nauchnoj-molodezhi')->ID)) . '">Совет научной молодежи</a>';?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item dropdown">
                    <span class="dropdown-toggle menu-link">
                        Деятельность
                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                    </span>
                    <div class="dropdown-content">
                        <div class="dropdown-column">
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Научная деятельность.svg" alt="" draggable="false">
                                    </span>
                                    <span>Научная деятельность</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><a href="#" class="dropdown-link">Отчеты по проектам</a></li>
                                    <li><a href="#" class="dropdown-link">Важнейшие результаты</a></li>
                                    <li><a href="#" class="dropdown-link">Годовые отчеты</a></li>
                                    <li><a href="#" class="dropdown-link">Деятельность в области ИТ</a></li>
                                    <li><a href="#" class="dropdown-link">Публикации сотрудников</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Document.svg" alt="" draggable="false">
                                    </span>
                                    <span>Издательская деятельность</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><a href="#" class="dropdown-link">Монографии</a></li>
                                    <li><a href="#" class="dropdown-link">Сборники научных трудов</a></li>
                                    <li><a href="#" class="dropdown-link">Учебные пособия</a></li>
                                    <li><a href="#" class="dropdown-link">Конференции</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Other.svg" alt="" draggable="false">
                                    </span>
                                    <span>Прочее</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><a href="#" class="dropdown-link">Экспедиции</a></li>
                                    <li><a href="#" class="dropdown-link">Конкурсы и вакансии</a></li>
                                    <li><a href="#" class="dropdown-link">Аттестация</a></li>
                                    <li><a href="#" class="dropdown-link">Сотрудничество</a></li>
                                    <li><a href="#" class="dropdown-link">Семинары</a></li>
                                    <li><a href="#" class="dropdown-link">Финансово-хозяйственная деятельность</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item dropdown">
                    <span class="dropdown-toggle menu-link">
                        Аспирантура
                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                    </span>
                    <div class="dropdown-content">
                        <div class="dropdown-column">
                            <div class="dropdown-group">
                                <div class="dropdown-block alter-block">
                                    <div class="dropdown-title alter-title">
                                        <span class="dropdown-icon">
                                            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                        </span>
                                        <span class="alter-link">Общая информация</span>
                                    </div>
                                    <p class="dropdown-desc">Образовательные программы, лицензия, стипендия и другое</p>
                                </div>
                                <div class="dropdown-block alter-block">
                                    <div class="dropdown-title alter-title">
                                        <span class="dropdown-icon">
                                            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                        </span>
                                        <span class="alter-link">Целевое обучение</span>
                                    </div>
                                    <p class="dropdown-desc">Положения и рекомендации</p>
                                </div>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-block alter-block">
                                    <div class="dropdown-title alter-title">
                                        <span class="dropdown-icon">
                                            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                        </span>
                                        <span class="alter-link">Аспирантам</span>
                                    </div>
                                    <p class="dropdown-desc">Расписание, учебные планы, сессия</p>
                                </div>
                                <div class="dropdown-block alter-block">
                                    <div class="dropdown-title alter-title">
                                        <span class="dropdown-icon">
                                            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                        </span>
                                        <span class="alter-link">Поступающим</span>
                                    </div>
                                    <p class="dropdown-desc">Правила приема, условия поступления</p>
                                </div>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-block alter-block">
                                    <div class="dropdown-title alter-title">
                                        <span class="dropdown-icon">
                                            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                        </span>
                                        <span class="alter-link">Полезные ссылки</span>
                                    </div>
                                    <p class="dropdown-desc">Необходимые руководства и ресурсы</p>
                                </div>
                                <div class="dropdown-block alter-block">
                                    <div class="dropdown-title alter-title">
                                        <span class="dropdown-icon">
                                            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                        </span>
                                        <span class="alter-link">Контактные данные</span>
                                    </div>
                                    <p class="dropdown-desc">Почта и контактный телефон</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-link">Документы</li>
                <li class="menu-item menu-link">Контакты</li>
            </ul>
        </div>
    </nav>
    <div class="adapt-btn">
        <?php echo do_shortcode( '[bvi text=""  ]' ); ?>
    </div>
</header>

<!-- <header>
    <nav class="header-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/menu.svg" alt="Меню" class="menu__icon">
        <div class="menu__item" onclick="location.href='/';">
            <p class="menu__item-label">Институт</p>
            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu__item">
            <p class="menu__item-label">Научная деятельность</p>
            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu__item">
            <p class="menu__item-label">Образование</p>
            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu__item">
            <p class="menu__item-label">Документы</p>
            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu__item">
            <p class="menu__item-label">Контакты</p>
            <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
    </nav>
    <div class="header-submenu">
        <div class="header-submenu__item">
            <img class="header-submenu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/search_icon.svg" alt="search" draggable="false">
        </div>
        <div class="header-submenu__divider"></div>
        <div class="header-submenu__item">
            <img class="header-submenu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/eye_icon.svg" alt="eye" draggable="false">
        </div>
        <div class="header-submenu__divider"></div>
        <div class="header-submenu__item header-submenu__item--lang-select" draggable="false">
            <p class="header-submenu__active-lang">RU</p>
            <img class="header-submenu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/language_arrow_icon.svg" alt="" draggable="false">
        </div>
    </div>
</header> -->
