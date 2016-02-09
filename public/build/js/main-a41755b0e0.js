// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/* =================================
 LOADER
 =================================== */
// makes sure the whole site is loaded
jQuery(window).load(function() {
    // will first fade out the loading animation
    jQuery(".status").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery(".preloader").delay(1000).fadeOut("slow");
})

/* =================================
 ===  RESPONSIVE VIDEO           ====
 =================================== */

$(".video-container").fitVids();

/* =================================
 ===  STICKY NAV                 ====
 =================================== */

$(document).ready(function() {
    $('.main-navigation').onePageNav({
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        filter: ':not(.external)',
        changeHash: true
    });

});


/* COLLAPSE NAVIGATION ON MOBILE AFTER CLICKING ON LINK - ADDED ON V1.5*/

if (matchMedia('(max-width: 480px)').matches) {
    $('.main-navigation a').on('click', function () {
        $(".navbar-toggle").click();
    });
}


/* NAVIGATION VISIBLE ON SCROLL */

$(document).ready(function () {
    mainNav();
});

$(window).scroll(function () {
    mainNav();
});

if (matchMedia('(min-width: 992px), (max-width: 767px)').matches) {
    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if (top > 40) $('#main-nav').stop().animate({"top": '0'});

        else $('#main-nav').stop().animate({"top": '-60'});
    }
}

if (matchMedia('(min-width: 768px) and (max-width: 991px)').matches) {
    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if (top > 40) $('#main-nav').stop().animate({"top": '0'});

        else $('#main-nav').stop().animate({"top": '-120'});
    }
}



/* =================================
 ===  DOWNLOAD BUTTON CLICK SCROLL ==
 =================================== */
jQuery(function( $ ){
    $('#download-button').localScroll({
        duration:1000
    });
});


/* =================================
 ===  FULL SCREEN HEADER         ====
 =================================== */
function alturaMaxima() {
    var altura = $(window).height();
    $(".full-screen").css('min-height',altura);

}

$(document).ready(function() {
    alturaMaxima();
    $(window).bind('resize', alturaMaxima);
});


/* =================================
 ===  SMOOTH SCROLL             ====
 =================================== */
var scrollAnimationTime = 1200,
    scrollAnimation = 'easeInOutExpo';
$('a.scrollto').bind('click.smoothscroll', function (event) {
    event.preventDefault();
    var target = this.hash;
    $('html, body').stop().animate({
        'scrollTop': $(target).offset().top
    }, scrollAnimationTime, scrollAnimation, function () {
        window.location.hash = target;
    });
});


/* =================================
 ===  WOW ANIMATION             ====
 =================================== */
wow = new WOW(
    {
        mobile: false
    });
wow.init();


/* =================================
 ===  OWL CROUSEL               ====
 =================================== */
$(document).ready(function () {

    $("#feedbacks").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 1000,
        paginationSpeed: 400,
        autoPlay: 5000,
        stopOnHover: true,
        singleItem: true
    });

    var owl = $("#screenshots");

    owl.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0
        itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
    });


});


/* =================================
 ===  Nivo Lightbox              ====
 =================================== */
$(document).ready(function () {

    $('#screenshots a').nivoLightbox({
        effect: 'fadeScale',
    });

});

/* =================================
 ===  SUBSCRIPTION FORM          ====
 =================================== */
$("#subscribe").submit(function (e) {
    e.preventDefault();
    var email = $("#subscriber-email").val();
    var dataString = 'email=' + email;

    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    };

    if (isValidEmail(email)) {
        $.ajax({
            type: "POST",
            url: "subscribe/subscribe.php",
            data: dataString,
            success: function () {
                $('.subscription-success').fadeIn(1000);
                $('.subscription-error').fadeOut(500);
                $('.hide-after').fadeOut(500);
            }
        });
    } else {
        $('.subscription-error').fadeIn(1000);
    }

    return false;
});




/* =================================
 ===  NEWSLETTER FORM            ====
 =================================== */
/* ==================================
 === EXPAND NEWSLETTER CHECKBOXES ====
 =================================== */
$("#subscriber-email").bind('keyup', function() {
        if($("#subscriber-email").val() != ""){
            $("#themenkategorien").fadeIn(1000);
            $("#themenkategorien").css("display", "inline");
        } else {
            $("#themenkategorien").fadeOut(1000);
            $("#themenkategorien").css("display", "none");
            //display: none is set automatically. normally.
        }
    }
);

var Form = $("#newsletter-form");

Form.submit(function (e) {
    e.preventDefault();

    //read email address in the newsletter form
    var email = $("#subscriber-email").val();

    var data = Form.serializeArray();

    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    };

    if (isValidEmail(email)) {
        $.ajax({
            method: 'POST',
            url: '/subscribe',
            data: data,
            success: function () {
                $('.subscription-success').fadeIn(1000);
                $('.subscription-success').fadeOut(5000);
            }
        })
    } else {
        $('.subscription-error').fadeIn(1000);
        $('.subscription-error').fadeOut(5000);
    }

    return false;
});




/* =================================
 ===  EXPAND COLLAPSE            ====
 =================================== */
$('.expand-form').simpleexpand({
    'defaultTarget': '.expanded-contact-form'
});



/* =================================
 ===  STELLAR                    ====
 =================================== */
$(window).stellar({
    horizontalScrolling: false
});


/* =================================
 ===  Bootstrap Internet Explorer 10 in Windows 8 and Windows Phone 8 FIX
 =================================== */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    )
    document.querySelector('head').appendChild(msViewportStyle)
}


/* =================================
 ===  Iterate through abilities of sanktionsfrei
 =================================== */
function iterateFunctions() {
    var pattern = /[1-6](?=.png)/;
    var currentI = pattern.exec( $('#feature-image').prop('src') );
    currentI==6 ? currentI = 1 : currentI++;
    $('#feature-'+currentI).trigger('mouseover');
}

function resetColors(current){
    var allFeatures = [1,2,3,4,5,6];
    var currentNumber = Number(String(current).match(/\d+/));
    for (var i = 0; i <= 6; i++) {
        if(allFeatures[i] != currentNumber){
            changeStyles("#feature-"+allFeatures[i], "reset");
        }
    }

}

function changeStyles(element, state){
    if(state == "hover"){
        $(element).find(".icon").css({
            "background":   "#1FACB6",
            "color":        "#FFFFFF",
            "border": "2px solid #FFFFFF",
            "-webkit-box-shadow": "0px 0px 0px 2px #1FACB6",
            "box-shadow": "0px 0px 0px 2px #1FACB6"
        });
    }else{
        $(element).find(".icon").css({
            "background":   "#FFFFFF",
            "color":        "#1FACB6",
            "border": "1px solid #1FACB6",
            "-webkit-box-shadow": "0px 0px 0px 1px #FFFFFF",
            "box-shadow": "0px 0px 0px 1px #FFFFFF"
        });
    }
}

var featureCarousel = setInterval(iterateFunctions, 15000);

$('.feature').hover(function () {
    clearInterval(featureCarousel);
    switch ( this.id ){
        case 'feature-1':
            //Feature 1
            var imgpath = 'images/screenshots/features/1.png';
            break;
        case 'feature-2':
            //Feature 2
            var imgpath = 'images/screenshots/features/2.png';
            break;
        case 'feature-3':
            //Feature 3
            var imgpath = 'images/screenshots/features/3.png';
            break;
        case 'feature-4':
            //Feature 4
            var imgpath = 'images/screenshots/features/4.png';
            break;
        case 'feature-5':
            //Feature 5
            var imgpath = 'images/screenshots/features/5.png';
            break;
        case 'feature-6':
            //Feature 6
            var imgpath = 'images/screenshots/features/6.png';
            break;
    }

    changeStyles("#"+this.id, "hover");
    $('#feature-image').attr("src", imgpath);
    resetColors(this.id);

}, function () {
    //var defaultimgpath = 'images/screenshots/features/1.png';
    //$('#feature-image').attr("src", defaultimgpath);
});
$(document).ready(function () {
    "use strict";
    var Form = $('#form');
    var Button = $('#form-button');
    var Success = $('#success');
    var Error = $('#error');
    var Message = $('#error span');

    Form.submit(function (event) {

        Error.fadeOut(200);

        event.preventDefault();

        var data = Form.serializeArray();

        var subscription = subscribe(data);

        subscription.fail(handleError);
        subscription.done(handleSuccess)

    });

    function subscribe(data) {
        return $.ajax({
            method: 'POST',
            url: '/subscribe',
            data: data
        })
    }

    function handleSuccess(response) {
        console.info(response);
        Button.fadeOut(400, function () {
            Success.fadeIn(400)
        })

    }

    function handleError(error) {

        var messages = JSON.parse(error.responseText);

        Message.text(messages.email);
        Error.fadeIn(400);
    }

});
//# sourceMappingURL=main.js.map
