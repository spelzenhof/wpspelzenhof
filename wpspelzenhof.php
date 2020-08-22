<?php

/*
Plugin Name:	wpSpelzenhof
Plugin URI:		https://github.com/spelzenhof/wpspelzenhof
Description:	Custom WordPress Features @ Spelzenhof
Version:		0.1
Author: 		Marco Hitschler
Author URI: 	https://www.unmus.de/
License:     	GPL3
License URI: 	https://www.gnu.org/licenses/gpl-3.0.html
Domain Path: 	/languages
Text Domain: 	wpspelzenhof
*/

if (!defined('ABSPATH'))
{
	exit;
}

/**
 * Include the plugin files
 */

require_once('szh_update.php'); 

/**
 * Activate the plugin
 * 
 * @package wpspelzenhof
 * @since 0.1
 */

function szh_activate () {
	// add_option('szh_option',"na");
}

register_activation_hook( __FILE__ , 'szh_activate' );

/**
 * Deactivate the plugin
 * 
 * @package szh
 * @since 0.1
 */

function szh_deactivate () {
	// update_option('szh_option',"na");
}

register_deactivation_hook( __FILE__ , 'szh_deactivate' );

/**
 * Delete the plugin
 * 
 * @package szh
 * @since 0.1
 */

function szh_delete () {
	// delete_option('szh_option');
} 

register_uninstall_hook( __FILE__ , 'szh_delete' );

?>