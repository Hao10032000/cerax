<?php 



// Action Box Text color    
$wp_customize->add_setting(
    'action_box_text_color_cta',
    array(
        'default'           => themesflat_customize_default('action_box_text_color'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    new themesflat_ColorOverlay(
        $wp_customize,
        'action_box_text_color_cta',
        array(
            'label'         => esc_html__('Action Box Subtitle Color', 'cerax'),
            'section'       => 'color_action_box_cta',
            'settings'      => 'action_box_text_color',
            'priority'      => 12
        )
    )
);

// Action Box Heading color    
$wp_customize->add_setting(
    'action_box_heading_color_cta',
    array(
        'default'           => themesflat_customize_default('action_box_heading_color'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    new themesflat_ColorOverlay(
        $wp_customize,
        'action_box_heading_color_cta',
        array(
            'label'         => esc_html__('Action Box Heading Color', 'cerax'),
            'section'       => 'color_action_box_cta',
            'settings'      => 'action_box_heading_color',
            'priority'      => 12
        )
    )
);   
