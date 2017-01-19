/**
 * Created by oysteinhauan on 28/11/16.
 */

$(document).ready(function(){
    $('.pictures').slick({
        variableWidth: true,
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: '60px',
        lazyLoad: 'progressive',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]

    });
});