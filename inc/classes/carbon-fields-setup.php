<?php

/**
* @package Fox_University
*/

namespace FOX_UNIVERSITY_THEME\Inc;

use FOX_UNIVERSITY_THEME\Inc\Traits\Singleton;

class CARBON_FIELDS_SETUP {
	use Singleton;

	protected function __construct() {
		require_once( get_template_directory() . '/vendor/autoload.php' );
    	\Carbon_Fields\Carbon_Fields::boot();
	}
}