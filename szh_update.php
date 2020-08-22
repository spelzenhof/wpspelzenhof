<?php

/**
 * Update Processes
 * 
 * @package wpspelzenhof
 * @since 0.1
 */

/**
 * Activate Auto Update
 * 
 * Core, Plugins, Themes
 *
 * @since 0.1
 */

add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );

?>