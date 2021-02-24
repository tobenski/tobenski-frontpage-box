<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/tobenski/
 * @since             1.0.0
 * @package           Tobenski_Frontpage_Box
 *
 * @wordpress-plugin
 * Plugin Name:       Det Gamle Posthus - Frontpage Box
 * Plugin URI:        https://github.com/tobenski/tobenski-frontpage-box
 * Description:       This plugin adds boxes to the frontpage.
 * Version:           1.1.2
 * Author:            Knud Rihøj
 * Author URI:        https://github.com/tobenski/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tobenski-frontpage-box
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
define( 'TOBENSKI_FRONTPAGE_BOX_VERSION', '1.1.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tobenski-frontpage-box-activator.php
 */
function activate_tobenski_frontpage_box() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tobenski-frontpage-box-activator.php';
	Tobenski_Frontpage_Box_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tobenski-frontpage-box-deactivator.php
 */
function deactivate_tobenski_frontpage_box() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tobenski-frontpage-box-deactivator.php';
	Tobenski_Frontpage_Box_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tobenski_frontpage_box' );
register_deactivation_hook( __FILE__, 'deactivate_tobenski_frontpage_box' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tobenski-frontpage-box.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_tobenski_frontpage_box() {

	$plugin = new Tobenski_Frontpage_Box();
	$plugin->run();

}
run_tobenski_frontpage_box();
