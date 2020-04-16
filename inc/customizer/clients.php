<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_clients_section', [
    'priority' => 20,
    'title' => esc_html__('Clients', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

for ($counter = 0; $counter < cherry_biz_config('clients_limit'); $counter++) {

    $wp_customize->add_setting( 'cherry_biz_clients_heading_'.$counter, array(
        'sanitize_callback'	     =>  'cherry_biz_sanitize_text'
    ) );

    $wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_clients_heading_'.$counter, array(
        'settings'		        => 'cherry_biz_clients_heading_'.$counter,
        'section'		        => 'cherry_biz_clients_section',
        'label'			        => esc_html__( 'Client', 'cherry-biz' ).' '.($counter +1)
    ) ) );

    $wp_customize->add_setting( 'cherry_biz_clients_name_'.$counter, array(
        'default'               => '',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_clients_name_'.$counter, array(
        'label'                  => esc_html__('Client Name ', 'cherry-biz') ,
        'section'                => 'cherry_biz_clients_section',
        'settings'               => 'cherry_biz_clients_name_'.$counter,
    ));

    $wp_customize->add_setting( 'cherry_biz_clients_image_'.$counter, array(
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cherry_biz_clients_image_'.$counter, array(
        'label'                 => esc_html__('Upload image', 'cherry-biz'),
        'section'               => 'cherry_biz_clients_section',
        'settings'              => 'cherry_biz_clients_image_'.$counter,
    ) ) );
}

