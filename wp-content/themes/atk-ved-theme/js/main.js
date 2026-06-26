/**
 * Основные скрипты для темы АТК-ВЭД
 */

jQuery(document).ready(function($) {
    // ========== КНОПКА НАВЕРХ ==========
    var $scrollToTop = $('<button class="scroll-to-top"><i class="fas fa-chevron-up"></i></button>');
    $('body').append($scrollToTop);
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $scrollToTop.addClass('show');
        } else {
            $scrollToTop.removeClass('show');
        }
    });
    
    $scrollToTop.on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // ========== FAQ АККОРДЕОН ==========
    $('.faq-question').on('click', function() {
        $(this).toggleClass('active');
        $(this).next('.faq-answer').slideToggle(300);
    });

    // ========== ОТПРАВКА ФОРМЫ ИЗ БЛОКА CTA ==========
    $('#cta-form').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $submitBtn = $form.find('button[type="submit"]');
        var $response = $('#cta-form-response');
        var originalText = $submitBtn.text();
        
        $submitBtn.text('Отправка...').prop('disabled', true);
        
        $.ajax({
            url: atk_ved_ajax.url,
            type: 'POST',
            data: {
                action: 'send_cta_feedback',
                name: $('#cta-name').val(),
                phone: $('#cta-phone').val(),
                privacy: $('#cta-privacy').is(':checked') ? 'yes' : '',
                nonce: atk_ved_ajax.nonce
            },
            success: function(response) {
                if (response.success) {
                    $response
                        .removeClass('error')
                        .addClass('success')
                        .html(response.data)
                        .show();
                    $form[0].reset();
                    
                    setTimeout(function() {
                        $response.fadeOut();
                    }, 5000);
                } else {
                    $response
                        .removeClass('success')
                        .addClass('error')
                        .html(response.data)
                        .show();
                }
            },
            error: function() {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html('Ошибка при отправке. Попробуйте позже.')
                    .show();
            },
            complete: function() {
                $submitBtn.text(originalText).prop('disabled', false);
            }
        });
    });

    // ========== ОТПРАВКА ФОРМЫ ИЗ БЛОКА FAQ-BOTTOM ==========
    $('#faq-bottom-form').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $submitBtn = $form.find('button[type="submit"]');
        var $response = $('#faq-bottom-form-response');
        var originalText = $submitBtn.text();
        
        $submitBtn.text('Отправка...').prop('disabled', true);
        
        $.ajax({
            url: atk_ved_ajax.url,
            type: 'POST',
            data: {
                action: 'send_faq_bottom_feedback',
                name: $('#faq-bottom-name').val(),
                phone: $('#faq-bottom-phone').val(),
                message: $('#faq-bottom-message').val(),
                privacy: $('#faq-bottom-privacy').is(':checked') ? 'yes' : '',
                nonce: atk_ved_ajax.nonce
            },
            success: function(response) {
                if (response.success) {
                    $response
                        .removeClass('error')
                        .addClass('success')
                        .html(response.data)
                        .show();
                    $form[0].reset();
                    
                    setTimeout(function() {
                        $response.fadeOut();
                    }, 5000);
                } else {
                    $response
                        .removeClass('success')
                        .addClass('error')
                        .html(response.data)
                        .show();
                }
            },
            error: function() {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html('Ошибка при отправке. Попробуйте позже.')
                    .show();
            },
            complete: function() {
                $submitBtn.text(originalText).prop('disabled', false);
            }
        });
    });

    // ========== МАСКА ТЕЛЕФОНА ==========
    function initPhoneMask() {
        const phoneInputs = document.querySelectorAll('.phone-mask');
        
        phoneInputs.forEach(function(input) {
            // Устанавливаем начальное значение +7
            if (!input.value) {
                input.value = '+7 ';
            }
            
            input.addEventListener('input', function(e) {
                let value = this.value;
                
                // Удаляем все не-цифры, кроме +
                value = value.replace(/[^\d+]/g, '');
                
                // Проверяем и форматируем +7
                if (!value.startsWith('+7')) {
                    if (value.startsWith('7')) {
                        value = '+' + value;
                    } else if (value.startsWith('8')) {
                        value = '+7' + value.substring(1);
                    } else if (!value.startsWith('+')) {
                        value = '+7' + value;
                    }
                }
                
                // Ограничиваем длину (максимум +7 и 10 цифр)
                if (value.length > 12) {
                    value = value.substring(0, 12);
                }
                
                this.value = value;
            });
            
            // Защита от вставки текста
            input.addEventListener('keydown', function(e) {
                const key = e.key;
                const isDigit = /^\d$/.test(key);
                const isControlKey = key === 'Backspace' || key === 'Delete' || key === 'ArrowLeft' || key === 'ArrowRight' || key === 'Tab';
                
                if (!isDigit && !isControlKey && key !== '+') {
                    e.preventDefault();
                }
            });
            
            // Защита от вставки через контекстное меню
            input.addEventListener('paste', function(e) {
                e.preventDefault();
                const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                const digits = pastedText.replace(/\D/g, '');
                
                if (digits.length > 0) {
                    let newValue = '+7';
                    if (digits.startsWith('7') || digits.startsWith('8')) {
                        newValue += digits.substring(1, 11);
                    } else {
                        newValue += digits.substring(0, 10);
                    }
                    this.value = newValue;
                }
            });
        });
    }

    // ========== МОДАЛЬНОЕ ОКНО ДЛЯ ФОРМЫ ==========
    function openModal() {
        // Создаем модальное окно если его нет
        if ($('#feedback-modal').length === 0) {
            $('body').append(`
                <div id="feedback-modal" class="modal">
                    <div class="modal__content">
                        <span class="modal__close">&times;</span>
                        <h3 class="modal__title">Оставить заявку</h3>
                        <form id="feedback-form" class="modal__form">
                            <div class="modal__field">
                                <input type="text" id="modal-name" class="modal__input" placeholder="Ваше имя" required>
                            </div>
                            <div class="modal__field">
                                <input type="tel" id="modal-phone" class="modal__input phone-mask" placeholder="+7 (___) ___-__-__" required>
                            </div>
                            <div class="modal__field">
                                <textarea id="modal-message" class="modal__textarea" placeholder="Сообщение" rows="4"></textarea>
                            </div>
                            <div class="modal__checkbox">
                                <input type="checkbox" id="modal-privacy" class="modal__checkbox-input" checked required>
                                <label for="modal-privacy" class="modal__checkbox-label">
                                    Нажимая на кнопку, Вы даёте согласие на 
                                    <a href="/privacy" target="_blank">обработку персональных данных</a> 
                                    и ознакомлены с 
                                    <a href="/privacy-policy" target="_blank">Политикой обработки персональных данных</a>
                                </label>
                            </div>
                            <button type="submit" class="modal__submit btn-primary">Отправить</button>
                        </form>
                        <div id="modal-message-response" class="modal__response"></div>
                    </div>
                </div>
            `);
        }
        
        $('#feedback-modal').fadeIn(300);
        $('#modal-name').focus();
        
        // Инициализируем маску для поля в модальном окне
        setTimeout(initPhoneMask, 100);
    }

    // Закрытие модального окна
    $(document).on('click', '.modal__close', function() {
        $('#feedback-modal').fadeOut(300);
        $('#feedback-form')[0].reset();
        $('#modal-message-response').hide().removeClass('success error').empty();
    });

    $(window).on('click', function(e) {
        if ($(e.target).is('#feedback-modal')) {
            $('#feedback-modal').fadeOut(300);
            $('#feedback-form')[0].reset();
            $('#modal-message-response').hide().removeClass('success error').empty();
        }
    });

    // Открытие модального окна при клике на кнопку "Оставить заявку" в шапке
    $('.top-bar .btn-primary').on('click', function(e) {
        e.preventDefault();
        openModal();
    });

    // Открытие модального окна при клике на кнопку в мобильном меню
    $('.mobile-menu__btn').on('click', function(e) {
        e.preventDefault();
        openModal();
    });

    // Открытие модального окна при клике на кнопку в мобильной версии (после преимуществ)
    $('.hero__mobile-button .btn-primary').on('click', function(e) {
        e.preventDefault();
        openModal();
    });

    // Отправка формы из модального окна через AJAX
    $(document).on('submit', '#feedback-form', function(e) {
        e.preventDefault();
        
        var $submitBtn = $(this).find('button[type="submit"]');
        var originalText = $submitBtn.text();
        $submitBtn.text('Отправка...').prop('disabled', true);
        
        $.ajax({
            url: atk_ved_ajax.url,
            type: 'POST',
            data: {
                action: 'send_feedback',
                name: $('#modal-name').val(),
                phone: $('#modal-phone').val(),
                message: $('#modal-message').val(),
                privacy: $('#modal-privacy').is(':checked') ? 'yes' : '',
                nonce: atk_ved_ajax.nonce
            },
            success: function(response) {
                if (response.success) {
                    $('#modal-message-response')
                        .removeClass('error')
                        .addClass('success')
                        .html(response.data)
                        .show();
                    $('#feedback-form')[0].reset();
                    
                    // Закрываем модальное окно через 3 секунды
                    setTimeout(function() {
                        $('#feedback-modal').fadeOut(300);
                        $('#modal-message-response').hide().removeClass('success error').empty();
                    }, 3000);
                } else {
                    $('#modal-message-response')
                        .removeClass('success')
                        .addClass('error')
                        .html(response.data)
                        .show();
                }
            },
            error: function() {
                $('#modal-message-response')
                    .removeClass('success')
                    .addClass('error')
                    .html('Ошибка при отправке. Попробуйте позже.')
                    .show();
            },
            complete: function() {
                $submitBtn.text(originalText).prop('disabled', false);
            }
        });
    });

    // ========== МОБИЛЬНОЕ МЕНЮ ==========
    // Открытие мобильного меню (двухполосочный бургер)
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Закрытие мобильного меню
    $('.mobile-menu__close, .mobile-menu__overlay').on('click', function() {
        $('.menu-toggle').removeClass('active');
        $('.mobile-menu').removeClass('active');
        $('body').removeClass('menu-open');
    });

    // Закрытие при клике на ссылку в меню
    $('.mobile-menu__link').on('click', function() {
        $('.menu-toggle').removeClass('active');
        $('.mobile-menu').removeClass('active');
        $('body').removeClass('menu-open');
    });

    // ========== ТЕНЬ НА ШАПКУ ПРИ СКРОЛЛЕ ==========
    const topBar = document.querySelector('.top-bar');
    
    if (topBar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                topBar.classList.add('top-bar--scrolled');
            } else {
                topBar.classList.remove('top-bar--scrolled');
            }
        });
    }

    // ========== ДОБАВЛЕНИЕ ССЫЛКИ НА ЛОГОТИП (если PHP не сработал) ==========
    // Добавляем ссылку на логотип для всех страниц, кроме главной
    if (!document.body.classList.contains('home') && !document.body.classList.contains('front-page')) {
        const logo = document.querySelector('.logo');
        const logoImage = document.querySelector('.logo__image');
        
        // Проверяем, есть ли уже ссылка
        if (logo && logoImage && !logo.querySelector('a')) {
            const link = document.createElement('a');
            link.href = '/';
            link.className = 'logo__link';
            link.setAttribute('rel', 'home');
            
            // Оборачиваем картинку в ссылку
            logoImage.parentNode.insertBefore(link, logoImage);
            link.appendChild(logoImage);
        }
    }

    // Инициализация маски телефона при загрузке
    initPhoneMask();
});
// ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "ПОДБОР ТОВАРОВ ИЗ КИТАЯ" ==========
$('#product-search-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#ps-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_product_search_feedback',
            name: $('#ps-name').val(),
            phone: $('#ps-phone').val(),
            message: $('#ps-message').val(),
            privacy: $('#ps-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
});
// ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "ВЫКУП ТОВАРА С 1688 ALIBABA И TAOBAO" ==========
$('#purchase-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#purchase-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_purchase_feedback',
            name: $('#purchase-name').val(),
            phone: $('#purchase-phone').val(),
            message: $('#purchase-message').val(),
            privacy: $('#purchase-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
});
// ========== ПОПАП ТЕЛЕФОНА (ТОЛЬКО ДЛЯ ДЕСКТОПА) ==========
(function() {
    // Проверяем, что это не мобильное устройство
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    
    if (!isMobile) {
        const trigger = document.getElementById('phone-popup-trigger');
        const popup = document.getElementById('phone-popup');
        
        if (trigger && popup) {
            const closeBtn = document.querySelector('.phone-popup__close');
            const closeBtn2 = document.getElementById('phone-popup-close-btn');
            const overlay = document.querySelector('.phone-popup__overlay');
            
            // Открытие попапа
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                popup.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
            
            // Закрытие через крестик
            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    popup.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }
            
            // Закрытие через кнопку "Закрыть"
            if (closeBtn2) {
                closeBtn2.addEventListener('click', function() {
                    popup.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }
            
            // Закрытие по клику на оверлей
            if (overlay) {
                overlay.addEventListener('click', function() {
                    popup.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }
            
            // Закрытие по Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && popup.classList.contains('active')) {
                    popup.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }
    }
})();
// ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "КОНСОЛИДАЦИЯ ГРУЗА" ==========
$('#consolidation-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#cons-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_consolidation_feedback',
            name: $('#cons-name').val(),
            phone: $('#cons-phone').val(),
            message: $('#cons-message').val(),
            privacy: $('#cons-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
    // ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "ОТПРАВКА ТОВАРА" ==========
$('#shipping-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#ship-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_shipping_feedback',
            name: $('#ship-name').val(),
            phone: $('#ship-phone').val(),
            message: $('#ship-message').val(),
            privacy: $('#ship-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
});
});
// ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "ТАМОЖЕННОЕ ОФОРМЛЕНИЕ" ==========
$('#customs-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#customs-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_customs_feedback',
            name: $('#customs-name').val(),
            phone: $('#customs-phone').val(),
            message: $('#customs-message').val(),
            privacy: $('#customs-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
});
// ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "СЕРТИФИКАТЫ И ДОКУМЕНТЫ" ==========
$('#certificates-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#cert-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_certificates_feedback',
            name: $('#cert-name').val(),
            phone: $('#cert-phone').val(),
            message: $('#cert-message').val(),
            privacy: $('#cert-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
});
// ========== ОТПРАВКА ФОРМЫ СО СТРАНИЦЫ "ЧЕСТНЫЙ ЗНАК" ==========
$('#honest-sign-form').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $response = $('#hs-form-response');
    var originalText = $submitBtn.text();
    
    $submitBtn.text('Отправка...').prop('disabled', true);
    
    $.ajax({
        url: atk_ved_ajax.url,
        type: 'POST',
        data: {
            action: 'send_honest_sign_feedback',
            name: $('#hs-name').val(),
            phone: $('#hs-phone').val(),
            message: $('#hs-message').val(),
            privacy: $('#hs-privacy').is(':checked') ? 'yes' : '',
            nonce: atk_ved_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                $response
                    .removeClass('error')
                    .addClass('success')
                    .html(response.data)
                    .show();
                $form[0].reset();
                
                setTimeout(function() {
                    $response.fadeOut();
                }, 5000);
            } else {
                $response
                    .removeClass('success')
                    .addClass('error')
                    .html(response.data)
                    .show();
            }
        },
        error: function() {
            $response
                .removeClass('success')
                .addClass('error')
                .html('Ошибка при отправке. Попробуйте позже.')
                .show();
        },
        complete: function() {
            $submitBtn.text(originalText).prop('disabled', false);
        }
    });
});