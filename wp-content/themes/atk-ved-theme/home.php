<?php
/**
 * The template for displaying blog page (home.php)
 *
 * @package ATK_VED
 */

get_header();
?>

<main class="main">
 <!-- ========== ХЛЕБНЫЕ КРОШКИ ========== -->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="<?php echo home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <span class="breadcrumbs__current">Блог</span>
    </div>
</div>

    <!-- ========== ЗАГОЛОВОК СТРАНИЦЫ ========== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header__title">Блог</h1>
        </div>
    </section>

    <!-- ========== БЛОГ ========== -->
    <section class="blog">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="blog__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="blog-post">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="blog-post__image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('large', ['class' => 'blog-post__img']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="blog-post__content">
                                <h2 class="blog-post__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <div class="blog-post__excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </div>
                                
                                <?php 
                                // Получаем имя автора
                                $author_first_name = get_the_author_meta('first_name');
                                $author_last_name = get_the_author_meta('last_name');
                                
                                if ($author_first_name && $author_last_name) {
                                    $author_name = $author_first_name . ' ' . $author_last_name;
                                } elseif ($author_first_name) {
                                    $author_name = $author_first_name;
                                } else {
                                    $author_name = get_the_author();
                                }
                                ?>
                                
                                <div class="blog-post__author">
                                    Автор: <?php echo esc_html($author_name); ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="blog-post__read-more">Читать</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Пагинация -->
                <div class="blog__pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '←',
                        'next_text' => '→',
                        'screen_reader_text' => ' ',
                    ));
                    ?>
                </div>

            <?php else : ?>
                <p class="blog__no-posts">Записей не найдено.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- ========== БЛОК ВОПРОСОВ ========== -->
    <?php get_template_part('template-parts/faq-bottom'); ?>
</main>

<?php get_footer(); ?>