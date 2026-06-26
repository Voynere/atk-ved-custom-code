<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Товары для маркетплейсов из Китая оптом">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- Фавиконки -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(home_url('/')); ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(home_url('/')); ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(home_url('/')); ?>favicon.ico">
    <link rel="manifest" href="<?php echo esc_url(home_url('/')); ?>site.webmanifest">
    <meta name="msapplication-TileColor" content="#D60000">
    <meta name="theme-color" content="#D60000">
    
    <!-- Android Chrome иконки -->
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(home_url('/')); ?>android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo esc_url(home_url('/')); ?>android-chrome-512x512.png">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="top-bar">
    <div class="container top-bar__container">
        <!-- Логотип -->
        <div class="logo">
            <?php if (!is_front_page()): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link" rel="home">
            <?php endif; ?>
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_atk-ved-2-9.png" 
                 alt="<?php bloginfo('name'); ?>" 
                 class="logo__image"
                 width="280"
                 height="42">
            
            <?php if (!is_front_page()): ?>
                </a>
            <?php endif; ?>
            
            <p class="logo__text">профессиональное таможенное оформление</p>
        </div>

        <!-- Правая часть топ-бара -->
        <div class="top-bar__right">
            <!-- Мобильные элементы -->
            <div class="top-bar__mobile">
                <a href="tel:+79940093904" class="mobile-phone-link" aria-label="Позвонить">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9845 21.5573 21.2136 21.352 21.4019C21.1467 21.5901 20.9041 21.7335 20.6405 21.8227C20.3769 21.9119 20.0979 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.17 18.85C8.77332 17.3147 6.72533 15.2667 5.19001 12.87C3.49921 10.2419 2.44664 7.27255 2.12001 4.18001C2.09526 3.90337 2.12802 3.62466 2.21643 3.36119C2.30484 3.09772 2.44717 2.85508 2.63432 2.64944C2.82146 2.44381 3.04923 2.27958 3.3031 2.16697C3.55697 2.05436 3.83145 1.99588 4.11001 1.99501H7.11001C7.59537 1.98892 8.06568 2.157 8.43376 2.46605C8.80183 2.77511 9.04196 3.20246 9.11001 3.67001C9.23638 4.63642 9.48144 5.58348 9.84001 6.49001C9.99499 6.88774 10.0426 7.31963 9.97877 7.7417C9.91497 8.16377 9.74202 8.5604 9.48001 8.89001L8.50001 10.12C9.96429 12.5655 11.9345 14.5357 14.38 16L15.61 15.02C15.9396 14.758 16.3362 14.585 16.7583 14.5212C17.1804 14.4574 17.6123 14.505 18.01 14.66C18.9165 15.0186 19.8636 15.2636 20.83 15.39C21.2993 15.4588 21.7278 15.7012 22.036 16.0714C22.3443 16.4417 22.5102 16.9139 22.5 17.4L22 16.92Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <button class="menu-toggle" aria-label="Меню">
                    <span></span>
                    <span></span>
                </button>
            </div>
            
            <!-- Навигация (десктоп) -->
            <nav class="nav" aria-label="Основное меню">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav__list',
                    'fallback_cb' => false,
                    'depth' => 1,
                    'items_wrap' => '<ul class="nav__list">%3$s</ul>',
                    'link_before' => '<span class="nav__link">',
                    'link_after' => '</span>',
                ));
                ?>
            </nav>

            <!-- Контакты (десктоп) -->
            <div class="top-bar__contacts">
                <!-- Иконка телефона с попапом (только для десктопа) -->
                <button class="desktop-phone-icon" id="phone-popup-trigger" aria-label="Позвонить">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9845 21.5573 21.2136 21.352 21.4019C21.1467 21.5901 20.9041 21.7335 20.6405 21.8227C20.3769 21.9119 20.0979 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.17 18.85C8.77332 17.3147 6.72533 15.2667 5.19001 12.87C3.49921 10.2419 2.44664 7.27255 2.12001 4.18001C2.09526 3.90337 2.12802 3.62466 2.21643 3.36119C2.30484 3.09772 2.44717 2.85508 2.63432 2.64944C2.82146 2.44381 3.04923 2.27958 3.3031 2.16697C3.55697 2.05436 3.83145 1.99588 4.11001 1.99501H7.11001C7.59537 1.98892 8.06568 2.157 8.43376 2.46605C8.80183 2.77511 9.04196 3.20246 9.11001 3.67001C9.23638 4.63642 9.48144 5.58348 9.84001 6.49001C9.99499 6.88774 10.0426 7.31963 9.97877 7.7417C9.91497 8.16377 9.74202 8.5604 9.48001 8.89001L8.50001 10.12C9.96429 12.5655 11.9345 14.5357 14.38 16L15.61 15.02C15.9396 14.758 16.3362 14.585 16.7583 14.5212C17.1804 14.4574 17.6123 14.505 18.01 14.66C18.9165 15.0186 19.8636 15.2636 20.83 15.39C21.2993 15.4588 21.7278 15.7012 22.036 16.0714C22.3443 16.4417 22.5102 16.9139 22.5 17.4L22 16.92Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <div class="social-links">
                    <a href="https://t.me/SalesATK" class="social-links__item" aria-label="Telegram" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-13.svg" 
                             alt="Telegram" 
                             class="social-links__icon">
                    </a>
                </div>
                
                <button class="btn-primary">Оставить заявку</button>
            </div>
        </div>

        <!-- Линия -->
        <div class="top-bar__line" aria-hidden="true"></div>
    </div>
    
    <!-- Мобильное меню -->
    <?php get_template_part('template-parts/mobile-menu'); ?>
</header>

<!-- ========== ПОПАП ТЕЛЕФОНА ========== -->
<div id="phone-popup" class="phone-popup">
    <div class="phone-popup__overlay"></div>
    <div class="phone-popup__content">
        <button class="phone-popup__close">&times;</button>
        <div class="phone-popup__icon">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9845 21.5573 21.2136 21.352 21.4019C21.1467 21.5901 20.9041 21.7335 20.6405 21.8227C20.3769 21.9119 20.0979 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.17 18.85C8.77332 17.3147 6.72533 15.2667 5.19001 12.87C3.49921 10.2419 2.44664 7.27255 2.12001 4.18001C2.09526 3.90337 2.12802 3.62466 2.21643 3.36119C2.30484 3.09772 2.44717 2.85508 2.63432 2.64944C2.82146 2.44381 3.04923 2.27958 3.3031 2.16697C3.55697 2.05436 3.83145 1.99588 4.11001 1.99501H7.11001C7.59537 1.98892 8.06568 2.157 8.43376 2.46605C8.80183 2.77511 9.04196 3.20246 9.11001 3.67001C9.23638 4.63642 9.48144 5.58348 9.84001 6.49001C9.99499 6.88774 10.0426 7.31963 9.97877 7.7417C9.91497 8.16377 9.74202 8.5604 9.48001 8.89001L8.50001 10.12C9.96429 12.5655 11.9345 14.5357 14.38 16L15.61 15.02C15.9396 14.758 16.3362 14.585 16.7583 14.5212C17.1804 14.4574 17.6123 14.505 18.01 14.66C18.9165 15.0186 19.8636 15.2636 20.83 15.39C21.2993 15.4588 21.7278 15.7012 22.036 16.0714C22.3443 16.4417 22.5102 16.9139 22.5 17.4L22 16.92Z" stroke="#D60000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            </svg>
        </div>
        <h3 class="phone-popup__title">Позвоните нам</h3>
        <p class="phone-popup__text">Вас проконсультирует наш менеджер по закупу</p>
        <a href="tel:+79940093904" class="phone-popup__number">+7 (994) 009-39-04</a>
        <button class="phone-popup__button btn-primary" id="phone-popup-close-btn">Закрыть</button>
    </div>
</div>

<script>
// НЕМЕДЛЕННАЯ ИНИЦИАЛИЗАЦИЯ ПОПАПА ТЕЛЕФОНА (до загрузки jQuery)
(function() {
    // Функция для проверки мобильного устройства
    function isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }
    
    // Запускаем только на десктопе
    if (!isMobile()) {
        // Функция инициализации попапа
        function initPhonePopup() {
            var trigger = document.getElementById('phone-popup-trigger');
            var popup = document.getElementById('phone-popup');
            
            if (trigger && popup) {
                var closeBtn = document.querySelector('.phone-popup__close');
                var closeBtn2 = document.getElementById('phone-popup-close-btn');
                var overlay = document.querySelector('.phone-popup__overlay');
                
                // Открытие попапа
                trigger.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    popup.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
                
                // Закрытие через крестик
                if (closeBtn) {
                    closeBtn.addEventListener('click', function() {
                        popup.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                }
                
                // Закрытие через кнопку "Закрыть"
                if (closeBtn2) {
                    closeBtn2.addEventListener('click', function() {
                        popup.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                }
                
                // Закрытие по клику на оверлей
                if (overlay) {
                    overlay.addEventListener('click', function() {
                        popup.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                }
                
                // Закрытие по Escape
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && popup.classList.contains('active')) {
                        popup.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            }
        }
        
        // Запускаем после загрузки DOM
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initPhonePopup);
        } else {
            initPhonePopup();
        }
    }
})();
</script>