<?php

function add_lines_to_separators(){

	?>
	<style type="text/css" media="screen">

		#adminmenu div.separator{
			border-color: rgba(255,255,255,0.15)!important;
			margin-top:5px;
		}

	</style>


<?php


}

add_action( 'admin_enqueue_scripts', 'add_lines_to_separators' );