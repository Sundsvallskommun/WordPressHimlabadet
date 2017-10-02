(function ( $ ) {
	"use strict";

	/**
	 * Resize facebook
	 */
	var a = null;
	$( window ).resize( function () {
		if ( a !== null ) {
			clearTimeout( a );
		}

		a = setTimeout( function () {
			console.log( 'RUN' );
			FB.XFBML.parse();
		}, 1000 )
	} );
	/**
	 * End resize facebook
	 */

})( jQuery );
