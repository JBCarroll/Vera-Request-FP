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

    $("input").on('keyup', function(){
        $('input[name=ProjectPriceName]').keyup(function(){
            if($(this).val().length){
                $(".name_result").addClass('nameprice');
            }else{
                $(".name-result").removeClass("nameprice");
            }
        });
        $('input[name=ProjectPriceDesc]').keyup(function(){
            if($(".description_result").val().length){
                $(".description_result").addClass('des_price');
            }else{
                $(".description_result").removeClass("des_price");
            }
        });
        $('input[name=ProjectPriceLink]').keyup(function(){
            if($(".links_result").val().length){
                $(".links_result").addClass('link_price');
            }else{
                $(".links_result").removeClass("link_price");
            }
        });

        var val1 = +$(".nameprice").data('price');
        var val2 = +$(".des_price").data('price');
        var val3 = +$(".link_price").data('price');
        $("#total").val(val1+val2+val3);
    });
});