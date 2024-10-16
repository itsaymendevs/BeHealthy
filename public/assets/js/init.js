// :: init packages
$(document).ready(function () {
    // 1: instagram slider
    $(".insta-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            },
        },
    });

    // Sample Menu Salider
    $("#sample-menu-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
            },
            600: {
                items: 2,
                autoplay: false,
            },
            1000: {
                items: 4,
                autoplay: false,
            },
        },
    });

    // ---------------------------------------------------------------

    // 2: mealPlan Slider
    $("#meal-plan-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        dots: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // ---------------------------------------------------------------

    // 2: menuMeals Slider
    $("#menu-meals-slider").owlCarousel({
        nav: false,
        dots: false,
        margin: 20,
        animateOut: "slideOutDown",
        animateIn: "flipInX",
        stagePadding: 10,
        smartSpeed: 450,
        autoplay: true,
        loop: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        },
    });
}); // end documentReady
