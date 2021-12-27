$('.owl-carousel').owlCarousel({
    loop:false,
    margin: 20,
    responsiveClass:true,
    responsive:{
        0:{
            items:0,
            autoplay: false,
            autoplayTimeout: 20000
           
        },
        600:{
            items:3,
            nav:false, 
            autoplayTimeout: 2500 
        },
        1000:{
            items: 3,
            //autoplay: true,
            loop: true,
        },
        1500:{
            items:4,
            loop:false,
           
        }
    }
})
