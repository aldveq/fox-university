/*global jQuery*/

const Datepickers = () => {
	jQuery( document ).ready( function( $ ) {
		if ( $( '.appointment_date' ).lenght && $( '.appointment_time' ).lenght ) {
			$( '.appointment_date' ).datepicker( {
				format: 'm/d/yyyy',
				autoclose: true,
			} );

			$( '.appointment_time' ).timepicker();
		}
	} );
};

export default Datepickers;
