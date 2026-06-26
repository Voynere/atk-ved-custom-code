<?php
/**
 * Template part for displaying breadcrumbs
 *
 * @package ATK_VED
 */

// Не показываем хлебные крошки на главной странице
if (is_front_page()) {
    return;
}
?>

<div class="breadcrumbs">
    <div class="container">
        <a href="<?php echo home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        
        <?php if (is_page()) : ?>
            <?php
            // Получаем slug текущей страницы
            $current_slug = get_post_field('post_name');
            
            // Список страниц услуг (детальные страницы)
            $service_pages = array(
                'podbor-tovarov-iz-kitaya',
                'vykup-tovara-s-1688-alibaba-i-taobao',
                'konsolidaciya-gruza-na-sklade-v-kitae',
                'otpravka-tovara',
                'tamozhennoe-oformlenie',
                'predostavlenie-sertifikatov-i-dokumentov',
                'registraciya-tovarov-v-sisteme-chestnyy-znak'
            );
            
            // Если это детальная страница услуги - добавляем ссылку на "Услуги"
            if (in_array($current_slug, $service_pages)) :
            ?>
                <a href="<?php echo home_url('/uslugi/'); ?>" class="breadcrumbs__link">Услуги</a>
                <span class="breadcrumbs__separator">/</span>
            <?php endif; ?>
            
            <?php
            // Получаем всех родителей для глубоких страниц
            $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
            foreach ($ancestors as $ancestor) :
                // Пропускаем страницу "Услуги", если она уже добавлена вручную
                $ancestor_slug = get_post_field('post_name', $ancestor);
                if ($ancestor_slug !== 'uslugi') :
            ?>
                <a href="<?php echo get_permalink($ancestor); ?>" class="breadcrumbs__link"><?php echo get_the_title($ancestor); ?></a>
                <span class="breadcrumbs__separator">/</span>
            <?php 
                endif;
            endforeach; 
            ?>
            <span class="breadcrumbs__current"><?php the_title(); ?></span>
            
        <?php elseif (is_single() && get_post_type() === 'post') : ?>
            <?php
            $blog_page_id = get_option('page_for_posts');
            if ($blog_page_id) :
            ?>
                <a href="<?php echo get_permalink($blog_page_id); ?>" class="breadcrumbs__link"><?php echo get_the_title($blog_page_id); ?></a>
                <span class="breadcrumbs__separator">/</span>
            <?php endif; ?>
            <span class="breadcrumbs__current"><?php the_title(); ?></span>
            
        <?php elseif (is_home()) : ?>
            <span class="breadcrumbs__current">Блог</span>
            
        <?php elseif (is_category()) : ?>
            <span class="breadcrumbs__current"><?php single_cat_title(); ?></span>
            
        <?php elseif (is_search()) : ?>
            <span class="breadcrumbs__current">Результаты поиска: <?php echo get_search_query(); ?></span>
            
        <?php elseif (is_404()) : ?>
            <span class="breadcrumbs__current">Страница не найдена (404)</span>
            
        <?php else : ?>
            <span class="breadcrumbs__current"><?php the_title(); ?></span>
        <?php endif; ?>
    </div>
</div>