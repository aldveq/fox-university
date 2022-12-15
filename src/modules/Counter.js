/*global jQuery*/

const Counter = () => {
	jQuery( document ).ready( function( $ ) {
		$( '#section-counter' ).waypoint(
			function( direction ) {
				if ( direction === 'down' && ! $( this.element ).hasClass( 'ftco-animated' ) ) {
					const commaSeparatorNumberStep =
				$.animateNumber.numberStepFactories.separator( ',' );
					$( '.number' ).each( function() {
						const $this = $( this ),
							num = $this.data( 'number' );
						$this.animateNumber(
							{
								number: num,
								numberStep: commaSeparatorNumberStep,
							},
							7000
						);
					} );
				}
			},
			{ offset: '95%' }
		);
	} );
};

export default Counter;
