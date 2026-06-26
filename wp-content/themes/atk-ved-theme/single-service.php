<?php
/**
 * Шаблон для отдельной услуги
 *
 * @package ATK_VED
 */

get_header();
?>

<main class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <!-- ========== ХЛЕБНЫЕ КРОШКИ ========== -->
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        
        <!-- ========== ЗАГОЛОВОК ========== -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-header__title"><?php the_title(); ?></h1>
            </div>
        </section>
        
        <!-- ========== СОДЕРЖИМОЕ УСЛУГИ ========== -->
        <section class="service-single">
            <div class="container">
                <div class="service-single__content">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="service-single__image">
                            <?php the_post_thumbnail('large', array('class' => 'service-single__img')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="service-single__text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== БЛОК ВОПРОСОВ ========== -->
        <?php get_template_part('template-parts/faq-bottom'); ?>
        
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>