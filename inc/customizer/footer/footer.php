<?php 

// Columns Footer

$wp_customize->add_setting(

    'footer_widget_areas',

    array(

        'default'           => themesflat_customize_default('footer_widget_areas'),

        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',

    )

);

$wp_customize->add_control(

    'footer_widget_areas',

    array(

        'type'      => 'select',           

        'section'   => 'section_footer',

        'priority'  => 1,

        'label'     => esc_html__('Columns Footer', 'cerax'),

        'choices'   => array(                

            1     => esc_html__( '1 Columns', 'cerax' ),

            2     => esc_html__( '2 Columns', 'cerax' ),

            3     => esc_html__( '3 Columns', 'cerax' ),

            4     => esc_html__( '4 Columns ( 3 | 2 | 4 | 3 )', 'cerax' ),

            5     => esc_html__( '4 Columns ( 3 | 3 | 3 | 3 )', 'cerax' ),                  

        )

    )

); 

