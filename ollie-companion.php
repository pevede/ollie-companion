<?php
/**
 * Plugin Name:       Ollie Companion
 * Plugin URI:        https://olliewp-com/ollie-companion
 * Description:       A companion plugin for the Ollie theme.
 * Version:           0.5
 * Author:            OllieWP Team
 * Author URI:        https://olliewp.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ollie-companion
 * Domain Path:       /languages
 *
 */

define( 'OC_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'OC_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'OC_VERSION', '0.5' );


// run plugin.
if ( ! function_exists( 'oc_run_plugin' ) ) {
	add_action( 'plugins_loaded', 'oc_run_plugin' );

	/**
	 * Run plugin
	 *
	 * @return void
	 */
	function oc_run_plugin() {
		// Localize the plugin.
		$textdomain_dir = plugin_basename( dirname( __FILE__ ) ) . '/languages';
		load_plugin_textdomain( 'ollie-companion', false, $textdomain_dir );

		require_once( OC_PATH . '/inc/class-oc-settings.php' );
		require_once( OC_PATH . '/inc/class-oc-helper.php' );

		oc\Settings::get_instance();
		oc\Helper::get_instance();
	}
}

