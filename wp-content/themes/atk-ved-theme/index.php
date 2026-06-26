<?php
/**
 * Главный шаблон темы
 */

get_header(); ?>

<div class="container">
    
    <?php if ( have_posts() ) : ?>
        
        <?php while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
                </header>
                
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
                
            </article>
            
        <?php endwhile; ?>
        
        <!-- Пагинация -->
        <div class="pagination">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '« Назад', 'atk-ved' ),
                'next_text' => __( 'Вперёд »', 'atk-ved' ),
            ) );
            ?>
        </div>
        
    <?php else : ?>
        
        <p><?php esc_html_e( 'Записи не найдены.', 'atk-ved' ); ?></p>
        
    <?php endif; ?>

</div>

<?php get_footer(); ?>