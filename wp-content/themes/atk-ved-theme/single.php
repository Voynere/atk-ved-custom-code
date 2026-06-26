<?php
/**
 * The template for displaying single posts
 *
 * @package ATK_VED
 */

get_header();
?>

<main class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <!-- ========== ХЛЕБНЫЕ КРОШКИ ========== -->
        <div class="breadcrumbs">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="breadcrumbs__link">Главная</a>
                <span class="breadcrumbs__separator">/</span>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="breadcrumbs__link">Блог</a>
                <span class="breadcrumbs__separator">/</span>
                <span class="breadcrumbs__current"><?php the_title(); ?></span>
            </div>
        </div>
        
        <!-- ========== ЗАГОЛОВОК ПОСТА ========== -->
        <section class="post-header">
            <div class="container">
                <h1 class="post-header__title"><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- ========== СОДЕРЖИМОЕ ПОСТА ========== -->
        <section class="post-content">
            <div class="container">
                <div class="post-content__wrapper">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-content__image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-content__text">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="post-content__pages">' . __('Страницы:'),
                        'after' => '</div>',
                    ));
                    ?>
                    
                    <!-- Удалены блоки post-content__tags и post-content__navigation -->
                </div>
            </div>
        </section>

    <?php endwhile; endif; ?>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>