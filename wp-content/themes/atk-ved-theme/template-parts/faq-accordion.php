<?php
/**
 * FAQ accordion section (visible content + FAQPage schema source).
 *
 * Expects $faq_items: array of ['question' => string, 'answer' => string].
 *
 * @package ATK_VED
 */

if (empty($faq_items) || !is_array($faq_items)) {
    return;
}

$faq_title = !empty($faq_title) ? $faq_title : 'Часто задаваемые вопросы';
?>

<section class="faq faq--page">
    <div class="container">
        <h2 class="faq__title"><?php echo esc_html($faq_title); ?></h2>

        <div class="faq__questions-column faq__questions-column--full">
            <?php foreach ($faq_items as $item) : ?>
                <div class="faq-item">
                    <button type="button" class="faq-question js-faq-trigger">
                        <span><?php echo esc_html($item['question']); ?></span>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/polygonfaqdown.svg'); ?>"
                             alt=""
                             class="faq-arrow"
                             width="16"
                             height="10">
                    </button>
                    <div class="faq-answer" style="display: none;">
                        <?php echo wp_kses_post($item['answer']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
