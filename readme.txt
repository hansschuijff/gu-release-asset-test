=== GU Release Asset Test ===
Contributors: hansschuijff
Tags: git-updater, test
Requires at least: 6.5
Tested up to: 7.1.5
Requires PHP: 8.2
Stable tag: 1.0.0
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A plugin that does nothing, for reproducing a Git Updater issue with release assets.

== Description ==

This plugin has the same header and repository layout as a private plugin whose updates through Git Updater
sometimes fail with "Update package not available":

* `Release Asset: true`, with the zip built by a GitHub Actions workflow and attached to the release.
* No `.wordpress-org` or `assets` folder in the repository.

It contains no code. Install it through Git Updater, wait until its cache has expired, publish a new release
and see whether the update keeps its package.

== Installation ==

1. In Git Updater, use Install Plugin with this repository (`hansschuijff/gu-release-asset-test`), or upload the
   release zip through Plugins → Add New → Upload Plugin.
2. Activate the plugin.

== Changelog ==

= 1.0.0 =
* First release.
