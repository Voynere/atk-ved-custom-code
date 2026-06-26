/**
 * Theme Customizer live preview
 */
(function($) {
    wp.customize('atk_ved_phone', function(value) {
        value.bind(function(to) {
            $('.footer__phone').text(to);
            $('.footer__phone').attr('href', 'tel:' + to.replace(/[^0-9+]/g, ''));
        });
    });
    
    wp.customize('atk_ved_email', function(value) {
        value.bind(function(to) {
            $('.footer__email').text(to);
            $('.footer__email').attr('href', 'mailto:' + to);
        });
    });
    
    wp.customize('atk_ved_telegram', function(value) {
        value.bind(function(to) {
            $('.footer__social a').attr('href', to);
        });
    });
})(jQuery);