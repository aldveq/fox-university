<?php

/**
* @package Fox_University
*/

namespace FOX_UNIVERSITY_THEME\Inc;

use FOX_UNIVERSITY_THEME\Inc\Traits\Singleton;
use Carbon_Fields\Block;
use Carbon_Fields\Field;

class CUSTOM_GUTENBERG_BLOCKS {
	use Singleton;

	protected function __construct() {
	   	// Hero Slider Block - Start
		Block::make( __( 'Hero Slider Block', 'fox-university' ) )
			->add_fields( array(
				Field::make( 'complex', 'slides_data', __( 'Slider Data', 'fox-university' ) )
					->set_layout( 'tabbed-horizontal' )
					->setup_labels(array(
						'plural_name' => 'Slides',
						'singular_name' => 'Slide',
					))
					->add_fields( array(
						Field::make( 'image', 'image', __( 'Image', 'fox-university' ) ),
						Field::make( 'text', 'title', __( 'Title', 'fox-university' ) )
							->set_width(50),
						Field::make( 'rich_text', 'description', __( 'Description', 'fox-university' ) )
							->set_width(50)
							->set_settings(array(
								'media_buttons' => false,
								'tinymce' => array(
									'toolbar1' => 'bold, italic, link, unlink, forecolor',
									'toolbar2' => false,
								),
								'quicktags' => true,
							)),
						Field::make( 'text', 'link_label', __( 'Link Label', 'fox-university' ) )
							->set_width(33),
						Field::make( 'text', 'link_url', __( 'Link URL', 'fox-university' ) )
							->set_width(33),
						Field::make( 'checkbox', 'link_target', __( 'Open link in a new tab?', 'fox-university' ) )
							->set_width(33)
					))
					->set_header_template('
						<% if (title) { %>
							<%- title %>
						<% } %>
					')
			))
			->set_description( __( 'Hero Slider Block', 'fox-university' ) )
			->set_category( 'fox-university-blocks', __( 'Fox University Blocks', 'fox-university' ) ) // Check that third parameter later on
			->set_icon( 'slides' )
			->set_keywords( [ __( 'Slider', 'fox-university' ), __( 'Hero', 'fox-university' ) ] )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part( 'template-parts/blocks/block', 'hero-slider', array('hero_slider_data' => $fields) );
			});
		// Hero Slider Block - End
	}

}