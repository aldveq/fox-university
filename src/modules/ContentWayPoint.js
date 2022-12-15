/*global jQuery*/

const ContentWayPoint = () => {
	jQuery( document ).ready( function( $ ) {
		$( '.ftco-animate' ).waypoint(
			function( direction ) {
				if ( direction === 'down' && ! $( this.element ).hasClass( 'ftco-animated' ) ) {
					$( this.element ).addClass( 'item-animate' );
					setTimeout( function() {
						$( 'body .ftco-animate.item-animate' ).each( function( k ) {
							const el = $( this );
							setTimeout(
								function() {
									const effect = el.data( 'animate-effect' );
									if ( effect === 'fadeIn' ) {
										el.addClass( 'fadeIn ftco-animated' );
									} else if ( effect === 'fadeInLeft' ) {
										el.addClass( 'fadeInLeft ftco-animated' );
									} else if ( effect === 'fadeInRight' ) {
										el.addClass( 'fadeInRight ftco-animated' );
									} else {
										el.addClass( 'fadeInUp ftco-animated' );
									}
									el.removeClass( 'item-animate' );
								},
								k * 50,
								'easeInOutExpo'
							);
						} );
					}, 100 );
				}
			},
			{ offset: '95%' }
		);
	} );
};

export default ContentWayPoint;
