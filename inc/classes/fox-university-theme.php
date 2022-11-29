<?php

/**
* @package Fox_University
*/

namespace FOX_UNIVERSITY_THEME\Inc;

use FOX_UNIVERSITY_THEME\Inc\Traits\Singleton;

class FOX_UNIVERSITY_THEME {
	use Singleton;

	protected function __construct() {
		// Loading Classes
		ASSETS::get_instance();
		UTILITIES::get_instance();

		// Actions & Filters
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'after_setup_theme', [$this, 'fox_university_setup'] );
		add_action( 'after_setup_theme', [$this, 'fox_university_content_width'], 0 );
		add_action( 'widgets_init', [$this, 'fox_university_widgets_init'] );
		add_filter('nav_menu_css_class', [$this, 'add_additional_class_on_li'], 1, 3);
		add_filter( 'nav_menu_link_attributes', [$this, 'add_specific_menu_location_atts'], 10, 3 );
	}

	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	public function fox_university_setup() {
		/*
			* Make theme available for translation.
			* Translations can be filed in the /languages/ directory.
			* If you're building a theme based on Fox University, use a find and replace
			* to change 'fox-university' to the name of your theme in all the template files.
			*/
		load_theme_textdomain( 'fox-university', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
			* Let WordPress manage the document title.
			* By adding theme support, we declare that this theme does not use a
			* hard-coded <title> tag in the document head, and expect WordPress to
			* provide it for us.
			*/
		add_theme_support( 'title-tag' );

		/*
			* Enable support for Post Thumbnails on posts and pages.
			*
			* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
			*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Menu', 'fox-university' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'fox-university' ),
			)
		);

		/*
			* Switch default core markup for search form, comment form, and comments
			* to output valid HTML5.
			*/
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fox_university_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}

	/**
	* Set the content width in pixels, based on the theme's design and stylesheet.
	*
	* Priority 0 to make it available to lower priority callbacks.
	*
	* @global int $content_width
	*/
	public function fox_university_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'fox_university_content_width', 640 );
	}

	/**
	* Register widget area.
	*
	* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	*/
	public function fox_university_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'fox-university' ),
				'id'            => 'sidebar-1',
				'description'   => esc_html__( 'Add widgets here.', 'fox-university' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

	public function add_additional_class_on_li($classes, $item, $args) {
		if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}

	public function add_specific_menu_location_atts( $atts, $item, $args ) {
		// check if the item is in the primary menu
		if( $args->theme_location == 'primary-menu' ) {
			// add the desired attributes:
			$atts['class'] = 'nav-link';
		}
		return $atts;
	}
}
