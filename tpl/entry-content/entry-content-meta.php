<?php  
/**
 * @package cerax
 */
?>
<?php 
echo '<div class="post-meta">';
$meta_elements = themesflat_layout_draganddrop(themesflat_get_opt( 'meta_elements' ));
foreach ( $meta_elements as $meta_element ) :
 if ( 'author' == $meta_element ) {
            echo '<span class="item-meta post-author">';
                printf(
                '<a class="meta-text" href="%s" title="%s" rel="author">%s</a>',
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )),
                esc_attr( sprintf( esc_html__( 'View all posts by %s', 'finwice' ), get_the_author() ) ),get_the_author());
            echo '</span>';
    } elseif ( 'comment' == $meta_element ) {
        echo'<span class="item-meta post-comments"><span class="meta-text">';
                comments_number ();
        echo '</span></span>';
    } elseif ( 'category' == $meta_element ) {
        echo '<span class="item-meta post-categories"><i class="icon-cerax-foder"></i>'.esc_html__("",'finwice');
            the_category( ' / ' );
        echo '</span>';
    }
endforeach;
echo '</div>';
?>