<?php

/*
Plugin Name: MP.Autoload
Plugin URI: http://autoloadmanager.shawnsandy.com
Description: Use composer in wordpress to manage / autoload php libraies --- copy and paste the following line 
//** Composer Autoloader // `require_once (ABSPATH.'wp-content/plugins/mp-autoload/vendor/autoload.php')` above Sets up WordPress vars and included files.
Author URI: http://shawnsandy.com
Version: 3.0 Beta
 */





/**
* wordpress plugin 
*/

class mp_autoload 
{
	
	function __construct()
	{
		# code...
		$this->actions();
	}

	/**
	 * Add all plugin actions here will be called by class construct
	 */
	public function actions() {

	add_action('plugins_loaded', array($this, 'plugins_loaded'));

	add_action('init', array($this, 'init'));

	add_action("admin_init", array($this, "admin_init"));

	}

	public function plugins_loaded() {

	}

	public function init() {

	}

	public function admin_init() {

	}

}
