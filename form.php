<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="container-fluid">
    <form id="veraform" action="<?php esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="POST">
        <ul id="progressbar">
            <li class="active" id="account"><strong>Specifications</strong></li>
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
                        <h2 class="steps">Step 1 - 3</h2>
                    </div>
                </div>
                <label id="formservices" class="fieldlabels">Type of service</label>
                    <select id="select" class="form-control" name="type_of_service">
                        <option disabled selected value> -- select an option -- </option>
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
                            <select id="type_of_website" name="type_of_website" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option value="One_Pager">One Pager</option>
                                <option value="Standard">Standard</option>
                                <option value="E-commerce">E-commerce</option>
                            </select>
                        <div class="Standard E-commerce type_website_container">
                        <label class="fieldlabels">Additional Pages</label>
                            <select name="additional_pages" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>2 Pages</option>
                                <option>3 Pages</option>
                                <option>4 Pages</option>
                                <option>5 Pages</option>
                                <option>6 Pages</option>
                                <option>7 Pages</option>
                                <option>8 Pages</option>
                                <option>9 Pages</option>
                                <option>10+ Pages</option>
                            </select>
                        </div>
                        <div class="One_Pager one_pager_container">
                        <label class="fieldlabels">Sections on One-Pager</label>
                            <select name="one_pager_sections" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Up to 4 Sections</option>
                                <option>5 Sections</option>
                                <option>6 Sections</option>
                                <option>7 Sections</option>
                                <option>8 Sections</option>
                                <option>9 Sections</option>
                                <option>10 Sections</option>
                            </select>
                        </div>
                        <label class="fieldlabels">Newsletter Signup</label>
                            <select name="newsletter_signup" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">Training P/H</label>
                            <select name="training" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>1 Hour</option>
                                <option>2 Hours</option>
                                <option>3 Hours</option>
                                <option>4 Hours</option>
                            </select>
                    </div>
                    <!-- Social Media Form Container -->
                    <div class="Social_Media service_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">Require Ad management fee per month / per ad ?</label>
                            <select name="socialmediaQ2" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many months ?</label>
                            <select name="socialmediaQ3" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
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
                            <select name="socialmediaQ4" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        <label class="fieldlabels">Require adhoc posts ?</label>
                            <select name="socialmediaQ5" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many adhoc posts ?</label>
                            <select name="socialmediaQ6" class="form-control newsletter_signup">
                                <option disabled selected value> -- select an option -- </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>10+</option>
                            </select>
                    </div>
                    <!-- Consulting Form Container -->
                    <div class="Consulting service_container">
                        <label class="fieldlabels">Do you have a marketing strategy in place ?</label>
                            <select name="socialmediaQ1" class="form-control newsletter_signup">
                                <option>Yes</option>
                                <option>No</option>
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
    <!-- Personal Information -->
        <fieldset>
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Personal Information:</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 2 - 3</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="fieldlabels">First Name</label> <input type="text" name="firstname" class="p_firstname"/>
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Surname</label> <input type="text" name="surname" class="p_surname"/>
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Company/Business Name</label> <input type="text" name="company_busines_name" class="p_company_name"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="fieldlabels">Contact Number</label> <input type="text" name="phone" class="p_phone"/>
                    </div>
                    <div class="col">
                        <label class="fieldlabels">Email Address</label> <input type="email" name="email" class="p_email"/>
                    </div>
                </div>
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
                        <h2 class="steps">Step 3 - 3</h2>
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