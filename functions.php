<?php 
function learwp_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learwp_resources');


// Navigation Menus

register_nav_menus(array(
	'primary' => __( 'Menú Primario'),
	'footer'  => __( 'Menú Footer'),
));
