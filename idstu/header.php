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
<header>
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
        <div class="header-submenu__item">
            <img class="header-submenu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/profile_icon.svg" alt="profile" draggable="false">
        </div>
        <div class="header-submenu__divider"></div>
        <div class="header-submenu__item header-submenu__item--lang-select" draggable="false">
            <p class="header-submenu__active-lang">RU</p>
            <img class="header-submenu__item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/language_arrow_icon.svg" alt="" draggable="false">
        </div>
    </div>
</header>
