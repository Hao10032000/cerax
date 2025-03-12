<?php 

if (function_exists('themesflat_register_team_post_type')) {



    /* team Archive 

    =================================================*/  

    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'team', array(

        'label' => esc_html__('TEAM ARCHIVE', 'cerax'),

        'section' => 'section_content_post_type',

        'settings' => 'themesflat_options[info]',

        'priority' => 1

        ) )

    ); 



    // team Slug

    $wp_customize->add_setting (

        'team_slug',

        array(

            'default' =>  themesflat_customize_default('team_slug'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'team_slug',

        array(

            'type'      => 'text',

            'label'     => esc_html('Team Slug', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 2

        )

    );  



    // team Name

    $wp_customize->add_setting (

        'team_name',

        array(

            'default' =>  themesflat_customize_default('team_name'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'team_name',

        array(

            'type'      => 'text',

            'label'     => esc_html('Team Name', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 3

        )

    );





    // Number Posts team

    $wp_customize->add_setting (

        'team_number_post',

        array(

            'default' => themesflat_customize_default('team_number_post'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'team_number_post',

        array(

            'type'      => 'text',

            'label'     => esc_html__('Show Number Posts', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 4

        )

    );



    // Order By team

    $wp_customize->add_setting(

        'team_order_by',

        array(

            'default' => themesflat_customize_default('team_order_by'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control(

        'team_order_by',

        array(

            'type'      => 'select',

            'label'     => esc_html('Order By', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 5,

            'choices' => array(

                'date'          => esc_html( 'Date', 'cerax' ),

                'id'            => esc_html( 'Id', 'cerax' ),

                'author'        => esc_html( 'Author', 'cerax' ),

                'title'         => esc_html( 'Title', 'cerax' ),

                'modified'      => esc_html( 'Modified', 'cerax' ),

                'comment_count' => esc_html( 'Comment Count', 'cerax' ),

                'menu_order'    => esc_html( 'Menu Order', 'cerax' )

            )        

        )

    );



    // Order Direction team

    $wp_customize->add_setting(

        'team_order_direction',

        array(

            'default' => themesflat_customize_default('team_order_direction'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control(

        'team_order_direction',

        array(

            'type'      => 'select',

            'label'     => esc_html('Order Direction', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 6,

            'choices' => array(

                'DESC' => esc_html( 'Descending', 'cerax' ),

                'ASC'  => esc_html( 'Assending', 'cerax' )

            )        

        )

    );



    // team Exclude Post

    $wp_customize->add_setting (

        'team_exclude',

        array(

            'default' =>  themesflat_customize_default('team_exclude'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'team_exclude',

        array(

            'type'      => 'text',

            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 7

        )

    );



    /* team Single 

    =================================================*/   

    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'teamingle', array(

        'label' => esc_html__('Team Single', 'cerax'),

        'section' => 'section_content_post_type',

        'settings' => 'themesflat_options[info]',

        'priority' => 15

        ) )

    );



    // Customize team Featured Title

    $wp_customize->add_setting (

        'team_featured_title',

        array(

            'default' => themesflat_customize_default('team_featured_title'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'team_featured_title',

        array(

            'type'      => 'text',

            'label'     => esc_html__('Customize Team Featured Title', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 16

        )

    );



}



if (function_exists('themesflat_register_services_post_type')) {



    /* Services Archive 

    ===============================================*/ 

    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'services', array(

        'label' => esc_html__('SERVICES ARCHIVE', 'cerax'),

        'section' => 'section_content_post_type',

        'settings' => 'themesflat_options[info]',

        'priority' => 25

        ) )

    );



    // Services Slug

    $wp_customize->add_setting (

        'services_slug',

        array(

            'default' =>  themesflat_customize_default('services_slug'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'services_slug',

        array(

            'type'      => 'text',

            'label'     => esc_html('Services Slug', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 26

        )

    );  



    // Services Name

    $wp_customize->add_setting (

        'services_name',

        array(

            'default' =>  themesflat_customize_default('services_name'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'services_name',

        array(

            'type'      => 'text',

            'label'     => esc_html('Services Name', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 27

        )

    );



    $wp_customize->add_setting(

        'services_layout',

        array(

            'default'           => themesflat_customize_default('services_layout'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control( 

        'services_layout',

        array (

            'type'      => 'select',           

            'section'   => 'section_content_post_type',

            'priority'  => 28,

            'label'         => esc_html__('Sidebar Position', 'cerax'),

            'choices'   => array (

                'sidebar-right'     => esc_html__( 'Sidebar Right','cerax' ),

                'sidebar-left'      =>  esc_html__( 'Sidebar Left','cerax' ),

                'fullwidth'         =>   esc_html__( 'Full Width','cerax' ),

                'fullwidth-small'   =>   esc_html__( 'Full Width Small','cerax' ),

                'fullwidth-center'  =>   esc_html__( 'Full Width Center','cerax' ),

            ),

        )

    );



    $wp_customize->add_setting (

        'services_sidebar_list',

        array(

            'default'           => themesflat_customize_default('services_sidebar_list'),

            'sanitize_callback' => 'esc_html',

        )

    );

    $wp_customize->add_control( new themesflat_DropdownSidebars($wp_customize,

        'services_sidebar_list',

        array(

            'type'      => 'dropdown',           

            'section'   => 'section_content_post_type',

            'priority'  => 28,

            'label'         => esc_html__('List Sidebar', 'cerax'),

            

        ))

    );



    // Number Posts team

    $wp_customize->add_setting (

        'services_number_post',

        array(

            'default' => themesflat_customize_default('services_number_post'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'services_number_post',

        array(

            'type'      => 'text',

            'label'     => esc_html__('Show Number Posts', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 28

        )

    );




    // Order By services

    $wp_customize->add_setting(

        'services_order_by',

        array(

            'default' => themesflat_customize_default('services_order_by'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control(

        'services_order_by',

        array(

            'type'      => 'select',

            'label'     => esc_html('Order By', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 30,

            'choices' => array(

                'date'          => esc_html( 'Date', 'cerax' ),

                'id'            => esc_html( 'Id', 'cerax' ),

                'author'        => esc_html( 'Author', 'cerax' ),

                'title'         => esc_html( 'Title', 'cerax' ),

                'modified'      => esc_html( 'Modified', 'cerax' ),

                'comment_count' => esc_html( 'Comment Count', 'cerax' ),

                'menu_order'    => esc_html( 'Menu Order', 'cerax' )

            )        

        )

    );



    // Order Direction services

    $wp_customize->add_setting(

        'services_order_direction',

        array(

            'default' => themesflat_customize_default('services_order_direction'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control(

        'services_order_direction',

        array(

            'type'      => 'select',

            'label'     => esc_html('Order Direction', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 31,

            'choices' => array(

                'DESC' => esc_html( 'Descending', 'cerax' ),

                'ASC'  => esc_html( 'Assending', 'cerax' )

            )        

        )

    );



    // services Exclude Post

    $wp_customize->add_setting (

        'services_exclude',

        array(

            'default' =>  themesflat_customize_default('services_exclude'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'services_exclude',

        array(

            'type'      => 'text',

            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 32

        )

    );




    /* Services Single 

    ==============================================*/  

    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'servicessingle', array(

        'label' => esc_html__('SERVICES SINGLE', 'cerax'),

        'section' => 'section_content_post_type',

        'settings' => 'themesflat_options[info]',

        'priority' => 40

        ) )

    ); 



    // Customize Services Featured Title

    $wp_customize->add_setting (

        'services_featured_title',

        array(

            'default' => themesflat_customize_default('services_featured_title'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'services_featured_title',

        array(

            'type'      => 'text',

            'label'     => esc_html__('Customize Services Featured Title', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 41

        )

    );



     // Show Post Navigator services

     $wp_customize->add_setting (

         'services_title_single',

         array (

             'sanitize_callback' => 'themesflat_sanitize_checkbox',

             'default' => themesflat_customize_default('services_title_single'),     

         )

     );

     $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,

         'services_title_single',

         array(

             'type'      => 'checkbox',

             'label'     => esc_html__('Single Title ( OFF | ON )', 'cerax'),

             'section'   => 'section_content_post_type',

             'priority'  => 41

         ))

     ); 




}

if (function_exists('themesflat_register_case_study_post_type')) {



    /* case_study Archive 

    ===============================================*/ 

    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'case_study', array(

        'label' => esc_html__('CASE STUDY ARCHIVE', 'cerax'),

        'section' => 'section_content_post_type',

        'settings' => 'themesflat_options[info]',

        'priority' => 42

        ) )

    );



    // case_study Slug

    $wp_customize->add_setting (

        'case_study_slug',

        array(

            'default' =>  themesflat_customize_default('case_study_slug'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'case_study_slug',

        array(

            'type'      => 'text',

            'label'     => esc_html('Case Study Slug', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 43

        )

    );  



    // case_study Name

    $wp_customize->add_setting (

        'case_study_name',

        array(

            'default' =>  themesflat_customize_default('case_study_name'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'case_study_name',

        array(

            'type'      => 'text',

            'label'     => esc_html('Case Study Name', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 44

        )

    );


    // Number Posts team

    $wp_customize->add_setting (

        'case_study_number_post',

        array(

            'default' => themesflat_customize_default('case_study_number_post'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'case_study_number_post',

        array(

            'type'      => 'text',

            'label'     => esc_html__('Show Number Posts', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 47

        )

    );




    // Order By case_study

    $wp_customize->add_setting(

        'case_study_order_by',

        array(

            'default' => themesflat_customize_default('case_study_order_by'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control(

        'case_study_order_by',

        array(

            'type'      => 'select',

            'label'     => esc_html('Order By', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 49,

            'choices' => array(

                'date'          => esc_html( 'Date', 'cerax' ),

                'id'            => esc_html( 'Id', 'cerax' ),

                'author'        => esc_html( 'Author', 'cerax' ),

                'title'         => esc_html( 'Title', 'cerax' ),

                'modified'      => esc_html( 'Modified', 'cerax' ),

                'comment_count' => esc_html( 'Comment Count', 'cerax' ),

                'menu_order'    => esc_html( 'Menu Order', 'cerax' )

            )        

        )

    );



    // Order Direction case_study

    $wp_customize->add_setting(

        'case_study_order_direction',

        array(

            'default' => themesflat_customize_default('case_study_order_direction'),

            'sanitize_callback' => 'esc_attr',

        )

    );

    $wp_customize->add_control(

        'case_study_order_direction',

        array(

            'type'      => 'select',

            'label'     => esc_html('Order Direction', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 50,

            'choices' => array(

                'DESC' => esc_html( 'Descending', 'cerax' ),

                'ASC'  => esc_html( 'Assending', 'cerax' )

            )        

        )

    );



    // case_study Exclude Post

    $wp_customize->add_setting (

        'case_study_exclude',

        array(

            'default' =>  themesflat_customize_default('case_study_exclude'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'case_study_exclude',

        array(

            'type'      => 'text',

            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 51

        )

    );




    /* case_study Single 

    ==============================================*/  

    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'case_studysingle', array(

        'label' => esc_html__('CASE STUDY SINGLE', 'cerax'),

        'section' => 'section_content_post_type',

        'settings' => 'themesflat_options[info]',

        'priority' => 52

        ) )

    ); 



    // Customize case_study Featured Title

    $wp_customize->add_setting (

        'case_study_featured_title',

        array(

            'default' => themesflat_customize_default('case_study_featured_title'),

            'sanitize_callback' => 'themesflat_sanitize_text'

        )

    );

    $wp_customize->add_control(

        'case_study_featured_title',

        array(

            'type'      => 'text',

            'label'     => esc_html__('Customize Case Study Featured Title', 'cerax'),

            'section'   => 'section_content_post_type',

            'priority'  => 53

        )

    );



     // Show Post Navigator case_study

     $wp_customize->add_setting (

         'case_study_title_single',

         array (

             'sanitize_callback' => 'themesflat_sanitize_checkbox',

             'default' => themesflat_customize_default('case_study_title_single'),     

         )

     );

     $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,

         'case_study_title_single',

         array(

             'type'      => 'checkbox',

             'label'     => esc_html__('Single Title ( OFF | ON )', 'cerax'),

             'section'   => 'section_content_post_type',

             'priority'  => 54

         ))

     ); 




}