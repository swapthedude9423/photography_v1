(function ($) {
    'use strict';

    var alime_window = $(window);

    // ****************************
    // :: 1.0 Preloader Active Code
    // ****************************

    alime_window.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });
    });

    // ****************************
    // :: 2.0 ClassyNav Active Code
    // ****************************

    if ($.fn.classyNav) {
        $('#alimeNav').classyNav();
    }

    // *********************************
    // :: 3.0 Welcome Slides Active Code
    // *********************************
    
    if ($.fn.owlCarousel) {
        var welcomeSlider = $('.welcome-slides');
        welcomeSlider.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: true,
            navText: [('<i class="ti-arrow-left"></i>'), ('<i class="ti-arrow-right"></i>')],
            mouseDrag: false, // Disable mouse drag
            touchDrag: false, // Disable touch drag
            pullDrag: false, // Disable pull drag
            freeDrag: false,
            dots: true
        });
        var dots = $('.owl-dots').css('position', 'absolute').css('bottom', '5px');
        dots.css('left', 'calc(50% - ' + dots.width()/2+'px)');
        welcomeSlider.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        welcomeSlider.on('translated.owl.carousel', function () {
            var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });
    }

function initPannellumViewer(slide) {
    var panoramaId = slide.find('[id^="panorama"]').attr('id');
    var panoramaFile = slide.find('[id^="panorama"]').data('panorama');

    if (panoramaId && panoramaFile) {
        pannellum.viewer(panoramaId, {
            "type": "equirectangular",
            "panorama": panoramaFile,
            "autoLoad": true,
            "mouseZoom": false,
            "showZoomCtrl": false,
            "showFullscreenCtrl": false,
            "border": false,
            "draggable": true, // Enable dragging
            "autoRotate": 0, // Disable auto-rotation
            "northOffset": 0,
            "backgroundColor": [0, 0, 0],
            "compass": false
        });
    }
}

    
    // ************************************
    // :: 4.0 Instragram Slides Active Code
    // ************************************

    if ($.fn.owlCarousel) {
        var instagramFeedSlider = $('.instragram-feed-area');
        instagramFeedSlider.owlCarousel({
            items: 6,
            loop: true,
            autoplay: true,
            dots: true,
            smartSpeed: 1000,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        })
    }

    // *********************************
    // :: 5.0 Masonary Gallery Active Code
    // *********************************

    if ($.fn.imagesLoaded) {
        $('.alime-portfolio').imagesLoaded(function () {
            // filter items on button click
            $('.portfolio-menu').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.alime-portfolio').isotope({
                itemSelector: '.single_gallery_item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.single_gallery_item'
                }
            });
        });
    }

    // ***********************************
    // :: 6.0 Portfolio Button Active Code
    // ***********************************
    
    $('.portfolio-menu button.btn').on('click', function () {
        $('.portfolio-menu button.btn').removeClass('active');
        $(this).addClass('active');
    })

    // ********************************
    // :: 7.0 Search Button Active Code
    // ********************************
    $('.search-btn').on('click', function () {
        $('.search-form').toggleClass('search-form-active');
    })

    // ************************
    // :: 8.0 Stick Active Code
    // ************************

    alime_window.on('scroll', function () {
        if (alime_window.scrollTop() > 0) {
            $('.main-header-area').addClass('sticky');
        } else {
            $('.main-header-area').removeClass('sticky');
        }
    });

    // *********************************
    // :: 9.0 Magnific Popup Active Code
    // *********************************
    if ($.fn.magnificPopup) {
        $('.video-play-btn').magnificPopup({
            type: 'iframe'
        });
        $('.portfolio-img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                preload: [0, 2],
                navigateByImgClick: true,
                tPrev: 'Previous',
                tNext: 'Next'
            }
        });
    }

    // **************************
    // :: 10.0 Tooltip Active Code
    // **************************
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // ***********************
    // :: 11.0 WOW Active Code
    // ***********************
    if (alime_window.width() > 767) {
        new WOW().init();
    }

    // ****************************
    // :: 12.0 Jarallax Active Code
    // ****************************
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.5
        });
    }

    // ****************************
    // :: 13.0 Scrollup Active Code
    // ****************************
    if ($.fn.scrollUp) {
        alime_window.scrollUp({
            scrollSpeed: 1000,
            scrollText: '<i class="arrow_carrot-up"</i>'
        });
    }

    // *********************************
    // :: 14.0 Prevent Default 'a' Click
    // *********************************
    $('a[href="#"]').on('click', function ($) {
        $.preventDefault();
    });

    // ****************************
    // :: 15.0 Pannellum Viewer Code
    // ****************************

    var config = {
        autoLoad: true,
        compass: false,
        autoRotate: true,
        default: {
            firstScene: "office",
            sceneFadeDuration: 1000
        },
        scenes: {
            office: {
                hfov: 180,
                pitch: 0,
                yaw: 0,
                type: "equirectangular",
                panorama: "https://res.cloudinary.com/aptus/image/upload/v1550825644/trapboveneinde_dvoxir.jpg",
                hotSpots: [{
                    pitch: 4,
                    yaw: 21.8,
                    type: "scene",
                    sceneId: "meetingroom"
                }]
            },
            meetingroom: {
                hfov: 180,
                pitch: 0,
                yaw: 90,
                type: "equirectangular",
                panorama: "https://res.cloudinary.com/aptus/image/upload/v1550826131/vergaderzaal_sq7baz.jpg",
                hotSpots: [{
                    pitch: 8,
                    yaw: -58,
                    type: "scene",
                    sceneId: "office"
                }]
            }
        }
    };

    pannellum.viewer('panorama', config);

})(jQuery);