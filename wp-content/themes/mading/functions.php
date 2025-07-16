<?php

/**
 * Tema mading menambahkan beberapa fungsi hook 
 * Bertujuan untuk membantu menampilkan konten sesuai kebutuhan
 * Disesuaikan untuk sebuah website desa
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 */

/**
 * Memanggil beberapa fungsi lain, dibawah ini
 */

error_reporting(E_ALL & ~E_WARNING);


require_once('functions/setting/theme-post-type.php');
require_once('functions/setting/theme-time-left.php');
require_once('functions/setting/theme-breadcrumb.php');
require_once('functions/setting/theme-setup.php');
require_once('functions/setting/theme-script.php');
require_once('functions/setting/theme-option.php');
require_once('functions/setting/theme-sidebar.php');
require_once('functions/setting/theme-excerpt.php');
require_once('functions/setting/theme-comment.php');
require_once('functions/setting/theme-school.php');
require_once('functions/setting/ciuss-news.php');


if (!isset($content_width)) {
	$content_width = 610;
}