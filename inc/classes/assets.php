<?php

/**
* @package Fox_University
*/

namespace FOX_UNIVERSITY_THEME\Inc;

use FOX_UNIVERSITY_THEME\Inc\Traits\Singleton;

class ASSETS {
	use Singleton;

	protected function __construct() {
		// Actions & Filters
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'wp_enqueue_scripts', [$this, 'fox_university_scripts'] );
	}

	/**
	* Enqueue scripts and styles.
	*/
	public function fox_university_scripts() {
		wp_enqueue_style( 'fox-university-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_enqueue_style( 'fox-university-style-bundle', get_template_directory_uri() . '/build/style-index.css', array(), _S_VERSION );
		wp_style_add_data( 'fox-university-style', 'rtl', 'replace' );

		wp_enqueue_script( 'fox-university-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}