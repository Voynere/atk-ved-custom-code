<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <div class="footer__info">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_atk-ved-2-370.png" 
                         alt="АТК-ВЭД" 
                         class="logo__image"
                         width="280"
                         height="42">
                    <p class="logo__text">профессиональное таможенное оформление</p>
                </div>
            </div>

            <div class="footer__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer__nav-list',
                    'fallback_cb' => false,
                    'depth' => 1,
                    'link_before' => '<span class="footer__nav-link">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>

            <div class="footer__contacts">
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('atk_ved_phone', '+7 (994) 009-39-04'))); ?>" 
                   class="footer__phone">
                    <?php echo esc_html(get_theme_mod('atk_ved_phone', '+7 (994) 009-39-04')); ?>
                </a>
                <a href="mailto:<?php echo esc_attr(get_theme_mod('atk_ved_email', 'info@atk-ved.ru')); ?>" 
                   class="footer__email">
                    <?php echo esc_html(get_theme_mod('atk_ved_email', 'info@atk-ved.ru')); ?>
                </a>
                
                <div class="footer__social">
                    <a href="<?php echo esc_url(get_theme_mod('atk_ved_telegram', 'https://t.me/SalesATK')); ?>" 
                       class="social-links__item" 
                       aria-label="Telegram" 
                       target="_blank" 
                       rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-384.svg" 
                             alt="Telegram" 
                             class="social-links__icon">
                    </a>
                    <!-- Иконка WhatsApp удалена -->
                </div>
            </div>
        </div>

        <!-- Карта -->
        <div class="footer__map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac2d5341abecc53456f52b3043a1b5210bce3f83db5eda36257a158f527d810e6&amp;width=1280&amp;height=406&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter --> 
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=108209910', 'ym');
    
    ym(108209910, 'init', {
        ssr:true, 
        webvisor:true, 
        trackHash:true, 
        clickmap:true, 
        ecommerce:"dataLayer", 
        referrer: document.referrer, 
        url: location.href, 
        accurateTrackBounce:true, 
        trackLinks:true
    });
</script> 
<noscript>
    <div><img src="https://mc.yandex.ru/watch/108209910" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
 <!-- Yandex.Metrika counter --> <script type="text/javascript">     (function(m,e,t,r,i,k,a){         m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};         m[i].l=1*new Date();         for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}         k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)     })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=108209910', 'ym');      ym(108209910, 'init', {ssr:true, webvisor:true, trackHash:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true}); </script> <noscript><div><img src="https://mc.yandex.ru/watch/108209910" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->   
</body>
</html>