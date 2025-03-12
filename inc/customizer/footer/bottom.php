<?php 

// Social Topbar

$wp_customize->add_setting(

    'social_topbar',
  
      array(
  
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
  
          'default' => themesflat_customize_default('social_topbar'),     
  
      )   
  
  );
  
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
  
      'social_topbar',
  
      array(
  
          'type' => 'checkbox',
  
          'label' => esc_html__('Social ( OFF | ON )', 'cerax'),
  
          'section' => 'section_bottom',
  
          'priority' => 2,
  
          'active_callback' => function () use ( $wp_customize ) {
  
              return 1 === $wp_customize->get_setting( 'topbar_show' )->value();
  
          }, 
  
      ))
  
  );

// Show Bottom

$wp_customize->add_setting ( 

    'show_bottom',

    array (

        'sanitize_callback' => 'themesflat_sanitize_checkbox' ,

        'default' => themesflat_customize_default('show_bottom'),     

    )

);

$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,

    'show_bottom',

    array(

        'type'      => 'checkbox',

        'label'     => esc_html__('Bottom ( OFF | ON )', 'cerax'),

        'section'   => 'section_bottom',

        'priority'  => 1

    ))

);


  

// Footer Copyright

$wp_customize->add_setting(

    'footer_copyright',

    array(

        'default' => themesflat_customize_default('footer_copyright'),

        'sanitize_callback' => 'themesflat_sanitize_text',

    )

);

$wp_customize->add_control(

    'footer_copyright',

    array(

        'label' => esc_html__( 'Copyright', 'cerax' ),

        'section' => 'section_bottom',

        'type' => 'textarea',

        'priority' => 2

    )

);