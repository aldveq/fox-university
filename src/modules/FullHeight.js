/*global jQuery*/

const FullHeight = () => {
	jQuery( document ).ready( function( $ ) {
		$( '.js-fullheight' ).css( 'height', $( window ).height() );
		$( window ).resize( function() {
			$( '.js-fullheight' ).css( 'height', $( window ).height() );
		} );
	} );
};

export default FullHeight;
