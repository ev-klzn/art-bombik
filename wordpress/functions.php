<?php
add_action('wp_enqueue_scripts', 'bombik_scripts');

function bombik_scripts() {
	// wp_enqueue_style( 'bombik-style', get_stylesheet_uri() ); для css в корне папки
	wp_enqueue_style(' swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	wp_enqueue_style( 'header-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style(' icons-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

	wp_enqueue_script( 'bombik_slider', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
	wp_enqueue_script( 'bombik_scripts', get_template_directory_uri() . '/js/script.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes ($atts, $item, $args) {
	if ($args->menu === 'Main') {
		$atts['class'] = 'menu__link';

		// if ($item->current) {
		// 	$atts['class'] .= ' menu__link-active';
		// }
	};

	return $atts;
}


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes_footer', 10, 3);
function filter_nav_menu_link_attributes_footer ($atts, $item, $args) {
	if ($args->menu === 'Footer') {
		$atts['class'] = 'footer__link';

		// if ($item->current) {
		// 	$atts['class'] .= ' footer__link-active';
		// }
	};

	return $atts;
}

?>