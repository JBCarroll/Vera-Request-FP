<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="container-fluid">
    <form id="veraform" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="POST">
    <ul id="progressbar">
        <li class="active" id="account"><strong>Specifications</strong></li>
        <li id="personal"><strong>Summary</strong></li>
        <li id="payment"><strong>Personal</strong></li>
        <li id="confirm"><strong>Thank You</strong></li>
    </ul>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <!-- Website Specifications -->
    <fieldset>
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">Project Specifications:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 1 - 4</h2>
            </div>
        </div>
    <label class="fieldlabels">Type of website: *</label>
        <select class="form-control" name="type_of_website" disable="disable">
            <option>One pager - 4 sections</option>
        </select>
    <label class="fieldlabels">Additional pages</label>
        <input type="text" name="additional_pages" class="additional_pages" placeholder="Additional pages"/>
    <label class="fieldlabels">Additional sections</label>
        <input type="text" name="additional_sections" class="additional_sections" placeholder="Additional sections" />
    <label class="fieldlabels">Newsletter signup</label>
        <select name="newsletter_signup" class="form-control newsletter_signup" value="50">
            <option value="750">Yes</option>
            <option value="0">No</option>
        </select>
    <label class="fieldlabels">Training p/h</label>
        <input type="text" name="training" class="training" placeholder="Training p/h" />
    </div>
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <!-- Summary Information -->
    <fieldset>
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">Quote Summary:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 2 - 4</h2>
            </div>
        </div>
        <label class="fieldlabels">Project Name: *</label> <input type="text" name="fname" disabled="disabled" id="nameclass"/>
        <label class="fieldlabels">Project Description: *</label> <input type="text" name="lname" disabled="disabled"/>
        <label class="fieldlabels">Links: *</label> <input type="text" name="phno" disabled="disabled"/>
        <label class="fieldlabels">Total: *</label> <input type="text" name="phno_2" disabled="disabled" id="total" />
    </div>
        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
    </fieldset>
    <!-- Personal Information -->
    <fieldset>
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">Personal Information:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 3 - 4</h2>
            </div>
        </div>
        <label class="fieldlabels">Project Name: *</label> <input type="text" name="ProjectPriceName" class="name_result"/>
        <label class="fieldlabels">Project Description: *</label> <input type="text" name="ProjectPriceDesc"  class="description_result"/>
        <label class="fieldlabels">Links: *</label> <input type="text" name="ProjectPriceLink" class="links_result"/>
    </div>
    <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
    </fieldset>
    <!-- Thank You Step -->
    <fieldset>
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">Thank you:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 4 - 4</h2>
            </div>
        </div>
    <br>
    <h2 class="purple-text text-center"><strong>SUCCESS!</strong></h2>
    <br>
    <div class="row justify-content-center">
        <div class="col-3"><img src="https://i.imgur.com/GwStPmg.png" class="fit-image"></div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-7 text-center">
            <h5 class="purple-text text-center">We will be in contact shortly.</h5>
        </div>
    </div>
    </div>
    </div>
    </fieldset>
    </form>
</div>