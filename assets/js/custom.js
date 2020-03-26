jQuery(document).ready(function($){
    $("#nnc-menu-icon").click(function(){
        $(".nnc-sidenav").addClass("active");
    });

    $("#nnc-close-icon").click(function(){
        $(".nnc-sidenav").removeClass("active");
    });

    $( ".sm-cc-menu" ).click(function() {
        $(this).next().toggle( "500" );
    });


    //nnc-hero-slider
    var hero_slider = new Swiper('.nnc-hero-slider-container', {
        slidesPerView: 1,
        speed: 1000,
        loop: true,
        // autoplay: {
        //     delay: 3000,
        // },
        pagination: {
            el: '.swiper-pagination-hero',
            clickable: true,
        },
    });
    
    //nnc-testimonial-container
    var hero_slider = new Swiper('.nnc-testimonial-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1000,
        loop: true,
        // autoplay: {
        //     delay: 3000,
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    
});
