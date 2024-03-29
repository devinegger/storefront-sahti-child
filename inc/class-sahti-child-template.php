<?php
/**
 * Sahti_Template Class
 *
 * @author   Dreamscape Development
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Sahti_Template' ) ) {

class Sahti_Template {

	/**
	 * Setup class.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		add_action( 'storefront_header', array( $this, 'primary_navigation_wrapper' ), 45 );
		add_action( 'storefront_header', array( $this, 'primary_navigation_wrapper_close' ), 65 );

		//add_action( 'storefront_content_top', array( $this, 'content_wrapper' ), 5 );
		//add_action( 'storefront_content_bottom', array( $this, 'content_wrapper_close' ), 5 );
	}

	/**
	 * Primary navigation wrapper
	 * @return void
	 */
	public function primary_navigation_wrapper() {
		echo '<section class="sahti-primary-navigation">';
	}

	/**
	 * Primary navigation wrapper close
	 * @return void
	 */
	public function primary_navigation_wrapper_close() {
		echo '</section>';
	}

	/**
	 * Content wrapper
	 * @return void
	
	function content_wrapper() {
		echo '<div class="sahti-content-wrapper">';
	}
    */
	/**
	 * Content wrapper close
	 * @return void
	 
	function content_wrapper_close() {
		echo '</div>';
	}
	*/
}

}

return new Sahti_Template();