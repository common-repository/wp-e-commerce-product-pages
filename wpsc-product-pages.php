<?php
/*
Plugin Name: WPSC Product Pages
Plugin URI: http://poast.se
Description: Makes it easy to change the product, cart, and reciept pages, without having to go into the database.
Version: 0.1
Author: Dan Virsén
Author URI: http://poast.se
License: GPL2
*/

function wpsc_product_pages_admin()
{
  $product_list_url = get_option('product_list_url');
  $shopping_cart_url = get_option('shopping_cart_url');
  $transact_url = get_option('transact_url');
  $user_account_url = get_option('user_account_url');
  
  $form_html = "
  <h3 class=\"form_group\">Products pages:</h3>
	<table class='wpsc_options form-table'>
    <tr>
      <td class=\"wpsc_td_note\" colspan=\"2\">
        <span class=\"wpscsmall description\">Make sure that the pages you put here actually exists and contain the necessary wpec tags or your store WILL break</span>
      </td>
    </tr>
    <tr>
      <th>Product Page</th>
      <td><input type=\"text\" name=\"wpsc_options[product_list_url]\" value=\"".$product_list_url."\" style=\"width:50%\" /></td>
    </tr>
    <tr>
      <th>Check Out/Shopping Cart</th>
      <td><input type=\"text\" name=\"wpsc_options[shopping_cart_url]\" value=\"".$shopping_cart_url."\" style=\"width:50%\" /></td>
    </tr>
    <tr>
      <th>Transaction Result</th>
      <td><input type=\"text\" name=\"wpsc_options[transact_url]\" value=\"".$transact_url."\" style=\"width:50%\" /></td>
    </tr>
    <tr>
      <th>User Account</th>
      <td><input type=\"text\" name=\"wpsc_options[user_account_url]\" value=\"".$user_account_url."\" style=\"width:50%\" /></td>
    </tr>
	</table>
  ";
  echo $form_html;
}
add_action('wpsc_admin_settings_page', 'wpsc_product_pages_admin');

?>