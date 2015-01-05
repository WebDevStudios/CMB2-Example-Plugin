<?php
/**
 * Plugin Name: CMB2 - Example Plugin
 * Plugin URI: https://github.com/WebDevStudios/CMB2-Example-Plugin
 * Description: An example plugin showing how to bundle CMB2 in a plugin.
 * Version: 1.0.0
 * Author: WebDevStudios
 * Author URI: http://webdevstudios.com
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: cmb2-example-plugin
 */

/**
 * Silence is golden; exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bootstrap CMB2
 * No need to check versions or if CMB2 is already loaded... the init file does that already!
 *
 * Check to see if CMB2 exists, and either bootstrap it or add a notice that it is missing
 */
if ( file_exists( dirname( __FILE__ ) . '/inc/CMB2/init.php' ) ) {
	require_once 'inc/CMB2/init.php';
} else {
	add_action( 'admin_notices', 'cmb2_example_plugin_missing_cmb2' );
}

/**
 * Load CMB2 examples
 */
require_once 'inc/local-user-avatar.php';
require_once 'inc/more-about-user.php';
require_once 'inc/user-social-media-urls.php';
require_once 'inc/additional-post-media.php';

/**
 * Add an error notice to the dashboard if CMB2 is missing from the plugin
 *
 * @return void
 */
function cmb2_example_plugin_missing_cmb2() { ?>
<div class="error">
	<p><?php _e( 'CMB2 Example Plugin is missing CMB2!', 'cmb2-example-plugin' ); ?></p>
</div>
<?php }