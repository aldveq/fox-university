/*global jQuery*/

const Datepickers = () => {
	jQuery( document ).ready( function( $ ) {
		$( '.appointment_date' ).datepicker( {
			format: 'm/d/yyyy',
			autoclose: true,
		} );

		$( '.appointment_time' ).timepicker();
	} );
};

export default Datepickers;
