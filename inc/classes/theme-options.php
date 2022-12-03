<?php

/**
* @package Fox_University
*/

namespace FOX_UNIVERSITY_THEME\Inc;

use FOX_UNIVERSITY_THEME\Inc\Traits\Singleton;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

class THEME_OPTIONS {
	use Singleton;

	protected function __construct() {
		// Actions & Filters
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'carbon_fields_register_fields', [$this, 'crb_attach_theme_options'] );
	}

	public function crb_attach_theme_options() {
		Container::make( 'theme_options', __( 'Theme Options' ) )
			->add_fields( array(
				Field::make( 'text', 'crb_text', 'Text Field' ),
		));
	}
}