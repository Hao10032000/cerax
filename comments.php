<?php

/**

 * The template for displaying comments.

 *

 * The area of the page that contains both current comments

 * and the comment form.

 *

 * @package cerax

 */



/*

 * Render comment list

 */



function wpb_comment_reply_text( $link ) {

	$link = str_replace( 'Reply', 'Reply', $link );

	return $link;

	}

add_filter( 'comment_reply_link', 'wpb_comment_reply_text' );



function themesflat_comments($comment, $args, $depth) {

	$GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

    <article id="comment-<?php comment_ID(); ?>" class="comment_wrap clearfix">

        <div class="comment-wrap">

            <div class="gravatar">

                <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 52 ); ?>

            </div>

            <div class='comment_content'>

                <div class="comment-wrap">
                    
                    <div class="comment_meta clearfix">

                        <?php printf( '<h4 class="comment_author">%s</h4>', get_comment_author_link()); ?><?php edit_comment_link(esc_html__('(Edit)', 'cerax' ),'  ','') ?>

                    </div>

                    <div class="comment_time">

                        <?php echo get_comment_date() ; ?><?php esc_html_e( ' at ', 'cerax') ?><?php echo get_comment_time() ; ?>

                    </div>

                </div>
                <div class='comment_text'>

                    <?php comment_text() ?>

                    <?php if ($comment->comment_approved == '0') : ?>

                    <?php endif; ?>



                </div>

                <?php if (get_comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])))): ?>

                <div class="comement_reply">

                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                </div>

                <?php endif; ?>

            </div>

        </div>

    </article>

    <?php

}



/*

 * If the current post is protected by a password and

 * the visitor has not yet entered the password we will

 * return early without loading the comments.

 */

if ( post_password_required() ) {

	return;

}

?>



    <div id="comments" class="comments-area">



        <?php if ( have_comments() ) : ?>

        <div class="comment-list-wrap">

            <h4 class="comment-title">

                <?php comments_number( esc_html__( '0 Comments', 'cerax' ), esc_html__( '1 Comment', 'cerax' ), esc_html__( '% Comments', 'cerax' ) ); ?>

            </h4>



            <ol class="comment-list">

                <?php wp_list_comments( array( 'callback' => 'themesflat_comments' ) ); ?>

            </ol>



            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

            <nav class="navigation comment-navigation" role="navigation">

                <h5 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'cerax' ); ?>

                </h5>



                <div class="nav-previous">

                    <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'cerax' ) ); ?></div>

                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'cerax' ) ); ?>

                </div>

            </nav>

            <?php endif; ?>



            <?php if ( !comments_open() && get_comments_number() ) : ?>

            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cerax' ); ?></p>

            <?php endif; ?>

        </div><!-- /.comment-list-wrap -->



        <?php endif; ?>

        <!-- have_comments -->



        <?php

	if ( comments_open() ) {

		$commenter = wp_get_current_commenter();

		$aria_req = get_option( 'require_name_email' ) ? " aria-required='true'" : '';

		$comment_args = array(

			'title_reply'          => esc_html__( 'Leave A comment', 'cerax' ),

            'des_reply'          => esc_html__( 'Your email address will not be published. Required fields are marked *', 'cerax' ),

			'id_submit'            => 'comment-reply',

			'label_submit'         => esc_html__( 'Send Comment', 'cerax' ),

			'class_form'		   => 'clearfix',



			'comment_field' => 	'<div class="comment-right">

									<fieldset class="message">

										<textarea id="comment-message" placeholder="' . esc_attr__('Message', 'cerax') . '" name="comment" rows="8" tabindex="4"></textarea>

									</fieldset>

			                    </div>',

			'fields'               => apply_filters( 'comment_form_default_fields', array(				

				'author' => '<div class="comment_wrap_input">

								<div class="comment-left">

									<fieldset class="name-container">									

										<input type="text" id="author" placeholder="' . esc_attr__('Name', 'cerax') . '" class="tb-my-input" name="author" tabindex="1" value="' . esc_attr( $commenter['comment_author'] ) . '" size="32"' . $aria_req . '>

									</fieldset>',

				'email'  => 		'<fieldset class="email-container">									

										<input type="text" id="email" placeholder="' . esc_attr__('Email', 'cerax') . '" class="tb-my-input" name="email" tabindex="2" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="32"' . $aria_req . '>

									</fieldset>

								</div>

							</div>',





							    

			) ),

			

			'submit_field' => '

			<p class="form-submit"><span class="wrap-input-submit">%1$s %2$s</span></p>

			',

			

			'comment_notes_after'  => '',

			'comment_notes_before' => '',

		);



		comment_form($comment_args);

	}

	?>

        <!-- comments_open -->

    </div><!-- #comments -->