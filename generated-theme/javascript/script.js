/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

$( document ).ready( () => {
	$( '.mobile-burger' ).on( 'click', function() {
		$( '.mobile-menu' ).slideToggle();
		$( '.mobile-burger .burger' ).toggle();
		$( '.mobile-burger .xmark' ).toggle();
	} );

	setTimeout( () => {
		// $('.modal').show()
	}, 5000 );

	$( '.modal .close' ).on( 'click', function() {
		$( '.modal' ).hide();
	} );
} );
