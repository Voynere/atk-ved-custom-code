<?php
/**
 * Template Name: Главная страница
 * 
 * Шаблон для главной страницы сайта АТК-ВЭД
 *
 * @package ATK_VED
 */

get_header();
?>

<main class="main">
    <!-- ========== HERO СЕКЦИЯ ========== -->
    <section class="hero">
        <div class="hero__grid">
            <!-- Левая колонка - преимущества -->
            <div class="hero__features">
                <div class="feature-item">
                    <div class="marker"></div>
                    <p class="feature-item__title">Опытные менеджеры</p>
                </div>
                <div class="feature-item">
                    <div class="marker"></div>
                    <p class="feature-item__title">Прозрачные цены</p>
                </div>
                <div class="feature-item">
                    <div class="marker"></div>
                    <p class="feature-item__title">Без минимальной цены</p>
                </div>
                <div class="feature-item">
                    <div class="marker"></div>
                    <p class="feature-item__title">База поставщиков</p>
                </div>
            </div>

            <!-- Правая колонка - видео -->
            <div class="hero__image-wrapper">
                <div class="hero__video-container">
                    <video class="hero__video" 
                           autoplay 
                           loop 
                           muted 
                           playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/vecteezy-three-men-in-hard-hats.webm" type="video/webm">
                    </video>
                </div>
            </div>

            <div class="hero__title-wrapper">
                <h1 class="hero__title">
                    <span class="sr-only">Товары для маркетплейсов из Китая оптом</span>
                    <span class="hero__title-desktop" aria-hidden="true">
                        <span class="hero__title-line1">Товары</span>
                        <span class="hero__title-line2">для маркетплейсов</span>
                        <span class="hero__title-line3">из Китая <span>оптом</span></span>
                    </span>
                    <span class="hero__title-mobile" aria-hidden="true">
                        <span class="hero__title-line1">Товары для</span>
                        <span class="hero__title-line2">маркетплейсов</span>
                        <span class="hero__title-line3">из Китая <span>оптом</span></span>
                    </span>
                </h1>
            </div>

            <!-- Маркетплейсы -->
            <div class="hero__marketplaces">
                <div class="marketplace-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-46.svg" 
                         alt="WILDBERRIES" 
                         class="marketplace-card__icon">
                    <span class="marketplace-card__text">WILDBERRIES</span>
                </div>
                <div class="marketplace-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ozon-icon-logo-1.svg" 
                         alt="OZON" 
                         class="marketplace-card__icon">
                    <span class="marketplace-card__text">OZON</span>
                </div>
                <div class="marketplace-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamarket.svg" 
                         alt="Я.Маркет" 
                         class="marketplace-card__icon">
                    <span class="marketplace-card__text">Я.Маркет</span>
                </div>
                <div class="marketplace-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-52.svg" 
                         alt="AliExpress" 
                         class="marketplace-card__icon">
                    <span class="marketplace-card__text">AliExpress</span>
                </div>
                <div class="marketplace-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-37.svg" 
                         alt="МЕГАМАРКЕТ" 
                         class="marketplace-card__icon">
                    <span class="marketplace-card__text">МЕГАМАРКЕТ</span>
                </div>
            </div>

            <!-- Кнопка для мобильных -->
            <div class="hero__mobile-button">
                <button class="btn-primary">Оставить заявку</button>
            </div>
        </div>
    </section>

    <!-- ========== НАШИ УСЛУГИ ========== -->
    <section class="services">
        <h2 class="services__title">НАШИ УСЛУГИ</h2>
        
        <div class="services__grid">
            <!-- Карточка 1 - Подбор товаров из Китая -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/podbor-tovarov-iz-kitaya/'); ?>" class="service-card__link">Подбор товаров из Китая</a>
                </h3>
                <p class="service-card__description">Имеем огромный опыт работы с компаниями из Китая, легко ориентируемся на рынке, а также готовы предоставить собственную базу поставщиков</p>
            </article>

            <!-- Карточка 2 - Выкуп товара с 1688 Alibaba и Taobao -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/vykup-tovara-s-1688-alibaba-i-taobao/'); ?>" class="service-card__link">Выкуп товара с 1688 Alibaba и Taobao</a>
                </h3>
                <p class="service-card__description">Мы поможем вам найти, выкупить и доставить товар с электронных площадок Китая под ключ</p>
            </article>

            <!-- Карточка 3 - Консолидация груза на складе в Китае -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/konsolidaciya-gruza-na-sklade-v-kitae/'); ?>" class="service-card__link">Консолидация груза на складе в Китае</a>
                </h3>
                <p class="service-card__description">Товары от нескольких поставщиков мы легко объединим в одну партию и консолидируем на складе компании в Китае, сделаем фото и видео ваших грузов перед отправкой</p>
            </article>

            <!-- Карточка 4 - Отправка товара -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/otpravka-tovara/'); ?>" class="service-card__link">Отправка товара</a>
                </h3>
                <p class="service-card__description">Мы учтём ваши пожелания, продумаем логистику и предложим несколько вариантов доставки: от самого быстрого до самого экономичного.</p>
            </article>

            <!-- Карточка 5 - Таможенное оформление -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/tamozhennoe-oformlenie/'); ?>" class="service-card__link">Таможенное оформление</a>
                </h3>
                <p class="service-card__description">Опытные декларанты подготовят необходимые документы, оптимизируют таможенные платежи</p>
            </article>

            <!-- Карточка 6 - Предоставление всех сертификатов и документов для продажи -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/predostavlenie-sertifikatov-i-dokumentov/'); ?>" class="service-card__link">Предоставление всех сертификатов и документов для продажи</a>
                </h3>
                <p class="service-card__description">Мы предоставляем полный комплект разрешительных документов на товар, позволяющий его дальнейшую законную реализацию на территории РФ</p>
            </article>

            <!-- Карточка 7 - Регистрация товаров в системе честный знак -->
            <article class="service-card">
                <div class="marker"></div>
                <h3 class="service-card__title">
                    <a href="<?php echo home_url('/registraciya-tovarov-v-sisteme-chestnyy-znak/'); ?>" class="service-card__link">Регистрация товаров в системе честный знак</a>
                </h3>
                <p class="service-card__description">Нанесение стикеров на товар на этапе производства в Китае, подготовка необходимых документов для выпуска товара в оборот на территории РФ</p>
            </article>
        </div> <!-- ЗАКРЫВАЮЩИЙ ТЕГ, КОТОРОГО НЕ ХВАТАЛО -->
    </section>

                    <!-- ========== БЛОК С ФОРМОЙ ========== -->
        <!-- ========== БЛОК С ФОРМОЙ ========== -->
    <div class="cta-wrapper">
        <section class="cta-block">
            <div class="cta-block__container">
                <div class="cta-block__left">
                    <h3 class="cta-block__title">
                        Найдем товар в Китае по вашему<br>
                        запросу и получим самое выгодное<br>
                        предложение от поставщика
                    </h3>
                    <p class="cta-block__subtitle">
                        Мы поможем найти, выкупить и доставить товары<br>
                        из Китая на самых выгодных условиях
                    </p>
                </div>
                
                <div class="cta-block__right">
                    <form id="cta-form" class="cta-block__form">
                        <div class="form-group">
                            <input type="text" id="cta-name" name="cta-name" class="form-input" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="cta-phone" name="cta-phone" class="form-input phone-mask" placeholder="+7" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Оставить заявку</button>
                        <div class="form-checkbox">
                            <input type="checkbox" id="cta-privacy" class="form-checkbox__input" checked required>
                            <label for="cta-privacy" class="form-checkbox__label">
                                Отправляя ваши данные, вы соглашаетесь с 
                                <a href="/privacy-policy" class="form-checkbox__link" target="_blank">политикой конфиденциальности</a>
                            </label>
                        </div>
                        <div id="cta-form-response" class="form-response"></div>
                    </form>
                </div>
            </div>
        </section>
        
        <!-- Картинка с тросами поверх блока -->
        <div class="cta-block__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/container-block.png" 
                 alt="Контейнер с грузом" 
                 class="cta-block__img">
        </div>
    </div>

    <!-- ========== СПОСОБЫ ДОСТАВКИ ========== -->
    <section class="delivery">
        <div class="delivery__container">
            <h2 class="delivery__title">
                <span class="delivery__title-line1">Способы и сроки доставки</span>
                <span class="delivery__title-line2">грузов</span>
            </h2>
            
            <div class="delivery__grid">
                <article class="delivery-card">
                    <div class="delivery-card__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/morem.svg" 
                             alt="Доставка морем"
                             width="56"
                             height="56">
                    </div>
                    <div class="delivery-card__content">
                        <h3 class="delivery-card__title">Доставка морем</h3>
                        <p class="delivery-card__description">Оптимальный способ перевозки как сборных грузов, так и контейнерных поставок.</p>
                        <p class="delivery-card__time">Доставка от 14 до 45 дней</p>
                    </div>
                </article>

                <article class="delivery-card">
                    <div class="delivery-card__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/autotransport.svg" 
                             alt="Автотранспорт"
                             width="56"
                             height="56">
                    </div>
                    <div class="delivery-card__content">
                        <h3 class="delivery-card__title">Автотранспорт</h3>
                        <p class="delivery-card__description">Если нужна быстрая доставка, отправим груз прямым авто из Китая в любую точку России.</p>
                        <p class="delivery-card__time">Доставка от 7 до 20 дней</p>
                    </div>
                </article>

                <article class="delivery-card">
                    <div class="delivery-card__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zhdtransport.svg" 
                             alt="Ж/Д доставка"
                             width="56"
                             height="56">
                    </div>
                    <div class="delivery-card__content">
                        <h3 class="delivery-card__title">Ж/Д доставка</h3>
                        <p class="delivery-card__description">Единственный способ доставки, на который не влияют погодные условия. Доставка поездом подойдёт как для контейнерных перевозок, так и для сборного груза.</p>
                        <p class="delivery-card__time">Доставка от 14 до 30 дней</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ========== ЭТАПЫ СОТРУДНИЧЕСТВА ========== -->
    <section class="steps">
        <h2 class="steps__title">Основные этапы сотрудничества</h2>
        
        <div class="steps__grid">
            <div class="step-item">
                <div class="step-item__number">1</div>
                <p class="step-item__text">Подготовка и поиск товара: Определение ниши, поиск поставщиков (Alibaba, 1688), заказ образцов и проверка их качества.</p>
            </div>
            <div class="step-item">
                <div class="step-item__number">2</div>
                <p class="step-item__text">Заключение договора и оплата: Оформление внешнеторгового контракта, инвойса и упаковочного листа. Оплата через банки с учетом валютного контроля.</p>
            </div>
            <div class="step-item">
                <div class="step-item__number">3</div>
                <p class="step-item__text">Выкуп и консолидация: Товар забирается у поставщика и доставляется на склад логистической компании в Китае для проверки, при необходимости переупаковки и формирования груза.</p>
            </div>
            <div class="step-item">
                <div class="step-item__number">4</div>
                <p class="step-item__text">Международная перевозка: Выбор способа доставки: Море: Самый дешевый, подходит для больших партий (40-50 дней). Авто: 10-20 дней, удобно для сборных грузов. Ж/Д: 14-35 дней. Авиа: Самый быстрый (15-20 дней), но дорогой.</p>
            </div>
            <div class="step-item">
                <div class="step-item__number">5</div>
                <p class="step-item__text">Таможенная очистка: Подготовка декларации, определение кодов ТН ВЭД, уплата пошлин и налогов.</p>
            </div>
            <div class="step-item">
                <div class="step-item__number">6</div>
                <p class="step-item__text">Доставка по РФ: Транспортировка до конечного склада или распределительного центра.</p>
            </div>
        </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="faq">
        <div class="container">
            <h2 class="faq__title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
            
            <div class="faq__wrapper">
                <div class="faq__image-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq.png" 
                         alt="FAQ" 
                         class="faq__image">
                </div>

                <div class="faq__questions-column">
                    <div class="faq-item">
                        <button class="faq-question js-faq-trigger">
                            <span>Какие гарантии вы даете</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/polygonfaqdown.svg" 
                                 alt="Открыть" 
                                 class="faq-arrow">
                        </button>
                        <div class="faq-answer" style="display: none;">
                            Мы используем современные логистические решения и обладаем опытными специалистами, что обеспечивает надёжность и эффективность предоставляемых нами услуг. Вы сможете следить за процессом доставки на каждом этапе с помощью персонального менеджера. Кроме того, мы предоставляем страхование грузов на случай возникновения непредвиденных ситуаций, гарантируя тем самым вашу финансовую безопасность.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question js-faq-trigger">
                            <span>Вы можете консолидировать товары от разных поставщиков на своём складе в Китае?</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/polygonfaqdown.svg" 
                                 alt="Открыть" 
                                 class="faq-arrow">
                        </button>
                        <div class="faq-answer" style="display: none;">
                            Да, мы можем консолидировать товары от разных поставщиков на нашем складе в Китае. Это позволяет оптимизировать логистику и снизить затраты на доставку.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question js-faq-trigger">
                            <span>В какой срок осуществляется доставка из Китая?</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/polygonfaqdown.svg" 
                                 alt="Открыть" 
                                 class="faq-arrow">
                        </button>
                        <div class="faq-answer" style="display: none;">
                            Сроки доставки зависят от выбранного способа: автотранспортом 18-25 дней, морем 18-45 дней, Ж/Д 18-25 дней. Точные сроки рассчитываются индивидуально под ваш груз.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question js-faq-trigger">
                            <span>Почему не стоит заказывать товары из Китая для маркетплейсов самостоятельно?</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/polygonfaqdown.svg" 
                                 alt="Открыть" 
                                 class="faq-arrow">
                        </button>
                        <div class="faq-answer" style="display: none;">
                            Самостоятельный заказ может привести к проблемам с таможней, переплатам за доставку, получению некачественного товара. Мы берем на себя все эти риски и гарантируем качество и соблюдение сроков.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>