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


    $wp_customize->add_section('cherry_biz_top_nav_section', [
        'priority' => 1,
        'title' => esc_html__('Header', 'cherry-biz'),
    ]);

    $wp_customize->add_setting('cherry_biz_search_checkbox', [
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
    ]);
    $wp_customize->add_control('cherry_biz_search_checkbox', [
        'type' => 'checkbox',
        'label' => esc_html__('Enable Search', 'cherry-biz'),
        'settings' => 'cherry_biz_search_checkbox',
        'section' => 'cherry_biz_top_nav_section',
    ]);

    $wp_customize->add_setting('cherry_biz_social_link_checkbox', [
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
    ]);
    $wp_customize->add_control('cherry_biz_social_link_checkbox', [
        'type' => 'checkbox',
        'label' => esc_html__('Enable Social Link', 'cherry-biz'),
        'settings' => 'cherry_biz_social_link_checkbox',
        'section' => 'cherry_biz_top_nav_section',
    ]);
    $wp_customize->add_setting('cherry_biz_facebook_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);
    $wp_customize->add_control('cherry_biz_facebook_link', [
        'settings' => 'cherry_biz_facebook_link',
        'section' => 'cherry_biz_top_nav_section',
        'type' => 'url',
        'label' => esc_html__('Facebook Url', 'cherry-biz')
    ]);
    $wp_customize->add_setting('cherry_biz_twitter_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);
    $wp_customize->add_control('cherry_biz_twitter_link', [
        'settings' => 'cherry_biz_twitter_link',
        'section' => 'cherry_biz_top_nav_section',
        'type' => 'url',
        'label' => esc_html__('Twitter Url', 'cherry-biz')
    ]);
    $wp_customize->add_setting('cherry_biz_instagram_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);
    $wp_customize->add_control('cherry_biz_instagram_link', [
        'settings' => 'cherry_biz_instagram_link',
        'section' => 'cherry_biz_top_nav_section',
        'type' => 'url',
        'label' => esc_html__('Instagram Url', 'cherry-biz')
    ]);

    $wp_customize->add_setting('cherry_biz_youtube_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);
    $wp_customize->add_control('cherry_biz_youtube_link', [
        'settings' => 'cherry_biz_youtube_link',
        'section' => 'cherry_biz_top_nav_section',
        'type' => 'url',
        'label' => esc_html__('Youtube Url', 'cherry-biz')
    ]);

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
