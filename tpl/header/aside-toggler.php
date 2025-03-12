<?php 

$logo_site = themesflat_get_opt('site_logo'); 

?>

<div class="modal-menu-left">

	<div class="modal-menu__backdrop"></div>

	<div class="modal-menu__body">

		<button class="modal-menu__close" type="button">

		    <i class="icon-cerax-plus"></i>

		</button>

		<div class="modal-menu__panel">

			<div class="modal-menu__panel-header">

		        <div class="modal-menu__panel-title">

		        	<div class="header-modal-menu-left-btn">

		            </div>

		        </div>

		    </div>

		    <div class="modal-menu__panel-body">

				<div class="nav-wrap-secondary">				    

			        <?php dynamic_sidebar('aside-toggler-sidebar'); ?>				    

				</div><!-- /.nav-wrap --> 

			</div>


		</div>

	</div>

</div>  