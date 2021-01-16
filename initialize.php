<?php

include_once("vera-request-quote.php");

// Main Sanitize & Delivery Function
function vera_deliver_mail() {

    // If the submit button is clicked, send the email
    if ( isset( $_POST['vera-submitted'] ) ) {
        // Sanitize form values
        $name    = sanitize_text_field( $_POST["firstname"] );
        $service    = ( $_POST["type_of_service"] );
        $type_of_website    = ( $_POST["type_of_website"] );
        $surname = sanitize_text_field( $_POST["surname"] );
        $phone = sanitize_text_field( $_POST["phone"] );
        $email   = sanitize_email( $_POST["email"] );
        // Get the blog administrator's email address
        $to = 'jonathan@jbcarroll.com';
        $headers = ("Request a Quote");
        // Email Body
        $message = "<div>
                    <h3>Name: $service</h3>
                    <p>Type of Website: $type_of_website</p>
                    </div>";
        // Filter to add email content type
        add_filter('wp_mail_content_type', function($content_type){
            return 'text/html';
        });

        // If email has been process for sending, display a success message
        if ( wp_mail( $to, $headers, $message) ) {
        }
    }
}
?>