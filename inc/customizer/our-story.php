<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_our_story_section', [
    'priority' => 30,
    'title' => esc_html__('Our Story', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_our_story_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_our_story_title', array(
    'label'                  => esc_html__('Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_our_story_section',
    'settings'               => 'cherry_biz_our_story_title',
));

$wp_customize->add_setting('cherry_biz_our_story_page', array(
    'capability'         => 'edit_theme_options',
    'sanitize_callback'  => 'cherry_biz_sanitize_integer'
) );

$wp_customize->add_control('cherry_biz_our_story_page', array(
    'label'    => esc_html__( 'Select Page' , 'cherry-biz' ),
    'section'  => 'cherry_biz_our_story_section',
    'settings' =>  'cherry_biz_our_story_page',
    'type'     => 'dropdown-pages'
) );
