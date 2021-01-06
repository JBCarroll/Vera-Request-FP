<?php
/*
Plugin Name: Vera Request Quote
Plugin URI: https://veradigital.online
Description: Custom request a quote plugin developed by Vera Digital
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
    echo '<li class="active" id="account"><strong>Account</strong></li>';
    echo '<li id="personal"><strong>Personal</strong></li>';
    echo '<li id="payment"><strong>Image</strong></li>';
    echo '<li id="confirm"><strong>Confirm</strong></li>';
    echo '</ul>';
    echo '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div>';
    echo '<br>';
    // Account Information
    echo '<fieldset>';
    echo '<div class="form-card"><div class="row"><div class="col-7"><h2 class="fs-title">Project Specifications:</h2></div><div class="col-5"><h2 class="steps">Step 1 - 2</h2></div></div>';
    echo '<label class="fieldlabels">Project Type: *</label> <input type="text" value="' . ( isset( $_POST["vd-project-type"] ) ? esc_attr( $_POST["vd-project-type"] ) : '' ) . '" name="project-type" placeholder="Project Type" /> <label class="fieldlabels">Username: *</label> <input type="text" name="uname" placeholder="UserName" /> <label class="fieldlabels">Password: *</label> <input type="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" placeholder="Confirm Password" />';
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
    echo '<label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />';
    echo '</div>';
    echo '<input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />';
    echo '</fieldset>';
    echo '</form>';
    echo '</div>';
}

// Main Sanitize & Delivery Function
function vera_deliver_mail() {
    // if the submit button is clicked, send the email
    if ( isset( $_POST['cf-submitted'] ) ) {
        // sanitize form values
        $name    = sanitize_text_field( $_POST["cf-name"] );
        $email   = sanitize_email( $_POST["cf-email"] );
        $subject = sanitize_text_field( $_POST["cf-subject"] );
        $message = esc_textarea( $_POST["cf-message"] );
        // get the blog administrator's email address
        $to = 'jonathan@jbcarroll.com';
        $headers = "From: $name <$email>" . "\r\n";
        // If email has been process for sending, display a success message
        if ( wp_mail( $to, $subject, $message, $headers ) ) {
            echo '<div>';
            echo '<p>Thanks for contacting me, expect a response soon.</p>';
            echo '</div>';
        } else {
            echo 'An unexpected error occurred';
        }
    }
}

// Generate Shortcode
function cf_shortcode() {
    ob_start();
    vera_deliver_mail();
    vera_request_quote_function();

    return ob_get_clean();
}

add_shortcode( 'vera_contact_form', 'cf_shortcode' );
?>