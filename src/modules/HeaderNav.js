/*global jQuery*/

const HeaderNav = () => {
	jQuery( document ).ready( function( $ ) {
		$( 'nav .dropdown' ).hover(
			function() {
				const $this = $( this );
				$this.addClass( 'show' );
				$this.find( '> a' ).attr( 'aria-expanded', true );
				$this.find( '.dropdown-menu' ).addClass( 'show' );
			},
			function() {
				const $this = $( this );
				$this.removeClass( 'show' );
				$this.find( '> a' ).attr( 'aria-expanded', false );
				$this.find( '.dropdown-menu' ).removeClass( 'show' );
			}
		);
	} );
};

export default HeaderNav;
