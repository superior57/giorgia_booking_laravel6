/*
Template: Sofbox - Responsive Bootstrap 4 Admin Dashboard Template
Author: iqonicthemes.in
Design and Developed by: iqonicthemes.in
NOTE: This file contains the styling for responsive Template.
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

:: Tooltip
:: Sidebar Widget
:: Magnific Popup
:: Ripple Effect
:: Accordion
:: Ticket Booking
:: Owl Carousel
:: Search input
:: Scrollbar
:: Counter
:: slick
:: Progress Bar
:: Page Loader
:: Page Menu
:: Wow Animation
:: Mail Inbox

------------------------------------------------
Index Of Script
----------------------------------------------*/

(function (jQuery) {



    "use strict";

    jQuery(document).ready(function () {

        /*---------------------------------------------------------------------
        Tooltip
        -----------------------------------------------------------------------*/
        jQuery('[data-toggle="popover"]').popover();
        jQuery('[data-toggle="tooltip"]').tooltip();

        /*---------------------------------------------------------------------
        Sidebar Widget
        -----------------------------------------------------------------------*/
        function checkClass(ele, type, className) {
            switch (type) {
                case 'addClass':
                    if (!ele.hasClass(className)) {
                        ele.addClass(className);
                    }
                    break;
                case 'removeClass':
                    if (ele.hasClass(className)) {
                        ele.removeClass(className);
                    }
                    break;
                case 'toggleClass':
                    ele.toggleClass(className);
                    break;
            }
        }
        jQuery('.iq-sidebar-menu .active').each(function (ele, index) {
            jQuery(this).addClass('active');
            jQuery(this).find('.iq-submenu').addClass('show');
        })


        /*---------------------------------------------------------------------
        Magnific Popup
        -----------------------------------------------------------------------*/
        jQuery('.popup-gallery').magnificPopup({
            delegate: 'a.popup-img',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });
        jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });


        /*---------------------------------------------------------------------
        Ripple Effect
        -----------------------------------------------------------------------*/
        jQuery(document).on('click', ".iq-waves-effect", function (e) {
            // Remove any old one
            jQuery('.ripple').remove();
            // Setup
            let posX = jQuery(this).offset().left,
                posY = jQuery(this).offset().top,
                buttonWidth = jQuery(this).width(),
                buttonHeight = jQuery(this).height();

            // Add the element
            jQuery(this).prepend("<span class='ripple'></span>");


            // Make it round!
            if (buttonWidth >= buttonHeight) {
                buttonHeight = buttonWidth;
            } else {
                buttonWidth = buttonHeight;
            }

            // Get the center of the element
            let x = e.pageX - posX - buttonWidth / 2;
            let y = e.pageY - posY - buttonHeight / 2;


            // Add the ripples CSS and start the animation
            jQuery(".ripple").css({
                width: buttonWidth,
                height: buttonHeight,
                top: y + 'px',
                left: x + 'px'
            }).addClass("rippleEffect");
        });

        /*---------------------------------------------------------------------
        FullScreen
        -----------------------------------------------------------------------*/
        jQuery(document).on('click', '.iq-full-screen', function () {
            let elem = jQuery(this);
            if (!document.fullscreenElement &&
                !document.mozFullScreenElement && // Mozilla
                !document.webkitFullscreenElement && // Webkit-Browser
                !document.msFullscreenElement) { // MS IE ab version 11

                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                } else if (document.documentElement.msRequestFullscreen) {
                    document.documentElement.msRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
            elem.find('i').toggleClass('ri-fullscreen-line').toggleClass('ri-fullscreen-exit-line');
        });



        jQuery('.iq-accordion .iq-accordion-block .accordion-details').hide();
        jQuery('.iq-accordion .iq-accordion-block:first').addClass('accordion-active').children().slideDown('slow');
        jQuery(document).on("click", '.iq-accordion .iq-accordion-block', function () {
            if (jQuery(this).children('div.accordion-details ').is(':hidden')) {
                jQuery('.iq-accordion .iq-accordion-block').removeClass('accordion-active').children('div.accordion-details ').slideUp('slow');
                jQuery(this).toggleClass('accordion-active').children('div.accordion-details ').slideDown('slow');
            }
        });
    });


    jQuery(window).on('load', function (e) {

        /*---------------------------------------------------------------------
        Page Loader
        -----------------------------------------------------------------------*/
        jQuery("#load").fadeOut();
        jQuery("#loading").delay().fadeOut("");

        /*---------------------------------------------------------------------
       Ticket Booking
       -----------------------------------------------------------------------*/
        jQuery(document).on('click', '.iq-booking-screen .iq-booking-no .list-inline-item .iq-seat ', function (e) {
            e.preventDefault();
            let sheet = 0;
            if (!jQuery(this).hasClass('bg-secondary')) {
                jQuery(this).toggleClass('active');
                sheet = jQuery('.iq-booking-screen').find('.iq-seat.active').length;
                jQuery('.iq-film-block').find('span').text(sheet);
            }
        });
        jQuery(document).on('click', '.ri-close-circle-line', function () {
            jQuery(this).parent().parent().parent().parent().parent().removeClass('film-side');
        });

        jQuery(document).on('click', '.iq-film-block', function () {
            if (parseInt(jQuery(this).find('span').text()) > 0) {
                jQuery('.iq-sidebar-right-menu').addClass('film-side');
            }
        });


        /*---------------------------------------------------------------------
       Owl Carousel
       -----------------------------------------------------------------------*/
        jQuery('.owl-carousel').each(function () {
            let jQuerycarousel = jQuery(this);
            jQuerycarousel.owlCarousel({
                items: jQuerycarousel.data("items"),
                loop: jQuerycarousel.data("loop"),
                margin: jQuerycarousel.data("margin"),
                nav: jQuerycarousel.data("nav"),
                dots: jQuerycarousel.data("dots"),
                autoplay: jQuerycarousel.data("autoplay"),
                autoplayTimeout: jQuerycarousel.data("autoplay-timeout"),
                navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
                responsiveClass: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: jQuerycarousel.data("items-mobile-sm"),
                        nav: false,
                        dots: true
                    },
                    // breakpoint from 480 up
                    480: {
                        items: jQuerycarousel.data("items-mobile"),
                        nav: false,
                        dots: true
                    },
                    // breakpoint from 786 up
                    786: {
                        items: jQuerycarousel.data("items-tab")
                    },
                    // breakpoint from 1023 up
                    1023: {
                        items: jQuerycarousel.data("items-laptop")
                    },
                    1199: {
                        items: jQuerycarousel.data("items")
                    }
                }
            });
        });

        /*---------------------------------------------------------------------
        Select input
        -----------------------------------------------------------------------*/
        jQuery('.select2jsMultiSelect').select2({
            tags: true
        });

        /*---------------------------------------------------------------------
        Search input
        -----------------------------------------------------------------------*/
        jQuery(document).on('click', function (e) {
            let myTargetElement = e.target;
            let selector, mainElement;
            if (jQuery(myTargetElement).hasClass('search-toggle') || jQuery(myTargetElement).parent().hasClass('search-toggle') || jQuery(myTargetElement).parent().parent().hasClass('search-toggle')) {
                if (jQuery(myTargetElement).hasClass('search-toggle')) {
                    selector = jQuery(myTargetElement).parent();
                    mainElement = jQuery(myTargetElement);
                } else if (jQuery(myTargetElement).parent().hasClass('search-toggle')) {
                    selector = jQuery(myTargetElement).parent().parent();
                    mainElement = jQuery(myTargetElement).parent();
                } else if (jQuery(myTargetElement).parent().parent().hasClass('search-toggle')) {
                    selector = jQuery(myTargetElement).parent().parent().parent();
                    mainElement = jQuery(myTargetElement).parent().parent();
                }
                if (!mainElement.hasClass('active') && jQuery(".navbar-list li").find('.active')) {
                    jQuery('.navbar-list li').removeClass('iq-show');
                    jQuery('.navbar-list li .search-toggle').removeClass('active');
                }

                selector.toggleClass('iq-show');
                mainElement.toggleClass('active');

                e.preventDefault();
            } else if (jQuery(myTargetElement).is('.search-input')) { } else {
                jQuery('.navbar-list li').removeClass('iq-show');
                jQuery('.navbar-list li .search-toggle').removeClass('active');
            }
        });

        /*---------------------------------------------------------------------
        Scrollbar
        -----------------------------------------------------------------------*/
        let Scrollbar = window.Scrollbar;
        if (jQuery('#sidebar-scrollbar').length) {
            Scrollbar.init(document.querySelector('#sidebar-scrollbar'), options);
        }
        let Scrollbar1 = window.Scrollbar;
        if (jQuery('#right-sidebar-scrollbar').length) {
            Scrollbar1.init(document.querySelector('#right-sidebar-scrollbar'), options);
        }



        /*---------------------------------------------------------------------
        Counter
        -----------------------------------------------------------------------*/
        jQuery('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        /*---------------------------------------------------------------------
        slick
        -----------------------------------------------------------------------*/
        jQuery('.slick-slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 9,
            slidesToScroll: 1,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30',
                    slidesToShow: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15',
                    slidesToShow: 1
                }
            }],
            nextArrow: '<a href="#" class="ri-arrow-left-s-line left"></a>',
            prevArrow: '<a href="#" class="ri-arrow-right-s-line right"></a>',
        });

        jQuery('#product-additional-slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30',
                    slidesToShow: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15',
                    slidesToShow: 1
                }
            }],
            nextArrow: '<a href="#" class="ri-arrow-left-s-line left"></a>',
            prevArrow: '<a href="#" class="ri-arrow-right-s-line right"></a>',
        });

        jQuery('#related-slider').slick({
            centerMode: false,
            centerPadding: '60px',
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30',
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15',
                    slidesToShow: 1
                }
            }],
            nextArrow: '<a href="#" class="ri-arrow-left-s-line left"></a>',
            prevArrow: '<a href="#" class="ri-arrow-right-s-line right"></a>',
        });
        jQuery('#card-slider').slick({
            centerMode: false,
            centerPadding: '60px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30',
                    slidesToShow: 2
                }
            }, {
                breakpoint: 650,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15',
                    slidesToShow: 1
                }
            }],
            // nextArrow: '<a href="#" class="ri-arrow-left-s-line left"></a>',
            // prevArrow: '<a href="#" class="ri-arrow-right-s-line right"></a>',
        });


        /*---------------------------------------------------------------------
        Progress Bar
        -----------------------------------------------------------------------*/
        jQuery('.iq-progress-bar > span').each(function () {
            let progressBar = jQuery(this);
            let width = jQuery(this).data('percent');
            progressBar.css({
                'transition': 'width 2s'
            });

            setTimeout(function () {
                progressBar.appear(function () {
                    progressBar.css('width', width + '%');
                });
            }, 100);
        });


        /*---------------------------------------------------------------------
        Page Menu
        -----------------------------------------------------------------------*/
        jQuery(document).on('click', '.wrapper-menu', function () {
            jQuery(this).toggleClass('open');
        });

        jQuery(document).on('click', ".wrapper-menu", function () {
            jQuery("body").toggleClass("sidebar-main");
        });

        /*---------------------------------------------------------------------
        Wow Animation
        -----------------------------------------------------------------------*/
        let wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();


        /*---------------------------------------------------------------------
        Mailbox
        -----------------------------------------------------------------------*/
        jQuery(document).ready(function () {
            jQuery('ul.iq-email-sender-list li').click(function () {
                jQuery(this).next().addClass('show');
            });

            jQuery('.email-app-details li h4').click(function () {
                jQuery('.email-app-details').removeClass('show');
            });
        });

        /*---------------------------------------------------------------------
        chatuser
        -----------------------------------------------------------------------*/
        jQuery(document).ready(function () {
            jQuery('.chat-head .chat-user-profile').click(function () {
                jQuery(this).parent().next().toggleClass('show');
            });
            jQuery('.user-profile .close-popup').click(function () {
                jQuery(this).parent().parent().removeClass('show');
            });
        });

        /*---------------------------------------------------------------------
        chatuser main
        -----------------------------------------------------------------------*/
        jQuery(document).ready(function () {
            jQuery('.chat-search .chat-profile').click(function () {
                jQuery(this).parent().next().toggleClass('show');
            });
            jQuery('.user-profile .close-popup').click(function () {
                jQuery(this).parent().parent().removeClass('show');
            });
        });

        /*---------------------------------------------------------------------
        Chat start
        -----------------------------------------------------------------------*/
        jQuery(document).ready(function () {
            jQuery('#chat-start').click(function () {
                jQuery('.chat-data-left').toggleClass('show');
            });
            jQuery('.close-btn-res').click(function () {
                jQuery('.chat-data-left').removeClass('show');
            });
            jQuery('.iq-chat-ui li').click(function () {
                jQuery('.chat-data-left').removeClass('show');
            });
            jQuery('.sidebar-toggle').click(function () {
                jQuery('.chat-data-left').addClass('show');
            });
        });

        /*---------------------------------------------------------------------
        todo Page 
        -----------------------------------------------------------------------*/
        jQuery(document).ready(function () {
            jQuery('.todo-task-list > li > a').click(function () {
                jQuery('.todo-task-list li').removeClass('active');
                jQuery('.todo-task-list .sub-task').removeClass('show');
                jQuery(this).parent().toggleClass('active');
                jQuery(this).next().toggleClass('show');
            });
            jQuery('.todo-task-list > li li > a').click(function () {
                jQuery('.todo-task-list li li').removeClass('active');
                jQuery(this).parent().toggleClass('active');
            });
        });
        /*---------------------------------------------------------------------
        Form Validation
        -----------------------------------------------------------------------*/

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        /*---------------------------------------------------------------------
        Sidebar Widget
        -----------------------------------------------------------------------*/
        jQuery(document).ready(function () {
            jQuery('.todo-task-lists li').click(function () {
                if ($(this).find('input:checkbox[name=todo-check]').is(":checked")) {

                    $(this).find('input:checkbox[name=todo-check]').attr("checked", false);
                    jQuery(this).removeClass('active-task');
                }
                else {
                    $(this).find('input:checkbox[name=todo-check]').attr("checked", true);
                    jQuery(this).addClass('active-task');
                }
                // jQuery(this).addClass('active-task');
            });
        });

        /*---------------------------------------------------------------------
            checkout
         -----------------------------------------------------------------------*/

        jQuery(document).ready(function () {
            jQuery('#place-order').click(function () {
                jQuery('#cart').removeClass('show');
                jQuery('#address').addClass('show');
                jQuery('#step1').removeClass('active');
                jQuery('#step1').addClass('done');
                jQuery('#step2').addClass('active');
            });
            jQuery('#deliver-address').click(function () {
                jQuery('#address').removeClass('show');
                jQuery('#payment').addClass('show');
                jQuery('#step2').removeClass('active');
                jQuery('#step2').addClass('done');
                jQuery('#step3').addClass('active');
            });
        });

        /*---------------------------------------------------------------------
           Scroll up menu
        -----------------------------------------------------------------------*/
        var position = $(window).scrollTop();
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            //  console.log(scroll);

            if (scroll < position) {
                $('.tab-menu-horizontal').addClass('menu-up');
                $('.tab-menu-horizontal').removeClass('menu-down');
            }
            else {
                $('.tab-menu-horizontal').addClass('menu-down');
                $('.tab-menu-horizontal').removeClass('menu-up');
            }
            if (scroll == 0) {
                $('.tab-menu-horizontal').removeClass('menu-up');
                $('.tab-menu-horizontal').removeClass('menu-down');
            }
            position = scroll;
        });



    });

})(jQuery);



function saveHomeHero(button) {
    id=button.id;
    num=parseInt(id.slice(15));

    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#hero_upload_'+String(num)).prop('files')[0];
    formData.append('file', file);
    formData.append('num', num);
    formData.append('_token', token);

    $.ajax({
        url: "/home_hero_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$('#home_hero_add').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#home_add_hero_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/home_hero_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function saveInterior(button) {
    id=button.id;
    num=parseInt(id.slice(14));

    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#home_interior_upload_'+String(num)).prop('files')[0];
    formData.append('file', file);
    formData.append('num', num);
    formData.append('_token', token);

    $.ajax({
        url: "/home_interior_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$('#addInterior').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#home_add_interior_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/home_interior_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function saveExterior(button) {
    id=button.id;
    num=parseInt(id.slice(14));

    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#home_exterior_upload_'+String(num)).prop('files')[0];
    formData.append('file', file);
    formData.append('num', num);
    formData.append('_token', token);

    $.ajax({
        url: "/home_exterior_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}




$('#addExterior').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#home_add_exterior_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/home_exterior_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});





function readURL(elem) {
    if (elem.files && elem.files[0]) {
        var reader = new FileReader();
        id = elem.id;
        
        parent=$('#'+id).parent('span');
        parent_id=parent.attr('id');
        sibling=$('#'+parent_id).siblings('div');
        sibling_id=sibling.attr('id');
        child=$('#'+sibling_id).children('img');

        reader.onload = function (e) {
            child.attr('src', e.target.result);
        };

        reader.readAsDataURL(elem.files[0]);
    }
}


$('#home_introduction_save').click(function () {
    var introduction = $('#admin_home_introduction').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData= new FormData();
    formData.append('introduction', introduction);
    formData.append('_token', token);

    $.ajax({
        url: "/home_introduction_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});


$('#home_food_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#food_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/home_food_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#home_toy_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#toy_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/home_toy_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#home_location_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#location_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/home_location_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#vessel_hero_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#vessel_hero_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/vessel_hero_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});


$('#vessel_introduction_save').click(function () {
    var introduction = $('#admin_vessel_introduction').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData= new FormData();
    formData.append('introduction', introduction);
    formData.append('_token', token);

    $.ajax({
        url: "/vessel_introduction_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#vessel_interiortext_save').click(function () {
    var introduction = $('#admin_vessel_interiortext').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData= new FormData();
    formData.append('introduction', introduction);
    formData.append('_token', token);

    $.ajax({
        url: "/vessel_interiortext_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#vessel_exteriortext_save').click(function () {
    var introduction = $('#admin_vessel_exteriortext').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData= new FormData();
    formData.append('introduction', introduction);
    formData.append('_token', token);

    $.ajax({
        url: "/vessel_exteriortext_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#specification_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#flag_upload').prop('files')[0];
    var length = $('#length').val();
    var beam = $('#beam').val();
    var draft = $('#draft').val();
    var built = $('#built').val();
    var builder = $('#builder').val();
    var engines = $('#engines').val();
    var hull = $('#hull').val();
    var hull_type = $('#hull_type').val();
    var cabins = $('#cabins').val();
    var guests = $('#guests').val();
    var crew = $('#crew').val();
    var speed = $('#speed').val();
    var range = $('#range').val();
  
    formData.append('file', file);
    formData.append('length', length);
    formData.append('beam', beam);
    formData.append('draft', draft);
    formData.append('built', built);
    formData.append('builder', builder);
    formData.append('engines', engines);
    formData.append('hull', hull);
    formData.append('hull_type', hull_type);
    formData.append('cabins', cabins);
    formData.append('guests', guests);
    formData.append('crew', crew);
    formData.append('speed', speed);
    formData.append('range', range);
    formData.append('_token', token);
    $.ajax({
        url: "/specification_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#deck1_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#deck1_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/deck1_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});


$('#deck2_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#deck2_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/deck2_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#deck3_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#deck3_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/deck3_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#deck4_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#deck4_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/deck4_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#experience_hero_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#experience_hero_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/experience_hero_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function saveFood(button) {
    id=button.id;
    num=parseInt(id.slice(10));

    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#experience_food_upload_'+String(num)).prop('files')[0];
    formData.append('file', file);
    formData.append('num', num);
    formData.append('_token', token);

    $.ajax({
        url: "/experience_food_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$('#addFood').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#add_food_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/experience_food_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#food_description_save').click(function () {
    var food_description = $('#admin_food_description').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData= new FormData();
    formData.append('food_description', food_description);
    formData.append('_token', token);

    $.ajax({
        url: "/food_description_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function saveToy(button) {
    id=button.id;
    num=parseInt(id.slice(9));

    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#experience_toy_upload_'+String(num)).prop('files')[0];
    formData.append('file', file);
    formData.append('num', num);
    formData.append('_token', token);

    $.ajax({
        url: "/experience_toy_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$('#addToy').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#add_toy_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/experience_toy_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#toy_description_save').click(function () {
    var toy_description = $('#admin_toy_description').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData= new FormData();
    formData.append('toy_description', toy_description);
    formData.append('_token', token);

    $.ajax({
        url: "/toy_description_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function saveDestination(button) {
    id=button.id;
    num=parseInt(id.slice(17));
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#destination_upload_'+String(num)).prop('files')[0];
    formData.append('file', file);
    formData.append('num', num);
    formData.append('_token', token);

    $.ajax({
        url: "/destination_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$('#addDestination').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#add_destination_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/destination_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#crew_hero_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#crew_hero_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/crew_hero_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});


function saveCrew(button) {
    id=button.id;
    num=parseInt(id.slice(10));
    var color = $('#crew_color_'+String(num)).val();
    var file = $('#crew_upload_'+String(num)).prop('files')[0];
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var name = $('#crew_name_'+String(num)).val();
    var position = $('#crew_position_'+String(num)).val();
    var text = $('#crew_text_'+String(num)).val();
    var filename = $('#imagename_'+String(num)).text();
    
    formData.append('file', file);
    formData.append('_token', token);
    formData.append('name', name);
    formData.append('position', position);
    formData.append('text', text);
    formData.append('num',num);
    formData.append('filename',filename);
    formData.append('color', color);

    $.ajax({
        url: "/crew_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$('#crew_add').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#crew_upload').prop('files')[0];
    var name = $('#crew_name').val();
    var position = $('#crew_position').val();
    var text = $('#crew_text').val();
    var color = $('#crew_color').val();
    formData.append('file', file);
    formData.append('_token', token);
    formData.append('name', name);
    formData.append('position', position);
    formData.append('text', text);
    formData.append('color', color);

    $.ajax({
        url: "/crew_add",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
            if(response=='success')
             {
                window.location.reload();
             }
             else{
                alert("Internal Server Error");
             }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#enquire_hero_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var file = $('#enquire_hero_upload').prop('files')[0];
    formData.append('file', file);
    formData.append('_token', token);

    $.ajax({
        url: "/enquire_hero_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#contact_save').click(function () {
    var formData= new FormData();
    var token = $('meta[name="csrf-token"]').attr('content');
    var address = $('#admin_address').val();
    var phone = $('#admin_phone').val();
    var email = $('#admin_email').val();
    var facebook = $('#admin_facebook').val();
    var twitter = $('#admin_twitter').val();
    var instagram = $('#admin_instagram').val();

    formData.append('address', address);
    formData.append('_token', token);
    formData.append('phone', phone);
    formData.append('email', email);
    formData.append('facebook', facebook);
    formData.append('twitter', twitter);
    formData.append('instagram', instagram);

    $.ajax({
        url: "/contact_save",
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

