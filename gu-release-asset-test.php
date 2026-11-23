<?php
/**
 * Plugin Name:       GU Release Asset Test
 * Description:       Does nothing. A public test plugin with the same header and repository layout as a private plugin whose Git Updater updates lose their package.
 * Version:           1.0.2
 * Requires at least: 6.5
 * Tested up to:      7.1.5
 * Requires PHP:      8.2
 * Author:            Hans Schuijff
 * Author URI:        https://dewitteprins.nl
 * License:           GPL-2.0-only
 * License URI:       https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain:       gu-release-asset-test
 *
 * GitHub Plugin URI: https://github.com/hansschuijff/gu-release-asset-test
 * Primary Branch:    main
 * Release Asset:     true
 *
 * @package GuReleaseAssetTest
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Intentionally empty: only the header and the release zip matter for this test.
