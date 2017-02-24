<?php
/**
 *
 * Pour charger du css, des scripts ou des polices 
 *
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	1.1.0
 *
 * @package    ald-facil
 * @subpackage ald-functions/includes
 */
 
if (! function_exists('ald_facil_enqueue_scripts') ){
	function ald_facil_enqueue_scripts() {
	
	// enqueue test.css
	
	wp_register_style(
		'ald_facil_style',
		ALD_FACIL_URL . 'css/facilitationZ.css' ,
		array(),
		null,
		'all' // no media type
	);

	wp_register_style(
		'font_awesome_css',
		ALD_FACIL_URL . 'css/font-awesome.css',
		array(),
		null,
		'all' // no media type
	);
	
	
	wp_enqueue_style( 'ald_facil_style' ) ;
	wp_enqueue_style( 'font_awesome_css' ) ;
	
	// enqueue fonts
	wp_enqueue_style( 
		'google-nova-round', 
		'http://fonts.googleapis.com/css?family=Nova+Round'
	);
	
	// enqueue scripts
	
	
	}
}

// see http://code.tutsplus.com/tutorials/loading-css-into-wordpress-the-right-way--cms-20402
add_action( 'wp_enqueue_scripts', 'ald_facil_enqueue_scripts' );  // to enqueue in the website front end