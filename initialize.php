<?php

include_once("vera-request-quote.php");

// Main Sanitize & Delivery Function
function vera_deliver_mail() {

    // If the submit button is clicked, send the email
    if ( isset( $_POST['vera-submitted'] ) && !empty($_POST['vera-submitted']) ) {
        // Sanitize form values
        $service    = ( $_POST["type_of_service"] );
        $type_of_website    = ( $_POST["type_of_website"] );
        $additional_pages    = ( $_POST["additional_pages"] );
        $one_pager_sections    = ( $_POST["one_pager_sections"] );
        $newsletter_signup    = ( $_POST["newsletter_signup"] );
        $training    = ( $_POST["training"] );
        $name    = sanitize_text_field( $_POST["firstname"] );
        $surname = sanitize_text_field( $_POST["surname"] );
        $phone = sanitize_text_field( $_POST["phone"] );
        $email   = sanitize_email( $_POST["email"] );
        // Get the blog administrator's email address
        $to = 'jonathan@jbcarroll.com';
        $headers = ("Request a Quote");
        // Email Body
        $message = "<div>
                    <h3>Personal Information</h3>
                    <p>First Name: $name</p>
                    <p>Surname: $surname</p>
                    <p>Contact Number: $phone</p>
                    <p>Email Address: $email</p>
                    <hr>
                    <h3>Quote Information</h3>
                    <p>Selected Service: $service</p>
                    <p>Type of Website: $type_of_website</p>
                    <p>Sections for One-Pager: $one_pager_sections</p>
                    <p>Number of Additional Pages: $additional_pages</p>
                    <p>Newsletter Signup: $newsletter_signup</p>
                    <p>Training P/H: $training</p>
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