<?php
/**
 * Template part for displaying mobile menu
 *
 * @package ATK_VED
 */
?>

<div class="mobile-menu">
    <div class="mobile-menu__overlay"></div>
    <div class="mobile-menu__panel">
        <div class="mobile-menu__header">
            <div class="mobile-menu__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_atk-ved-2-9.png" 
                     alt="АТК-ВЭД" 
                     class="mobile-menu__logo-image"
                     width="148"
                     height="35">
                <p class="mobile-menu__logo-text">профессиональное таможенное оформление</p>
            </div>
            <button class="mobile-menu__close" aria-label="Закрыть меню">
                <span></span>
                <span></span>
            </button>
        </div>

        <nav class="mobile-menu__nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'mobile-menu__list',
                'fallback_cb' => false,
                'depth' => 1,
                'items_wrap' => '<ul class="mobile-menu__list">%3$s</ul>',
                'link_before' => '<span class="mobile-menu__link">',
                'link_after' => '</span>',
            ));
            ?>
        </nav>

        <div class="mobile-menu__contacts">
            <div class="mobile-menu__phones">
                <a href="tel:+79940093904" class="mobile-menu__phone">+7 (994) 009-39-04</a>
            </div>
            
            <div class="mobile-menu__social">
                <a href="https://t.me/SalesATK" class="mobile-menu__social-link" aria-label="Telegram" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-13.svg" 
                         alt="Telegram" 
                         class="mobile-menu__social-icon">
                </a>
            </div>
        </div>

        <div class="mobile-menu__button">
            <button class="btn-primary mobile-menu__btn">Оставить заявку</button>
        </div>
    </div>
</div>