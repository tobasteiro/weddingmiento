<?php
function wptutsplus_register_theme_menu() {
	register_nav_menu ( 'primary', 'Main Navigation Menu' );
	
	// Add HTML5 elements
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
add_action ( 'init', 'wptutsplus_register_theme_menu' );
?>