$(document).ready(function(){
    // $(".owl-carousel").owlCarousel();

    // owl carousel
    $('.owl-carousel').owlCarousel({
        margin:10,
        items:4,
        loop:true,
        autoplay:true,
        responsive: {
            0:{
                items: 1
            },
            500:{
                items:2
            },
            700:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // owl carousel

});
