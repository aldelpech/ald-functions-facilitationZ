<?php
/**
 *
 * Load plugin templates or look for identical template names in the theme directory 
 *
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	1.2.0
 *
 * @package    ald-facil
 * @subpackage ald-facil/includes
 */

 
add_filter( 'template_include', 'ald_facil_get_page_template');


/***************************************************
* * load a page template
***************************************************/
// inspiré, pour le choix entre le template du thème et celui du plugin, de 
// http://code.tutsplus.com/articles/plugin-templating-within-wordpress--wp-31088


function ald_facil_get_page_template( $page_template ) {

	// see http://codex.wordpress.org/Function_Reference/is_page
	if ( is_page( 'test internationalisation' )  ) {		
	
		$template = 'testAL-page.php' ;
		if ( $theme_file = locate_template( array( 'ald-facil-templates/' . $template ) ) ) {
			// choose template located in the theme directory
			$page_template = $theme_file;
			}
		else {
			// choose plugin's template
			$page_template = ALD_FACIL_DIR . 'templates/' . $template ;
		}
		
		return $page_template;
		
	} else {
		return $page_template;
	}
}	
