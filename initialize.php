<?php

include_once("vera-request-quote.php");

// Main Sanitize & Delivery Function
function vera_deliver_mail() {
    // if the submit button is clicked, send the email
    if ( isset( $_POST['vera-submitted'] ) ) {
        // sanitize form values
        $name    = sanitize_text_field( $_POST["firstname"] );
        $surname = sanitize_text_field( $_POST["surname"] );
        $phone = sanitize_text_field( $_POST["phone"] );
        $email   = sanitize_email( $_POST["email"] );
        // get the blog administrator's email address
        $to = 'jonathan@jbcarroll.com';
        $headers = "From: $name <$email>" . "\r\n";
        $formcontent = "Email: $email \n Name: $name";
        // If email has been process for sending, display a success message
        if ( wp_mail( $to, $name, $surname, $headers, $formcontent ) ) {
        } else {
        }
    }
}
?>