<?php
/*
Plugin Name: Vera Request Quote
Plugin URI: https://veradigital.online
Description: Custom request a quote plugin developed by Vera Digital | [vera_contact_form]
Version: 1.0
Author: Vera Digital
Author URI: https://veradigital.online
*/
require_once("plugin.php");
require("initialize.php");


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Main Starting Function
function vera_request_quote_function() {
    require("form.php");
}

// Generate Shortcode
function vera_shortcode() {
    ob_start();
    vera_deliver_mail();
    vera_request_quote_function();

    return ob_get_clean();
}

add_shortcode( 'vera_contact_form', 'vera_shortcode' );
?>