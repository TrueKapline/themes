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
            <label class="burger" id="burger">
                <input type="checkbox">
                <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line" d="M7 16 27 16"></path>
                </svg>
            </label>
        </div>
        <div class="navbar-desktop" id="menu">
            <ul class="menu">
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
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                    </span>
                                    <span>Пример</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><a href="#" class="dropdown-link">Ссылка 1</a></li>
                                    <li><a href="#" class="dropdown-link">Ссылка 2</a></li>
                                    <li><a href="#" class="dropdown-link">Ссылка 3</a></li>
                                    <li><a href="#" class="dropdown-link">Какой-то длинный текст со ссылкой</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                    </span>
                                    <span>Пример 2</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><a href="#" class="dropdown-link">Ссылка 1</a></li>
                                    <li><a href="#" class="dropdown-link">Ссылка 2</a></li>
                                    <li><a href="#" class="dropdown-link">Ссылка 3</a></li>
                                    <li><a href="#" class="dropdown-link">Какой-то длинный текст со ссылкой</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-group">
                                <div class="dropdown-title">
                                    <span class="dropdown-icon">
                                        <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/Институт.svg" alt="" draggable="false">
                                    </span>
                                    <span>Пример 3</span>
                                </div>
                                <ul class="dropdown-items">
                                    <li><a href="#" class="dropdown-link">Ссылка 1</a></li>
                                    <li><a href="#" class="dropdown-link">Ссылка 2</a></li>
                                    <li><a href="#" class="dropdown-link">Ссылка 3</a></li>
                                    <li><a href="#" class="dropdown-link">Какой-то длинный текст со ссылкой</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item">
                    Научная деятельность
                    <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                </li>
                <li class="menu-item">
                    Аспирантура
                    <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                </li>
                <li class="menu-item">
                    Документы
                    <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                </li>
                <li class="menu-item">
                    Контакты
                    <img class="menu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
                </li>
            </ul>
        </div>
    </nav>
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
