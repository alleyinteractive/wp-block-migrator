<?php
/**
 * WP Block Migrator Tests: Bootstrap
 *
 * @package wp-block-migrator
 */

/**
 * Visit {@see https://mantle.alley.com/testing/test-framework.html} to learn more.
 */
\Mantle\Testing\manager()
	->maybe_rsync_plugin()
	->with_sqlite()
	// Load the main file of the plugin.
	->loaded( fn () => require_once __DIR__ . '/../wp-block-migrator.php' )
	->install();
