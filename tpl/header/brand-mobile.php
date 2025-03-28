<?php

$logo_site = themesflat_get_opt('site_logo_mobile');

if ( $logo_site ) : ?>

    <div  class="logo logo-mobi" >                  

        <a href="<?php echo esc_url( home_url('/') ); ?>"  title="<?php bloginfo('name'); ?>">

            <?php if  (!empty($logo_site)) { ?>

                <img class="site-logo"  src="<?php echo esc_url($logo_site); ?>" alt="<?php bloginfo('name'); ?>" />

            <?php } ?>

        </a>

    </div>

<?php else : ?>

    <div class="logo logo-mobi">

    	<h1 class="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>			

		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	

    </div><!-- /.site-infomation -->          

<?php endif; ?>