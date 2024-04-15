/* =======================================================================
Sticky Nav
========================================================================== */

window.onscroll = function () {
    myFunction();
};
var navbar = document.getElementById("main-nav");
function myFunction() {
    if (window.pageYOffset >= 100) {
        navbar.classList.add("nav-colored");
    } else {
        navbar.classList.remove("nav-colored");
    }
}

(function () {
    "use strict";
    window.addEventListener(
        "load",
        function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
                forms,
                function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                }
            );
        },
        false
    );
})();

AOS.init();

$("#main-banner-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
$("#meals-of-day-carsoule").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        },
    },
});

$("#include-meal-carsoule").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 4,
        },
    },
});

$("#competitive-carsoule").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

// Initialize Isotope for filtering
var $portfolio = $(".portfolio").isotope({
    itemSelector: ".item",
    layoutMode: "fitRows",
});

// Filtering function
$(".filter-button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $portfolio.isotope({ filter: filterValue });
});

// Change is-checked class on buttons
$(".filter-button-group").each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on("click", "button", function () {
        $buttonGroup.find(".is-checked").removeClass("is-checked");
        $(this).addClass("is-checked");
    });
});

// Website Popup

// Function to open the popup after 2 seconds
function openPopup() {
    setTimeout(function () {
        document.getElementById("popup-container").style.display = "flex";
    }, 1000); // 2000 milliseconds = 2 seconds
}

// Function to close the popup
function closePopup() {
    document.getElementById("popup-container").style.display = "none";
}

// Open the popup when the page is loaded
window.onload = openPopup;
