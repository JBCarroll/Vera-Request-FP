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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Main Starting Function
function vera_request_quote_function() {
    require("form.php");
}

// Main Sanitize & Delivery Function
// function vera_deliver_mail() {
//     // if the submit button is clicked, send the email
//     if ( isset( $_POST['cf-submitted'] ) ) {
//         // sanitize form values
//         $name    = sanitize_text_field( $_POST["cf-name"] );
//         $email   = sanitize_email( $_POST["cf-email"] );
//         $subject = sanitize_text_field( $_POST["cf-subject"] );
//         $message = esc_textarea( $_POST["cf-message"] );
//         // get the blog administrator's email address
//         $to = 'jonathan@jbcarroll.com';
//         $headers = "From: $name <$email>" . "\r\n";
//         // If email has been process for sending, display a success message
//         if ( wp_mail( $to, $subject, $message, $headers ) ) {
//             echo '<div>';
//             echo '<p>Thanks for contacting me, expect a response soon.</p>';
//             echo '</div>';
//         } else {
//             echo 'An unexpected error occurred';
//         }
//     }
// }

// Generate Shortcode
function cf_shortcode() {
    ob_start();
    // vera_deliver_mail();
    vera_request_quote_function();

    return ob_get_clean();
}

add_shortcode( 'vera_contact_form', 'cf_shortcode' );
?>