/*global jQuery*/

const StellarInit = () => {
	jQuery( document ).ready( function( $ ) {
		$( window ).stellar( {
			responsive: true,
			parallaxBackgrounds: true,
			parallaxElements: true,
			horizontalScrolling: false,
			hideDistantElements: false,
			scrollProperty: 'scroll',
		} );
	} );
};

export default StellarInit;
