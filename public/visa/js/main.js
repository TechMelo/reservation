(function($) {

    var form = $("#signup-form");
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : 'Prev',
            next : 'Next',
            finish : 'Finish',
            current : ''
        },
        titleTemplate : '<h3 class="title">#title#</h3>',
        onFinished: function (event, currentIndex)
        {
            alert('Sumited');
        }
    });

    $('#country').parent().append('<ul id="newcountry" class="select-list" name="country"></ul>');
    $('#country option').each(function(){
        $('#newcountry').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#country').remove();
    $('#newcountry').attr('id', 'country');
    $('#country li').first().addClass('init');
    $("#country").on("click", ".init", function() {
        $(this).closest("#country").children('li:not(.init)').toggle();
    });

    var allOptions = $("#country").children('li:not(.init)');
    $("#country").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#country").children('.init').html($(this).html());
        allOptions.toggle();
    });

    $('#daily_budget').parent().append('<ul id="newdaily_budget" class="select-list" name="daily_budget"></ul>');
    $('#daily_budget option').each(function(){
        $('#newdaily_budget').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#daily_budget').remove();
    $('#newdaily_budget').attr('id', 'daily_budget');
    $('#daily_budget li').first().addClass('init');
    $("#daily_budget").on("click", ".init", function() {
        $(this).closest("#daily_budget").children('li:not(.init)').toggle();
    });

    var DailyOptions = $("#daily_budget").children('li:not(.init)');
    $("#daily_budget").on("click", "li:not(.init)", function() {
        DailyOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#daily_budget").children('.init').html($(this).html());
        DailyOptions.toggle();
    });
    $(".btn-flag").on("click",function () {
        $(".btn-flag").removeClass("btn-flag-active");
        $(".t-link").removeClass("active");
        $(this).addClass("btn-flag-active");

    });
    $(".visa-radio").on("click",function () {
    if($(".visa-radio").is(":checked")) {
        $(".visa-radio-bg").removeClass("visa-radio-active");
        $(this).closest( "div" ).addClass("visa-radio-active");
    }
    });

    var quantitiy=0;
    $('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);


        // Increment

    });

    $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if(quantity>0){
            $('#quantity').val(quantity - 1);
        }
    });
    //------------check info visa page
    $("a").on("click",function () {
        var windowWidth=$(window).width();
        if($(this).attr("href")=="#signup-form-h-1"){

        if(windowWidth<=768)
        {
            $(".content").css("height","1400px");
        }
        else
        {
            $(".content").css("height","550px");
        }
        }

       if($(this).attr("href")=="#signup-form-h-2")
       {
           if(windowWidth<=768)
           {
               $(".content").css("height","900px");
           }
           else
           {
               $(".content").css("height","550px");
           }


            var fname= $("#v_fname").val();
            $(".v_fname_check").text(fname);
            var mname= $("#v_mname").val();
            $(".v_mname_check").text(mname);
            var lname= $("#v_lname").val();
            $(".v_lname_check").text(lname);
            var dob= $("#v_dob").val();
            $(".v_dob_check").text(dob);
            var passno= $("#v_passport_no").val();
            $(".v_passport_no_check").text(passno);
            var issued= $("#v_issue_date").val();
            $(".v_issue_date_check").text(issued);
            var expd= $("#v_expiry_date").val();
            $(".v_expiry_date_check").text(expd);
            var pno= $("#v_phone_no").val();
            $(".v_phone_no_check").text(pno);
            var email= $("#v_email").val();
            $(".v_email_check").text(email);
           $('a[href$="#finish"]').hide();
if(($("#v_personal_pic").get(0).files.length === 0)||($("#v_first_page_passport").get(0).files.length === 0)||(fname=='')||(lname=='')||(passno=='')||(issued=='')||(expd=='')||(pno=='')||(dob==''))
{
alert("Please fill all compulsory fields!");
}
else
{
    $('a[href$="#finish"]').show();
}


        }
    });
//    check visa pics






})(jQuery);

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.v_first_page_passport_check')
                .attr('src', e.target.result)
                .height(100)

        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.v_personal_pic_check')
                .attr('src', e.target.result)
                .height(100)

        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.v_l_entry_stamp_check')
                .attr('src', e.target.result)
                .width(100)

        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.v_l_exit_stamp_check')
                .attr('src', e.target.result)
                .width(100)

        };

        reader.readAsDataURL(input.files[0]);
    }
}

