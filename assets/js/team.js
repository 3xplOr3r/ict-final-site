$("#testimonial-slider").owlCarousel({
    pagination: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    loop: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1100: {
            items: 3,
            nav: false
        }
    }
});