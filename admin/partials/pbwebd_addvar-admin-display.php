<?php
/**
 * Provide an admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://pbwebd.com
 * @since      1.0.0
 *
 * @package    Pbwebd_addvar
 * @subpackage Pbwebd_addvar/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap addvar-wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <p>View dynamic values or add your own static value.</p>

    <form method="post" name="pbwebd-pagenav_options" action="options.php">

        <?php $options = get_option($this->plugin_name);

        $number = ( intval($options['number']) < -1 ) ? -1 : intval($options['number']);
        $csv = ( empty($options['csv']) ) ? '' : $options['csv'];
        $text = ( empty($options['text']) ) ? '' : $options['text'];
        $select = ( empty($options['select']) ) ? 'none' : $options['select'];
        $radio = ( empty($options['radio']) ) ? 'none' : $options['radio'];
        $textarea = ( empty($options['textarea']) ) ? '' : $options['textarea'];

        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name); ?>

        <fieldset>
            <!-- Number -->
            <div class="input-wrapper">
                <label for="<?php echo $this->plugin_name; ?>-number"><?php esc_attr_e('Number:', $this->plugin_name); ?></label>
                <span><input type="number" id="<?php echo $this->plugin_name; ?>-number" name="<?php echo $this->plugin_name; ?>[number]" value="<?php echo $number; ?>" /></span>
                <p class="subtext">About this number field.</p>
            </div>

            <!-- CSV -->
            <div class="input-wrapper">
                <label for="<?php echo $this->plugin_name; ?>-csv"><?php esc_attr_e('CSV:', $this->plugin_name); ?></label>
                <span><input type="text" id="<?php echo $this->plugin_name; ?>-csv" name="<?php echo $this->plugin_name; ?>[csv]" value="<?php echo $csv; ?>" /></span>
                <p class="subtext">About this CSV field.</p>
            </div>

            <!-- Text -->
            <div class="input-wrapper">
                <label for="<?php echo $this->plugin_name; ?>-text"><?php esc_attr_e('Text:', $this->plugin_name); ?></label>
                <span><input type="number" id="<?php echo $this->plugin_name; ?>-text" name="<?php echo $this->plugin_name; ?>[text]" value="<?php echo $text; ?>" /></span>
                <p class="subtext">About this text field.</p>
            </div>

            <!-- Select -->
            <div class="input-wrapper">
                <label for="<?php echo $this->plugin_name; ?>-select"><?php esc_attr_e('Select:', $this->plugin_name); ?></label>
                <span><select id="<?php echo $this->plugin_name; ?>-select" name="<?php echo $this->plugin_name; ?>[select]">
                    <option value="none"<?php selected($select, 'none') ?>>Menu Order</option>
                    <option value="one"<?php selected($select, 'one') ?>>Post Date</option>
                </select></span>
                <p class="subtext">About this select field.</p>
            </div>

            <!-- Radio -->
            <div class="input-wrapper">
                <label><?php esc_attr_e('Radio', $this->plugin_name); ?></label>
                <span><input type="radio" name="<?php echo $this->plugin_name; ?>[radio]" value="none" <?php checked($radio, 'none'); ?>> None<br />
                <input type="radio" name="<?php echo $this->plugin_name; ?>[radio]" value="one" <?php checked($radio, 'one'); ?>> One</span>
                <p class="subtext">About these radio fields.</p>
            </div>

            <!-- Textarea -->
            <div class="input-wrapper">
                <label for="<?php echo $this->plugin_name; ?>-textarea"><?php esc_attr_e('Textarea:', $this->plugin_name); ?></label>
                <span><textarea id="<?php echo $this->plugin_name; ?>-textarea" name="<?php echo $this->plugin_name; ?>[textarea]"><?php echo $textarea; ?></textarea></span>
                <p class="subtext">About this textarea field.</p>
            </div>

        </fieldset>

        <?php submit_button('Save all changes', 'primary', 'submit', TRUE); ?>

    </form>

    <p class="cite">This plugin is maintained on GitHub: <a href="https://github.com/PBwebD/LINK" target="_blank">https://github.com/PBwebD/LINK</a>. Head over there for more info on how these settings work. Find a bug? <a href="https://github.com/PBwebD/LINK/issues" target="_blank">Let us know!</a></p>

</div>