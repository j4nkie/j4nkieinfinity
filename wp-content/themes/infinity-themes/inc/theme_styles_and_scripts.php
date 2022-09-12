<?php

/**
 * Подключение скриптов и стилей.
 *
 */
function theme_styles_and_scripts()
{

	// -- Стили--
	wp_enqueue_style('font-awesome', get_parent_theme_file_uri('/css/font-awesome/css/font-awesome.min.css'), array(), '1.0', 'all');
	wp_enqueue_style('micons', get_parent_theme_file_uri('/css/micons/micons.css'), array(), '1.0', 'all');

	wp_enqueue_style('vendor', get_parent_theme_file_uri('/css/vendor.css'), array(), '1.0', 'all');
	wp_enqueue_style('base', get_parent_theme_file_uri('/css/base.css'), array(), '1.0', 'all');
	wp_enqueue_style('fonts', get_parent_theme_file_uri('/css/fonts.css'), array(), '1.0', 'all');
	wp_enqueue_style('main', get_parent_theme_file_uri('/css/main.css'), array(), '1.0', 'all');
	// -- Скрипты --

	# jQuery
	if (!is_admin()) {
		wp_deregister_script('jquery');
	}

	wp_enqueue_script('jquery', get_parent_theme_file_uri('/js/jquery.min.js'), array(), '1.0', true);

	wp_enqueue_script('modernizr', get_parent_theme_file_uri('/js/modernizr.js'), array(), '1.0', true);
	wp_enqueue_script('pace', get_parent_theme_file_uri('/js/pace.min.js'), array(), '1.0', true);
	wp_enqueue_script('plugins', get_parent_theme_file_uri('/js/plugins.js'), array(), '1.0', true);
	wp_enqueue_script('main', get_parent_theme_file_uri('/js/main.js'), array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');
