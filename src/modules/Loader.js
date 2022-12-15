/*global jQuery*/

const Loader = () => {
	jQuery( document ).ready( function( $ ) {
		setTimeout( function() {
			if ( $( '#ftco-loader' ).length > 0 ) {
				$( '#ftco-loader' ).removeClass( 'show' );
			}
		}, 1 );
	} );
};

export default Loader;
