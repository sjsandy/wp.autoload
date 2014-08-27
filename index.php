<?php

/*
Plugin Name: WP.Autoload V.3.0
Plugin URI: http://autoloadmanager.shawnsandy.com
Description: Easily extend the power of WordPress using PHP classes and libraries; reduce code repetition and easily add external packages to your WordPress projects!
Author URI: http://shawnsandy.com
Version: 2.0 Beta
 */

include_once __DIR__ .'vendor/symphony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

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