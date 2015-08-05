(function($, window, document) {
    $.fn.stepsForm = function() {

        var
            $shoeFormWidth = $('#shoeRequestForm').width(),
            $shoeRequestWrapperFullWidth = $('.shoe-request-wrapper').innerWidth(),
            $shoeRequestWrapperWidth = $('.shoe-request-wrapper').width(),
            $shoeBoxBody = $('#shoeBoxBody'),
            $shoeBoxLid = $('#shoeBoxLid'),
            $shoeBoxLidWidth = $shoeBoxLid.outerWidth(),
            $shoeBoxBodyWidth = $shoeBoxBody.outerWidth(),
            $shoeBoxBodyHeight = $shoeBoxBodyWidth/2.2,
            $shoeBoxLidHeight = $shoeBoxLidWidth/7.7,
            $shoeRequestPadding = -Math.abs(($shoeRequestWrapperFullWidth - $shoeRequestWrapperWidth)/2),
            $shoeRequestWrapperRadius = $('.shoe-request-wrapper').css('border-radius'),
            $topRedBar = $('#topRedBar'),
            $nextBackButtons = $('#nextBackButtons'),
            $brandsWidth = $('.brand-logos').outerWidth(),
            $brandsWrapper = $('.brand-logos');


        console.log($shoeBoxBodyHeight);
        $topRedBar.html("<div id='topBarInner'></div>");
        $brandsWrapper.css({"height": $brandsWidth+"px"});


        $topRedBar.width($shoeRequestWrapperFullWidth).css({
            "margin-left": $shoeRequestPadding,
            "margin-top": $shoeRequestPadding,
            "position": 'absolute',
            "height": '10px',
            "overflow": 'hidden'
        });

        $('#topBarInner').css({
            "width": '100%',
            "height": '50px',
            "border-radius": $shoeRequestWrapperRadius,
            "background": '#F9393F'
        });


        var
            $self = $(this),
            $allSteps = $("form.steps-form > div"),
            $step1 = $("#step-1"),
            $step2 = $("#step-2"),
            $step3 = $("#step-3"),
            $step4 = $("#step-4"),
            $step1Indicator = $("#stepsIndicator-1"),
            $step2Indicator = $("#stepsIndicator-2"),
            $step3Indicator = $("#stepsIndicator-3"),
            $step4Indicator = $("#stepsIndicator-4"),
            $shoeBrandRadio = $('.shoe-brand'),
            $modelNameInput = $('#modelNameInput');




        /////////////////////////////////////////////
        // Step 1 Effects
        ////////////////////////////////////////////

        $shoeBrandRadio.on('click', function() {
            var $self = $(this);


            if($self.is(':checked')) { // If Brand is Chosen

                $step1.removeClass('active');
                $step1Indicator.removeClass('active');
                setTimeout(function() {
                    $step1.addClass('unactive');
                    $step2.removeClass('unactive');
                    $step2Indicator.addClass('active');
                    $step2.addClass('active');
                }, 500);



                // Confirm Details Brand Chosen Output
                var brandChosen = $(this).attr('value'); // Get brand selected by user
                $("#brandName").html(brandChosen); // Add brand selected to Step 4 (Order Confirmation)
            }
        });


        /////////////////////////////////////////////
        // Step 2 Effects
        ////////////////////////////////////////////
        var
            $imgTitle = $('#imgTitle'),
            $modelGallery = $('#shoeModelGallery'),
            $galleryMatch = $('.gallery-image-match'),
            $shoeModel = $(".shoe-model"),
            $submitModel = $('.next-model');


        $modelNameInput.keyup(function() { // When user starts typing show Images from flicker API Effect (Api not connected, effects example only)


            var childHeight = $step2.height();

            $imgTitle.addClass( "show" ); // Show instructions description
            $modelGallery.addClass( "show" ); // Show Gallery

            $galleryMatch.each(function(i){ // Show individual image fade in effect one by one
                var $self = $(this);
                setTimeout(function() {
                    $self.addClass("images-fade-in");
                }, 300*i);
            });

        });

        $submitModel.on('click', function(event) {
            event.preventDefault();
            var $self = $(this);

            // Effect was not working with .click on <a> tag so used radio button checked as alternative
            // If next button is clicked
                $step2.removeClass('active');
                $step2Indicator.removeClass('active');
                setTimeout(function() {
                    $step2.addClass('unactive');
                    $step3.removeClass('unactive');
                    $step3Indicator.addClass('active');
                    $step3.addClass('active');
                }, 500);

                // Confirm Details Model Chosen Output
                var modelChosen = $('#modelNameInput').val();// Grab model selected by user
                $("#modelName").html(modelChosen);// Add model selected to Step 4 (Order Confirmation)
            
        });

        $('.match-img-wrapper').on('click', function() {
            var $self = $(this);


            $self.toggleClass('imageSelected');


        });

        /////////////////////////////////////////////
        // Step  Effects 3
        ////////////////////////////////////////////
        $(function() {

            var
                shoeRequestWrapper = $(".shoe-request-wrapper"),
                shoeBoxWrapper = $("#shoeBoxWrapper"),
                $inputSlider = $( "#slider"),
                $allShoeSize = $('.shoe-size-submit'),
                $shoeSize = $( "#amount"),
                $menSizeInput = $( "#shoeSizeM"),
                $womanSizeInput = $( "#shoeSizeW"),
                $kidsSizeInput = $( "#shoeSizeK"),
                $menSizeLabel = $("#mensShoeSize"),
                $womanSizeLabel = $("#womanShoeSize"),
                $kidsSizeLabel = $("#kidsShoeSize"),
                $usaShoeSize = $("#usaShoeSize"),
                $sliderToolTip = $('#sliderToolTip'),
                $orderConfirmShoeSize = $("#shoeSize");

            setTimeout(function() {
                $sliderToolTip.addClass( "active" );
            }, 300);

            $sliderToolTip
                .mouseover(function() {
                    $(this).removeClass( "active" );
                });
            $inputSlider
                .mouseover(function() {
                    console.log('hello');
                    $sliderToolTip.removeClass( "active" );
                });



            $inputSlider.slider({
                value:10,
                min: 6,
                max: 14,
                step:0.5,
                slide: function( event, ui ) {
                    var
                        $shoeSizeM = $shoeSize.val(ui.value).val(), //Men Shoe Size
                        $shoeSizeW =  parseFloat($shoeSizeM)-1.5, //Woman Shoe Size
                        $shoeSizeK =  parseFloat($shoeSizeM)- 1; //Kids Shoe Size

                    $menSizeInput.val(  $shoeSizeM ); //Radio Input Men Value
                    $womanSizeInput.val( $shoeSizeW ); //Radio Input Women Value
                    $kidsSizeInput.val( $shoeSizeK ); //Radio Input Kids Value
                    $menSizeLabel.html( "<em>" + $shoeSizeM + "</em><br/> Men Size" ); //Radio Input Men Label
                    $womanSizeLabel.html( "<em>" + $shoeSizeW + "</em><br/> Woman Size"); //Radio Input Women Label
                    $kidsSizeLabel.html( "<em>" + $shoeSizeK + "</em><br/> Kids Size"); //Radio Input Kids Label
                }
            });

            $shoeSize.keyup(function(e) {
                $usaShoeSize.html($(this).val());
            }).keypress(function(e) {
                return /[a-z0-9.-]/i.test(String.fromCharCode(e.which));
            });

            $shoeSize.val( $inputSlider.slider( "value" ) );
            $allShoeSize.on('click', function() {
                console.log("hello sir");
                $step3.removeClass('active');
                $step3Indicator.removeClass('active');
                shoeRequestWrapper.addClass('unactive');
                shoeBoxWrapper.removeClass('unactive');
                setTimeout(function() {
                    $step3.addClass('unactive');
                    shoeBoxWrapper.addClass('done');
                    shoeRequestWrapper.addClass('done');
                }, 500);

                    // Confirm Details Size Output
                var $sizeChosenId = $(this).attr('id'); // What is the id of the size the user chose
                var $sizeChosenM =  $menSizeLabel.text();
                var $sizeChosenW =  $womanSizeLabel.text();
                var $sizeChosenK =  $kidsSizeLabel.text();

                if($sizeChosenId == 'shoeSizeM') {
                    $orderConfirmShoeSize.html($sizeChosenM);
                }
                else if($sizeChosenId == 'shoeSizeW') {
                    $orderConfirmShoeSize.html($sizeChosenW);
                }
                else if($sizeChosenId == 'shoeSizeK') {
                    $orderConfirmShoeSize.html($sizeChosenK);
                }
            });
        });

        $(function() {


        });
    };
}(window.jQuery, window, document));


//  Add form id below
$('.steps-form').stepsForm();













(function($, window, document) {
    // The $ is now locally scoped

    // The rest of your code goes here!
    var nextButton = $('#nextButton');
    var backButton = $('#backButton');
    var quizQuestion = $('.quiz-question.active');
    var quizForm = $('#steps-form');





    nextButton.on('click', function() {
        var
            shoeRequestWrapper = $(".shoe-request-wrapper"),
            shoeBoxWrapper = $("#shoeBoxWrapper"),
            activeQuestionId = $(".quiz-question.active").attr('id'),
            activeQuestionNumber = $(".quiz-question.active").attr('id').split("-").pop(),
            nextQuestionNumber = (parseInt(activeQuestionNumber) + 1),
            nextQuestionId = $('#step-'+nextQuestionNumber),
            questionCount = $(".quiz-question").length,
            activeIndicatorId = $(".steps-indicator.active").attr('id'),
            activeIndicatorNumber = $(".steps-indicator.active").attr('id').split("-").pop(),
            nextIndicatorNumber = (parseInt(activeIndicatorNumber) + 1),
            nextIndicatorId = $('#stepsIndicator-'+nextQuestionNumber);


        if( nextQuestionNumber < questionCount + 1 ) {
            // code to be executed if condition is true

            $('#'+activeQuestionId).removeClass('active');
            $('#'+activeIndicatorId).removeClass('active');
            setTimeout(function() {
                $('#'+activeQuestionId).addClass('unactive');
                nextQuestionId.removeClass('unactive');
                nextQuestionId.addClass('active');
                nextIndicatorId.addClass('active');
            }, 500);

        }
        else {
            // code to be executed if condition is false

            shoeRequestWrapper.addClass('unactive');
            shoeBoxWrapper.removeClass('unactive');
            setTimeout(function() {
                shoeBoxWrapper.addClass('done');
                shoeRequestWrapper.addClass('done');
            }, 500);
        }

    });

    backButton.on('click', function() {
        var
            activeQuestionId = $(".quiz-question.active").attr('id'),
            activeQuestionNumber = $(".quiz-question.active").attr('id').split("-").pop(),
            lastQuestionNumber = (parseInt(activeQuestionNumber) - 1),
            lastQuestionId = $('#step-'+lastQuestionNumber),
            questionCount = $(".quiz-question").length,
            activeIndicatorId = $(".steps-indicator.active").attr('id'),
            activeIndicatorNumber = $(".steps-indicator.active").attr('id').split("-").pop(),
            lastIndicatorNumber = (parseInt(activeIndicatorNumber) - 1),
            lastIndicatorId = $('#stepsIndicator-'+lastQuestionNumber);


        if( lastQuestionNumber > 0 ) {
            // code to be executed if condition is true
            $('#'+activeQuestionId).removeClass('active');
            $('#'+activeIndicatorId).removeClass('active');
            setTimeout(function() {
                $('#'+activeQuestionId).addClass('unactive');
                lastQuestionId.removeClass('unactive');
                lastQuestionId.addClass('active');
                lastIndicatorId.addClass('active');
            }, 1000);
        }
        else {
            // code to be executed if condition is false
        }

    });



}(window.jQuery, window, document));
// The global jQuery object is passed as a parameter