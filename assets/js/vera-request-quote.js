jQuery(document).ready(function ($) {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%");
    }

    $(".submit").click(function () {
        return false;
    });

    // Main Selection Conditional Form fields
    $(function () {
        $("#select").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".service_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".service_container").hide();
                }
            });
        }).change();
    });

    // One Pager Conditional Fields
    $(function () {
        $("#type_of_website").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".one_pager_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".one_pager_container").hide();
                }
            });
        }).change();
    });

    // Standard Website Conditional Fields
    $(function () {
        $("#type_of_website").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".standard_website_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".standard_website_container").hide();
                }
            });
        }).change();
    });

    // Ecommerce Conditional Fields
    $(function () {
        $("#type_of_website").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".ecommerce_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".ecommerce_container").hide();
                }
            });
        }).change();
    });
    $(function () {
        $("#social_campaigns").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".ecommerce_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".ecommerce_container").hide();
                }
            });
        }).change();
    });

        // Social Media Conditional Fields
        $(function () {
            $("#social_campaigns").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".social_media_container").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".social_media_container").hide();
                    }
                });
            }).change();
        });

    // Graphics Design Conditional Fields
    $(function () {
        $("#graphics_services").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".graphics_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".graphics_container").hide();
                }
            });
        }).change();
    });
    $(function () {
        $("#graphics_new_logo").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".graphics_new_logo_container").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".graphics_new_logo_container").hide();
                }
            });
        }).change();
    });

    // Form calculations
    // $("input").on('keyup', function () {
    //     $('input[name=additional_pages]').keyup(function () {
    //         if ($(this).val().length) {
    //             $(".additional_pages").addClass('pages_price');
    //         } else {
    //             $(".additional_pages").removeClass("pages_price");
    //         }
    //     });
    //     $('input[name=additional_sections]').keyup(function () {
    //         if ($(this).val().length) {
    //             $(".additional_sections").addClass('sections_price');
    //         } else {
    //             $(".additional_sections").removeClass("sections_price");
    //         }
    //     });
    //     $('input[name=newsletter_signup]').keyup(function () {
    //         if ($(this).val().length) {
    //             $(".newsletter_signup").addClass('newsletter_price');
    //         } else {
    //             $(".newsletter_signup").removeClass("newsletter_price");
    //         }
    //     });

    //     var total_pages = +$('.additional_pages').val() * 950;
    //     var total_sections = +$('.additional_sections').val() * 350;
    //     var total_newsletter = +$('.newsletter_signup').val();
    //     $("#total").val(total_pages + total_sections + total_newsletter);
    // });

});