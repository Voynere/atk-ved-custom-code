<?php
/**
 * Template Name: Подбор товаров из Китая
 * 
 * Шаблон для страницы "Подбор товаров из Китая"
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
            <h1 class="page-header__title">Подбор товаров из Китая</h1>
        </div>
    </section>

    <!-- ========== ОСНОВНОЙ КОНТЕНТ ========== -->
    <section class="product-search">
        <div class="container">
            <!-- Введение -->
            <div class="product-search__intro">
                <p class="product-search__description">Мы помогаем предпринимателям находить качественные товары в Китае по оптимальным ценам. Наши эксперты с многолетним опытом работы на китайском рынке возьмут на себя полный цикл подбора, проверки и организации поставок.</p>
            </div>

            <!-- ========== КЛЮЧЕВЫЕ ЭТАПЫ ========== -->
            <div class="product-search__steps">
                <h2 class="product-search__section-title">Как мы подбираем товары</h2>
                <div class="product-search__steps-grid">
                    <div class="step-card">
                        <div class="step-card__number">01</div>
                        <h3 class="step-card__title">Анализ спроса и ниши</h3>
                        <p class="step-card__description">Изучаем ваш бизнес, анализируем целевую аудиторию и определяем наиболее перспективные товарные категории.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-card__number">02</div>
                        <h3 class="step-card__title">Поиск поставщиков</h3>
                        <p class="step-card__description">Находим проверенных производителей на платформах 1688, Alibaba, Made-in-China с учетом ваших требований к качеству и цене.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-card__number">03</div>
                        <h3 class="step-card__title">Заказ образцов</h3>
                        <p class="step-card__description">Организуем доставку образцов товаров для оценки качества перед оформлением крупной партии.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-card__number">04</div>
                        <h3 class="step-card__title">Проверка качества</h3>
                        <p class="step-card__description">Проводим фото- и видеофиксацию товаров, проверяем соответствие заявленным характеристикам.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-card__number">05</div>
                        <h3 class="step-card__title">Согласование условий</h3>
                        <p class="step-card__description">Ведем переговоры с поставщиками, добиваемся лучших цен и условий сотрудничества.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-card__number">06</div>
                        <h3 class="step-card__title">Организация поставки</h3>
                        <p class="step-card__description">Координируем выкуп товара, консолидацию и отправку в Россию.</p>
                    </div>
                </div>
            </div>

            <!-- ========== ПЛАТФОРМЫ ========== -->
            <div class="product-search__platforms">
                <h2 class="product-search__section-title">Мы работаем с ведущими площадками Китая</h2>
                <div class="platforms-grid">
                    <div class="platform-card">
                        <div class="platform-card__icon">1688</div>
                        <p class="platform-card__description">Крупнейшая оптовая площадка Китая с миллионами товаров по заводским ценам</p>
                    </div>
                    <div class="platform-card">
                        <div class="platform-card__icon">Alibaba</div>
                        <p class="platform-card__description">Международная платформа для оптовых закупок с проверенными производителями</p>
                    </div>
                    <div class="platform-card">
                        <div class="platform-card__icon">Made-in-China</div>
                        <p class="platform-card__description">Китайская платформа с акцентом на качественное производство</p>
                    </div>
                    <div class="platform-card">
                        <div class="platform-card__icon">Taobao</div>
                        <p class="platform-card__description">Огромный выбор товаров для тестирования ниш и небольших партий</p>
                    </div>
                </div>
            </div>

            <!-- ========== ПРЕИМУЩЕСТВА ========== -->
            <div class="product-search__advantages">
                <h2 class="product-search__section-title">Почему выбирают нас</h2>
                <div class="advantages-grid">
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Экономия времени</h3>
                            <p class="advantage-item__description">Не тратьте дни на поиск поставщиков — мы найдем лучших за вас</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Снижение рисков</h3>
                            <p class="advantage-item__description">Проверяем поставщиков и качество товаров до отправки</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Оптимальные цены</h3>
                            <p class="advantage-item__description">Договариваемся о лучших условиях благодаря прямым контактам с фабриками</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Языковая поддержка</h3>
                            <p class="advantage-item__description">Наши специалисты свободно говорят на китайском и английском</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== ФОРМА ЗАЯВКИ ========== -->
            <div class="product-search__form">
                <div class="form-wrapper">
                    <h2 class="form-wrapper__title">Закажите подбор товара сейчас</h2>
                    <p class="form-wrapper__subtitle">Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут</p>
                    
                    <form id="product-search-form" class="product-search-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="ps-name" class="form-input" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="ps-phone" class="form-input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="ps-message" class="form-textarea" placeholder="Опишите, какие товары вас интересуют (категория, примерный объем, бюджет)" rows="4"></textarea>
                        </div>
                        
                        <!-- Строка с кнопкой и чекбоксом (как в faq-bottom) -->
                        <div class="form-actions-row">
                            <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                            
                            <div class="form-checkbox-wrapper">
                                <input type="checkbox" id="ps-privacy" class="form-checkbox-input" checked required>
                                <label for="ps-privacy" class="form-checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <div id="ps-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>