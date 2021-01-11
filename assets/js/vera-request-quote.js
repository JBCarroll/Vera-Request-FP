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


    // Form Input Calculations
    // $("input").keyup(function(){
    //     var val1 = +$(".name_result").data('price');
    //     var val2 = +$(".description_result").data('price');
    //     var val3 = +$(".links_result").data('price');
    //     $("#total").val(val1+val2+val3);
    // });

    $("input").on('keyup', function () {
        $('input[name=additional_pages]').keyup(function () {
            if ($(this).val().length) {
                $(".additional_pages").addClass('pages_price');
            } else {
                $(".additional_pages").removeClass("pages_price");
            }
        });
        $('input[name=additional_sections]').keyup(function () {
            if ($(this).val().length) {
                $(".additional_sections").addClass('sections_price');
            } else {
                $(".additional_sections").removeClass("sections_price");
            }
        });
        $('input[name=newsletter_signup]').keyup(function () {
            if ($(this).val().length) {
                $(".newsletter_signup").addClass('newsletter_price');
            } else {
                $(".newsletter_signup").removeClass("newsletter_price");
            }
        });

        // var val1 = +$(".pages_price").val();
        // var val2 = +$(".sections_price").val();
        // var val3 = +$(".newsletter_price").val();

        var total_pages = +$('.additional_pages').val() * 950;
        var total_sections = +$('.additional_sections').val() * 350;
        var total_newsletter = +$('.newsletter_signup').val();
        $("#total").val(total_pages + total_sections + total_newsletter);
    });
});