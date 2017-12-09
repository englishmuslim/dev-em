//Slider Homepage
$(document).ready(function () {
    $('#owl-slider-homepage').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
});

// Testimoni Homepage
$(document).ready(function () {
    $('#slider-testimony').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 2,
                nav: false
            }
        }
    })
});