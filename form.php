<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="container-fluid">
    <form id="veraform" class="needs-validation" action="<?php esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="POST" novalidate>
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
                        <h2 class="fs-title">Ideal Project:</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 1 - 3</h2>
                    </div>
                </div>
                <div class="row">
                <div class="col">
                <label id="formservices" class="fieldlabels">What services do you require?</label>
                    <select id="select" class="form-control" name="type_of_service">
                    <option disabled selected value=""> -- select an option -- </option>
                        <option value="Web_Design">Website Design</option>
                        <option value="Social_Media">Social Media Management</option>
                        <option value="Graphic_Design">Graphic Design</option>
                    </select>
                </div>
                <div class="col">
                <label class="fieldlabels">Affordability Range</label>
                    <select class="form-control" name="Affordability_range" required>
                        <option disabled selected value=""> -- select an option -- </option>
                        <option>Less than 1000</option>
                        <option>1000 - 5000</option>
                        <option>5000 - 15 000</option>
                        <option>15 000 - 20 000</option>
                    </select>
                </div>
                </div>
                    <!-- Web Design Form Container -->
                    <div class="Web_Design tab_container">
                        <label class="fieldlabels">Type of website ?</label>
                            <select id="type_of_website" name="type_of_website" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option value="One_Pager">One Pager</option>
                                <option value="Standard">Standard</option>
                                <option value="E-commerce">E-commerce</option>
                            </select>
                        <div class="Standard standard_website_container">
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
                        <label class="fieldlabels">Number of sections</label>
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
                        <div class="Standard One_Pager standard_website_container">
                        <label class="fieldlabels">Would you like stock images?</label>
                            <select name="stock_images" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No, I will provide my own</option>
                            </select>
                        </div>
                        <div class="E-commerce ecommerce_container">
                        <label class="fieldlabels form-label">Estimated number of products</label>
                            <select name="ecommerce_products" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>5+</option>
                                <option>20+</option>
                                <option>50+</option>
                                <option>Can't say right now</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="col E-commerce Standard One_Pager ecommerce_container">
                        <label class="fieldlabels">Would you like Live Chat functionality?</label>
                            <select name="livechat" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col E-commerce Standard One_Pager ecommerce_container">
                        <label class="fieldlabels">Would you like Newsletter signup functionality?</label>
                            <select name="newsletter_signup" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <!-- Social Media Form Container -->
                    <div class="Social_Media tab_container">
                        <label class="fieldlabels">Require social media set-up ?</label>
                            <select name="socialmediaQ1" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        <label class="fieldlabels">How many platforms will you be active on?</label>
                            <select name="socialmediaQ2" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        <label class="fieldlabels">How many times a week would you like us to post?</label>
                            <select name="socialmediaQ3" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        <div class="row">
                        <div class="col">
                        <label class="fieldlabels">Would you like to include ad campaigns in your package?</label>
                            <select id="social_campaigns" name="socialmediaQ4" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option value="Campaigns-Yes">Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col Campaigns-Yes social_media_container">
                        <label class="fieldlabels">How many ads would you like to do per month?</label>
                            <select name="socialmediaQ5" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        </div>
                        <label class="fieldlabels">Would you like us to enage and interact on your behalf?</label>
                            <select name="socialmediaQ6" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                    </div>
                    <!-- Graphic Design  Form Container -->
                    <div class="Graphic_Design tab_container">
                        <label class="fieldlabels">Type of service?</label>
                            <select id="graphics_services" name="" class="form-control">
                                <option disabled selected value> -- select an option -- </option>
                                <option value="New-Logo">New Logo Design</option>
                                <option>Logo Redesign</option>
                                <option>Email Signature</option>
                                <option>Business Cards</option>
                                <option>Company Profile</option>
                                <option value="Other">Other</option>
                            </select>
                        <div class="New-Logo graphics_container"> 
                            <label class="fieldlabels">Do you currently have an existing logo?</label>
                                <select id="graphics_new_logo" name="" class="form-control">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option value="New-Logo-Yes">Yes</option>
                                    <option>No</option>
                                </select>
                        </div>
                        <div class="New-Logo-Yes graphics_container"> 
                            <label class="fieldlabels">Please upload your existing logo</label>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="Other graphics_container"> 
                            <label class="fieldlabels">Please describe, what you are looking for</label>
                                <textarea class="form-control" name="other_description" rows="3"></textarea>
                        </div>
                    </div>
            </div>
            <input type="button" name="next" class="steps next action-button" value="Next" />
        </fieldset>
    <!-- Personal Information -->
        <fieldset>
            <div class="form-card personal_tabs">
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
            <input type="submit" name="vera-submitted" class="next action-button" value="Submit" /> <input type="button" name="previous" class="steps previous action-button-previous" value="Previous" />
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