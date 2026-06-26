<?php
/**
 * Template Name: Регистрация товаров в системе Честный знак
 * 
 * Шаблон для страницы "Регистрация товаров в системе честный знак"
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
            <h1 class="page-header__title">Регистрация товаров в системе Честный знак</h1>
        </div>
    </section>

    <!-- ========== ОСНОВНОЙ КОНТЕНТ ========== -->
    <section class="honest-sign-page">
        <div class="container">
            <!-- Введение -->
            <div class="honest-sign-page__intro">
                <p class="honest-sign-page__description">Система маркировки «Честный знак» — это обязательное требование для многих категорий товаров в России. Мы поможем зарегистрировать вашу продукцию в системе, подготовим необходимые документы и организуем нанесение стикеров на этапе производства в Китае.</p>
            </div>

            <!-- ========== ЧТО ТАКОЕ ЧЕСТНЫЙ ЗНАК ========== -->
            <div class="honest-sign-page__info">
                <div class="info-block">
                    <h2 class="honest-sign-page__section-title">Что такое система «Честный знак»?</h2>
                    <p class="info-block__text">«Честный знак» — это государственная система маркировки товаров, которая позволяет отслеживать путь продукции от производителя до конечного потребителя. Каждый товар получает уникальный код Data Matrix, который содержит информацию о производителе, дате выпуска, сертификатах и других важных данных.</p>
                    <p class="info-block__text">С 2024-2025 годов маркировка стала обязательной для широкого перечня товаров. Без кодов маркировки продажа на маркетплейсах и в розничных сетях невозможна.</p>
                </div>
            </div>

            <!-- ========== КАКИЕ ТОВАРЫ ПОДЛЕЖАТ МАРКИРОВКЕ ========== -->
            <div class="honest-sign-page__categories">
                <h2 class="honest-sign-page__section-title">Какие товары подлежат маркировке</h2>
                <div class="categories-grid">
                    <div class="category-card">👕 Табачная продукция</div>
                    <div class="category-card">👗 Одежда и текстиль</div>
                    <div class="category-card">👟 Обувь</div>
                    <div class="category-card">💊 Лекарства</div>
                    <div class="category-card">🧴 Духи и туалетная вода</div>
                    <div class="category-card">📸 Фототехника</div>
                    <div class="category-card">🛞 Шины и автопокрышки</div>
                    <div class="category-card">🥛 Молочная продукция</div>
                    <div class="category-card">💧 Упакованная вода</div>
                    <div class="category-card">🍺 Пиво и слабоалкогольные напитки</div>
                    <div class="category-card">🦷 Биологически активные добавки</div>
                    <div class="category-card">🪑 Кресла-коляски</div>
                </div>
                <p class="categories-note">* Список постоянно расширяется. Уточните необходимость маркировки для вашего товара у нашего специалиста.</p>
            </div>

            <!-- ========== ЭТАПЫ РАБОТЫ ========== -->
            <div class="honest-sign-page__stages">
                <h2 class="honest-sign-page__section-title">Как мы помогаем с маркировкой</h2>
                <div class="stages-grid">
                    <div class="stage-card">
                        <div class="stage-card__number">01</div>
                        <h3 class="stage-card__title">Регистрация в системе</h3>
                        <p class="stage-card__description">Помогаем зарегистрироваться в системе «Честный знак», получить электронную подпись и доступ к личному кабинету.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">02</div>
                        <h3 class="stage-card__title">Описание товаров</h3>
                        <p class="stage-card__description">Вносим информацию о ваших товарах в систему: наименование, бренд, артикул, страна происхождения, сертификаты.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">03</div>
                        <h3 class="stage-card__title">Заказ кодов маркировки</h3>
                        <p class="stage-card__description">Заказываем необходимое количество кодов Data Matrix в системе «Честный знак».</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">04</div>
                        <h3 class="stage-card__title">Передача кодов поставщику</h3>
                        <p class="stage-card__description">Передаем сгенерированные коды вашему поставщику в Китае для нанесения на товар.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">05</div>
                        <h3 class="stage-card__title">Контроль нанесения</h3>
                        <p class="stage-card__description">Проверяем качество нанесения стикеров на складе в Китае, делаем фото- и видеоотчет.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">06</div>
                        <h3 class="stage-card__title">Ввод в оборот</h3>
                        <p class="stage-card__description">После ввоза товара помогаем ввести коды маркировки в оборот в системе «Честный знак».</p>
                    </div>
                </div>
            </div>

            <!-- ========== НАНЕСЕНИЕ МАРКИРОВКИ В КИТАЕ ========== -->
            <div class="honest-sign-page__china">
                <h2 class="honest-sign-page__section-title">Нанесение маркировки в Китае</h2>
                <div class="china-grid">
                    <div class="china-card">
                        <div class="china-card__icon">🏭</div>
                        <h3 class="china-card__title">На производстве</h3>
                        <p class="china-card__description">Организуем нанесение стикеров Data Matrix непосредственно на этапе производства товара. Это самый эффективный и экономичный способ.</p>
                    </div>
                    <div class="china-card">
                        <div class="china-card__icon">📦</div>
                        <h3 class="china-card__title">На складе в Китае</h3>
                        <p class="china-card__description">Если товар уже произведен, мы можем нанести маркировку на нашем складе в Китае перед отправкой.</p>
                    </div>
                    <div class="china-card">
                        <div class="china-card__icon">🔍</div>
                        <h3 class="china-card__title">Проверка качества</h3>
                        <p class="china-card__description">Каждый стикер проверяем на читаемость и соответствие требованиям. Делаем фото- и видеоотчет.</p>
                    </div>
                </div>
            </div>

            <!-- ========== ПРЕИМУЩЕСТВА ========== -->
            <div class="honest-sign-page__advantages">
                <h2 class="honest-sign-page__section-title">Почему выбирают нас</h2>
                <div class="advantages-grid">
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Полное сопровождение</h3>
                            <p class="advantage-item__description">От регистрации в системе до ввода товара в оборот — мы берем на себя все этапы</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Работа с Китаем</h3>
                            <p class="advantage-item__description">Наносим маркировку на этапе производства или на складе в Китае — экономим ваше время</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Контроль качества</h3>
                            <p class="advantage-item__description">Проверяем каждый стикер, отправляем фото- и видеоотчет</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">✓</div>
                        <div>
                            <h3 class="advantage-item__title">Юридическая поддержка</h3>
                            <p class="advantage-item__description">Помогаем с оформлением всех необходимых документов для маркировки</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== ФОРМА ЗАЯВКИ ========== -->
            <div class="honest-sign-page__form">
                <div class="form-wrapper">
                    <h2 class="form-wrapper__title">Нужна маркировка для вашего товара?</h2>
                    <p class="form-wrapper__subtitle">Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут. Проконсультируем по системе «Честный знак» и рассчитаем стоимость маркировки.</p>
                    
                    <form id="honest-sign-form" class="honest-sign-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="hs-name" class="form-input" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="hs-phone" class="form-input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="hs-message" class="form-textarea" placeholder="Опишите ваш товар: категория, примерный объем поставки, нужно ли нанесение на производстве или на складе" rows="4"></textarea>
                        </div>
                        
                        <div class="form-actions-row">
                            <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                            
                            <div class="form-checkbox-wrapper">
                                <input type="checkbox" id="hs-privacy" class="form-checkbox-input" checked required>
                                <label for="hs-privacy" class="form-checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <div id="hs-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>