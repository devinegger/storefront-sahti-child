<?php
/**
 * Customer completed order email
 *
 * This template has been overridden.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		Dreamscape Development
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tracking_code = get_field("tracking_code");
$tracking_url = "http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=" . $tracking_code;

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php printf( __( "Your recent order on %s has been shipped. Your order details and tracking information are shown below for your reference:", 'woocommerce' ), get_option( 'blogname' ) ); ?></p>

<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

?>

<h3>UPS Tracking Information</h3>
<p>You can track your package through UPS by clicking on the Tracking Code below:</p>
<p>Tracking code: <a href="<?php echo $tracking_url ?>"><?php echo $tracking_code ?></a></p>

<?php

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
