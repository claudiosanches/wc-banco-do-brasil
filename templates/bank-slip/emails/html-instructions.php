<?php
/**
 * HTML email instructions.
 *
 * @author  Claudio Sanches
 * @package WC_BB_Comercio_Eletronico/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<h2><?php esc_html_e( 'Payment', 'wc-itau-shopline' ); ?></h2>

<p class="order_details">
	<?php esc_html_e( 'Please use the link below get your bank slip:', 'wc-itau-shopline' ); ?>
	<br />
	<a class="button" href="<?php echo esc_url( $url ); ?>" target="_blank"><?php esc_html_e( 'Pay order', 'wc-itau-shopline' ); ?></a>
	<br />
	<?php esc_html_e( 'After we receive the payment confirmation, your order will be processed.', 'wc-itau-shopline' ); ?>
</p>
