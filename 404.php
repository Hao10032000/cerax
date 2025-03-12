<?php

/**

 * The template for displaying 404 pages (not found).

 *

 * @package cerax

 */



get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div id="primary" class="fullwidth-404">

					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">

							<div class="error-box-404 vertical-center">

								<div class="error-box text-center">

									<div class="error-404-text">

									    <img src="<?php echo THEMESFLAT_LINK . 'images/404.png'; ?>" alt="404">

										<h4><span><?php esc_html_e( 'Oops!', 'cerax' ); ?></span> <?php esc_html_e( ' That page can’t be found.', 'cerax' ); ?></h4>

								        <p><?php esc_html_e( 'It looks like the page you are looking for doesn’t exist or may have been moved. Don’t worry, we’re here to help! You can return to our homepage, explore our services, or contact us directly if you need assistance. ', 'cerax' ); ?></p>

									</div>
						
									<div class="wrap-button-404">

										<a href="<?php echo esc_url( home_url('/') ); ?>" class="button-primary button-md themesflat-button tf-btn "><span><?php esc_html_e( 'Back To Home Page','cerax' ) ?></span></a>

									</div>

								</div>

							</div>

						</section><!-- .error-404 -->

					</main><!-- #main -->

				</div><!-- #primary -->

			</div><!-- /.col-md-12 -->

		</div><!-- /.row -->

	</div>



<?php get_footer(); ?>