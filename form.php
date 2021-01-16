<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="container-fluid">
    <form id="veraform" action="<?php esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="POST">
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
    <!-- Specifications -->
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
                <label id="formservices" class="fieldlabels">Type of service</label>
                    <select id="select" class="form-control" name="type_of_service">
                        <option hidden>Please select a service</option>
                        <option value="Web_Design">Web Design</option>
                        <option value="Social_Media">Social Media</option>
                        <option value="Consulting">Consulting</option>
                        <option value="Graphic_Design">Graphic Design</option>
                        <option value="Business_Box">Business in a box</option>
                        <option value="Promotions">Promotions</option>
                    </select>
                    <!-- Web Design Form Container -->
                    <div class="Web_Design service_container">
                        <label class="fieldlabels">Type of website ?</label>
                            <select name="type_of_website" class="form-control">
                                <option>One Pager</option>
                                <option>Basic</option>
                                <option>Ecommerce</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>12 Months</option>
                            </select>
                        <label class="fieldlabels">How many ads ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </div>
                    <!-- Social Media  Form Container -->
                    <div class="Social_Media service_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>12 Months</option>
                            </select>
                        <label class="fieldlabels">How many ads ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </div>
                    <!-- Consulting  Form Container -->
                    <div class="Consulting service_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>12 Months</option>
                            </select>
                        <label class="fieldlabels">How many ads ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </div>
                    <!-- Graphic Design  Form Container -->
                    <div class="Graphic_Design service_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>12 Months</option>
                            </select>
                        <label class="fieldlabels">How many ads ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </div>
                    <!-- Business Box  Form Container -->
                    <div class="Business_Box service_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>12 Months</option>
                            </select>
                        <label class="fieldlabels">How many ads ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </div>
                    <!-- Promotions  Form Container -->
                    <div class="Promotions service_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option value="750">Yes</option>
                                <option value="0">No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>12 Months</option>
                            </select>
                        <label class="fieldlabels">How many ads ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                    </div>
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
                <label class="fieldlabels">Links: *</label> <input type="text" name="links" disabled="disabled"/>
                <label class="fieldlabels">Total: *</label> <input type="text" name="total" disabled="disabled" id="total" />
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
                <label class="fieldlabels">First Name</label> <input type="text" name="firstname" class="p_firstname"/>
                <label class="fieldlabels">Surname</label> <input type="text" name="surname" class="p_surname"/>
                <label class="fieldlabels">Contact Number</label> <input type="text" name="phone" class="p_phone"/>
                <label class="fieldlabels">Email Address</label> <input type="email" name="email" class="p_email"/>
            </div>
            <input type="submit" name="vera-submitted" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
        </fieldset>
    </form>
</div>