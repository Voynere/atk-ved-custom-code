<?php
/**
 * Template Name: Предоставление сертификатов и документов
 * 
 * Шаблон для страницы "Предоставление всех сертификатов и документов для продажи"
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
            <h1 class="page-header__title">Предоставление всех сертификатов и документов для продажи</h1>
        </div>
    </section>

    <!-- ========== ОСНОВНОЙ КОНТЕНТ ========== -->
    <section class="certificates-page">
        <div class="container">
            <!-- Введение -->
            <div class="certificates-page__intro">
                <p class="certificates-page__description">Мы предоставляем полный комплект разрешительных документов на товар, позволяющий его дальнейшую законную реализацию на территории РФ. Наши специалисты помогут оформить все необходимые сертификаты и декларации соответствия, чтобы ваш товар соответствовал требованиям российского законодательства.</p>
            </div>

            <!-- ========== ВИДЫ ДОКУМЕНТОВ ========== -->
            <div class="certificates-page__types">
                <h2 class="certificates-page__section-title">Какие документы мы оформляем</h2>
                <div class="types-grid">
                    <div class="type-card">
                        <div class="type-card__icon">📋</div>
                        <h3 class="type-card__title">Декларация соответствия</h3>
                        <p class="type-card__description">Подтверждает безопасность товара для потребителя. Оформляется на продукцию, не требующую обязательной сертификации.</p>
                    </div>
                    <div class="type-card">
                        <div class="type-card__icon">✅</div>
                        <h3 class="type-card__title">Сертификат соответствия</h3>
                        <p class="type-card__description">Обязательный документ для товаров, включенных в перечень продукции, подлежащей сертификации (детские товары, парфюмерия, продукты питания).</p>
                    </div>
                    <div class="type-card">
                        <div class="type-card__icon">🔬</div>
                        <h3 class="type-card__title">Экспертное заключение</h3>
                        <p class="type-card__description">Подтверждает безопасность товара и его соответствие санитарно-эпидемиологическим нормам.</p>
                    </div>
                    <div class="type-card">
                        <div class="type-card__icon">🏭</div>
                        <h3 class="type-card__title">Свидетельство о государственной регистрации (СГР)</h3>
                        <p class="type-card__description">Необходимо для товаров, которые контактируют с человеком (косметика, средства гигиены, парфюмерия).</p>
                    </div>
                    <div class="type-card">
                        <div class="type-card__icon">🔥</div>
                        <h3 class="type-card__title">Пожарный сертификат</h3>
                        <p class="type-card__description">Требуется для товаров, связанных с электричеством, отоплением, строительством и отделкой.</p>
                    </div>
                    <div class="type-card">
                        <div class="type-card__icon">⚡</div>
                        <h3 class="type-card__title">Отказное письмо</h3>
                        <p class="type-card__description">Подтверждает, что товар не подлежит обязательной сертификации. Необходимо для маркетплейсов.</p>
                    </div>
                </div>
            </div>

            <!-- ========== ЭТАПЫ ОФОРМЛЕНИЯ ========== -->
            <div class="certificates-page__stages">
                <h2 class="certificates-page__section-title">Как мы оформляем документы</h2>
                <div class="stages-grid">
                    <div class="stage-card">
                        <div class="stage-card__number">01</div>
                        <h3 class="stage-card__title">Анализ товара</h3>
                        <p class="stage-card__description">Изучаем характеристики товара, определяем требования законодательства и необходимые виды сертификации.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">02</div>
                        <h3 class="stage-card__title">Подготовка документов</h3>
                        <p class="stage-card__description">Собираем и проверяем документацию от поставщика: технические паспорта, протоколы испытаний, инструкции.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">03</div>
                        <h3 class="stage-card__title">Лабораторные испытания</h3>
                        <p class="stage-card__description">При необходимости отправляем образцы в аккредитованную лабораторию для проведения испытаний.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">04</div>
                        <h3 class="stage-card__title">Оформление сертификата</h3>
                        <p class="stage-card__description">На основании протоколов испытаний оформляем сертификат или декларацию соответствия.</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">05</div>
                        <h3 class="stage-card__title">Регистрация в системе</h3>
                        <p class="stage-card__description">Регистрируем документы в едином реестре ФСА (Росаккредитация).</p>
                    </div>
                    <div class="stage-card">
                        <div class="stage-card__number">06</div>
                        <h3 class="stage-card__title">Передача клиенту</h3>
                        <p class="stage-card__description">Предоставляем готовые документы в электронном и бумажном виде.</p>
                    </div>
                </div>
            </div>

            <!-- ========== ДОКУМЕНТЫ ДЛЯ МАРКЕТПЛЕЙСОВ ========== -->
            <div class="certificates-page__marketplaces">
                <h2 class="certificates-page__section-title">Документы для Wildberries</h2>
                <p class="certificates-page__description">Для выхода на Wildberries нужен полный пакет разрешительных документов: декларация или сертификат соответствия, отказное письмо (если сертификация не обязательна), данные о производителе. Для маркируемых категорий — коды «Честный знак». Мы оформляем документы под требования WB и сопровождаем при модерации карточки.</p>

                <h2 class="certificates-page__section-title">Документы для Ozon</h2>
                <p class="certificates-page__description">Ozon проверяет разрешительные документы по категории товара: декларацию, сертификат ТР ТС, СГР, пожарный сертификат или отказное письмо. Также важны корректные сведения о стране происхождения и маркировка для обязательных категорий. Помогаем собрать пакет до загрузки товара на площадку.</p>

                <h2 class="certificates-page__section-title">Сертификат ТР ТС</h2>
                <p class="certificates-page__description">Сертификат соответствия техническим регламентам Таможенного союза обязателен для детских товаров, косметики, обуви, части электроники и других категорий. Если товар не входит в перечень обязательной сертификации, оформляем декларацию соответствия или отказное письмо для маркетплейса.</p>
            </div>

            <!-- ========== ДЛЯ КАКИХ ТОВАРОВ НУЖНЫ ДОКУМЕНТЫ ========== -->
            <div class="certificates-page__products">
                <h2 class="certificates-page__section-title">Какие товары требуют сертификации</h2>
                <div class="products-grid">
                    <div class="product-item">👶 Детские товары (игрушки, одежда, коляски)</div>
                    <div class="product-item">💄 Косметика и парфюмерия</div>
                    <div class="product-item">🔌 Электроника и бытовая техника</div>
                    <div class="product-item">👕 Одежда и обувь</div>
                    <div class="product-item">🍽️ Посуда и товары для кухни</div>
                    <div class="product-item">🛋️ Мебель</div>
                    <div class="product-item">🏗️ Строительные материалы</div>
                    <div class="product-item">🚗 Автотовары и аксессуары</div>
                    <div class="product-item">🧴 Бытовая химия</div>
                    <div class="product-item">📱 Аксессуары для гаджетов</div>
                </div>
                <p class="products-note">* Это неполный список. Уточните необходимость сертификации для вашего товара у нашего специалиста.</p>
            </div>

            <!-- ========== ПРЕИМУЩЕСТВА ========== -->
            <div class="certificates-page__advantages">
                <h2 class="certificates-page__section-title">Почему выбирают нас</h2>
                <div class="advantages-grid">
                    <div class="advantage-item">
                        <div class="advantage-item__icon">⚡</div>
                        <div>
                            <h3 class="advantage-item__title">Быстро</h3>
                            <p class="advantage-item__description">Оформляем документы от 1 дня. Срочный заказ — до 3 часов.</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">💼</div>
                        <div>
                            <h3 class="advantage-item__title">Опыт</h3>
                            <p class="advantage-item__description">Более 1000 успешно оформленных сертификатов для разных категорий товаров.</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">📝</div>
                        <div>
                            <h3 class="advantage-item__title">Гарантия</h3>
                            <p class="advantage-item__description">Все документы вносятся в реестр ФСА, имеют юридическую силу.</p>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item__icon">🤝</div>
                        <div>
                            <h3 class="advantage-item__title">Сопровождение</h3>
                            <p class="advantage-item__description">Помогаем с оформлением и при прохождении проверок маркетплейсов.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== ФОРМА ЗАЯВКИ ========== -->
            <div class="certificates-page__form">
                <div class="form-wrapper">
                    <h2 class="form-wrapper__title">Нужны документы для продажи?</h2>
                    <p class="form-wrapper__subtitle">Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут. Проконсультируем по необходимым документам и рассчитаем стоимость оформления.</p>
                    
                    <form id="certificates-form" class="certificates-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="cert-name" class="form-input" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="cert-phone" class="form-input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="cert-message" class="form-textarea" placeholder="Опишите ваш товар: что планируете продавать, на какой маркетплейс, есть ли уже документы от поставщика" rows="4"></textarea>
                        </div>
                        
                        <div class="form-actions-row">
                            <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                            
                            <div class="form-checkbox-wrapper">
                                <input type="checkbox" id="cert-privacy" class="form-checkbox-input" checked required>
                                <label for="cert-privacy" class="form-checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                        </div>
                        
                        <div id="cert-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    $faq_items = atk_ved_get_page_faq_items('predostavlenie-sertifikatov-i-dokumentov');
    $faq_title = 'Вопросы о сертификации и документах';
    include locate_template('template-parts/faq-accordion.php');
    ?>

</main>

<?php get_footer(); ?>