<?php
/**
 *
 * Pour insérer du texte dans le pied de page de l'admin WordPress
 *
 * une méthode peu orthodoxe pour afficher en clair le résultat de certaines
 * fonctions de Wordpress telles que plugin_dir_path(), plugins_url(), ...
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	1.1.0
 *
 * @package    ald-facil
 * @subpackage ald-functions/includes
 */
 
// thanks to http://wphosting.tv/how-to-change-the-admin-footer-bar-in-wordpress/
if (! function_exists('ald_dashboard_footer') ){
	function ald_facil_dashboard_footer( $default ) {
		// $new = plugins_url( 'css/test.css', __FILE__ )		;
		$new = 	ALD_FACIL_DIR . 'templates/testAL-page.php' 	;
		return $default . ' | ' . $new ; 
	}	
}

add_filter('admin_footer_text', 'ald_facil_dashboard_footer');