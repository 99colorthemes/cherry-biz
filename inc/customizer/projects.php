<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_projects_section', [
    'priority' => 30,
    'title' => esc_html__('Our Projects', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_projects_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_projects_title', array(
    'label'                  => esc_html__('Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_projects_section',
    'settings'               => 'cherry_biz_projects_title',
));

$wp_customize->add_setting( 'cherry_biz_projects_sub_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_projects_sub_title', array(
    'label'                  => esc_html__('Sub Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_projects_section',
    'settings'               => 'cherry_biz_projects_sub_title',
));

$wp_customize->add_setting( 'cherry_biz_projects_category', array(
    'default'             =>  '',
    'capability'          =>  'edit_theme_options',
    'sanitize_callback'   =>  'cherry_biz_sanitize_integer'
) );

$wp_customize->add_control( new Cherry_Biz_Category_Dropdown_Custom_Control($wp_customize, 'cherry_biz_projects_category', array(
    'label'                =>  esc_html__('Choose category for Projects.', 'cherry-biz'),
    'settings' 			   =>  'cherry_biz_projects_category',
    'section'              =>  'cherry_biz_projects_section',
) ) );
