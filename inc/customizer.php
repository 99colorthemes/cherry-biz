<?php
/**
 * cherry-biz Theme Customizer
 *
 * @package cherry-biz
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cherry_biz_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    require_once get_template_directory() .'/inc/customizer-custom-control.php';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', [
            'selector' => '.site-title a',
            'render_callback' => 'cherry_biz_customize_partial_blogname',
        ]);
        $wp_customize->selective_refresh->add_partial('blogdescription', [
            'selector' => '.site-description',
            'render_callback' => 'cherry_biz_customize_partial_blogdescription',
        ]);
    }

    /**
     * Homepage Sidebar
     */
    $wp_customize->add_section('cherry_biz_homepage_sidebar_section', [
        'priority' => 5,
        'title' => esc_html__('Homepage Sidebar', 'cherry-biz')
    ]);
    $wp_customize->add_setting('cherry_biz_homepage_sidebar', [
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
    ]);
    $wp_customize->add_control('cherry_biz_homepage_sidebar', [
        'type' => 'checkbox',
        'label' => esc_html__('Homepage Sidebar', 'cherry-biz'),
        'settings' => 'cherry_biz_homepage_sidebar',
        'section' => 'cherry_biz_homepage_sidebar_section'
    ]);

    require_once get_template_directory() .'/inc/customizer/top-nav.php';
    require_once get_template_directory() .'/inc/customizer/social-links.php';
    require_once get_template_directory() .'/inc/customizer/slider.php';


    //sanitize checkbox function
    function cherry_biz_checkbox_sanitize($input)
    {
        if ($input == 1) {
            return 1;
        } else {
            return '';
        }
    }
}
add_action('customize_register', 'cherry_biz_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cherry_biz_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cherry_biz_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cherry_biz_customize_preview_js()
{
    wp_enqueue_script('cherry-biz-customizer', get_template_directory_uri() . '/js/customizer.js', ['customize-preview'], '20151215', true);
}
add_action('customize_preview_init', 'cherry_biz_customize_preview_js');
