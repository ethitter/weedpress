<?php
add_action( 'admin_init', function() {

	// remove the color scheme picker
	remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

	// force all users to use the "Ectoplasm" color scheme
	add_filter( 'get_user_option_admin_color', function() {
		return 'flat';

	});

});