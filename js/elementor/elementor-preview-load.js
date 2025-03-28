;(function($) {

    "use strict";



    jQuery(document).ready(function(){

        //Header

        elementor.settings.page.addChangeCallback( 'style_header', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'site_logo', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'header_absolute', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'header_sticky', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'header_search_box', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'header_sidebar_toggler', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'header_button_show', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'header_wishlist_icon', handleReloadPreview );

        elementor.settings.page.addChangeCallback( 'style_blog_single', handleReloadPreview );

        //Page

        elementor.settings.page.addChangeCallback( 'sidebar_layout', handleReloadPreview );

        

        //Footer

        elementor.settings.page.addChangeCallback( 'show_footer_info', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'show_action_box', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'show_action_box_cta', handleReloadPreview );

    });



    function handleReloadPreview ( newValue ) {

        elementor.saver.saveEditor({

            status: elementor.settings.page.model.get('post_status'),

            onSuccess: () => {

                elementor.reloadPreview();



                elementor.once("preview:loaded", function() {

                    elementor.getPanelView().setPage("page_settings");

                });

            }

        })

    }



})(jQuery);