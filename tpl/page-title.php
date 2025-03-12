<?php 

if ( is_page() && is_page_template( 'tpl/front-page.php' ) ) {

    return;

}



$titles = themesflat_get_page_titles();    

ob_start();

if ( $titles['title'] ) { printf( '%s', wp_kses_post($titles['title']) ); }

$title = ob_get_clean();


?>

<!-- Page title -->

<?php

$page_title_styles = themesflat_get_opt('page_title_styles');

$page_title_alignment = themesflat_get_opt('page_title_alignment');

$page_title_video_url = themesflat_get_opt('page_title_video_url');



?>

<header class="page-header">

    <div
        class="page-title <?php echo esc_attr($page_title_styles); ?> <?php echo esc_attr($page_title_alignment); ?> <?php echo themesflat_get_opt_elementor('extra_classes_pagetitle'); ?>">

        <?php if ( $page_title_video_url != '' ):?>

        <div id="ptbgVideo" class="player"
            data-property="{videoURL:'<?php echo esc_url($page_title_video_url); ?>',containment:'.page-title', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'large'}">
        </div>

        <?php endif;?>

        <div class="overlay"></div>

        <div class="container">

            <div class="row">

                <div class="page-title-container">

                    <?php        
                    
                    if( is_singular('post') ) {

                        if ( themesflat_get_opt( 'breadcrumb_enabled' ) == 1 ) {
    
                            themesflat_breadcrumb();
                        }

                        if ( themesflat_get_opt('page_title_heading_enabled') == 1 ) {

                            echo sprintf('<h1 class="page-title-heading">%s</h1>', $title); 
    
                        }  
                        while ( have_posts() ) : the_post();
                        echo '<div class="post-meta pagetitle-meta">';
                            $meta_elements = themesflat_layout_draganddrop(themesflat_get_opt( 'meta_elements' ));
                            foreach ( $meta_elements as $meta_element ) :
                                if ( 'date' == $meta_element ) {
                                    echo '<span class="item-meta post-date">';   
                                        $archive_year  = get_the_time('Y'); 
                                        $archive_month = get_the_time('m'); 
                                        $archive_day   = get_the_time('d');                 
                                        echo '<i class="meta-icon icon-cerax-calendar-days" aria-hidden="true"></i><a class="meta-text" href="'.get_day_link( $archive_year, $archive_month, $archive_day).'">'.get_the_date().'</a>';
                                    echo '</span>';
                                }   elseif ( 'author' == $meta_element ) {
                                        echo '<span class="item-meta post-author">';
                                            printf(
                                            '<i class="meta-icon icon-cerax-user" aria-hidden="true"></i><a class="meta-text" href="%s" title="%s" rel="author">%s</a>',
                                            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )),
                                            esc_attr( sprintf( esc_html__( 'View all posts by %s', 'cerax' ), get_the_author() ) ),get_the_author());
                                        echo '</span>';
                                } elseif ( 'comment' == $meta_element ) {
                                    echo'<span class="item-meta post-comments"><i class="meta-icon icon-cerax-comments" aria-hidden="true"></i><span class="meta-text">';
                                            comments_number ();
                                    echo '</span></span>';
                                } elseif ( 'view' == $meta_element ) {
                                    echo '<span class="item-meta post-view"><i class="meta-icon icon-cerax-view" aria-hidden="true"></i>'. themesflat_get_post_views(get_the_ID()) .'</span>';
                                }
                            endforeach;
                        echo '</div>';
				        endwhile; 


                    } else {
                        if ( themesflat_get_opt('page_title_heading_enabled') == 1 ) {

                            echo sprintf('<h1 class="page-title-heading">%s</h1>', $title); 
    
                        }  
    
                        if ( themesflat_get_opt( 'breadcrumb_enabled' ) == 1 ) {
    
                            themesflat_breadcrumb();
                        }
                    }

                ?>

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.page-title -->

</header><!-- /.page-header -->

