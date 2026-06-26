<?php
/**
 * Template Name: Отправка товара
 * 
 * Шаблон для страницы "Отправка товара"
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
            <h1 class="page-header__title">Отправка товара</h1>
        </div>
    </section>

    <!-- ========== ОСНОВНОЙ КОНТЕНТ ========== -->
    <section class="shipping-page">
        <div class="container">
            <!-- Введение -->
            <div class="shipping-page__intro">
                <p class="shipping-page__description">Мы учтём ваши пожелания, продумаем логистику и предложим несколько вариантов доставки: от самого быстрого до самого экономичного. Наша команда подберет оптимальный маршрут и способ транспортировки вашего груза из Китая в Россию.</p>
            </div>

            <!-- ========== ВАРИАНТЫ ДОСТАВКИ ========== -->
            <div class="shipping-page__methods">
                <h2 class="shipping-page__section-title">Способы доставки грузов</h2>
                <div class="methods-grid">
                    <div class="method-card">
                        <div class="method-card__icon">✈️</div>
                        <h3 class="method-card__title">Авиаперевозка</h3>
                        <p class="method-card__description">Самый быстрый способ доставки. Идеален для срочных поставок, пробных партий и товаров с ограниченным сроком годности.</p>
                        <ul class="method-card__features">
                            <li>Срок доставки: 5–10 дней</li>
                            <li>Подходит для небольших партий</li>
                            <li>Отслеживание на всем пути</li>
                        </ul>
                    </div>

                    <div class="method-card">
                        <div class="method-card__icon">🚚</div>
                        <h3 class="method-card__title">Автотранспорт</h3>
                        <p class="method-card__description">Оптимальный вариант для сборных грузов. Хороший баланс между скоростью и стоимостью доставки.</p>
                        <ul class="method-card__features">
                            <li>Срок доставки: 10–20 дней</li>
                            <li>Идеально для сборных грузов</li>
                            <li>Доставка "от двери до двери"</li>
                        </ul>
                    </div>

                    <div class="method-card">
                        <div class="method-card__icon">🚂</div>
                        <h3 class="method-card__title">Железнодорожная доставка</h3>
                        <p class="method-card__description">Надежный и стабильный способ, не зависящий от погодных условий. Отличный выбор для больших партий.</p>
                        <ul class="method-card__features">
                            <li>Срок доставки: 14–35 дней</li>
                            <li>Высокая надежность</li>
                            <li>Подходит для контейнерных перевозок</li>
                        </ul>
                    </div>

                    <div class="method-card">
                        <div class="method-card__icon">🚢</div>
                        <h3 class="method-card__title">Морская перевозка</h3>
                        <p class="method-card__description">Самый экономичный способ для крупных партий товара. Идеален для контейнерных поставок.</p>
                        <ul class="method-card__features">
                            <li>Срок доставки: 35–60 дней</li>
                            <li>Низкая стоимость за кг</li>
                            <li>Подходит для больших объемов</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ========== КАК МЫ ОТПРАВЛЯЕМ ========== -->
            <div class="shipping-page__process">
                <h2 class="shipping-page__section-title">Как происходит отправка</h2>
                <div class="process-grid">
                    <div class="process-step">
                        <div class="process-step__number">01</div>
                        <h3 class="process-step__title">Анализ груза</h3>
                        <p class="process-step__description">Изучаем характеристики вашего груза: вес, объем, тип товара, требования к температуре и хранению.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">02</div>
                        <h3 class="process-step__title">Подбор маршрута</h3>
                        <p class="process-step__description">Рассчитываем оптимальные маршруты, учитывая сроки и бюджет. Предлагаем несколько вариантов.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">03</div>
                        <h3 class="process-step__title">Оформление документов</h3>
                        <p class="process-step__description">Готовим полный пакет документов: транспортные накладные, инвойсы, упаковочные листы.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">04</div>
                        <h3 class="process-step__title">Отправка и отслеживание</h3>
                        <p class="process-step__description">Отправляем груз и предоставляем доступ к онлайн-отслеживанию на всем пути следования.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">05</div>
                        <h3 class="process-step__title">Таможенное оформление</h3>
                        <p class="process-step__description">Помогаем с прохождением таможни, подготовкой деклараций и уплатой пошлин.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">06</div>
                        <h3 class="process-step__title">Доставка до склада</h3>
                        <p class="process-step__description">Организуем доставку груза до вашего склада или распределительного центра в любой точке России.</p>
                    </div>
                </div>
            </div>

            <!-- ========== ПРЕИМУЩЕСТВА ========== -->
            <div class="shipping-page__advantages">
                <h2 class="shipping-page__section-title">Почему выбирают нашу логистику</h2>
                <div class="advantages-grid">
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Индивидуальный подход</h3>
                            <p class="advantage-item__description">Подбираем решение под ваш бюджет и сроки, а не предлагаем шаблонные варианты</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Прозрачность стоимости</h3>
                            <p class="advantage-item__description">Фиксируем стоимость в договоре — никаких скрытых платежей и неожиданных комиссий</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Страхование грузов</h3>
                            <p class="advantage-item__description">Страхуем ваш товар на время транспортировки — вы защищены от любых непредвиденных ситуаций</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Полное сопровождение</h3>
                            <p class="advantage-item__description">Личный менеджер на каждом этапе: от отправки до получения груза</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Оптимизация затрат</h3>
                            <p class="advantage-item__description">Помогаем снизить расходы на логистику за счет консолидации и выбора оптимального маршрута</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Юридическая поддержка</h3>
                            <p class="advantage-item__description">Помогаем с оформлением всех необходимых разрешительных документов</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== ФОРМА ЗАЯВКИ ========== -->
            <div class="shipping-page__form">
                <div class="form-wrapper">
                    <h2 class="form-wrapper__title">Рассчитайте стоимость доставки</h2>
                    <p class="form-wrapper__subtitle">Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут. Мы подберем оптимальный вариант доставки и рассчитаем точную стоимость.</p>
                    
                    <form id="shipping-form" class="shipping-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="ship-name" class="form-input" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="ship-phone" class="form-input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="ship-message" class="form-textarea" placeholder="Опишите груз: тип товара, примерный вес и объем, желаемые сроки доставки, город назначения" rows="4"></textarea>
                        </div>
                        
                        <div class="form-actions-row">
                            <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                            
                            <div class="form-checkbox-wrapper">
                                <input type="checkbox" id="ship-privacy" class="form-checkbox-input" checked required>
                                <label for="ship-privacy" class="form-checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <div id="ship-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>