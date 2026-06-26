<?php
/**
 * Template Name: О компании
 * 
 * Шаблон для страницы "О компании"
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
            <h1 class="page-header__title">О компании</h1>
        </div>
    </section>

    <!-- ========== СЕКЦИЯ О КОМПАНИИ ========== -->
    <section class="about">
        <div class="container">
            <div class="about__content">
                <div class="about__text">
                    <p class="about__description">Наша компания обеспечивает полный цикл поставок из Китая «под ключ» со сроком таможенного оформления от 1 дня. Мы берем на себя поиск проверенных поставщиков на платформах 1688 и Alibaba, выкуп товара, складскую обработку и безопасную логистику. Эксперты компании подготовят необходимый пакет документов — от контракта до инвойса, гарантируя прохождение границы без задержек и переплат. Работаем с любыми объемами, оптимизируя ваши затраты.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== КЛЮЧЕВЫЕ УСЛУГИ ========== -->
    <section class="services-about">
        <div class="container">
            <h2 class="services-about__title">Наши ключевые услуги</h2>
            
            <div class="services-about__grid">
                <div class="service-about-card">
                    <div class="service-about-card__icon">1</div>
                    <h3 class="service-about-card__title">Поиск и проверка поставщиков</h3>
                    <p class="service-about-card__description">Подбираем надежных производителей на 1688, Alibaba и Made-in-China, исключая риски работы с мошенниками.</p>
                </div>

                <div class="service-about-card">
                    <div class="service-about-card__icon">2</div>
                    <h3 class="service-about-card__title">Логистические решения</h3>
                    <p class="service-about-card__description">Организуем доставку сборных (LCL) и целых контейнеров (FCL) морским, ж/д или автотранспортом.</p>
                </div>

                <div class="service-about-card">
                    <div class="service-about-card__icon">3</div>
                    <h3 class="service-about-card__title">Таможенное сопровождение</h3>
                    <p class="service-about-card__description">Подготовка внешнеторгового контракта, инвойса и упаковочного листа. Расчет и уплата таможенных платежей. Сертификация товаров в соответствии с требованиями РФ.</p>
                </div>

                <div class="service-about-card">
                    <div class="service-about-card__icon">4</div>
                    <h3 class="service-about-card__title">Контроль качества</h3>
                    <p class="service-about-card__description">Проверка партии на складе перед отправкой, чтобы вы получили товар без брака.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ПРЕИМУЩЕСТВА ========== -->
    <section class="advantages">
        <div class="container">
            <h2 class="advantages__title">Почему выбирают нас</h2>
            
            <div class="advantages__grid">
                <div class="advantage-card">
                    <div class="advantage-card__number">01</div>
                    <h3 class="advantage-card__title">Скорость</h3>
                    <p class="advantage-card__description">Таможенная очистка грузов занимает от 1 рабочего дня.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-card__number">02</div>
                    <h3 class="advantage-card__title">Прозрачность</h3>
                    <p class="advantage-card__description">Фиксированная стоимость услуг без скрытых комиссий.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-card__number">03</div>
                    <h3 class="advantage-card__title">Надежность</h3>
                    <p class="advantage-card__description">Полное юридическое сопровождение сделки и страхование грузов на всех этапах пути.</p>
                </div>
            </div>
            
            <p class="advantages__cta">Готовы масштабировать ваш бизнес с Китаем? Свяжитесь с нами сегодня для расчета стоимости первой поставки.</p>
        </div>
    </section>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>