<?php

function hide_sharing_meta(){
	?>
	<style type="text/css" media="screen">

	#sharing_meta{
		display: none;
		}
	</style>

	<?php

}

add_action( 'admin_enqueue_scripts', 'hide_sharing_meta' );
