<?php
/**
 * Template Name: Выкуп товара с 1688 Alibaba и Taobao
 * 
 * Шаблон для страницы "Выкуп товара с 1688 Alibaba и Taobao"
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
            <h1 class="page-header__title">Выкуп товара с 1688 Alibaba и Taobao</h1>
        </div>
    </section>

    <!-- ========== ОСНОВНОЙ КОНТЕНТ ========== -->
    <section class="purchase-page">
        <div class="container">
            <!-- Введение -->
            <div class="purchase-page__intro">
                <p class="purchase-page__description">Мы поможем вам найти, выкупить и доставить товар с электронных площадок Китая под ключ. Наши специалисты с многолетним опытом работы на китайском рынке возьмут на себя весь процесс — от поиска товара до его доставки в Россию.</p>
            </div>

            <!-- ========== ПЛАТФОРМЫ ========== -->
            <div class="purchase-page__platforms">
                <h2 class="purchase-page__section-title">Платформы, с которыми мы работаем</h2>
                <div class="platforms-grid">
                    <div class="platform-card">
                        <div class="platform-card__icon">1688</div>
                        <p class="platform-card__description">Крупнейшая оптовая площадка Китая. Здесь представлены миллионы товаров по заводским ценам.</p>
                        <div class="platform-card__advantages">
                            <span>✓ Оптовые цены</span>
                            <span>✓ Прямые контакты с фабриками</span>
                        </div>
                    </div>
                    <div class="platform-card">
                        <div class="platform-card__icon">Alibaba</div>
                        <p class="platform-card__description">Международная платформа для оптовых закупок с проверенными производителями.</p>
                        <div class="platform-card__advantages">
                            <span>✓ Международная логистика</span>
                            <span>✓ Защита покупателя</span>
                        </div>
                    </div>
                    <div class="platform-card">
                        <div class="platform-card__icon">Taobao</div>
                        <p class="platform-card__description">Огромный выбор товаров для тестирования ниш и небольших партий.</p>
                        <div class="platform-card__advantages">
                            <span>✓ Низкий порог входа</span>
                            <span>✓ Тестирование рынка</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== ПРОЦЕСС ВЫКУПА ========== -->
            <div class="purchase-page__process">
                <h2 class="purchase-page__section-title">Как происходит выкуп товара</h2>
                <div class="process-grid">
                    <div class="process-step">
                        <div class="process-step__number">01</div>
                        <h3 class="process-step__title">Поиск товара</h3>
                        <p class="process-step__description">Вы отправляете ссылки на интересующие товары, либо описываете категорию — мы находим лучшие предложения.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">02</div>
                        <h3 class="process-step__title">Проверка поставщика</h3>
                        <p class="process-step__description">Проверяем рейтинг, историю продаж и отзывы. Исключаем риски работы с мошенниками.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">03</div>
                        <h3 class="process-step__title">Заказ образцов</h3>
                        <p class="process-step__description">При необходимости заказываем образцы для проверки качества перед закупкой крупной партии.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">04</div>
                        <h3 class="process-step__title">Согласование цены</h3>
                        <p class="process-step__description">Ведем переговоры с продавцом, добиваемся лучших цен и условий.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">05</div>
                        <h3 class="process-step__title">Выкуп и оплата</h3>
                        <p class="process-step__description">Производим оплату товара на площадке, получаем трек-номер для отслеживания.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">06</div>
                        <h3 class="process-step__title">Приемка на складе</h3>
                        <p class="process-step__description">Товар поступает на наш склад в Китае, где мы проверяем его целостность и соответствие.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">07</div>
                        <h3 class="process-step__title">Консолидация</h3>
                        <p class="process-step__description">Объединяем товары от разных поставщиков в одну партию для экономии на доставке.</p>
                    </div>
                    <div class="process-step">
                        <div class="process-step__number">08</div>
                        <h3 class="process-step__title">Отправка в Россию</h3>
                        <p class="process-step__description">Организуем доставку выбранным вами способом: авиа, море, авто или Ж/Д.</p>
                    </div>
                </div>
            </div>

            <!-- ========== ПРЕИМУЩЕСТВА ========== -->
            <div class="purchase-page__advantages">
                <h2 class="purchase-page__section-title">Почему выбирают наш выкуп</h2>
                <div class="advantages-grid">
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Экономия на закупке</h3>
                            <p class="advantage-item__description">Закупаем по оптовым ценам, экономим до 30% по сравнению с розничными закупками</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Проверка качества</h3>
                            <p class="advantage-item__description">Фото- и видеоотчет товаров на складе перед отправкой</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Защита от мошенников</h3>
                            <p class="advantage-item__description">Работаем только с проверенными поставщиками, возвращаем деньги при проблемах</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Прозрачность</h3>
                            <p class="advantage-item__description">Полная отчетность по каждому этапу, чеки и документы</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Языковая поддержка</h3>
                            <p class="advantage-item__description">Наши менеджеры свободно говорят на китайском и английском</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Консолидация грузов</h3>
                            <p class="advantage-item__description">Объединяем заказы от разных поставщиков в одну партию</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== ФОРМА ЗАЯВКИ ========== -->
            <div class="purchase-page__form">
                <div class="form-wrapper">
                    <h2 class="form-wrapper__title">Закажите выкуп товара сейчас</h2>
                    <p class="form-wrapper__subtitle">Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут</p>
                    
                    <form id="purchase-form" class="purchase-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="purchase-name" class="form-input" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="purchase-phone" class="form-input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="purchase-message" class="form-textarea" placeholder="Опишите, какие товары вас интересуют (ссылки на товары, категория, примерный объем)" rows="4"></textarea>
                        </div>
                        
                        <div class="form-actions-row">
                            <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                            
                            <div class="form-checkbox-wrapper">
                                <input type="checkbox" id="purchase-privacy" class="form-checkbox-input" checked required>
                                <label for="purchase-privacy" class="form-checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <div id="purchase-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>