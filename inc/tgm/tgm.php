<?php
/**
 * Plugin recommendation
 *
 * @package cherry-biz
 */

// Load TGM library.
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

if ( ! function_exists( 'cherry_biz_register_recommended_plugins' ) ) :

    /**
     * Register recommended plugins.
     */
    function cherry_biz_register_recommended_plugins() {
        $plugins = array(
            array(
                'name'     => esc_html__( 'One Click Demo Importer', 'cherry-biz' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
        );

        $config = array();

        tgmpa( $plugins, $config );
    }

endif;

add_action( 'tgmpa_register', 'cherry_biz_register_recommended_plugins' );
