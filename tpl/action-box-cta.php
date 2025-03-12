<?php 

    $show_action_box_cta = themesflat_get_opt('show_action_box_cta');
    if (themesflat_get_opt_elementor('show_action_box_cta') != '') {
        $show_action_box_cta = themesflat_get_opt_elementor('show_action_box_cta');
    }
    if ($show_action_box_cta == 1) : 
    $action_box_button_url = themesflat_get_opt('action_box_button_url'); 
    $text_button_action_box = themesflat_get_opt('text_button_action_box');
  


?>
<div class="action-box-cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-cta">
                    <a class="tf-btn-cta"
                        href="<?php echo esc_url(themesflat_get_opt('action_box_button_url')) ?>"><?php echo wp_kses( $text_button_action_box, themesflat_kses_allowed_html()); ?></a>
                    <h2 class="heading-cta"><?php echo themesflat_get_opt('heading_action_box_cta'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>