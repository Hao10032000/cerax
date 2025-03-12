<?php

/**

 * Return the default options of the theme

 * 

 * @return  void

 */



function themesflat_customize_default($key) {

	$default = array(

		'social_links'	=> array ("facebook" => '#', "twitter" => '#', "instagram" => '#', "linkedin"  => '#'),

		'show_social_share' => 0,		

		'social_footer' => 0,

		'go_top' => 1,

		'topbar_background_color'	=> '',

		'message_background_color'	=> '',

		'topbar_textcolor'	=> '',

		'topbar_link_color' => '',

		'topbar_link_color_hover' => '',

		'message_textcolor'	=> '',

		'message_link_color' => '',

		'message_link_color_hover' => '',

		'topbar_show' => 0 ,

		'header_message' => 0 ,

		'topbar_address_title' => 'Address',


        'topbar_address1' => '<i class="icon-cerax-map"></i> 101 E 129th St, East Chicago, IN 46312, US',

		'topbar_address2' => '<i class="icon-cerax-map"></i> 101 E 129th St, East Chicago, IN 46312, US',

		'topbar_address3' => '<i class="icon-cerax-mail"></i> hi.avitex@gmail.com',

		'topbar_address4' => '<i class="icon-cerax-phone"></i> 1-555-678-8888',

		'topbar_address5' => '<i class="icon-cerax-map"></i> Hopkins, Minnesota(MN), 55305',



		'topbar_email_label' => '<i class="icon-cerax-ona-50"></i>',

		'topbar_email' => 'hello@support.com',

		'topbar_email_title' => 'Support',

		'social_topbar' => 1,

		'social_header' => 1,

		'typography_topbar' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '13',

			'line_height'=>'1.5384615384615385',

			'letter_spacing' => '',

		),

		'topbar_controls' => array('padding-top' => 0,'padding-bottom' => 0),

		'logo_controls' => array('padding-top' => '','padding-bottom' => ''),

		'style_header'	=> 'header-default',	

		'style_topbar'	=> 'topbar-default',	

		'header_backgroundcolor'=>'',

		'header_background_bottom_color'=>'',

		'header_sticky' => 0,

		'header_search_box' => 1,

		'header_content_right' => '',

		'header_absolute'	=> 1,		

		'header_sidebar_toggler' => 1,

		'header_infor_phone' => 0,

		'header_button'=> 0 ,

		'header_button_text' => 'Get an appointment',

		'header_button_url' => '',

		'header_info_phone_icon' => '<i class="icon-cerax-ona-49"></i>',

		'header_info_phone_number' => 'Phone Number',

		'header_info_phone_number_title' => 'Call us',

		'show_post_navigator' => 0,

		'show_entry_footer_content'	=> 0,

		'logo_width' => 113,

		'menu_location_primary' => 'primary',

		'site_logo'	=> THEMESFLAT_LINK . 'images/logo.png',

		'site_logo_sticky'	=> THEMESFLAT_LINK . 'images/logo.png',

		'site_logo_fixed'	=> THEMESFLAT_LINK . 'images/logo.png',

		'site_logo_mobile'	=> THEMESFLAT_LINK . 'images/logo.png',	

		'header_color_sticky' => '',

		'show_bottom' => 1,		

		'header_backgroundcolor_sticky'=>'#1B1E23',	



		'primary_color'=>'#222222',

		'secondary_color'=>'#8EBD9D',

		'accent_color'=>'#666666',

		

		'typography_body' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'30px',

			'letter_spacing' => '0px',

		),

		'body_text_color'=>'#666666',

		'body_background_color' => '',

		'page_sidebar_layout' => 'sidebar-right',

		'content_controls' => array('padding-top' => 102,'padding-bottom' => 102),



		'typography_menu' => array(

			'family' => 'Poppins',

			'style'  => '500',

			'size'   => '16',

			'line_height'=>'94px',

			'letter_spacing' => '0px',

		), 

		'mainnav_color'		=> '#FFFFFF',

		'mainnav_hover_color'=>'#8EBD9D',

		'mainnav_active_color'=>'#8EBD9D',

		'sub_sub_nav_color'=>'',

		'sub_sub_nav_background'=>'',

		'sub_sub_nav_color_hover'=>'',

		'sub_sub_nav_background_hover'=>'',

		'menu_distance_between' => 19,

		'typography_sub_menu' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '15',

			'line_height'=>'24px',

			'letter_spacing' => '0px',

		),

		'sub_nav_color'		=>'',		

		'sub_nav_color_hover'	=>	'',

		'sub_nav_background'=>'#ffffff',

		'sub_nav_background_hover'=>'',

		'sub_nav_border_color' => '',

		'typography_headings'	=> array(

			'family' => 'Poppins',

			'style'  => '500',

			'line_height'=>'1.333',

			'letter_spacing' => '0px'		

		),

		'h1_size' => 80,

		'h2_size' => 56,

		'h3_size' => 32,

		'h4_size' => 28,

		'h5_size' => 24,

		'h6_size' => 20,

		'typography_blockquote' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'45px',

			'letter_spacing' => '-0.7px',

		),	

		'typography_blog_post_title' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '24',

			'line_height'=>'30px',

			'letter_spacing' => '',

		),

		'typography_blog_post_meta' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'18.8px',

			'letter_spacing' => '',

		),

		'typography_blog_post_buttons' => array(

			'family' => 'Poppins',

			'style'  => '600',

			'size'   => '18',

			'line_height'=>'24px',

			'letter_spacing' => '0px',

		),

		'typography_blog_single_title' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '32',

			'line_height'=>'45px',

			'letter_spacing' => '',

		),

		'typography_blog_single_comment_title' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '32',

			'line_height'=>'40px',

			'letter_spacing' => '0px',

		),

		'typography_sidebar_widget_title' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '24',

			'line_height'=>'30px',

			'letter_spacing' => '0px',

		),	

		'typography_footer_widget_title' => array(

			'family' => 'Poppins',

			'style'  => '500',

			'size'   => '20',

			'line_height'=>'27.32px',

			'letter_spacing' => '0px',

		),	

		'typography_page_title'	=> array(

			'family' => 'Poppins',

			'style'  => '500',

			'size'   => '80',

			'line_height'=>'95px',

			'letter_spacing' => '',

		),

		'page_title_background_color' => '#000000',

		'page_title_background_color_opacity' => '100',

		'page_title_text_color' => '#FFFFFF',		

		'page_title_controls' => array('padding-top' => 255, 'padding-bottom' => 238),

		'page_title_background_image' => THEMESFLAT_LINK . 'images/page-title.jpg',

		'page_title_image_size' => 'cover',

		'page_title_heading_enabled' => 1,

		'typography_breadcrumb'	=> array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'32px',

			'letter_spacing' => '0px',

		),

		'bread_crumb_prefix' =>'',

		'breadcrumb_separator' =>  '/',

		'breadcrumb_color' => '#FFFFFF',



		'typography_buttons' => array(

			'family' => 'Poppins',

			'style'  => '600',

			'size'   => '18',

			'line_height'=>'24px',

			'letter_spacing' => '0px',

		),

		'typography_pagination'	=> array(

			'family' => 'Poppins',

			'style'  => '500',

			'size'   => '18',

			'line_height'=>'1',

			'letter_spacing' => '0px',

		),		

		'typography_bottom_menu' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '14',

			'line_height'=>'1.7142857142857142',

			'letter_spacing' => '0px',

		),

		'breadcrumb_enabled' => 1,

		'show_post_paginator' => 1,

		'blog_grid_columns' => 3,

		'blog_grid_number_post' => 3,

		'post_content_elements' => 'title,meta,excerpt_content,readmore',

		'meta_elements' => 'category,date,author,comment',


		'blog_archive_exclude' => '',

		'blog_featured_title' => '',

		'style_blog_single' => 'content-single',

		'sidebar_layout' => 'sidebar-right',

		'blog_archive_layout' => 'blog-list',

		'related_post_style'	=> 'blog-grid',

		'grid_columns_post_related' => 3,

		'number_related_post' => 3,

		'blog_sidebar_list'		  => 'blog-sidebar',	

		'blog_archive_readmore' => 1,

		'blog_archive_post_excepts_length' => 25,

		'blog_archive_readmore_text' => 'Read more <i class="icon-cerax-top"></i>',

		'blog_archive_pagination_style' => 'pager-numeric',

		'blog_posts_per_page'	=> 3,

		'blog_order_by'	=> 'date',

		'blog_order_direction' => 'DESC',

		'page_sidebar_list'	=> 'blog-sidebar',	



		'team_slug' => '',

		'team_name' => 'Team',

		'team_show_filter' => 0,

		'team_grid_columns' => 3,

		'team_number_post'=> 9,

		'team_filter_category_order' => '',

		'team_order_by' => 'author,date,comment,category',

		'team_order_direction' => 'DESC',

		'team_exclude' => '',

		'team_layout' => 'fullwidth',

		'team_show_post_navigator' => 0,

		'team_show_entry_footer_content'	=> 0,

		'team_show_related' => 0,

		'team_related_grid_columns' => 3,

		'team_sidebar_list' => 'blog-sidebar',

		'team_post_image'	=> THEMESFLAT_LINK . 'images/logo.png',

		'number_related_post_team' => 3,

		'team_featured_title' => 'Team Details',


		'case_study_slug' => '',

		'case_study_name' => 'Case Study',

		'case_study_show_filter' => 0,

		'case_study_grid_columns' => 3,

		'case_study_number_post'=> 6,

		'case_study_archive_pagination_style' => 'pager-numeric',

		'case_study_filter_category_order' => '',

		'case_study_order_by' => 'date',

		'case_study_order_direction' => 'DESC',

		'case_study_exclude' => '',

		'case_study_layout' => 'fullwidth',

		'case_study_sidebar_list' => 'themesflat-custom-sidebar-case_studysidebar',

		'case_study_show_post_navigator' => 0,

		'case_study_show_related' => 0,

		'case_study_related_grid_columns' => 3,

		'number_related_post_case_study' => 3,

		'case_study_featured_title' => '',

		'case_study_title_single' => 1,


		'services_slug' => '',

		'services_name' => 'Services',

		'services_show_filter' => 0,

		'services_grid_columns' => 3,

		'services_number_post'=> 6,

		'services_archive_pagination_style' => 'pager-numeric',

		'services_filter_category_order' => '',

		'services_order_by' => 'date',

		'services_order_direction' => 'DESC',

		'services_exclude' => '',

		'services_layout' => 'fullwidth',

		'services_sidebar_list' => 'themesflat-custom-sidebar-servicessidebar',

		'services_show_post_navigator' => 0,

		'services_show_related' => 0,

		'services_related_grid_columns' => 3,

		'number_related_post_services' => 3,

		'services_featured_title' => '',

		'services_title_single' => 1,

		

		'typography_footer' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'40px',

			'letter_spacing' => '',

		),

		'footer_background_color'	=> '#202020',

		'footer_title_widget_color' => '#FFFFFF',

		'footer_text_color'			=> '#FFFFFF',

		'footer_text_color_hover'   => '',

		'footer_widget_areas' => 3,

		'footer_controls' => array('padding-top' => '102px', 'padding-bottom' =>'56px' ),

		'footer1' => 'footer-1',

		'footer2' => 'footer-2',

		'footer3' => 'footer-3',

		'footer4' => 'footer-4',

		'footer_background_image' => '',

		'footer_image_size' => 'cover',

		'typography_bottom_copyright' => array(

			'family' => 'Poppins',

			'style'  => '400',

			'size'   => '14',

			'line_height'=>'22px',

			'letter_spacing' => '',

		),

		'bottom_background_color'	=> '#202020',

		'bottom_text_color'			=> 'rgba(255, 255, 255, 0.4)',

		'bottom_link_color'         => '#ffffff',

		'bottom_text_color_hover'   => '',		

		'social_bottom'   => 1,		

		'layout_version'			=> 'wide',		

		'footer_copyright'			=> 'Copyright © 2025 Cerax. Designed & Developed by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat </a>.',

		'enable_smooth_scroll'	=> 0,

		'enable_preload' => 1,

		'preload' => 'preload-6',

		'page_title_styles' => 'default',

		'page_title_alignment' => 'left',

		'page_title_video_url' => '',
		
		'action_box_text_color'=> '',
		'action_box_heading_color'=> '',
		'action_box_button_text_color'=> '',
		'action_box_button_text_color'=> '',
		'show_action_box'=> '1',

		'heading_action_box'=> 'Cerax',		
		
		'action_box_background_image'=> '',
		'action_box_background_color'=> '',
		'action_box_button_background_color'=> '',

		'text_action_box'=> '',
		'text_button_action_box'=> '<i class="icon-cerax-top"></i>',
		'action_box_button_url'=> '',

		'show_action_box_cta'=> 1,
		'heading_action_box_cta'=> 'Cerax',
		
		
		



        'show_partner'	=> 1,

		'img_partner' => '',

		'show_number_img_partner_desktop' => 6,

		'show_number_img_partner_tablet' => 4,

		'show_number_img_partner_mobile' => 2,

		'gap_img_partner' => 30,

		'partner_box_controls' => array('padding-top' => 67,'padding-bottom' => 64),

		'partner_box_background_color' => '#f2f7f5',

        'show_footer_info'	=> 0,

        'footer_info_text' => 'Solve Your IT Needs Today!',

		'footer_info_button_url' => '/contact-us',

        'footer_info_button' => 'GET SOLUTIONS',

	);

	return $default[$key];

}