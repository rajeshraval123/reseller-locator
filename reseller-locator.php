<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://#
 * @since             1.0.0
 * @package           Reseller_Locator
 *
 * @wordpress-plugin
 * Plugin Name:       Reseller locator
 * Plugin URI:        https://https://github.com/rajeshraval123/reseller-locator
 * Description:       The Reseller Locator Plugin is a tool that helps customers find nearby resellers through an interactive map or search interface, enhancing user experience and boosting sales.
 * Version:           1.0.0
 * Author:            Rajesh
 * Author URI:        https://#
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       reseller-locator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RESELLER_LOCATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-reseller-locator-activator.php
 */
function activate_reseller_locator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-reseller-locator-activator.php';
	Reseller_Locator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-reseller-locator-deactivator.php
 */
function deactivate_reseller_locator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-reseller-locator-deactivator.php';
	Reseller_Locator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_reseller_locator' );
register_deactivation_hook( __FILE__, 'deactivate_reseller_locator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-reseller-locator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_reseller_locator() {

	$plugin = new Reseller_Locator();
	$plugin->run();

}
run_reseller_locator();
