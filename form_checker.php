<?php 
// Checks if the conditional fields is empty or not

// Website Conditional Field Checker
    $one_pager_body = "";
    if (isset($_POST['one_pager_sections']) && !empty($_POST['one_pager_sections'])) {
        $one_pager_body .= "One Pager Sections: " . $_POST['one_pager_sections'];
    }

    $additional_pager_body = "";
    if (isset($_POST['additional_pages']) && !empty($_POST['additional_pages'])) {
        $additional_pager_body .= "Additional Pages: " . $_POST['additional_pages'];
    }

    $ecommerce_products_total = "";
    if (isset($_POST['ecommerce_products']) && !empty($_POST['ecommerce_products'])) {
        $ecommerce_products_total .= "Total Number of Products: " . $_POST['ecommerce_products'];
    }

// Social Media Management Field Checker

?>