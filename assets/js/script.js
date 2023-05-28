//Get flags
function format(item, state) {
    if (!item.id) {
        return item.text;
    }
    var countryUrl = "https://hatscripts.github.io/circle-flags/flags/";
    var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
    var url = state ? stateUrl : countryUrl;
    var img = $("<img>", {
        class: "img-flag",
        width: 26,
        src: url + item.element.value.toLowerCase() + ".svg"
    });
    var span = $("<span>", {
        text: " " + item.text
    });
    span.prepend(img);
    return span;
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

var current_effect = 'roundBounce';

function run_waitMe(effect) {

    $('#generatedResults').waitMe({

        //none, rotateplane, stretch, orbit, roundBounce, win8, 
        //win8_linear, ios, facebook, rotation, timer, pulse, 
        //progressBar, bouncePulse or img
        effect: 'roundBounce',

        //place text under the effect (string).
        text: 'Constructing Resume',

        //background for container (string).
        bg: 'rgba(255,255,255,0.7)',

        //color for background animation and text (string).
        color: '#000',

        //max size
        maxSize: '',

        //wait time im ms to close
        waitTime: 4000,

        //url to image
        source: '',

        //or 'horizontal'
        textPos: 'vertical',

        //font size
        fontSize: '',

        // callback
        onClose: function () { }

    });
}

$(document).ready(function () {
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    // The DOM element you wish to replace with Tagify
    var input = document.querySelector('input[name=languages]');

    // initialize Tagify on the above input node reference
    new Tagify(input);

    $(".next").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function () {
        return false;
    })

    //Generate fields
    $("#workhere").click(function () {

        if ($('#workhere').is(':checked')) {
            $("#endDateDiv").css("visibility", "hidden");
        } else {
            $("#endDateDiv").css("visibility", "visible");
        }
    });

    function update_list(languages) {

        // clear the existing list
        $('.languages li').remove();

        $.each(languages, function (index, language) {
            $('.languages .language').append('<li class="language">' + language + '</li>')
        });

    }
    //Step 1 Data:

    $("#startBuilding").click(function () {

        var userName = $('#name').val();
        var userEmail = $('#email').val();
        var userPhone = $('#phone').val();
        var userCountry = $('#country').val();
        var userAddress = $('#address').val();
        var userLinkedin = $('#linkedin').val();
        var userWebsite = $('#website').val();
        var userTargetRole = $('#targetRole').val();
        var userTargetCompany = $('#targetCompany').val();
        var input = document.querySelector('input[name=languages]');
        var tagify = new Tagify(input);
        var userLanguages = tagify.value;
        update_list(userLanguages);

        $('.name h1').text(userName);
        $('.designation h4').text(userTargetRole);
        $('.email').text(userEmail);
        $('.address').text(userAddress + userCountry);
        $('.phone').text(userPhone);
        $('.linkedinUrl').text(userLinkedin);
        $('.websiteUrl').text(userWebsite);


    });

    //Step 2
    $('#generateEx').click(function () {
        run_waitMe(current_effect);

        var companyName = $('#company').val();
        var jobTitle = $('#title').val();

        var sdate = new Date($('#startDate').val());
        var sday = sdate.getDate();
        var smonth = sdate.getMonth() + 1;
        var syear = sdate.getFullYear();
        var startDate = sday + '-' + smonth + '-' + syear;
        var edate = new Date($('#endDate').val());
        var eday = edate.getDate();
        var emonth = edate.getMonth() + 1;
        var eyear = edate.getFullYear();
        var endDate = eday + '-' + emonth + '-' + eyear;
        var description = $('#experienceDesc').val();

        var $this = $(this),
            clickNum = $this.data('clickNum');

        if (!clickNum) {
            clickNum = 1;
            $(".generatedExResults").html('<h4 id="jobTitle">' + jobTitle + '</h4 ><h6 id="companyName">' + companyName + '</h6><span id="start">[' + startDate + ' - </span><span id="end">' + endDate + ']</span></div><div class="generatedOutput"><p id="generatedDesc">Output generated #1</p><div class="generatedBtns"><button class="btn-action">Delete</button><button class="btn-action">Refresh</button></div></div>');

            $(".experienceBody").append('<div class="row"><div class="col-md-5"><div class="startEndDate"><h6>' + startDate + ' - ' + endDate + '</h6></div><div class="companyName"><h6>' + companyName + '</h6></div></div><div class="col-md-7"><div class="designationName"><h6>' + jobTitle + '</h6></div><div class="designationDetails"><p>' + description + '</p></div></div></div>');

        } else {
            $(".generatedExResults").append('<h4 id="jobTitle">' + jobTitle + '</h4 ><h6 id="companyName">' + companyName + '</h6><span id="start">[' + startDate + ' - </span><span id="end">' + endDate + ']</span></div><div class="generatedOutput"><p id="generatedDesc">Output generated #1</p><div class="generatedBtns"><button class="btn-action">Delete</button><button class="btn-action">Refresh</button></div></div>');

            $(".experienceBody").append('<div class="row"><div class="col-md-5"><div class="startEndDate"><h6>' + startDate + ' - ' + endDate + '</h6></div><div class="companyName"><h6>' + companyName + '</h6></div></div><div class="col-md-7"><div class="designationName"><h6>' + jobTitle + '</h6></div><div class="designationDetails"><p>' + description + '</p></div></div></div>'); F
        }

        $this.data('clickNum', ++clickNum);




    });

    //Step 3
    $('#generateEd').click(function () {

        var instituteName = $('#instituteName').val();
        var degree = $('#degree').val();

        var sdate = new Date($('#startDateE').val());
        var sday = sdate.getDate();
        var smonth = sdate.getMonth() + 1;
        var syear = sdate.getFullYear();
        var startDate = sday + '-' + smonth + '-' + syear;
        var edate = new Date($('#endDateE').val());
        var eday = edate.getDate();
        var emonth = edate.getMonth() + 1;
        var eyear = edate.getFullYear();
        var endDate = eday + '-' + emonth + '-' + eyear;
        var description = $('#educationDesc').val();

        var $this = $(this),
            clickNum = $this.data('clickNum');

        if (!clickNum) {
            clickNum = 1;
            $(".generatedEdResults").html('<h4 id="userDegree">' + degree + '</h4 ><h6 id="userInstitute">' + instituteName + '</h6><span id="start">[' + startDate + ' - </span><span id="end">' + endDate + ']</span></div><div class="generatedOutput"><p id="generatedDesc">Output generated #1</p><div class="generatedBtns"><button class="btn-action">Delete</button><button class="btn-action">Refresh</button></div></div>');

            $(".educationBody").html('<div class="row"><div class="col-md-5"><div class="startEndDate"><h6>' + startDate + ' - ' + endDate + '</h6></div><div class="uniName"><h6>' + instituteName + '</h6></div></div><div class="col-md-7"><div class="degreeName"><h6>' + degree + '</h6></div><div class="degreeDetails"><p>' + description + '</p></div></div></div>');
        } else {
            $(".generatedEdResults").append('<h4 id="userDegree">' + degree + '</h4 ><h6 id="userInstitute">' + instituteName + '</h6><span id="start">[' + startDate + ' - </span><span id="end">' + endDate + ']</span></div><div class="generatedOutput"><p id="generatedDesc">Output generated #1</p><div class="generatedBtns"><button class="btn-action">Delete</button><button class="btn-action">Refresh</button></div></div>');

            $(".educationBody").append('<div class="row"><div class="col-md-5"><div class="startEndDate"><h6>' + startDate + ' - ' + endDate + '</h6></div><div class="uniName"><h6>' + instituteName + '</h6></div></div><div class="col-md-7"><div class="degreeName"><h6>' + degree + '</h6></div><div class="degreeDetails"><p>' + description + '</p></div></div></div>');
        }


        $this.data('clickNum', ++clickNum);
    });


    $("#countries").select2({
        templateResult: function (item) {
            return format(item, false);
        }
    });
    $("#countriesPersonal").select2({
        templateResult: function (item) {
            return format(item, false);
        }
    });

    $("#countriesNationality").select2({
        templateResult: function (item) {
            return format(item, false);
        }
    });
    $("#countriesUP").select2({
        templateResult: function (item) {
            return format(item, false);
        }
    });

    $('form').validin({

        onValidateInput: function (validation_info) {
            console.log(validation_info.input);
            if (!validation_info.has_error) {
                $('#startBuilding').attr("disabled", false);
                $('#generateEd').attr("disabled", false);
                $('#secondStep').attr("disabled", false);
                $('#thirdStep').attr("disabled", false);
                $('#generateEx').attr("disabled", false);
                $('#forthStep').attr("disabled", false);
            } else {
                $('#startBuilding').attr("disabled", true);
                $('#generateEd').attr("disabled", true);
                $('#secondStep').attr("disabled", true);
                $('#generateEx').attr("disabled", true);
                $('#thirdStep').attr("disabled", true);
                $('#forthStep').attr("disabled", true);
            }
        },
    });

    $('#editSummary').click(function () {
        $('#summary').attr("disabled", false);
    });
    $('#saveSummary').click(function () {
        $('#summary').attr("disabled", true);
    });

    $("#imageUpload").change(function () {
        readURL(this);
    });

});