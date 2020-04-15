<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_slider_section', [
    'priority' => 15,
    'title' => esc_html__('Slider', 'cherry-biz'),
]);

$length = 2;
for ($counter = 0; $counter < $length; $counter++) {

    $wp_customize->add_setting( 'cherry_biz_slider_heading_'.$counter, array(
        'sanitize_callback'	     =>  'cherry_biz_sanitize_text'
    ) );

    $wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_slider_heading_'.$counter, array(
        'settings'		        => 'cherry_biz_slider_heading_'.$counter,
        'section'		        => 'cherry_biz_slider_section',
        'label'			        => esc_html__( 'Slider', 'cherry-biz' ).' '.($counter +1)
    ) ) );

    $wp_customize->add_setting( 'cherry_biz_slider_sub_title_'.$counter, array(
        'default'               => '',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_slider_sub_title_'.$counter, array(
        'label'                  => esc_html__('Sub Title ', 'cherry-biz') ,
        'section'                => 'cherry_biz_slider_section',
        'settings'               => 'cherry_biz_slider_sub_title_'.$counter,
    ));

    $wp_customize->add_setting('cherry_biz_slider_page_'.$counter, array(
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'cherry_biz_sanitize_integer'
    ) );

    $wp_customize->add_control('cherry_biz_slider_page_'.$counter, array(
        'label'    => esc_html__( 'Select Page' , 'cherry-biz' ),
        'section'  => 'cherry_biz_slider_section',
        'settings' =>  'cherry_biz_slider_page_'.$counter,
        'type'     => 'dropdown-pages'
    ) );


}