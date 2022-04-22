jQuery(document).ready(function ($) {

    $('.home_slider').slick({
        dots: false,
        speed: 300,
        infinite: true,
        autoplay: true,
        fade: true,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
    });

    $('.slider-photo').on('afterChange', function (event, slick, currentSlide) {
        $(".slider-photo [data-slick-index='" + currentSlide + "'] video").each(function () {
            this.play()
        });
    });

    $('.slider-photo').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $(".slider-photo [data-slick-index='" + currentSlide + "'] video").each(function () {
            this.pause()
        });
    });


    $('.home_gallery__items').slick({
        dots: false,
        speed: 300,
        infinite: true,
        autoplay: true,
        fade: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        centerMode: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]

    });

  $('.home_opinion__items').slick({
        dots: false,
        speed: 1000,
        infinite: true,
        autoplay: true,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        centerMode: true,
        cssEase: 'linear',
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',

    });


});
