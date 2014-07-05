<?php
function unregister_widgets(){
	unregister_widget( 'WP_Widget_Archives' );
	unregister_widget( 'WP_Widget_Calendar' );
	unregister_widget( 'WP_Widget_Links' );
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	unregister_widget( 'WP_Widget_RSS' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'Jetpack_RSS_Links_Widget' );
	unregister_widget( 'Jetpack_Readmill_Widget' );
	unregister_widget( 'P2P_Widget' );
}

add_action( 'widgets_init', 'unregister_widgets', 20 );