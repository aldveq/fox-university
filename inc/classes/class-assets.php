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
		add_action('enqueue_block_editor_assets', [$this, 'fox_university_editor_block_assets']);
		add_action( 'wp_enqueue_scripts', [$this, 'fox_university_scripts'] );
	}

	/**
	* Enqueue scripts and styles.
	*/
	public function fox_university_scripts() {
		wp_enqueue_style( 'fox-university-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap' );
		wp_enqueue_style( 'fox-university-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_enqueue_style( 'fox-university-style-bundle', get_template_directory_uri() . '/build/style-index.css', array(), _S_VERSION );
		wp_style_add_data( 'fox-university-style', 'rtl', 'replace' );

		wp_enqueue_script( 'fox-university-popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-aos', get_template_directory_uri() . '/js/aos.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-jquery-animate-number', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array('jquery'), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'fox-university-main-script', get_template_directory_uri() . '/build/index.js', array('jquery'), _S_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	public function fox_university_editor_block_assets() {
		wp_enqueue_style('fox-university-block-editor-style-bundle', get_template_directory_uri() . '/build/style-index.css', array(), _S_VERSION);
		wp_enqueue_style('university-animal-clinic-block-editor-styles', get_template_directory_uri() . '/editor/style.css', array(), _S_VERSION);
	}
}