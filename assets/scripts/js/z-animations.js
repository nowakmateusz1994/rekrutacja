jQuery(document).ready(function($){
    function inview_animate(elem) {
        new Waypoint.Inview({
            element: elem,
            enter: function (direction) {
                $(this.element).addClass($(elem).data('animate') + ' animated');
            }
        })
    }

    $('[data-animate]').each(function () {
        inview_animate(this);
    });

    $('.home_slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var slide = slick.$slides.eq(nextSlide);
        slide.find('.home_slider__item__content').hide().removeClass('fadeInUp animated');
    });

    $('.home_slider').on('afterChange', function (event, slick, currentSlide) {
        var slide = slick.$slides.eq(currentSlide);
        slide.find('.home_slider__item__content').addClass('animated fadeInUp').show();
    });

});
