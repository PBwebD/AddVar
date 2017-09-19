<?php
/**
 * Fired during plugin activation
 *
 * @link       http://pbwebd.com
 * @since      1.0.0
 *
 * @package    Pbwebd_addvar
 * @subpackage Pbwebd_addvar/includes
 * @author     Danielle Zarcaro <info@pbwebd.com>
 */
class Pbwebd_addvar_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 */
	public static function activate() {

        // Set up defaults array
        $defaults = array(
            'number' => -1,
            'csv' => '',
            'text' => '',
            'select' => 'no',
            'radio' => 'radio',
            'textarea' => 'none'
        );

        // Save defaults array as settings
        $options = wp_parse_args( get_option('plugin_options'), $defaults );

	}

}
