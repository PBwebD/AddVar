<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://pbwebd.com
 * @since      1.0.0
 *
 * @package    Pbwebd_addvar
 * @subpackage Pbwebd_addvar/public
 * @author     Danielle Zarcaro <info@pbwebd.com>
 */

/**
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 */
class Pbwebd_addvar_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pbwebd_addvar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pbwebd_addvar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/pbwebd_addvar-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pbwebd_addvar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pbwebd_addvar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/pbwebd_addvar-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the shortcode.
	 */
	public function pbwebd_addvar_shortcode($atts, $page_list = '') {

		global $post;

		$options = get_option($this->plugin_name);

        $addvar = ( empty($options['addvar']) ) ? '' : $options['addvar'];

		$atts = shortcode_atts( array(
			'addvar' => $addvar
		), $atts );

		// CHECK VAR
		if( !isset($atts['addvar']) ){
			$atts['addvar'] = '';
		}

		// REPLACE WITH HTML FOR VIEWING
		echo '<span class="addvar">' . $atts['addvar'] . '</span>';
		// END REPLACE

		return $page_string;

	}

}
