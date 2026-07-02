<?php
/**
 * ATK-VED Theme Functions
 */

/**
 * Canonical public site URL for SEO outputs (robots, schema).
 * Uses home_url when it already points at atk-ved.ru; otherwise falls back
 * to production domain when WP Site URL is misconfigured (e.g. https://atk-ved).
 */
function atk_ved_canonical_site_url($path = '') {
    $home = home_url('/');
    $base = preg_match('#^https?://[^/]*atk-ved\.ru#i', $home)
        ? untrailingslashit(home_url())
        : 'https://atk-ved.ru';

    if ($path === '') {
        return $base;
    }

    return trailingslashit($base) . ltrim($path, '/');
}

// Поддержка темы
add_action('after_setup_theme', 'atk_ved_setup');
function atk_ved_setup() {
    // Поддержка переводов
    load_theme_textdomain('atk-ved', get_template_directory() . '/languages');
    
    // Регистрация меню
    register_nav_menus(array(
        'primary' => __('Основное меню', 'atk-ved'),
        'footer'  => __('Меню в подвале', 'atk-ved'),
    ));
    
    // Поддержка featured images
    add_theme_support('post-thumbnails');
    
    // Поддержка title-tag
    add_theme_support('title-tag');
    
    // HTML5 поддержка
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}

// Подключение стилей и скриптов
add_action('wp_enqueue_scripts', 'atk_ved_scripts');
function atk_ved_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Inter|Bona+Nova|Unbounded&display=swap', array(), null);
    
    // Основной стиль
    wp_enqueue_style('atk-ved-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Font Awesome для иконок (для кнопки наверх)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // JavaScript для интерактивности
    wp_enqueue_script('atk-ved-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Передаем данные в JavaScript
    wp_localize_script('atk-ved-script', 'atk_ved_ajax', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('atk_ved_nonce')
    ));
}

// Регистрация виджетов
add_action('widgets_init', 'atk_ved_widgets_init');
function atk_ved_widgets_init() {
    register_sidebar(array(
        'name'          => __('Сайдбар', 'atk-ved'),
        'id'            => 'sidebar-1',
        'description'   => __('Добавьте виджеты сюда', 'atk-ved'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

// Обработка AJAX отправки формы из блока cta
add_action('wp_ajax_send_cta_feedback', 'atk_ved_send_cta_feedback');
add_action('wp_ajax_nopriv_send_cta_feedback', 'atk_ved_send_cta_feedback');

function atk_ved_send_cta_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (блок Найдем товар)';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

// Обработка AJAX отправки формы из модального окна
add_action('wp_ajax_send_feedback', 'atk_ved_send_feedback');
add_action('wp_ajax_nopriv_send_feedback', 'atk_ved_send_feedback');

function atk_ved_send_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (модальное окно)';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

// Обработка AJAX отправки формы из блока FAQ-bottom
add_action('wp_ajax_send_faq_bottom_feedback', 'atk_ved_send_faq_bottom_feedback');
add_action('wp_ajax_nopriv_send_faq_bottom_feedback', 'atk_ved_send_faq_bottom_feedback');

function atk_ved_send_faq_bottom_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (блок вопросов)';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

// Обработка AJAX отправки формы со страницы О компании
add_action('wp_ajax_send_about_feedback', 'atk_ved_send_about_feedback');
add_action('wp_ajax_nopriv_send_about_feedback', 'atk_ved_send_about_feedback');

function atk_ved_send_about_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница О компании)';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

// Обработка AJAX отправки формы со страницы "Подбор товаров из Китая"
add_action('wp_ajax_send_product_search_feedback', 'atk_ved_send_product_search_feedback');
add_action('wp_ajax_nopriv_send_product_search_feedback', 'atk_ved_send_product_search_feedback');

function atk_ved_send_product_search_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Подбор товаров из Китая")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

// Обработка AJAX отправки формы со страницы "Выкуп товара с 1688 Alibaba и Taobao"
add_action('wp_ajax_send_purchase_feedback', 'atk_ved_send_purchase_feedback');
add_action('wp_ajax_nopriv_send_purchase_feedback', 'atk_ved_send_purchase_feedback');

function atk_ved_send_purchase_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Выкуп товара с 1688 Alibaba и Taobao")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

// Обработка AJAX отправки формы со страницы "Консолидация груза на складе в Китае"
add_action('wp_ajax_send_consolidation_feedback', 'atk_ved_send_consolidation_feedback');
add_action('wp_ajax_nopriv_send_consolidation_feedback', 'atk_ved_send_consolidation_feedback');

function atk_ved_send_consolidation_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Консолидация груза на складе в Китае")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}

/**
 * ========== КАСТОМНАЯ КАРТА САЙТА ==========
 */

// Отключение встроенной карты сайта WordPress
add_action('init', 'disable_wp_sitemap', 20);
function disable_wp_sitemap() {
    add_filter('wp_sitemaps_enabled', '__return_false');
}

// Настройка кастомной карты сайта
add_action('init', 'custom_sitemap_rewrite');
function custom_sitemap_rewrite() {
    add_rewrite_rule(
        'sitemap\.xml$',
        'index.php?custom_sitemap=1',
        'top'
    );
    add_rewrite_tag('%custom_sitemap%', '([^&]+)');
}

// Рендер кастомной карты
add_action('template_redirect', 'custom_sitemap_render');
function custom_sitemap_render() {
    if (get_query_var('custom_sitemap')) {
        $template = get_template_directory() . '/sitemap.php';
        if (file_exists($template)) {
            include $template;
        } else {
            status_header(404);
            echo 'Файл sitemap.php не найден в папке темы. Создайте его.';
        }
        exit;
    }
}

// Обновляем robots.txt
add_filter('robots_txt', 'custom_robots_txt', 10, 2);
function custom_robots_txt($output, $public) {
    $output = preg_replace('/Sitemap:.*\n?/i', '', $output);
    $output .= "\nSitemap: " . atk_ved_canonical_site_url('sitemap.xml') . "\n";
    return $output;
}

// Обновляем правила после активации темы
add_action('after_switch_theme', 'flush_rewrite_rules');

/**
 * ========== ЛЕНИВАЯ ЗАГРУЗКА ИЗОБРАЖЕНИЙ ==========
 */

add_filter('wp_get_attachment_image_attributes', 'atk_ved_add_lazy_loading', 10, 3);
function atk_ved_add_lazy_loading($attr, $attachment, $size) {
    if (!is_admin()) {
        $attr['loading'] = 'lazy';
    }
    return $attr;
}

add_filter('the_content', 'atk_ved_add_lazy_to_content');
function atk_ved_add_lazy_to_content($content) {
    if (!is_admin()) {
        $content = preg_replace('/<img(.*?)src=/i', '<img$1loading="lazy" src=', $content);
    }
    return $content;
}

/**
 * ========== НАСТРОЙКИ ТЕМЫ (CUSTOMIZER) ==========
 */

add_action('customize_register', 'atk_ved_customize_register');
function atk_ved_customize_register($wp_customize) {
    
    // Секция: Контактная информация
    $wp_customize->add_section('atk_ved_contacts', array(
        'title'    => __('Контактная информация', 'atk-ved'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('atk_ved_phone', array(
        'default'           => '+7 (994) 009-39-04',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_phone', array(
        'label'    => __('Телефон', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('atk_ved_phone_nsk', array(
        'default'           => '+7 (977) 089-21-02',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_phone_nsk', array(
        'label'    => __('Телефон (Новосибирск)', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('atk_ved_phone_msk', array(
        'default'           => '+7 (994) 110-61-25',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_phone_msk', array(
        'label'    => __('Телефон (Москва)', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('atk_ved_email', array(
        'default'           => 'info@atk-ved.ru',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_email', array(
        'label'    => __('Email', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'email',
    ));
    
    $wp_customize->add_setting('atk_ved_telegram', array(
        'default'           => 'https://t.me/SalesATK',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_telegram', array(
        'label'    => __('Telegram ссылка', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'url',
    ));
    
    $wp_customize->add_setting('atk_ved_address_vl', array(
        'default'           => '690048, проспект 100-летия Владивостока, д. 32 Д, 5 этаж',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_address_vl', array(
        'label'    => __('Адрес (Владивосток)', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('atk_ved_address_nsk', array(
        'default'           => '630075, ул. Богдана Хмельницкого, д. 2, офис 106',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_address_nsk', array(
        'label'    => __('Адрес (Новосибирск)', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('atk_ved_address_msk', array(
        'default'           => '121205, здание Технопарк Сколково, территория Сколково инновационного центра, ул. Большой бульвар, д. 42, строение 1',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('atk_ved_address_msk', array(
        'label'    => __('Адрес (Москва)', 'atk-ved'),
        'section'  => 'atk_ved_contacts',
        'type'     => 'textarea',
    ));
    
    // Секция для Schema.org изображения
    $wp_customize->add_section('atk_ved_schema', array(
        'title'    => __('Schema.org настройки', 'atk-ved'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('atk_ved_schema_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'atk_ved_schema_image', array(
        'label'    => __('Изображение для Schema.org (1200x630px)', 'atk-ved'),
        'section'  => 'atk_ved_schema',
        'settings' => 'atk_ved_schema_image',
    )));
}

add_action('customize_preview_init', 'atk_ved_customize_preview_js');
function atk_ved_customize_preview_js() {
    wp_enqueue_script('atk-ved-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery', 'customize-preview'), '1.0.0', true);
}

/**
 * ========== МИКРОРАЗМЕТКА SCHEMA.ORG ДЛЯ ВСЕХ СТРАНИЦ ==========
 *
 * Organization, WebSite, BreadcrumbList — тема (Yoast-дубли отключены ниже).
 */

add_filter('wpseo_schema_graph_pieces', 'atk_ved_disable_yoast_duplicate_schema', 11, 2);
function atk_ved_disable_yoast_duplicate_schema($pieces, $context) {
    $remove = array(
        'Yoast\WP\SEO\Generators\Schema\Organization',
        'Yoast\WP\SEO\Generators\Schema\WebSite',
        'Yoast\WP\SEO\Generators\Schema\Breadcrumb',
        'Yoast\WP\SEO\Generators\Schema\Article',
    );

    return array_values(array_filter($pieces, function ($piece) use ($remove) {
        foreach ($remove as $class) {
            if (class_exists($class) && $piece instanceof $class) {
                return false;
            }
        }
        return true;
    }));
}

/**
 * FAQ Q&A sets per page slug (visible blocks + FAQPage schema).
 */
function atk_ved_get_page_faq_items($slug = '') {
    if ($slug === '') {
        $slug = is_front_page() ? 'front' : get_post_field('post_name', get_queried_object_id());
    }

    $sets = array(
        'front' => array(
            array(
                'question' => 'Какие гарантии вы даете',
                'answer' => 'Мы используем современные логистические решения и обладаем опытными специалистами, что обеспечивает надёжность и эффективность предоставляемых нами услуг. Вы сможете следить за процессом доставки на каждом этапе с помощью персонального менеджера. Кроме того, мы предоставляем страхование грузов на случай возникновения непредвиденных ситуаций, гарантируя тем самым вашу финансовую безопасность.',
            ),
            array(
                'question' => 'Вы можете консолидировать товары от разных поставщиков на своём складе в Китае?',
                'answer' => 'Да, мы можем консолидировать товары от разных поставщиков на нашем складе в Китае. Это позволяет оптимизировать логистику и снизить затраты на доставку.',
            ),
            array(
                'question' => 'В какой срок осуществляется доставка из Китая?',
                'answer' => 'Сроки доставки зависят от выбранного способа: автотранспортом 18-25 дней, морем 18-45 дней, Ж/Д 18-25 дней. Точные сроки рассчитываются индивидуально под ваш груз.',
            ),
            array(
                'question' => 'Почему не стоит заказывать товары из Китая для маркетплейсов самостоятельно?',
                'answer' => 'Самостоятельный заказ может привести к проблемам с таможней, переплатам за доставку, получению некачественного товара. Мы берем на себя все эти риски и гарантируем качество и соблюдение сроков.',
            ),
        ),
        'predostavlenie-sertifikatov-i-dokumentov' => array(
            array(
                'question' => 'Какие документы нужны для продажи на Wildberries?',
                'answer' => 'Для Wildberries обычно требуются декларация или сертификат соответствия, отказное письмо (если сертификация не обязательна), данные о производителе и маркировка для подлежащих категорий. Мы подберём точный перечень под вашу категорию товара и оформим документы под требования площадки.',
            ),
            array(
                'question' => 'Какие документы нужны для Ozon?',
                'answer' => 'Ozon запрашивает разрешительные документы в зависимости от категории: декларацию, сертификат ТР ТС, СГР, пожарный сертификат или отказное письмо. Также нужны корректные данные о стране происхождения и маркировка «Честный знак» для обязательных категорий. Помогаем собрать полный пакет до загрузки карточки.',
            ),
            array(
                'question' => 'Что такое сертификат ТР ТС и когда он нужен?',
                'answer' => 'Сертификат соответствия ТР ТС подтверждает безопасность товара по техническим регламентам Таможенного союза. Он обязателен для ряда категорий: детские товары, косметика, обувь, часть электроники и другие. Если товар не входит в перечень обязательной сертификации, оформляется декларация или отказное письмо.',
            ),
            array(
                'question' => 'Нужно ли отказное письмо для маркетплейса?',
                'answer' => 'Отказное письмо подтверждает, что товар не подлежит обязательной сертификации. Маркетплейсы часто запрашивают его для категорий без обязательного сертификата — это снижает риск блокировки карточки при модерации.',
            ),
            array(
                'question' => 'Сколько стоит оформление документов на товар из Китая?',
                'answer' => 'Стоимость зависит от категории товара, необходимости лабораторных испытаний и типа документа. Декларация — от нескольких тысяч рублей, сертификат с испытаниями — дороже. Оставьте заявку — рассчитаем точную стоимость под ваш ассортимент за 15 минут.',
            ),
            array(
                'question' => 'Можно ли продавать на маркетплейсе без декларации соответствия?',
                'answer' => 'Если для категории требуется декларация или сертификат, продажа без документов приведёт к отказу в публикации или блокировке карточки. Для категорий без обязательной сертификации достаточно отказного письма. Мы заранее проверяем требования к вашему товару.',
            ),
        ),
        'registraciya-tovarov-v-sisteme-chestnyy-znak' => array(
            array(
                'question' => 'Какие товары подлежат маркировке «Честный знак»?',
                'answer' => 'Обязательной маркировке подлежат одежда, обувь, духи, лекарства, молочная продукция, вода, шины, табак и другие категории. Перечень расширяется — уточните необходимость маркировки для вашего товара у нашего специалиста.',
            ),
            array(
                'question' => 'Как зарегистрировать товар в системе «Честный знак»?',
                'answer' => 'Нужно зарегистрироваться в системе, получить электронную подпись, описать товар в личном кабинете, заказать коды Data Matrix и ввести их в оборот после ввоза. Мы сопровождаем все этапы: от регистрации до ввода в оборот.',
            ),
            array(
                'question' => 'Можно ли нанести маркировку в Китае?',
                'answer' => 'Да. Маркировку можно нанести на производстве или на складе в Китае до отправки в Россию. Это экономит время и снижает риск ошибок при приёмке на маркетплейсе. Мы передаём коды поставщику и контролируем качество нанесения.',
            ),
            array(
                'question' => 'Что такое код Data Matrix?',
                'answer' => 'Data Matrix — двумерный штрихкод с уникальным кодом маркировки для каждой единицы товара. Он содержит данные о товаре и позволяет отслеживать путь продукции от производителя до покупателя в системе «Честный знак».',
            ),
            array(
                'question' => 'Нужна ли маркировка для товаров с маркетплейсов из Китая?',
                'answer' => 'Если категория входит в перечень обязательной маркировки, продажа на Wildberries, Ozon и в рознице без кодов невозможна. Маркировку нужно заказать до ввоза и нанести до отгрузки на склад маркетплейса.',
            ),
            array(
                'question' => 'Как ввести товар в оборот после ввоза?',
                'answer' => 'После таможенного оформления коды маркировки вводятся в оборот в личном кабинете «Честный знак» с указанием документов о ввозе. Мы помогаем корректно оформить ввод, чтобы товар приняли на складе маркетплейса.',
            ),
            array(
                'question' => 'Сколько стоит маркировка одной единицы товара?',
                'answer' => 'Стоимость складывается из заказа кодов в системе, нанесения стикеров и сопровождения. Цена зависит от объёма партии и способа нанесения (на производстве или на складе). Рассчитаем стоимость под вашу партию по заявке.',
            ),
        ),
        'tamozhennoe-oformlenie' => array(
            array(
                'question' => 'Сколько времени занимает таможенное оформление?',
                'answer' => 'При полном пакете документов таможенная очистка занимает от 1 рабочего дня. Срок может увеличиться, если нужны дополнительные разрешения, лабораторные испытания или уточнение кода ТН ВЭД.',
            ),
            array(
                'question' => 'Какие документы нужны для таможни при импорте из Китая?',
                'answer' => 'Контракт, инвойс, упаковочный лист, транспортные документы (CMR, авианакладная, коносамент), сертификаты и декларации соответствия, при необходимости — лицензии и СГР. Мы проверяем комплект до подачи декларации.',
            ),
            array(
                'question' => 'Как рассчитывается пошлина на товар?',
                'answer' => 'Пошлина зависит от кода ТН ВЭД, таможенной стоимости груза и страны происхождения. Дополнительно начисляются НДС и при необходимости акциз. Мы рассчитываем платежи заранее и оптимизируем их в рамках закона.',
            ),
            array(
                'question' => 'Нужна ли сертификация до таможенного оформления?',
                'answer' => 'Для многих категорий товаров разрешительные документы требуются до подачи таможенной декларации. Без них груз не пройдёт очистку. Мы оформляем сертификаты и декларации параллельно с подготовкой таможенного пакета.',
            ),
            array(
                'question' => 'Что будет, если неправильно указать код ТН ВЭД?',
                'answer' => 'Неверный код ведёт к неправильному расчёту пошлин, доначислениям, штрафам и задержке груза. Наши декларанты классифицируют товар по действующим правилам и снижают риск корректировок со стороны таможни.',
            ),
        ),
    );

    return isset($sets[$slug]) ? $sets[$slug] : array();
}

function atk_ved_schema_faq(array $items, $page_url = '') {
    if (empty($items)) {
        return;
    }

    if ($page_url === '') {
        $page_url = is_front_page() ? atk_ved_canonical_site_url() : get_permalink();
    }

    $main_entity = array();
    foreach ($items as $item) {
        if (empty($item['question']) || empty($item['answer'])) {
            continue;
        }
        $main_entity[] = array(
            '@type' => 'Question',
            'name' => wp_strip_all_tags($item['question']),
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => wp_strip_all_tags($item['answer']),
            ),
        );
    }

    if (empty($main_entity)) {
        return;
    }

    $faq = array(
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $main_entity,
        'url' => $page_url,
    );

    echo '<script type="application/ld+json">' . wp_json_encode($faq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

add_action('wp_robots', 'atk_ved_noindex_uncategorized', 20);
function atk_ved_noindex_uncategorized($robots) {
    if (is_category('uncategorized')) {
        $robots['noindex'] = true;
        $robots['nofollow'] = true;
    }
    return $robots;
}

// Главный хук для добавления разметки
add_action('wp_head', 'atk_ved_add_schema_markup', 5);
function atk_ved_add_schema_markup() {
    
    // 1. Базовый Schema.org для организации (на всех страницах)
    atk_ved_schema_organization();
    
    // 2. Хлебные крошки (для всех страниц, кроме главной)
    if (!is_front_page() && !is_home()) {
        atk_ved_schema_breadcrumbs();
    }
    
    // 3. Разметка в зависимости от типа страницы
    if (is_front_page()) {
        atk_ved_schema_website();
        atk_ved_schema_local_business();
    } elseif (is_home()) {
        atk_ved_schema_blog_home();
    } elseif (is_single() && get_post_type() === 'post') {
        atk_ved_schema_article();
    } elseif (is_page()) {
        atk_ved_schema_webpage();
    } elseif (is_category() || is_tag()) {
        atk_ved_schema_collection_page();
    } elseif (is_search()) {
        atk_ved_schema_search_page();
    } elseif (is_404()) {
        atk_ved_schema_404_page();
    }

    $faq_slug = is_front_page() ? 'front' : get_post_field('post_name', get_queried_object_id());
    $faq_items = atk_ved_get_page_faq_items($faq_slug);
    if (!empty($faq_items)) {
        atk_ved_schema_faq($faq_items);
    }
}

// 1. Организация (базовая для всего сайта)
function atk_ved_schema_organization() {
    $logo_url = get_template_directory_uri() . '/assets/images/logo_atk-ved-2-9.png';
    $schema_image = get_theme_mod('atk_ved_schema_image', '');
    
    $image_url = !empty($schema_image) ? $schema_image : $logo_url;
    
    $site_name = get_bloginfo('name');
    if (empty($site_name)) {
        $site_name = 'АТК-ВЭД';
    }
    
    $organization = array(
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        '@id' => atk_ved_canonical_site_url('#organization'),
        'name' => $site_name,
        'url' => atk_ved_canonical_site_url(),
        'logo' => $logo_url,
        'image' => $image_url,
        'description' => get_bloginfo('description'),
        'email' => get_theme_mod('atk_ved_email', 'info@atk-ved.ru'),
        'telephone' => get_theme_mod('atk_ved_phone', '+7 (994) 009-39-04'),
        'address' => array(
            '@type' => 'PostalAddress',
            'addressLocality' => 'Владивосток',
            'addressRegion' => 'Приморский край',
            'streetAddress' => 'проспект 100-летия Владивостока, д. 32 Д, 5 этаж',
            'postalCode' => '690048',
            'addressCountry' => 'RU'
        ),
        'sameAs' => array(
            'https://t.me/SalesATK'
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($organization, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

// 2. Веб-сайт (для главной страницы)
function atk_ved_schema_website() {
    $website = array(
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'url' => atk_ved_canonical_site_url(),
        'name' => get_bloginfo('name'),
        'description' => get_bloginfo('description'),
        'publisher' => array('@id' => atk_ved_canonical_site_url('#organization')),
    );
    
    echo '<script type="application/ld+json">' . json_encode($website, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

// 3. Локальный бизнес (для главной страницы)
function atk_ved_schema_local_business() {
    $logo_url = get_template_directory_uri() . '/assets/images/logo_atk-ved-2-9.png';
    
    $local_business = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => get_bloginfo('name'),
        'url' => atk_ved_canonical_site_url(),
        'logo' => $logo_url,
        'image' => $logo_url,
        'description' => get_bloginfo('description'),
        'address' => array(
            '@type' => 'PostalAddress',
            'addressLocality' => 'Владивосток',
            'addressRegion' => 'Приморский край',
            'streetAddress' => 'проспект 100-летия Владивостока, д. 32 Д, 5 этаж',
            'postalCode' => '690048',
            'addressCountry' => 'RU'
        ),
        'openingHours' => 'Mo-Fr 09:00-18:00',
        'telephone' => get_theme_mod('atk_ved_phone', '+7 (994) 009-39-04'),
        'priceRange' => '$$'
    );
    
    echo '<script type="application/ld+json">' . json_encode($local_business, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

// 4. Хлебные крошки (для всех страниц, кроме главной)
function atk_ved_schema_breadcrumbs() {
    $breadcrumbs = array();
    $position = 1;
    
    $breadcrumbs[] = array(
        '@type' => 'ListItem',
        'position' => $position,
        'name' => 'Главная',
        'item' => atk_ved_canonical_site_url()
    );
    $position++;
    
    if (is_page()) {
        $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
        foreach ($ancestors as $ancestor) {
            $breadcrumbs[] = array(
                '@type' => 'ListItem',
                'position' => $position,
                'name' => get_the_title($ancestor),
                'item' => get_permalink($ancestor)
            );
            $position++;
        }
        
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title()
        );
        
    } elseif (is_single() && get_post_type() === 'post') {
        $blog_page_id = get_option('page_for_posts');
        if ($blog_page_id) {
            $breadcrumbs[] = array(
                '@type' => 'ListItem',
                'position' => $position,
                'name' => get_the_title($blog_page_id),
                'item' => get_permalink($blog_page_id)
            );
            $position++;
        }
        
        $categories = get_the_category();
        if (!empty($categories)) {
            $breadcrumbs[] = array(
                '@type' => 'ListItem',
                'position' => $position,
                'name' => $categories[0]->name,
                'item' => get_category_link($categories[0]->term_id)
            );
            $position++;
        }
        
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title()
        );
        
    } elseif (is_category()) {
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => single_cat_title('', false)
        );
        
    } elseif (is_search()) {
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => 'Результаты поиска: ' . get_search_query()
        );
        
    } elseif (is_404()) {
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => 'Страница не найдена (404)'
        );
    }
    
    if (count($breadcrumbs) > 1) {
        $schema_breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbs
        );
        echo '<script type="application/ld+json">' . json_encode($schema_breadcrumbs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}

// 5. Статья (для записей блога)
function atk_ved_schema_article() {
    $author_name = get_the_author();
    $author_first_name = get_the_author_meta('first_name');
    $author_last_name = get_the_author_meta('last_name');
    
    if ($author_first_name && $author_last_name) {
        $author_name = $author_first_name . ' ' . $author_last_name;
    }
    
    $article = array(
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => get_the_title(),
        'description' => wp_trim_words(get_the_excerpt() ?: get_the_content(), 30, '...'),
        'url' => get_permalink(),
        'datePublished' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
        'author' => array(
            '@type' => 'Person',
            'name' => $author_name
        ),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'logo' => array(
                '@type' => 'ImageObject',
                'url' => get_template_directory_uri() . '/assets/images/logo_atk-ved-2-9.png'
            )
        ),
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id' => get_permalink()
        )
    );
    
    if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full');
        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        
        $article['image'] = array(
            '@type' => 'ImageObject',
            'url' => $thumbnail_url,
            'alt' => $thumbnail_alt ?: get_the_title()
        );
    }
    
    echo '<script type="application/ld+json">' . json_encode($article, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

// 6. Обычная веб-страница (включая страницу услуг и детальные услуги)
function atk_ved_schema_webpage() {
    // Получаем slug страницы
    $slug = get_post_field('post_name', get_the_ID());
    
    // Массив slug'ов детальных страниц услуг
    $service_pages = array(
        'podbor-tovarov-iz-kitaya',
        'vykup-tovara-s-1688-alibaba-i-taobao',
        'konsolidaciya-gruza-na-sklade-v-kitae',
        'otpravka-tovara',
        'tamozhennoe-oformlenie',
        'predostavlenie-sertifikatov-i-dokumentov',
        'registraciya-tovarov-v-sisteme-chestnyy-znak'
    );
    
    // Для отладки - временно раскомментируйте, чтобы увидеть slug в исходном коде
    // echo '<!-- DEBUG: текущий slug = ' . $slug . ' -->' . "\n";
    
    // Проверяем, является ли страница страницей списка услуг
    if ($slug === 'uslugi') {
        // Специальная разметка для страницы списка услуг (ItemList)
        $webpage = array(
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'name' => get_the_title(),
            'description' => wp_trim_words(get_the_excerpt() ?: get_the_content(), 30, '...'),
            'url' => get_permalink(),
            'numberOfItems' => 7,
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Подбор товаров из Китая',
                    'url' => home_url('/podbor-tovarov-iz-kitaya/')
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Выкуп товара с 1688 Alibaba и Taobao',
                    'url' => home_url('/vykup-tovara-s-1688-alibaba-i-taobao/')
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => 'Консолидация груза на складе в Китае',
                    'url' => home_url('/konsolidaciya-gruza-na-sklade-v-kitae/')
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 4,
                    'name' => 'Отправка товара',
                    'url' => home_url('/uslugi/#otpravka')
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 5,
                    'name' => 'Таможенное оформление',
                    'url' => home_url('/uslugi/#tamozhnya')
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 6,
                    'name' => 'Предоставление всех сертификатов и документов для продажи',
                    'url' => home_url('/uslugi/#certifikaty')
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 7,
                    'name' => 'Регистрация товаров в системе честный знак',
                    'url' => home_url('/uslugi/#chestnyy-znak')
                )
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($webpage, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        
    } elseif (in_array($slug, $service_pages)) {
        // Разметка для детальных страниц услуг (Service)
        $webpage = array(
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => get_the_title(),
            'description' => wp_trim_words(get_the_excerpt() ?: get_the_content(), 30, '...'),
            'url' => get_permalink(),
            'serviceType' => get_the_title(),
            'provider' => array(
                '@id' => atk_ved_canonical_site_url('#organization'),
            ),
            'areaServed' => array(
                '@type' => 'Country',
                'name' => 'RU'
            )
        );
        
        // Добавляем изображение для услуги, если есть
        if (has_post_thumbnail()) {
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full');
            $webpage['image'] = $thumbnail_url;
        }
        
        echo '<script type="application/ld+json">' . json_encode($webpage, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        
    } else {
        // Обычная веб-страница (WebPage)
        $webpage = array(
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => get_the_title(),
            'description' => wp_trim_words(get_the_excerpt() ?: get_the_content(), 30, '...'),
            'url' => get_permalink(),
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => get_bloginfo('name'),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_template_directory_uri() . '/assets/images/logo_atk-ved-2-9.png'
                )
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($webpage, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}

// 7. Разметка для главной страницы блога
function atk_ved_schema_blog_home() {
    // Проверяем, что это главная страница блога
    if (is_home() && !is_front_page()) {
        $blog_page_id = get_option('page_for_posts');
        $blog_title = get_the_title($blog_page_id);
        $blog_description = get_bloginfo('description');
        
        $blog_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            'name' => $blog_title,
            'description' => $blog_description,
            'url' => get_permalink($blog_page_id),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => get_bloginfo('name')
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($blog_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}

// 8. Страница коллекции (для категорий и тегов)
function atk_ved_schema_collection_page() {
    $collection = array(
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        'name' => single_cat_title('', false),
        'description' => strip_tags(category_description()),
        'url' => get_category_link(get_queried_object()),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => get_bloginfo('name')
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($collection, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

// 9. Страница поиска
function atk_ved_schema_search_page() {
    $search_page = array(
        '@context' => 'https://schema.org',
        '@type' => 'SearchResultsPage',
        'name' => 'Результаты поиска: ' . get_search_query(),
        'url' => get_search_link(),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => get_bloginfo('name')
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($search_page, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

// 10. Страница 404
function atk_ved_schema_404_page() {
    $error_page = array(
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Страница не найдена (404)',
        'description' => 'Запрашиваемая страница не существует или была перемещена',
        'url' => home_url('/404'),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => get_bloginfo('name')
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($error_page, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
// Обработка AJAX отправки формы со страницы "Отправка товара"
add_action('wp_ajax_send_shipping_feedback', 'atk_ved_send_shipping_feedback');
add_action('wp_ajax_nopriv_send_shipping_feedback', 'atk_ved_send_shipping_feedback');

function atk_ved_send_shipping_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Отправка товара")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}
/**
 * ========== РЕДИРЕКТ С КАТЕГОРИИ UNCATEGORIZED НА БЛОГ ==========
 */

add_action('template_redirect', 'atk_ved_redirect_uncategorized');
function atk_ved_redirect_uncategorized() {
    // Проверяем, что мы на странице категории uncategorized
    if (is_category('uncategorized')) {
        // Получаем URL страницы блога
        $blog_page_id = get_option('page_for_posts');
        if ($blog_page_id) {
            $blog_url = get_permalink($blog_page_id);
        } else {
            $blog_url = home_url('/blog/');
        }
        
        // Делаем постоянный редирект 301
        wp_redirect($blog_url, 301);
        exit();
    }
}
// Обработка AJAX отправки формы со страницы "Таможенное оформление"
add_action('wp_ajax_send_customs_feedback', 'atk_ved_send_customs_feedback');
add_action('wp_ajax_nopriv_send_customs_feedback', 'atk_ved_send_customs_feedback');

function atk_ved_send_customs_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Таможенное оформление")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}
// Обработка AJAX отправки формы со страницы "Сертификаты и документы"
add_action('wp_ajax_send_certificates_feedback', 'atk_ved_send_certificates_feedback');
add_action('wp_ajax_nopriv_send_certificates_feedback', 'atk_ved_send_certificates_feedback');

function atk_ved_send_certificates_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Сертификаты и документы")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}
// Обработка AJAX отправки формы со страницы "Честный знак"
add_action('wp_ajax_send_honest_sign_feedback', 'atk_ved_send_honest_sign_feedback');
add_action('wp_ajax_nopriv_send_honest_sign_feedback', 'atk_ved_send_honest_sign_feedback');

function atk_ved_send_honest_sign_feedback() {
    // Проверка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'atk_ved_nonce')) {
        wp_send_json_error('Ошибка безопасности');
        return;
    }
    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = sanitize_text_field($_POST['privacy']);
    
    if (!$privacy) {
        wp_send_json_error('Необходимо согласие на обработку персональных данных');
        return;
    }
    
    $to = 'info@atk-ved.ru';
    $subject = 'Новая заявка с сайта АТК-ВЭД (страница "Честный знак")';
    
    $body = "Имя: $name\n";
    $body .= "Телефон: $phone\n";
    $body .= "Сообщение: $message\n";
    $body .= "Согласие на обработку персональных данных: Да\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Ваша заявка успешно отправлена, наши менеджеры свяжутся с вами в ближайшее время');
    } else {
        wp_send_json_error('Ошибка при отправке. Попробуйте позже.');
    }
}