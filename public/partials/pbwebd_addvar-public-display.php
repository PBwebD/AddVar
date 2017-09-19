<?php
/**
 * Provide a public-facing view for the plugin
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://pbwebd.com
 * @since      1.0.0
 *
 * @package    Pbwebd_addvar
 * @subpackage Pbwebd_addvar/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
// Get all options
global $post;

$options = get_option($this->plugin_name);

$get_var = ( empty($options['addvar']) ) ? '' : $options['addvar'];
$set_var = 'get var from database';

// HTML FOR VIEWING
echo '<span class="addvar">' . $number . '</span>';
// END REPLACE

?>