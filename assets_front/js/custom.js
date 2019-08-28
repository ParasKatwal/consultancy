$(document).ready(function(){
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

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});