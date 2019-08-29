$(document).ready(function(){
    // $("#ex1").modal({
    //     fadeDuration: 1000
    // });

    $('a[href="#ex1"]').click(function (){
        $(this).modal({
            fadeDuration: 1000,
            fadeDelay: 0.50
        });
        return false;
    })

    $('.slider').slick({
        arrows:true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        dots: true,
        arrows: false,
        fade: true,
        speed: 1000,
        cssEase: 'linear'
    }); 
    // $('.multiple-items').slick({
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 1
    //     // autoplay: true,
    //     // autoplaySpeed: 2000,
    // });

    $('#country_carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoPlay: true,
        dots: false,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    $('#class_carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: true,
        autoPlay: true,
        dots: false,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })

    $('#testimonial_carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        autoPlay: true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    $('#news_carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots: true,
        arrows:false,
        autoPlay: true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

    $('#university_carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots: false,
        arrows:false,
        autoPlay: true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:7
            }
        }
    })

    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});