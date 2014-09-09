<?php

/*
Plugin Name: MP.Autoload
Plugin URI: http://autoloadmanager.shawnsandy.com
Description: Use composer in wordpress to manage / autoload php libraies --- copy and paste the following line
//** Composer Autoloader // `require_once (ABSPATH.'wp-content/plugins/mp-autoload/vendor/autoload.php')` above Sets up WordPress vars and included files in your wp-config.php.
Author URI: http://shawnsandy.com
Version: 3.0 Beta
 */

/**
 * wordpress plugin
 */

$composer_autoload = __DIR__ .'/vendor/autoload.php';
if (file_exists($composer_autoload)) {
	require_once ($composer_autoload);
}

class mp_autoload {

	private static $instance;

	/**
	 *
	 * @return type
	 */
	public static function instance() {
		if (!isset(self::$instance)) {
			self::$instance = new mp_autoload();
		}
		return self::$instance;
	}

	function __construct() {
		$this->actions();
	}

	/**
	 * Add all plugin actions here will be called by class construct
	 */
	public function actions() {

		add_action('plugins_loaded', array($this, 'plugins_loaded'));

		add_action('init', array($this, 'init'));

		add_action("admin_init", array($this, "admin_init"));

		add_action('admin_menu', array($this, 'menus'));

	}

	public function plugins_loaded() {

	}

	public function init() {

	}

	public function admin_init() {

	}

	public function menus() {

		add_menu_page('MP.Autoload', "MP.Autoload", 'manage_options', __FILE__, array($this, 'admin_page'));

	}

	public function admin_page() {

		include_once (__DIR__ ."/views/index.php");

	}

}

mp_autoload::instance();
