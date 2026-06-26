<?php
/**
 * Template part for displaying FAQ bottom section
 *
 * @package ATK_VED
 */
?>

<!-- ========== БЛОК ВОПРОСОВ ========== -->
<section class="faq-bottom">
    <div class="faq-bottom__container">
        <div class="faq-bottom__content">
            <h3 class="faq-bottom__title">Не нашли ответ на свой вопрос?</h3>
            <p class="faq-bottom__subtitle">Оставьте свои контакты или задайте вопрос в форме. В течение 15 минут с вами свяжется наш менеджер и ответит на все ваши вопросы.</p>
        </div>

        <form id="faq-bottom-form" class="faq-bottom__form">
            <div class="faq-bottom__form-row">
                <div class="faq-bottom__form-column-left">
                    <input type="text" id="faq-bottom-name" class="faq-bottom__input" placeholder="Ваше имя" required>
                    <input type="tel" id="faq-bottom-phone" class="faq-bottom__input phone-mask" placeholder="+7 (___) ___-__-__" required>
                </div>
                <div class="faq-bottom__form-column-right">
                    <textarea id="faq-bottom-message" class="faq-bottom__input faq-bottom__textarea" placeholder="Задайте вопрос"></textarea>
                </div>
            </div>

            <div class="faq-bottom__actions-row">
                <button type="submit" class="btn btn-primary faq-bottom-submit">Оставить заявку</button>
                
                <div class="faq-bottom__checkbox-wrapper">
                    <input type="checkbox" id="faq-bottom-privacy" class="faq-bottom__checkbox-input" checked required>
                    <label for="faq-bottom-privacy" class="faq-bottom__checkbox-label">
                        Отправляя ваши данные, вы соглашаетесь с 
                        <a href="/privacy-policy" class="faq-bottom__checkbox-link" target="_blank">политикой конфиденциальности</a>
                    </label>
                </div>
            </div>
            
            <div id="faq-bottom-form-response" class="form-response"></div>
        </form>
    </div>
    
    <!-- Картинка пагоды справа -->
    <div class="faq-bottom__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagoda.png" 
             alt="Пагода" 
             loading="lazy">
    </div>
</section>