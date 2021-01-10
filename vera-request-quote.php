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
    echo '<div class="container-fluid">';
    echo '<form id="veraform" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="POST">';
    echo '<ul id="progressbar">';
    echo '<li class="active" id="account"><strong>Specifications</strong></li>';
    echo '<li id="personal"><strong>Personal</strong></li>';
    echo '<li id="payment"><strong>Summary</strong></li>';
    echo '<li id="confirm"><strong>Thank You</strong></li>';
    echo '</ul>';
    echo '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div>';
    echo '<br>';
    // Website Specifications
    echo '<fieldset>';
    echo '<div class="form-card"><div class="row"><div class="col-7"><h2 class="fs-title">Project Specifications:</h2></div><div class="col-5"><h2 class="steps">Step 1 - 4</h2></div></div>';
    echo '<label class="fieldlabels">Type of website: *</label>
            <select class="form-control" name="type_of_website" disable="disable">
                <option>One pager - 4 sections</option>
            </select>
            <label class="fieldlabels">Additional pages</label> <input type="number" name="additional_pages" class="additional_pages" placeholder="Additional pages"/>
            <label class="fieldlabels">Additional sections</label> <input type="text" name="additional_sections" class="additional_sections" placeholder="Additional sections" />
            <label class="fieldlabels">Newsletter signup</label> <input type="text" name="newsletter_signup" class="newsletter_signup" placeholder="Newsletter signup" data-price="750"/>
            <label class="fieldlabels">Training p/h</label> <input type="text" name="training" class="training" placeholder="Training p/h" />';
    echo '</div>';
    echo '<input type="button" name="next" class="next action-button" value="Next" />';
    echo '</fieldset>';
    // Personal Information
    echo '<fieldset>';
    echo '<div class="form-card">';
    echo '<div class="row">';
    echo '<div class="col-7"><h2 class="fs-title">Personal Information:</h2></div>';
    echo '<div class="col-5"><h2 class="steps">Step 2 - 4</h2></div>';
    echo '</div>';
    echo '<label class="fieldlabels">Project Name: *</label> <input type="text" name="ProjectPriceName" class="name_result" data-price="50"/>
            <label class="fieldlabels">Project Description: *</label> <input type="text" name="ProjectPriceDesc"  class="description_result" data-price="50"/>
            <label class="fieldlabels">Links: *</label> <input type="text" name="ProjectPriceLink" class="links_result" data-price="50"/>';
    echo '</div>';
    echo '<input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />';
    echo '</fieldset>';
    // Summary Information
    echo '<fieldset>';
    echo '<div class="form-card">';
    echo '<div class="row">';
    echo '<div class="col-7"><h2 class="fs-title">Quote Summary:</h2></div>';
    echo '<div class="col-5"><h2 class="steps">Step 3 - 4</h2></div>';
    echo '</div>';
    echo '<label class="fieldlabels">Project Name: *</label> <input type="text" name="fname" disabled="disabled" id="nameclass"/>
            <label class="fieldlabels">Project Description: *</label> <input type="text" name="lname" disabled="disabled"/>
            <label class="fieldlabels">Links: *</label> <input type="text" name="phno" disabled="disabled"/>
            <label class="fieldlabels">Total: *</label> <input type="text" name="phno_2" disabled="disabled" id="total" />';
    echo '</div>';
    echo '<input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />';
    echo '</fieldset>';
    // Thank You Step
    echo '<fieldset>';
    echo '<div class="form-card">';
    echo '<div class="row">';
    echo '<div class="col-7"><h2 class="fs-title">Thank you:</h2></div>';
    echo '<div class="col-5"><h2 class="steps">Step 4 - 4</h2></div>';
    echo '</div>';
    echo '<br>';
    echo '<h2 class="purple-text text-center"><strong>SUCCESS!</strong></h2> <br>';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-3"><img src="https://i.imgur.com/GwStPmg.png" class="fit-image"></div>';
    echo '</div>';
    echo '<br>';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-7 text-center"><h5 class="purple-text text-center">We will be in contact shortly.</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</fieldset>';
    echo '</form>';
    echo '</div>';
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