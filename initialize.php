<?php

include_once("vera-request-quote.php");

// Main Sanitize & Delivery Function
function vera_deliver_mail() {

    // If the submit button is clicked, send the email
    if ( isset( $_POST['vera-submitted'] ) && !empty($_POST['vera-submitted']) ) {
        // Switch case for displaying correct body content

        // Sanitize form values
        // Type of Service Variable
        $service    = ( $_POST["type_of_service"] );
        // Personal Information Variables
        $firstname    = sanitize_text_field( $_POST["firstname"] );
        $surname = sanitize_text_field( $_POST["surname"] );
        $company_name = sanitize_text_field( $_POST["company_busines_name"] );
        $phone = sanitize_text_field( $_POST["phone"] );
        $email   = sanitize_email( $_POST["email"] );
        // Get the blog administrator's email address
        $to = 'jonathan@jbcarroll.com';
        $headers = ("Request a Quote - $service");
        // Email Body

        switch($_POST['type_of_service']){
            case 'Web_Design':
                
                include("form_checker.php");

                $type_of_website    = ( $_POST["type_of_website"] );
                $newsletter_signup    = ( $_POST["newsletter_signup"] );
                $livechat = ( $_POST["livechat"] );
                $Affordability_range = ( $_POST["Affordability_range"] );

                $web_service_body = "<div style='font-family: 'roboto', sans-serif;'>
                    <h2 style='background: #066963; padding: 10px; color: #fff;'>Personal Information</h2>
                    <p style='padding: 5px;'><strong>First Name</strong>: <span style='border-bottom: 1px solid #066963;'>$firstname</span></p>
                    <p style='padding: 5px;'><strong>Surname</strong>: <span style='border-bottom: 1px solid #066963;'>$surname</span></p>
                    <p style='padding: 5px;'><strong>Company/Business Name</strong>: <span style='border-bottom: 1px solid #066963;'>$company_name</span></p>
                    <p style='padding: 5px;'><strong>Contact Number</strong>: <span style='border-bottom: 1px solid #066963;'>$phone</span></p>
                    <p style='padding: 5px;'><strong>Email Address</strong>: <span style='border-bottom: 1px solid #066963;'>$email</span></p>

                    <h2 style='background: #066963; padding: 10px; color: #fff;'>Project Specifications</h2>
                    <p style='padding: 5px;'>Selected Service: $service</p>

                    <p style='padding: 5px;'>Type of Website: $type_of_website</p>
                    <p style='padding: 5px;'>$one_pager_body</p>
                    <p style='padding: 5px;'>$additional_pager_body</p>
                    <p style='padding: 5px;'>$ecommerce_products_total</p>
                    <p style='padding: 5px;'>Newsletter Signup: $newsletter_signup</p>
                    <p style='padding: 5px;'>Live Chat Functionality: $livechat</p>

                    <h3 style='background: #066963; padding: 10px; color: #fff;'>Budget Range: $Affordability_range</h3>
                    </div>";

                // Filter to add email content type
                add_filter('wp_mail_content_type', function($content_type){
                    return 'text/html';
                });

                // If email has been process for sending, display a success message
                if ( wp_mail( $to, $headers, $web_service_body) ) {
                }
            break;
            case 'Social_Media':
                $socialmediaQ1 = ( $_POST["socialmediaQ1"] );
                $socialmediaQ2 = ( $_POST["socialmediaQ2"] );
                $socialmediaQ3 = ( $_POST["socialmediaQ3"] );
                $socialmediaQ4 = ( $_POST["socialmediaQ4"] );
                $socialmediaQ5 = ( $_POST["socialmediaQ5"] );
                $socialmediaQ6 = ( $_POST["socialmediaQ6"] );

                $social_media_service_body = "<div>
                    <h3>Personal Information</h3>
                    <p>First Name: $firstname</p>
                    <p>Surname: $surname</p>
                    <p>Company/Business Name: $company_name</p>
                    <p>Contact Number: $phone</p>
                    <p>Email Address: $email</p>
                    <hr>

                    <h3>Quote Information</h3>
                    <p>Selected Service: $service</p>

                    <p>Require social media set-up: $socialmediaQ1</p>
                    <p>Require Ad management: $socialmediaQ2</p>
                    <p>How many months: $socialmediaQ3</p>
                    <p>How many ads: $socialmediaQ4</p>
                    <p>Require adhoc posts: $socialmediaQ5</p>
                    <p>How many adhoc posts: $socialmediaQ6</p>
                    </div>";

                // Filter to add email content type
                add_filter('wp_mail_content_type', function($content_type){
                    return 'text/html';
                });

                // If email has been process for sending, display a success message
                if ( wp_mail( $to, $headers, $social_media_service_body) ) {
                }
            break;
            case 'Graphic_Design':
                // do Something for Graphic Design
            break;
        }
    }
}
?>