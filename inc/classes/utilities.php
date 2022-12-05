<?php

/**
* @package Fox_University
*/

namespace FOX_UNIVERSITY_THEME\Inc;

use FOX_UNIVERSITY_THEME\Inc\Traits\Singleton;

class UTILITIES {
	use Singleton;

	public function get_menu_id_by_location( $menu_location ) {
		$locations = get_nav_menu_locations();
		$menu_id = $locations[$menu_location];
		return $menu_id;
	}

	public function get_menu_items_by_location($menu_location) {
		$footer_nav_id;

		if ( $menu_location == 'header' ) {
			$footer_nav_id = $this->get_menu_id_by_location('primary-menu');
		} else {
			$footer_nav_id = $this->get_menu_id_by_location('footer-menu');
		}

		$footer_nav_items = wp_get_nav_menu_items( $footer_nav_id );

		return $footer_nav_items;
	}

	public function get_domain_name($url) {
		$pieces = parse_url($url);
		$domain = isset($pieces['host']) ? $pieces['host'] : '';

		if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
			$real_domain_name = explode('.', $regs['domain']);

			return $real_domain_name[0];
		}

		return false;
	}
}