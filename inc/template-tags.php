<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package cerax
 */


/**
 * Prints HTML with meta information for the current post-date/time, post categories and author.
 */

function themesflat_widget_layout($columns) {
	$layout = array();
	switch ($columns) {
		case 2:
			$layout = array(6,6);
			break;
		case 3:
			$layout = array(4,4,4);
			break;
		case 4:
			$layout = array(4,4,4);
			break;
		case 5:
			$layout = array(3,3,3,3);
			break;
		default:
			$layout = array(4,4,4);
			break;
		
	}
	return $layout;
}

if ( ! function_exists( 'themesflat_posted_category' ) ) :
function themesflat_posted_category( $layout = '' ) { 	
	if ( has_category() ) {
		echo '<div class="post-categories">'.esc_html__("In - ",'cerax');
			the_category( ', ' );
		echo '</div>';
	}	
}
endif;

if ( ! function_exists( 'themesflat_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function themesflat_entry_footer() {
	// Hide category and tag text for pages.
	$tags_links = '';
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', ' ' );
		if ( $tags_list && is_single() ) {
			$tags_links = sprintf( '<div class="tags-links"><h5>' . esc_html__( 'Tags:', 'cerax' ) . '</h5>' . esc_html__( ' %1$s', 'cerax' ) . '</div>', $tags_list  );

		}			
	}

	?>
<div class="entry-footer">
    <?php 
			printf($tags_links); 
			themesflat_social_single();
		?>
</div>
<?php

}
endif;

if ( ! function_exists( 'themesflat_post_navigation' ) ) :
	function themesflat_post_navigation() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );
	
		if ( ! $next && ! $previous ) {
			return;
		}
		?>
<nav class="navigation posts-navigation" role="navigation">
    <h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'cerax' ); ?></h2>
    <ul class="nav-links">
        <?php
				if ( is_attachment() ) :
	
					$prevPost = get_adjacent_post( false, '', true);
					if( is_object( $prevPost ) ){
						$prevthumbnail = get_the_post_thumbnail($prevPost->ID);
						$prev_title = get_the_title($prevPost->ID);
					}
					$prev = esc_html__( 'Published In', 'cerax' );
					$date = get_the_date();
					echo '<li class="post-navigation previous-post">';
						 previous_post_link('<div class="thump-post">%link</div>', $prevthumbnail); 
						echo '<div class="content">';						
							previous_post_link('<div class="title-post">%link</div>', $prev_title); 
							previous_post_link('<div class="prev-button">%link</div>', $date); 
						echo '</div>';
					echo '</li>';
				else :
	
					$prevPost = get_adjacent_post( false, '', true);
					if( is_object( $prevPost ) ){
						$prevthumbnail = get_the_post_thumbnail($prevPost->ID);
						$prev_title = get_the_title($prevPost->ID);
						$prev = esc_html__( 'Previous', 'cerax' );
						$date = get_the_date();
	
						echo '<li class="post-navigation previous-post">';
							 previous_post_link('<div class="thump-post">%link</div>', $prevthumbnail); 
							echo '<div class="content">';							
								previous_post_link('<div class="title-post">%link</div>', $prev_title); 
								previous_post_link('<div class="post-button prev-button">%link</div>', $date); 
							echo '</div>';
						echo '</li>';
					}
	
					$nextPost = get_adjacent_post( false, '', false);
					if( is_object( $nextPost ) ){
						$nextthumbnail = get_the_post_thumbnail($nextPost->ID);
						$next_title = get_the_title($nextPost->ID);
						$next = esc_html__( 'next post', 'cerax' );
						$date = get_the_date();
						echo '<li class="post-navigation next-post">';
						    next_post_link('<div class="thump-post">%link</div>', $nextthumbnail); 
							echo '<div class="content">';
							
								next_post_link('<div class="title-post">%link</div>', $next_title); 
								next_post_link('<div class="post-button next-button">%link</div>', $date); 
							echo '</div>';
							
						echo '</li>';
					}
					
				endif;
				?>
    </ul><!-- .nav-links -->
</nav><!-- .navigation -->
<?php
	}
	endif;