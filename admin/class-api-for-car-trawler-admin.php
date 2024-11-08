<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://codingclown.com
 * @since      1.0.0
 *
 * @package    Car_Trawler_Api
 * @subpackage Car_Trawler_Api/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Car_Trawler_Api
 * @subpackage Car_Trawler_Api/admin
 * @author     Rahul Thakur <info@codingclown.com>
 */
class API_for_Car_Trawler_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
      
		 
		// Css rules for Color Picker
		wp_enqueue_style( 'wp-color-picker' );
		 
		// Register javascript
		add_action('admin_enqueue_scripts', array( $this, 'enqueue_admin_js' ) );
		 
 
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Car_Trawler_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Car_Trawler_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/api-for-car-trawler-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Car_Trawler_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Car_Trawler_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/api-for-car-trawler-admin.js', array( 'jquery' ), $this->version, false );

	}
  
	 
 
 
	/**
 * Function that will add javascript file for Color Piker.
 */
public function enqueue_admin_js() { 
     
    // Make sure to add the wp-color-picker dependecy to js file
    wp_enqueue_script( 'cartrawler_custom_js', plugins_url( '/js/jquery.custom.js', __FILE__ ), array( 'jquery', 'wp-color-picker' ), '', true  );
}






}
