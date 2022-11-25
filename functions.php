<?php
/**
 * Fox University functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fox_University
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Autoloaders.
 */
require get_template_directory() . '/inc/helpers/autoloader.php';

function fox_university_get_theme_instance() {
	\FOX_UNIVERSITY_THEME\Inc\FOX_UNIVERSITY_THEME::get_instance();
}
fox_university_get_theme_instance();