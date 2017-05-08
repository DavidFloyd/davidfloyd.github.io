<?php
/**
 * piclectic admin functions
 *
 * @package piclectic 
 */

/**
 *TGM Plugin activation.
 */
require_once get_template_directory() . '/panel/class-tgm-plugin-activation.php'; 
 
add_action( 'tgmpa_register', 'piclectic_recommend_plugin' ); 
function piclectic_recommend_plugin() { 
 
    $plugins = array(
        // Include plugin from the WordPress Plugin Repository
		
		array(
			'name' 		=> esc_html__( 'Contact Form 7', 'piclectic' ), // http://wordpress.org/plugins/contact-form-7/
			'slug' 		=> 'contact-form-7',
			'required' 	=> false 
		), 
		
		array(
			'name' 		=> esc_html__( 'Simple Custom CSS', 'piclectic' ), // http://wordpress.org/plugins/simple-custom-css/
			'slug' 		=> 'simple-custom-css', 
			'required' 	=> false
		),
		    
    );
 
    tgmpa( $plugins ); 
 
}