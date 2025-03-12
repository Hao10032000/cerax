<?php 

$wp_customize->add_setting(
    'heading_action_box_cta',
    array(
        'default'   =>  themesflat_customize_default('heading_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'heading_action_box_cta',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Heading Action Box CTA', 'cerax'),
        'section'   =>  'section_action_box_cta',
        'priority'  =>  3
    )
);




$wp_customize->add_setting(
    'text_button_action_box',
    array(
        'default'   =>  themesflat_customize_default('text_button_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'text_button_action_box',
    array(
        'type'      =>  'text',
        'section'   =>  'section_action_box_cta',
        'label'     =>  esc_html__('Text Button Action Box', 'cerax'),
        'priority'  => 5
    )
);

// Button Url
$wp_customize->add_setting(
    'action_box_button_url',
    array(
        'default' => themesflat_customize_default('action_box_button_url'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'action_box_button_url',
    array(
        'label' => esc_html__( 'Url', 'cerax' ),
        'section' => 'section_action_box_cta',
        'type' => 'text',
        'priority' => 6
    )
);

