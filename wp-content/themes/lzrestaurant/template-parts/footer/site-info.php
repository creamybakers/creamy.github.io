<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage lzrestaurant
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<p><?php echo esc_html(get_theme_mod('lzrestaurant_footer_copy',__('Restaurant Theme Design By','lzrestaurant'))); ?> <?php lzrestaurant_credit() ?></p>
</div>
