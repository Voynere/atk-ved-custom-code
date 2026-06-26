<?php
/**
 * Template Name: Услуги
 * 
 * Шаблон для страницы "Услуги"
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
            <h1 class="page-header__title">Наши услуги</h1>
        </div>
    </section>

    <!-- ========== ОПИСАНИЕ СТРАНИЦЫ ========== -->
    <section class="services-page">
        <div class="container">
            <div class="services-page__intro">
                <p class="services-page__description">Мы предлагаем полный цикл услуг по организации поставок товаров из Китая. Каждый этап — от поиска поставщиков до доставки в Россию — выполняется профессионально и в срок.</p>
            </div>

            <!-- ========== СПИСОК УСЛУГ ========== -->
            <div class="services-page__list">
                
                <!-- Услуга 1: Подбор товаров из Китая (с ссылкой) -->
                <div class="service-item" id="podbor-tovarov">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Подбор товаров из Китая</h2>
                        <p class="service-item__description">Имеем огромный опыт работы с компаниями из Китая, легко ориентируемся на рынке, а также готовы предоставить собственную базу поставщиков. Найдем для вас лучшие товары по оптимальным ценам.</p>
                        <div class="service-item__details">
                            <h3>Что входит в услугу:</h3>
                            <ul>
                                <li>Анализ спроса и подбор ниши</li>
                                <li>Поиск проверенных поставщиков на 1688, Alibaba, Made-in-China</li>
                                <li>Заказ и проверка образцов</li>
                                <li>Согласование цен и условий</li>
                                <li>Подготовка коммерческого предложения</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/podbor-tovarov-iz-kitaya/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">📦</div>
                </div>

                <!-- Услуга 2: Выкуп товара с 1688 Alibaba и Taobao -->
                <div class="service-item" id="vykup-tovara">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Выкуп товара с 1688 Alibaba и Taobao</h2>
                        <p class="service-item__description">Мы поможем вам найти, выкупить и доставить товар с электронных площадок Китая под ключ. Полное сопровождение сделки от оплаты до получения груза.</p>
                        <div class="service-item__details">
                            <h3>Что входит в услугу:</h3>
                            <ul>
                                <li>Поиск товара по ссылкам или описанию</li>
                                <li>Проверка поставщика и качества товара</li>
                                <li>Оплата товара на площадке</li>
                                <li>Отслеживание доставки до склада в Китае</li>
                                <li>Фото- и видеоотчет о получении</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/vykup-tovara-s-1688-alibaba-i-taobao/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">🛒</div>
                </div>

                <!-- Услуга 3: Консолидация груза на складе в Китае -->
                <div class="service-item" id="konsolidaciya">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Консолидация груза на складе в Китае</h2>
                        <p class="service-item__description">Товары от нескольких поставщиков мы легко объединим в одну партию и консолидируем на складе компании в Китае, сделаем фото и видео ваших грузов перед отправкой.</p>
                        <div class="service-item__details">
                            <h3>Что входит в услугу:</h3>
                            <ul>
                                <li>Приемка товаров от разных поставщиков</li>
                                <li>Проверка целостности и комплектации</li>
                                <li>Фото- и видеофиксация</li>
                                <li>Переупаковка при необходимости</li>
                                <li>Объединение в одну партию для отправки</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/konsolidaciya-gruza-na-sklade-v-kitae/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">📦</div>
                </div>

                <!-- Услуга 4: Отправка товара -->
                <div class="service-item" id="otpravka">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Отправка товара</h2>
                        <p class="service-item__description">Мы учтём ваши пожелания, продумаем логистику и предложим несколько вариантов доставки: от самого быстрого до самого экономичного.</p>
                        <div class="service-item__details">
                            <h3>Варианты доставки:</h3>
                            <ul>
                                <li>Авиаперевозка — 15-20 дней, для срочных поставок</li>
                                <li>Автотранспорт — 10-20 дней, оптимально для сборных грузов</li>
                                <li>Железнодорожная доставка — 14-35 дней</li>
                                <li>Морские контейнерные перевозки — 40-50 дней, для больших партий</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/otpravka-tovara/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">🚚</div>
                </div>

                <!-- Услуга 5: Таможенное оформление -->
                <div class="service-item" id="tamozhnya">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Таможенное оформление</h2>
                        <p class="service-item__description">Опытные декларанты подготовят необходимые документы, оптимизируют таможенные платежи. Таможенная очистка грузов занимает от 1 рабочего дня.</p>
                        <div class="service-item__details">
                            <h3>Что входит в услугу:</h3>
                            <ul>
                                <li>Подготовка таможенной декларации</li>
                                <li>Определение кодов ТН ВЭД</li>
                                <li>Расчет и уплата таможенных платежей</li>
                                <li>Сертификация товаров</li>
                                <li>Получение разрешительных документов</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/tamozhennoe-oformlenie/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">📋</div>
                </div>

                <!-- Услуга 6: Сертификаты и документы -->
                <div class="service-item" id="certifikaty">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Предоставление всех сертификатов и документов для продажи</h2>
                        <p class="service-item__description">Мы предоставляем полный комплект разрешительных документов на товар, позволяющий его дальнейшую законную реализацию на территории РФ.</p>
                        <div class="service-item__details">
                            <h3>Что мы оформляем:</h3>
                            <ul>
                                <li>Декларации соответствия</li>
                                <li>Сертификаты качества</li>
                                <li>Разрешительные документы</li>
                                <li>Экспертные заключения</li>
                                <li>Свидетельства о государственной регистрации</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/predostavlenie-sertifikatov-i-dokumentov/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">📄</div>
                </div>

                <!-- Услуга 7: Честный знак -->
                <div class="service-item" id="chestnyy-znak">
                    <div class="service-item__content">
                        <h2 class="service-item__title">Регистрация товаров в системе честный знак</h2>
                        <p class="service-item__description">Нанесение стикеров на товар на этапе производства в Китае, подготовка необходимых документов для выпуска товара в оборот на территории РФ.</p>
                        <div class="service-item__details">
                            <h3>Что мы делаем:</h3>
                            <ul>
                                <li>Регистрация товаров в системе "Честный знак"</li>
                                <li>Заказ и нанесение стикеров на производстве в Китае</li>
                                <li>Подготовка документов для выпуска товара в оборот</li>
                                <li>Полное сопровождение маркировки</li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/registraciya-tovarov-v-sisteme-chestnyy-znak/'); ?>" class="service-item__link">Подробнее →</a>
                    </div>
                    <div class="service-item__icon">🔖</div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>