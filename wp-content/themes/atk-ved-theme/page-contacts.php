<?php
/**
 * Template Name: Контакты
 * 
 * Шаблон для страницы контактов
 *
 * @package ATK_VED
 */

get_header();
?>

<main class="main">
    <?php get_template_part('template-parts/breadcrumbs'); ?>
    <!-- ========== ЗАГОЛОВОК СТРАНИЦЫ ========== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header__title">Контакты</h1>
        </div>
    </section>

    <!-- ========== КАРТОЧКИ С АДРЕСАМИ ========== -->
    <section class="contacts">
        <div class="container">
            <div class="contacts__grid">
                <!-- Владивосток -->
                <div class="contact-card">
                    <h2 class="contact-card__title">Владивосток</h2>
                    <div class="contact-card__address">
                        690048, проспект 100-летия Владивостока, д. 32 Д, 5 этаж
                    </div>
                    <div class="contact-card__row">
                        <span class="contact-card__label">тел. сот.:</span>
                        <a href="tel:+79940093904" class="contact-card__link">+7 (994) 009-39-04</a>
                    </div>
                    <div class="contact-card__row">
                        <span class="contact-card__label">e-mail:</span>
                        <a href="mailto:info@atk-ved.ru" class="contact-card__link">info@atk-ved.ru</a>
                    </div>
                </div>

                <!-- Новосибирск -->
                <div class="contact-card">
                    <h2 class="contact-card__title">Новосибирск</h2>
                    <div class="contact-card__address">
                        630075, ул. Богдана Хмельницкого, д. 2, офис 106
                    </div>
                    <div class="contact-card__row">
                        <span class="contact-card__label">тел. сот.:</span>
                        <a href="tel:+79770892102" class="contact-card__link">+7 (977) 089-21-02</a>
                    </div>
                    <div class="contact-card__row">
                        <span class="contact-card__label">e-mail:</span>
                        <a href="mailto:info@atk-ved.ru" class="contact-card__link">info@atk-ved.ru</a>
                    </div>
                </div>

                <!-- Москва -->
                <div class="contact-card">
                    <h2 class="contact-card__title">Москва</h2>
                    <div class="contact-card__address">
                        121205, здание Технопарк Сколково, территория Сколково инновационного центра, ул. Большой бульвар, д. 42, строение 1
                    </div>
                    <div class="contact-card__row">
                        <span class="contact-card__label">тел. сот.:</span>
                        <a href="tel:+79941106125" class="contact-card__link">+7 (994) 110-61-25</a>
                    </div>
                    <div class="contact-card__row">
                        <span class="contact-card__label">e-mail:</span>
                        <a href="mailto:info@atk-ved.ru" class="contact-card__link">info@atk-ved.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>