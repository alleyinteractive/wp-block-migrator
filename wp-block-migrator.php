<?php
/**
 * Plugin Name: WP Block Migrator
 * Plugin URI: https://github.com/alleyinteractive/wp-block-migrator
 * Description: Utilities for assisting with Gutenberg migrations.
 * Version: 0.1.0
 * Author: alleyinteractive
 * Author URI: https://alley.com/
 * Requires at least: 6.2
 * Tested up to: 6.2
 *
 * Text Domain: wp-block-migrator
 * Domain Path: /languages/
 *
 * @package wp-block-migrator
 */

namespace Alley\WP\WP_Block_Migrator;

// Check if Composer is installed (remove if Composer is not required for your plugin).
if ( ! file_exists( __DIR__ . '/vendor/wordpress-autoload.php' ) ) {
	// Will also check for the presence of an already loaded Composer autoloader
	// to see if the Composer dependencies have been installed in a parent
	// folder. This is useful for when the plugin is loaded as a Composer
	// dependency in a larger project.
	if ( ! class_exists( \Composer\InstalledVersions::class ) ) {
		\add_action(
			'admin_notices',
			function() {
				?>
				<div class="notice notice-error">
					<p><?php esc_html_e( 'Composer is not installed and wp-block-migrator cannot load. Try using a `*-built` branch if the plugin is being loaded as a submodule.', 'wp-block-migrator' ); ?></p>
				</div>
				<?php
			}
		);

		return;
	}
} else {
	// Load Composer dependencies.
	require_once __DIR__ . '/vendor/wordpress-autoload.php';
}
