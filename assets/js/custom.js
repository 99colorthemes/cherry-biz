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

    // Search
    $("#nnc-search-icon").click(function(){
        $(".search-block").addClass("active");
    });

    $("#nnc-search-close").click(function(){
        $(".search-block").removeClass("active");
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

    // Scroll To Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.nnc-scroll-top').addClass("show");
        } else {
            $('.nnc-scroll-top').removeClass("show");
        }
    });

    $(".nnc-scroll-top").on("click", function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    // Aos
    AOS.init({
        once: true,
        easing: 'ease',
    });
});
