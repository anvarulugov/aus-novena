<?php

define('AUS_NOVENA_URL', get_template_directory_uri());
define('AUS_NOVENA_PATH', get_template_directory());

require AUS_NOVENA_PATH . '/lib/AUS_Novena_Primary_Nav_Walker.php';

function aus_novena_assets() {
	wp_enqueue_style('bootstrap', AUS_NOVENA_URL . '/plugins/bootstrap/bootstrap.min.css', array(), '4.3.5', 'all');
	wp_enqueue_style('icofont', AUS_NOVENA_URL . '/plugins/icofont/icofont.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('slick', AUS_NOVENA_URL . '/plugins/slick-carousel/slick/slick.css', array(), '1.0.0', 'all');
	wp_enqueue_style('slick-theme', AUS_NOVENA_URL . '/plugins/slick-carousel/slick/slick-theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', AUS_NOVENA_URL . '/css/style.css', array(), '1.0.0', 'all');

	wp_enqueue_script('jquery', AUS_NOVENA_URL . '/plugins/jquery/jquery.js', array(), '3.5.1', true);
	wp_enqueue_script('bootstrap', AUS_NOVENA_URL . '/plugins/bootstrap/bootstrap.min.js', array(), '4.5.3', true);
	wp_enqueue_script('slick', AUS_NOVENA_URL . '/plugins/slick-carousel/slick/slick.min.js', array(), '1.0.0', true);
	wp_enqueue_script('shuffle', AUS_NOVENA_URL . '/plugins/shuffle/shuffle.min.js', array(), '1.0.0', true);

	wp_enqueue_script('google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA', array(), '1.0.0', true);
	wp_enqueue_script('gmap', AUS_NOVENA_URL . '/plugins/google-map/gmap.js', array(), '1.0.0', true);

	wp_enqueue_script('script', AUS_NOVENA_URL . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'aus_novena_assets');

register_nav_menus(array(
	'primary' => 'Primary navbar'
));