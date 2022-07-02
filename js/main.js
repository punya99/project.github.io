/* -------------------------------------------------------------------
 * Template Name         : Anaula - Construction Template
 * Created Date          : 19 Aqust 2020
 * Version               : 1.0
 * File Name             : main.js
------------------------------------------------------------------- */

/* -------------------------------------------------------------------
 [Table of contents]
 * 01.Preloader
 * 02.Navbar
 * 03.Wow Js
 * 04.ScrollIt
 * 05.Owl Carousel
 * 06.Counter Up
 * 07.Magnific Popup
 * 08.Our Works
 * 09.Background Image
 * 10.Contact Form

   ------------------------------------------------------------------- */
$(function() {
    "use strict";

    // Call all ready functions
    anaula_preloader();
    anaula_navbar();
    anaula_wowJs();
    anaula_scrollIt();
    anaula_owlCarousel();
    anaula_counterUp();
    anaula_magnificPopup();
    anaula_Gallery();
    anaula_Bg_Img_Path();
    anaula_Contact_Form();
});
/* ------------------------------------------------------------------- */
/* 01.Preloader
/* ------------------------------------------------------------------- */
function anaula_preloader() {
    "use-strict";

    // Variables
    let preloaderWrap = $( '#preloader-wrap' );
    let loaderInner = preloaderWrap.find( '.preloader-inner' );

    $( window ).ready(function(){
        loaderInner.delay(300).fadeOut(); 
        preloaderWrap.delay(300).fadeOut( 'slow' );
    });   
}
/* ------------------------------------------------------------------- */
/* 02.Navbar
/* ------------------------------------------------------------------- */
function anaula_navbar(){
    "use-strict";

    // Variables
    let header = $( '.header' );
    let scrollTopBtn = $( '.scroll-top-btn' );
    let windowWidth = $( window ).innerWidth();
    let scrollTop = $( window ).scrollTop();
    let $dropdown = $( '.dropdown' );
    let $dropdownToggle = $( '.dropdown-toggle' );
    let $dropdownMenu = $( '.dropdown-menu' );
    let showClass = 'show';

    // When Window On Scroll
    $( window ).on( 'scroll', function(){
        let scrollTop = $( this ).scrollTop();

        if( scrollTop > 150 ) {
            header.addClass( 'header-shrink' );
            scrollTopBtn.addClass( 'active' );
        }else {
            header.removeClass( 'header-shrink' );
            scrollTopBtn.removeClass( 'active' );
        }
    });

    // The same process is done without page scroll to prevent errors.
    if( scrollTop > 150 ) {
        header.addClass( 'header-shrink' );
        scrollTopBtn.addClass( 'active' );
    }else {
        header.removeClass( 'header-shrink' );
        scrollTopBtn.removeClass( 'active' );
    }

    // Window On Resize Hover Dropdown
    $( window ).on( 'resize', function() {
        let windowWidth  = $( this ).innerWidth();
        if ( windowWidth > 991 ) {
            $dropdown.hover(
                function() {
                    let hasShowClass  =  $( this ).hasClass( showClass );
                    if( hasShowClass!==true ){
                        $( this ).addClass( showClass );
                        $( this ).find( $dropdownToggle ).attr( 'aria-expanded', 'true' );
                        $( this ).find( $dropdownMenu ).addClass( showClass );
                    }
                },
                function() {
                    $( this ).removeClass( showClass);
                    $( this ).find( $dropdownToggle ).attr( 'aria-expanded', 'false' );
                    $( this ).find( $dropdownMenu ).removeClass( showClass );
                }
            );
        }else {
            $dropdown.off( 'mouseenter mouseleave' );
            header.find( '.main-menu' ).collapse( 'hide' );
        }
    });

    // The same process is done without page scroll to prevent errors.
    if ( windowWidth > 991 ) {
        $dropdown.hover(
            function() {
                const $this = $( this );

                var hasShowClass = $this.hasClass( showClass );

                if( hasShowClass!==true ){
                    $this.addClass( showClass);
                    $this.find ( $dropdownToggle ).attr( 'aria-expanded', 'true' );
                    $this.find( $dropdownMenu ).addClass( showClass );
                }
            },
            function() {
                const $this = $( this );
                $this.removeClass( showClass );
                $this.find( $dropdownToggle ).attr( 'aria-expanded', 'false' );
                $this.find( $dropdownMenu ).removeClass( showClass );
            }
        );
    }else {
        $dropdown.off( 'mouseenter mouseleave' );
    }
}
/* ------------------------------------------------------------------- */
/* 03.Wow Js
/* ------------------------------------------------------------------- */
function anaula_wowJs(){
    "use-strict";
    
    let wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true,
        scrollContainer: null
    });
    wow.init();
}
/* ------------------------------------------------------------------- */
/* 04.ScrollIt
/* ------------------------------------------------------------------- */
function anaula_scrollIt() {
    "use-strict";
     
    $.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: "swing",
        scrollTime: 1000,
        activeClass: "active",
        onPageChange: null,
        topOffset: -15
    });
}
/* ------------------------------------------------------------------- */
/* 05.Owl Carousel
/* ------------------------------------------------------------------- */
function anaula_owlCarousel(){

    "use-strict";

    // Variables
    let teamCarousel = $( '#teamCarousel' );
    let testimonialCarousel = $( '#testimonialCarousel' );
    let blogCarousel = $( '#blogCarousel' );
    let gallerySlider = $( '.gallery-slider' );
    let heroCarousel = $( '#heroCarousel' );

    // Team Carousel
    teamCarousel.owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            768: {
                items: 2
            },
            1000:{
                items:3
            }
        }
    });

    // Clients Carousel
    testimonialCarousel.owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            768: {
                items: 2
            },
            1000:{
                items:3
            }
        }
    });

    // Blog Carousel
    blogCarousel.owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            768: {
                items: 2
            },
            1000:{
                items:3
            }
        }
    });

    //Gallery Slider
    gallerySlider.owlCarousel({
        loop:false,
        margin:30,
        nav:true,
        dots: false,
        items: 1,
        navText: [ "<span class='fa fa-arrow-left'></span>","<span class='fa fa-arrow-right'></span>" ]
    });

    // Hero Slider
    heroCarousel.owlCarousel({
        loop:true,
        margin:0,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        nav: true,
        navText: ["<span class='fa fa-arrow-left'></span>","<span class='fa fa-arrow-right'></span>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
}
/* ------------------------------------------------------------------- */
/* 06.Counter Up
/* ------------------------------------------------------------------- */
function anaula_counterUp(){
    "use-strict";

    // Variables
    let counterItem = $( '.counter' );

    counterItem.counterUp({
        delay: 20,
        time: 1500
    });
}
/* ------------------------------------------------------------------- */
/* 07.Magnific Popup
/* ------------------------------------------------------------------- */
function anaula_magnificPopup(){
    "use-strict";

    // Variables
    let youtubePopup = $( '.popup-video-btn' );

    youtubePopup.magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
}
/* ------------------------------------------------------------------- */
/* 08.Our Works
/* ------------------------------------------------------------------- */
function anaula_Gallery() {
    "use-strict";

    // Variables 
    let galleryGridWrapper     = $( '#galleryGrid' );
    let galleryMasonaryWrapper     = $( '#galleryMasonary' );
    let portfolioFilterBtn = $( '.gallery-filter a' );

    // Portfolio Grid Gallery
    galleryGridWrapper.imagesLoaded( function() {
        let grid = galleryGridWrapper.isotope({
            itemSelector: '.gallery-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.gallery-item',
            }
        });

        // filter items on button click
        portfolioFilterBtn.on( 'click', function() {
            let filterValue = $(this).attr( 'data-gallery-filter' );
            grid.isotope({
                filter: filterValue
            });
        });
    });

    // Portfolio Masonary Gallery
    galleryMasonaryWrapper.imagesLoaded( function() {
        let grid = galleryMasonaryWrapper.isotope({
            itemSelector: '.gallery-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.gallery-item',
            }
        });

        // filter items on button click
        portfolioFilterBtn.on( 'click', function() {
            let filterValue = $(this).attr( 'data-gallery-filter' );
            grid.isotope({
                filter: filterValue
            });
        });
    });

    // filter items on button click
    portfolioFilterBtn.on( 'click', function() {
        portfolioFilterBtn.removeClass( 'current' );
        $(this).addClass( 'current' );
        event.preventDefault();
    });
}
/* ------------------------------------------------------------------- */
/* 09.Background Image
/* ------------------------------------------------------------------- */
function anaula_Bg_Img_Path(){
    "use-scrict";

    // Variables
    let dataBgItem         = $( '*[data-bg-image-path]' );

    dataBgItem.each( function() {
        let imgPath        = $( this ).attr( 'data-bg-image-path' );
        $( this).css( 'background-image', 'url(' + imgPath + ')' );
    });
}
/* ------------------------------------------------------------------- */
/* 10.Contact Form
/* ------------------------------------------------------------------- */
function anaula_Contact_Form(){

    "use-scrict";
    let contactForm               = $( '#contactForm' );
    let formControl               = contactForm.find( '.contact-form-control' );

    // Added AutoComplete Attribute Turned Off
    formControl.attr("autocomplete","off");

    //  Captcha Variables    
    let contactFormCaptchaVal     = $("#contactFormCaptchaVal");
    let contactFormCaptchaSpan    = $('#contactFormCaptchaSpan');
    let contactFormCaptchaInput   = $('#contactFormCaptchaInput');

    // Generates the Random number function 
    function randomNumber(){
         
        let a = Math.ceil(Math.random() * 9) + '',
            b = Math.ceil(Math.random() * 9) + '',
            c = Math.ceil(Math.random() * 9) + '',
            d = Math.ceil(Math.random() * 9) + '',
            e = Math.ceil(Math.random() * 9) + '',
            code = a + b + c + d + e;
   
        contactFormCaptchaVal.val(code);
        contactFormCaptchaSpan.html(code);
    }

    // Called random number function
    randomNumber();

    // Validate the Entered input aganist the generated security code function   
    function validateCaptcha() {
        let str1 = contactFormCaptchaVal.val();
        let str2 = contactFormCaptchaInput.val();
        if (str1 == str2) {
            return true;
        } else {
            return false;
        }
    }
    // Contact Form Submit
    contactForm.on("submit", function(event) {
        // Form Variables
        let $this = $(this);
        let name = $( 'input[name*="contact_name"]' ).val().trim();
        let email = $( 'input[name*="contact_email"]' ).val().trim();
        let phone = $( 'input[name*="contact_phone"]' ).val().trim();
        let subject = $( 'select[name*="contact_subject"]' ).val().trim();
        let message = $( 'textarea[name*="contact_message"]' ).val().trim();
        let validateEmail = $( 'input[name*="contact_email"]' ).EmailValidate();
        let validatePhone = $( 'input[name*="contact_phone"]' ).PhoneValidate();

        if (name =='' || email =='' || phone == '' || message == '' || contactFormCaptchaInput == '') {
            if($('.contact-alerts .empty-form').css("display") == "none"){
                $('.contact-alerts .empty-form').stop().slideDown().delay(5000).slideUp();
            }else {
                return false;
            }
        } else if (subject == '') {
            if($('.contact-alerts .empty-select').css("display") == "none"){
                $('.contact-alerts .empty-select').stop().slideDown().delay(5000).slideUp();
            }else {
                return false;
            }
        } else if (!validateEmail === true) {
            if($('.contact-alerts .email-invalid').css("display") == "none"){
                $('.contact-alerts .email-invalid').stop().slideDown().delay(5000).slideUp();
            }else {
                return false;
            }
        } else if (!validatePhone === true) {
            if($('.contact-alerts .phone-invalid').css("display") == "none"){
                $('.contact-alerts .phone-invalid').stop().slideDown().delay(5000).slideUp();
            }else {
                return false;
            }
        } else if (validateCaptcha() != true){
            if($('.contact-alerts .security-alert').css("display") == "none"){
                $('.contact-alerts .security-alert').stop().slideDown().delay(5000).slideUp();
            }else {
                return false;
            }
        } else {
            $this.find(':submit').append('<span class="fas fa-spinner fa-pulse ml-3"></span>');
            $this.find(':submit').attr('disabled','true');
            $.ajax({
                url: 'phpmailer/send_mail.php',
                data: {
                    contact_name: name,
                    contact_email: email,
                    contact_phone: phone,
                    contact_subject: subject,
                    contact_message: message,
                },
                type: 'POST',
                success: function(response) {
                    $('#contactForm')[0].reset();
                    if (response == true) {
                        $this.find(':submit').removeAttr('disabled');
                        $this.find(':submit').find("span").fadeOut();
                        $("#contactFormSuccessModal").modal("show");
                        // Called random number function
                        randomNumber();
                    } else {
                        $this.find(':submit').removeAttr('disabled');
                        $this.find(':submit').find("span").fadeOut();
                        $("#contactFormDangerModal").modal("show");
                        $("#contactFormDangerModal #error_message").html(response);
                        // Called random number function
                        randomNumber();
                    }
                }
            });
        }
        event.preventDefault();
    });
}
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});