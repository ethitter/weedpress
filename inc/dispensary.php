<?php



if ( ! class_exists( "WeedPress_Dispensary" ) ) :

	class WeedPress_Dispensary {

		  	function __construct(){

		  		add_action( 'admin_menu', array( $this, 'weedpress_dispensary_menu' ) );
				add_action( 'load-index.php', array( $this, 'weedpress_dashboard_redirect' ) );

		  	}

		  	function init(){
		  		$this->render_dispensary();
			}

		  	function weedpress_dispensary_menu(){
				add_menu_page( 'Dispensary Menu', 'Dispensary', 'edit_page', 'dispensary', array( $this, 'init'), 'dashicons-dashboard', 2 );

			}

			function render_dispensary(){
				include "dispensary/dashboard.php";
			}

			function weedpress_dashboard_redirect(){

				if( is_admin() ) {

					$screen = get_current_screen();

					if( $screen->base == 'dashboard' ) {
						wp_redirect( admin_url( 'admin.php?page=dispensary' ) );
					}
				}

			}
	}

	$Dispensary = new WeedPress_Dispensary();
	global $Dispensary;

endif;





