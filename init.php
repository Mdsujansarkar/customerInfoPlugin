<?php
/*

* Plugin Name: infoget
* Plugin URI: #
* Author:sujan
* Author URI:www.facebook.com/sujan1miya.com
* Description: Get customar information.
* version:1.0.0
*/

class Infoget{

	public function __construct(){
		add_action('woocommerce_checkout_update_order_meta', array($this, 'info_gether_by_customer'));
	}

	public function info_gether_by_customer( $order_id ){

		if(isset($_POST['payment_method'])){

		$firstName = isset($_POST['billing_first_name']) ? $_POST['billing_first_name'] : '';

		$lastName = isset($_POST['billing_last_name']) ? $_POST['billing_last_name'] : '';

		$companyName = isset($_POST['billing_company']) ? $_POST['billing_company'] : '';

		$billingAaddressOne = isset($_POST['billing_address_1']) ? $_POST['billing_address_1'] : '';

		$billingCity = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';

		$billingState = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';

		$billingPhon = isset($_POST['billing_phone']) ? $_POST['billing_phone'] : '';

		$billingEmail = isset($_POST['billing_email']) ? $_POST['billing_email'] : '';

		update_post_meta($order_id, 'billing_first_name', $firstName);
		
		update_post_meta($order_id, 'billing_last_name', $lastName);
		
		update_post_meta($order_id, 'billing_company', $companyName);
		
		update_post_meta($order_id, 'billing_address_1', $billingAaddressOne);
		
		update_post_meta($order_id, 'billing_city', $billingCity);
		
		update_post_meta($order_id, 'billing_state', $billingState);
		
		update_post_meta($order_id, 'billing_phone', $billingPhon);
		
		update_post_meta($order_id, 'billing_email', $billingEmail);

	   }


	}

}

$infoget = new Infoget();
