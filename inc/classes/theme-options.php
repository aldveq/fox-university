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
		// Main Theme Options Settings
		$main_theme_options_container = Container::make( 'theme_options', __( 'Theme Options', 'fox-university' ) )
			->add_tab( __( 'Contact Information', 'fox-university' ), array(
				Field::make( 'separator', 'separator_emails', __( 'Emails', 'fox-university' ) ),
				Field::make( 'text', 'ci_first_primary_email_label', __( 'First Primary Email Label', 'fox-university' ) )
					->set_width( 33 )
					->help_text(__('This label is displayed in the header', 'fox-university')),
				Field::make( 'text', 'ci_second_primary_email_label', __( 'Second Primary Email Label', 'fox-university' ) )
					->set_width( 33 )
					->help_text(__('This label is displayed in the footer', 'fox-university')),
				Field::make( 'text', 'ci_primary_email', __( 'Primary Email', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'separator', 'separator_phones', __( 'Phones', 'fox-university' ) ),
				Field::make( 'text', 'ci_first_primary_phone_label', __( 'First Primary Phone Label', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'text', 'ci_second_primary_phone_label', __( 'Second Primary Phone Label', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'text', 'ci_primary_phone', __( 'Primary Phone', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'text', 'ci_first_secondary_phone_label', __( 'First Secondary Phone Label', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'text', 'ci_second_secondary_phone_label', __( 'Second Secondary Phone Label', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'text', 'ci_secondary_phone', __( 'Secondary Phone', 'fox-university' ) )
					->set_width( 33 ),
				Field::make( 'separator', 'separator_address', __( 'Address', 'fox-university' ) ),
				Field::make( 'text', 'ci_label_address', __( 'Address', 'fox-university' ) )
					->set_width( 50 ),
				Field::make( 'text', 'ci_address_link', __( 'Address URL', 'fox-university' ) )
					->set_width( 50 )
					->help_text(__('Optional', 'fox-university')),
			));
		// Footer Settings
		Container::make( 'theme_options', __('Footer', 'fox-university') )
			->set_page_parent($main_theme_options_container)
			->add_fields(array(
				Field::make( 'text', 'footer_copyright_text', __( 'Footer Copyright', 'fox-university' ) )
			));
	}
}