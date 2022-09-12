<?php

require_once get_parent_theme_file_path('/inc/theme_styles_and_scripts.php');
require_once get_parent_theme_file_path('/inc/sendEmail.php');

/**
 * Удаление пунктов в левом меню в админке WordPress
 *
 */
function remove_menus()
{
	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');

	remove_submenu_page('themes.php', 'themes.php');
	remove_submenu_page('themes.php', 'theme-editor.php');
	remove_submenu_page('themes.php', 'theme_options');

	remove_menu_page('plugins.php');
}
// add_action('admin_menu', 'remove_menus');

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});

function cut_string($str, $length = 50, $postfix = '...')
{
	if (strlen($str) <= $length)
		return $str;

	$temp = substr($str, 0, $length);
	return substr($temp, 0, strrpos($temp, ' ')) . $postfix;
}

function get_img_data($img_id, $size = 'full')
{

	$img_src = wp_get_attachment_image_url($img_id, $size);
	$img_alt = trim(strip_tags(get_post_meta($img_id, '_wp_attachment_image_alt', true)));

	return ['src' => $img_src, 'alt' => $img_alt];
}
