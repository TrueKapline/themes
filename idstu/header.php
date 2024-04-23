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
    <div class="menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/menu.svg" alt="Меню" class="burger_icon">
        <div class="menu_button" onclick="location.href='/';">
            <p class="menu_text">Институт</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu_button">
            <p class="menu_text">Научная деятельность</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu_button">
            <p class="menu_text">Образование</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu_button">
            <p class="menu_text">Документы</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
        <div class="menu_button">
            <p class="menu_text">Контакты</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow_icon.svg" alt="" draggable="false">
        </div>
    </div>
    <div class="buttons">
        <img class="buttons_icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/search_icon.svg" alt="search" draggable="false">
        <div class="menu_divider"></div>
        <img class="buttons_icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/eye_icon.svg" alt="eye" draggable="false">
        <div class="menu_divider"></div>
        <img class="buttons_icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/profile_icon.svg" alt="profile" draggable="false">
        <div class="menu_divider"></div>
        <div class="menu_language-selection" draggable="false">
            <p class="menu_language">RU</p>
            <img class="buttons_icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/language_arrow_icon.svg" alt="" draggable="false">
        </div>
    </div>
</header>
