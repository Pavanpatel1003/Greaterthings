$(document).ready(function () {
    let slider = $('.services-slider').slick({
        dots: false,
        infinite: false,
        speed: 600, // Increased speed for smoother effect
        autoplay: false,
        slidesToShow: 4.5,
        slidesToScroll: 1,
        arrows: false,
        touchMove: false,
        swipe: false,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 2.5, slidesToScroll: 1 } },
            { breakpoint: 768, settings: { slidesToShow: 1.5, slidesToScroll: 1 } }
        ]
    });

    // Custom Navigation Buttons
    $('#prev-btn').click(function () {
        slider.slick('slickPrev');
    });

    $('#next-btn').click(function () {
        slider.slick('slickNext');
    });

    // Smooth Mouse Wheel Scrolling
    let isScrolling = false;

    $('.services-slider').on('wheel', function (e) {
        e.preventDefault(); // Prevent default scroll behavior

        if (!isScrolling) {
            isScrolling = true;

            if (e.originalEvent.deltaY > 0) {
                slider.slick('slickNext');
            } else {
                slider.slick('slickPrev');
            }

            setTimeout(() => {
                isScrolling = false;
            }, 500); // Adjust delay to match the transition speed
        }
    });
});






