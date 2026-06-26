<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package ATK_VED
 */

status_header(404);
nocache_headers();

get_header();
?>

<main class="main">
    <!-- ========== ХЛЕБНЫЕ КРОШКИ ========== -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <!-- ========== СТРАНИЦА 404 ========== -->
    <section class="error-404">
        <div class="container">
            <div class="error-404__content">
                <div class="error-404__code">404</div>
                <h1 class="error-404__title">Страница не найдена</h1>
                <p class="error-404__text">Извините, запрашиваемая страница не существует или была перемещена.</p>
                
                <div class="error-404__actions">
                    <a href="<?php echo home_url(); ?>" class="error-404__button">Вернуться на главную</a>
                </div>
                
                <div class="error-404__links">
                    <h3 class="error-404__links-title">Возможно, вам нужно:</h3>
                    <ul class="error-404__links-list">
                        <li><a href="<?php echo home_url('/'); ?>">Главная</a></li>
                        <li><a href="<?php echo home_url('/o-kompanii/'); ?>">О компании</a></li>
                        <li><a href="<?php echo home_url('/blog/'); ?>">Блог</a></li>
                        <li><a href="<?php echo home_url('/kontakty/'); ?>">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>