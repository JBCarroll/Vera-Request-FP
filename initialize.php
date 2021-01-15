<?php

include_once("vera-request-quote.php");
include_once("form.php");

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

?>