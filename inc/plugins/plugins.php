<?php

// Register action to declare required plugins

add_action('tgmpa_register', 'themesflat_recommend_plugin');

function themesflat_recommend_plugin() {

    

    $plugins = array(

        array(

            'name' => esc_html__('Elementor', 'cerax'),

            'slug' => 'elementor',

            'required' => true

        ),

        array(

            'name' => esc_html__('ThemesFlat Core', 'cerax'),

            'slug' => 'plugin-core',

            'source' => THEMESFLAT_DIR . 'inc/plugins/cerax-core.zip',

            'required' => true

        ),

        array(
            'name' => esc_html__('Themesflat Addons For Elementor', 'cerax'),

            'slug' => 'themesflat-addons-for-elementor',

            'required' => true
        ),


        array(

            'name' => esc_html__('Contact Form 7', 'cerax'),

            'slug' => 'contact-form-7',

            'required' => false

        ),    

        array(

            'name' => esc_html__('Mailchimp', 'cerax'),

            'slug' => 'mailchimp-for-wp',

            'required' => false

        ),        

        array(

            'name' => esc_html__('One Click Demo Import', 'cerax'),

            'slug' => 'one-click-demo-import',

            'required' => false

        )   

    );

    

    tgmpa($plugins);

}



