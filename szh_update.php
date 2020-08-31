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

/**
 * Disable eMail Notifications
 * 
 * Core, Plugins, Themes
 *
 * @since 0.1
 */

// Disable core auto-update email notifications.
function szh_stop_update_emails( $send, $type, $core_update, $result ) {
    if ( ! empty( $type ) && $type == 'success' ) {
    return false;
    }
    return true;
}
add_filter( 'auto_core_update_send_email', 'szh_stop_update_emails', 10, 4 );
    
// Disable plugins auto-update email notifications.
add_filter( 'auto_plugin_update_send_email', '__return_false' );
     
// Disable themes auto-update email notifications.
add_filter( 'auto_theme_update_send_email', '__return_false' );

?>