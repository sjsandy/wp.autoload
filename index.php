<?php

/*
Plugin Name: MP.Autoload
Plugin URI: http://autoloadmanager.shawnsandy.com
Description: Use composer in wordpress to manage / autoload php libraies --- copy and paste the following line //** Composer Autoloader // `require_once (ABSPATH.'wp-content/plugins/mp-autoload/vendor/autoload.php')` above Sets up WordPress vars and included files.
Author URI: http://shawnsandy.com
Version: 3.0 Beta
 */

include_once __DIR__ .'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->register();

add_action('plugins_loaded', 'load_composer');

function load_composer() {
	//indlude_once(plugins_url('vendor/autoload.php', __FILE__));
	if (!empty($posts)):
	var_dump($posts);
	endif;
}

add_action('init', 'wpa_init');

function wpa_init() {

}
