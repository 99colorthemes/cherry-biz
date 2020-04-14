<?php

if (!class_exists('WP_Customize_Control'))
    return NULL;

/**
 * A class to create a title for all fields to sperate
 */
class Cherry_Biz_Customize_Heading extends WP_Customize_Control {

    public function render_content() {
        if ( !empty( $this->label ) ) : ?>
            <h3 class="cherry-biz-accordion-section-title"><?php echo esc_html( $this->label ); ?></h3>
        <?php endif;
    }
}
