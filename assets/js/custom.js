$('.slideServices').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$(document).ready(function(){
    $(".shows").click(function(){
    $("p").show();
    });
    $(".hides").click(function(){
    $("p").hide();
    });
});

//sticky-header-js
//Add Class Sticky On Scroll
$(window).on('scroll', function (event) {
    var scroll = $(window).scrollTop();
    if (scroll < 20) {
        $("header").removeClass("sticky");
    } 
    else {
        $("header").addClass("sticky");
    }
});
