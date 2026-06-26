<?php
/**
 * Sitemap Generator for ATK-VED Theme
 * 
 * Динамическая генерация sitemap.xml
 * URL: /sitemap.xml
 */

// Запрещаем прямой доступ к файлу
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
    require_once ABSPATH . 'wp-load.php';
}

// Устанавливаем заголовки для XML
header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex, follow');

// Выводим XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

// 1. Главная страница
$home_url = home_url('/');
$home_lastmod = date('Y-m-d', strtotime(get_lastpostmodified('GMT')));
echo '<url>' . "\n";
echo '    <loc>' . esc_url($home_url) . '</loc>' . "\n";
echo '    <lastmod>' . $home_lastmod . '</lastmod>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>1.0</priority>' . "\n";
echo '</url>' . "\n";

// 2. Статические страницы (контакты, о компании, политика, услуги и т.д.)
$static_pages = get_pages(array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'exclude' => get_option('page_on_front') // Исключаем главную, она уже добавлена
));

foreach ($static_pages as $page) {
    $page_url = get_permalink($page->ID);
    $page_lastmod = get_the_modified_date('Y-m-d', $page->ID);
    
    // Определяем приоритет для разных страниц
    $priority = '0.8';
    $changefreq = 'monthly';
    
    // Повышаем приоритет для важных страниц
    $important_pages = array(
        'контакты', 'contacts', 'о-компании', 'about', 
        'блог', 'blog', 'услуги', 'services',
        'podbor-tovarov-iz-kitaya', 'vykup-tovara-s-1688-alibaba-i-taobao'
    );
    $page_slug = $page->post_name;
    
    if (in_array($page_slug, $important_pages)) {
        $priority = '0.9';
        $changefreq = 'weekly';
    }
    
    // Повышаем приоритет для страниц услуг
    if (strpos($page_slug, 'podbor') !== false || strpos($page_slug, 'vykup') !== false) {
        $priority = '0.9';
        $changefreq = 'weekly';
    }
    
    echo '<url>' . "\n";
    echo '    <loc>' . esc_url($page_url) . '</loc>' . "\n";
    echo '    <lastmod>' . $page_lastmod . '</lastmod>' . "\n";
    echo '    <changefreq>' . $changefreq . '</changefreq>' . "\n";
    echo '    <priority>' . $priority . '</priority>' . "\n";
    echo '</url>' . "\n";
}

// 3. Записи блога
$blog_posts = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1
));

foreach ($blog_posts as $post) {
    $post_url = get_permalink($post->ID);
    $post_lastmod = get_the_modified_date('Y-m-d', $post->ID);
    $post_date = get_the_date('Y-m-d', $post->ID);
    
    // Для новых записей повышаем приоритет
    $days_old = (time() - strtotime($post_date)) / (60 * 60 * 24);
    
    if ($days_old < 7) {
        $priority = '0.8';
        $changefreq = 'daily';
    } elseif ($days_old < 30) {
        $priority = '0.7';
        $changefreq = 'weekly';
    } else {
        $priority = '0.6';
        $changefreq = 'monthly';
    }
    
    echo '<url>' . "\n";
    echo '    <loc>' . esc_url($post_url) . '</loc>' . "\n";
    echo '    <lastmod>' . $post_lastmod . '</lastmod>' . "\n";
    echo '    <changefreq>' . $changefreq . '</changefreq>' . "\n";
    echo '    <priority>' . $priority . '</priority>' . "\n";
    echo '</url>' . "\n";
}

// 4. Рубрики (категории)
$categories = get_categories(array(
    'hide_empty' => true
));

foreach ($categories as $category) {
    $category_url = get_category_link($category->term_id);
    $category_count = $category->count;
    
    // Приоритет зависит от количества записей в рубрике
    if ($category_count > 10) {
        $priority = '0.6';
    } elseif ($category_count > 5) {
        $priority = '0.5';
    } else {
        $priority = '0.4';
    }
    
    echo '<url>' . "\n";
    echo '    <loc>' . esc_url($category_url) . '</loc>' . "\n";
    echo '    <changefreq>weekly</changefreq>' . "\n";
    echo '    <priority>' . $priority . '</priority>' . "\n";
    echo '</url>' . "\n";
}

// 5. Услуги (если есть кастомный тип записей)
$services = get_posts(array(
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => -1
));

foreach ($services as $service) {
    $service_url = get_permalink($service->ID);
    $service_lastmod = get_the_modified_date('Y-m-d', $service->ID);
    
    echo '<url>' . "\n";
    echo '    <loc>' . esc_url($service_url) . '</loc>' . "\n";
    echo '    <lastmod>' . $service_lastmod . '</lastmod>' . "\n";
    echo '    <changefreq>monthly</changefreq>' . "\n";
    echo '    <priority>0.7</priority>' . "\n";
    echo '</url>' . "\n";
}

echo '</urlset>';
?>