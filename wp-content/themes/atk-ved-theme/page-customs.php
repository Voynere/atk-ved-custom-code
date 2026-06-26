<?php
/**
 * Template Name: Таможенное оформление
 * 
 * Шаблон для страницы "Таможенное оформление"
 *
 * @package ATK_VED
 */

get_header();
?>

<main class="main">
    <!-- ========== ХЛЕБНЫЕ КРОШКИ ========== -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <!-- ========== ЗАГОЛОВОК СТРАНИЦЫ ========== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header__title">Таможенное оформление</h1>
        </div>
    </section>

    <!-- ========== ОСНОВНОЙ КОНТЕНТ ========== -->
    <section class="customs-page">
        <div class="container">
            <!-- Введение -->
            <div class="customs-page__intro">
                <p class="customs-page__description">Опытные декларанты подготовят необходимые документы, оптимизируют таможенные платежи. Таможенная очистка грузов занимает от 1 рабочего дня. Мы берем на себя полное сопровождение при прохождении таможни, минимизируя риски задержек и дополнительных расходов.</p>
            </div>

            <!-- ========== ЭТАПЫ ТАМОЖЕННОГО ОФОРМЛЕНИЯ ========== -->
            <div class="customs-page__stages">
                <h2 class="customs-page__section-title">Этапы таможенного оформления</h2>
                <div class="stages-grid">
                    <div class="stage-card">
                        <div class="stage-card__number">01</div>
                        <h3 class="stage-card__title">Подготовка документов</h3>
                        <p class="stage-card__description">Собираем и проверяем полный пакет документов: контракт, инвойс, упаковочный лист, транспортные документы, сертификаты и разрешения.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">02</div>
                        <h3 class="stage-card__title">Классификация товара</h3>
                        <p class="stage-card__description">Определяем код ТН ВЭД, от которого зависят ставки пошлин, налогов и необходимость лицензирования.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">03</div>
                        <h3 class="stage-card__title">Расчет платежей</h3>
                        <p class="stage-card__description">Рассчитываем таможенные пошлины, НДС, акцизы и утилизационный сбор. Оптимизируем платежи в рамках закона.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">04</div>
                        <h3 class="stage-card__title">Подача декларации</h3>
                        <p class="stage-card__description">Заполняем и подаем таможенную декларацию в электронном виде через систему "Личный кабинет участника ВЭД".</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">05</div>
                        <h3 class="stage-card__title">Таможенный досмотр</h3>
                        <p class="stage-card__description">При необходимости сопровождаем таможенный досмотр, предоставляем дополнительные документы и пояснения.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">06</div>
                        <h3 class="stage-card__title">Выпуск товара</h3>
                        <p class="stage-card__description">Получаем разрешение на выпуск товара. Срок оформления — от 1 рабочего дня.</p>
                    </div>
                </div>
            </div>

            <!-- ========== НАШИ ПРЕИМУЩЕСТВА ========== -->
            <div class="customs-page__advantages">
                <h2 class="customs-page__section-title">Почему выбирают нас</h2>
                <div class="advantages-grid">
                    <div class="advantage-card">
                        <div class="advantage-card__icon">⚡</div>
                        <h3 class="advantage-card__title">Скорость</h3>
                        <p class="advantage-card__description">Таможенная очистка грузов занимает от 1 рабочего дня</p>
                    </div>
                    <div class="advantage-card">
                        <div class="advantage-card__icon">💰</div>
                        <h3 class="advantage-card__title">Оптимизация</h3>
                        <p class="advantage-card__description">Помогаем законно оптимизировать таможенные платежи</p>
                    </div>
                    <div class="advantage-card">
                        <div class="advantage-card__icon">📋</div>
                        <h3 class="advantage-card__title">Полный пакет</h3>
                        <p class="advantage-card__description">Готовим все необходимые документы под ключ</p>
                    </div>
                    <div class="advantage-card">
                        <div class="advantage-card__icon">🎓</div>
                        <h3 class="advantage-card__title">Опыт и знания</h3>
                        <p class="advantage-card__description">Специалисты с многолетним опытом работы на таможне</p>
                    </div>
                </div>
            </div>

            <!-- ========== НЕОБХОДИМЫЕ ДОКУМЕНТЫ ========== -->
            <div class="customs-page__documents">
                <h2 class="customs-page__section-title">Какие документы нужны</h2>
                <div class="documents-grid">
                    <div class="document-item">
                        <div class="document-item__icon">📄</div>
                        <span>Внешнеторговый контракт</span>
                    </div>
                    <div class="document-item">
                        <div class="document-item__icon">📊</div>
                        <span>Инвойс (счет-фактура)</span>
                    </div>
                    <div class="document-item">
                        <div class="document-item__icon">📦</div>
                        <span>Упаковочный лист</span>
                    </div>
                    <div class="document-item">
                        <div class="document-item__icon">✈️</div>
                        <span>Транспортные документы (CMR, авианакладная, коносамент)</span>
                    </div>
                    <div class="document-item">
                        <div class="document-item__icon">✅</div>
                        <span>Сертификаты и декларации соответствия</span>
                    </div>
                    <div class="document-item">
                        <div class="document-item__icon">🏭</div>
                        <span>Разрешительные документы (лицензии, СГР)</span>
                    </div>
                </div>
            </div>

            <!-- ========== ФОРМА ЗАЯВКИ ========== -->
            <div class="customs-page__form">
                <div class="form-wrapper">
                    <h2 class="form-wrapper__title">Нужна помощь с таможней?</h2>
                    <p class="form-wrapper__subtitle">Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут. Проконсультируем по документам, рассчитаем пошлины и поможем с оформлением.</p>
                    
                    <form id="customs-form" class="customs-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="customs-name" class="form-input" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="customs-phone" class="form-input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="customs-message" class="form-textarea" placeholder="Опишите ваш груз: что везете, откуда, какой объем, есть ли уже документы" rows="4"></textarea>
                        </div>
                        
                        <div class="form-actions-row">
                            <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                            
                            <div class="form-checkbox-wrapper">
                                <input type="checkbox" id="customs-privacy" class="form-checkbox-input" checked required>
                                <label for="customs-privacy" class="form-checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <div id="customs-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>