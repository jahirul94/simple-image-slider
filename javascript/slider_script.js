jQuery(document).ready(function($) {
    var slideIndex = 0;

    function showSlides() {
        var slides = $('.slider img');
        if (slideIndex >= slides.length) {
            slideIndex = 0;
        }

        $('.slider').css('transform', 'translateX(' + (-slideIndex * 100) + '%)');
        slideIndex++;

        setTimeout(showSlides, 2000);
    }

    showSlides();
});
