<footer>
    <div class="footer_wrapper">
        <section class="contacts">
            <h1 class="contacts_header">Контакты</h1>
            <div>
                <p class="contacts_item"><b>Адрес:</b> 664033, Иркутск, ул. Лермонтова, 134</p>
                <p class="contacts_item"><b>Телефон:</b> +7 395 242-71-00</p>
                <p class="contacts_item"><b>Факс:</b> +7 395 251-16-16</p>
                <p class="contacts_item"><b>Почта:</b> idstu@icc.ru</p>
            </div>
        </section>
        <section class="navigation">
            <h1 class="navigation_header">Меню</h1>
            <div class="navigation_content">
                <div class="navigation_left-column">
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a href="/">Главная</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Об институте</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Документы</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Пресс-центр</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Карта сайта</a>
                    </div>
                </div>
                <div class="navigation_right-column">
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <?php echo '<a href="' . esc_url(get_permalink(get_page_by_path('vse-novosti')->ID)) . '">Новости</a>';?>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Аспирантура</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Образование</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Обращения</a>
                    </div>
                    <div class="navigation_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/footer_arrow_icon.svg" alt="" draggable="false">
                        <a>Контакты</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="social">
            <h1 class="social_header">Социальные сети</h1>
            <div class="social_content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vk_logo.svg" alt="VK Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/telegram_logo.svg" alt="Telegram Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube_logo.svg" alt="Youtube Logo">
            </div>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

