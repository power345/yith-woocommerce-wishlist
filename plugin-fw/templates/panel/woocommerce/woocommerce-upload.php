<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Upload Plugin Admin View
 *
 * @package    Yithemes
 * @author     Emanuela Castorina <emanuela.castorina@yithemes.it>
 * @since      1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly


?>

<tr valign="top">
    <th scope="row" class="image_upload">
        <label for="<?php echo $id ?>"><?php echo $name ?></label>
    </th>
    <td class="forminp forminp-color plugin-option">

        <div id="<?php echo $id ?>-container" class="yit_options rm_option rm_input rm_text rm_upload" <?php if ( isset( $option['deps'] ) ): ?>data-field="<?php echo $id ?>" data-dep="<?php echo $this->get_id_field( $option['deps']['ids'] ) ?>" data-value="<?php echo $option['deps']['values'] ?>" <?php endif ?>>
            <div class="option">
                <input type="text" name="<?php echo $id ?>" id="<?php echo $id ?>" value="<?php echo $value == '1' ? '' : esc_attr( $value ) ?>" class="upload_img_url" />
                <input type="button" value="<?php _e( 'Upload', 'yit' ) ?>" id="<?php echo $id ?>-button" class="upload_button button" />
            </div>
            <div class="clear"></div>
            <span class="description"><?php echo $desc ?></span>
            <div class="upload_img_preview" style="margin-top:10px;">
                <?php
                $file = $value;
                if ( preg_match( '/(jpg|jpeg|png|gif|ico)$/', $file ) ) {
                    echo "<img src=\"" . YIT_CORE_PLUGIN_URL. "/assets/images/sleep.png\" data-src=\"$file\" />";
                }
                ?>
            </div>
        </div>


    </td>
</tr>

