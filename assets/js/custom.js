jQuery(document).ready(function($){

    $("#nnc-menu-icon").click(function(){
        $(".nnc-sidenav").addClass("active");
    });

    $("#nnc-close-icon").click(function(){
        $(".nnc-sidenav").removeClass("active");
    });
    $("#nnc-close-icon").keydown(function(event){
        if(event.key == 'Tab') {
            $('#side-menu #primary-menu li a')[0].focus();
        }
    });

    $( ".sm-cc-menu" ).click(function() {
        $(this).next().toggle( "500" );
    });

    // Search
    $("#nnc-search-icon").click(function(){
        $(".search-block").addClass("active");
        $("body").addClass("o-h");
        $('.nnc-search-form').find('input[name=s]').focus();
    });





    keyDownBack('.nnc-search-form', 'input[name=s]', '#nnc-search-close');

    keyDownFinal('.nnc-search-form', "#nnc-search-close", 'input[name=s]');
    keyDownBack('.nnc-search-form', "#nnc-search-close", '#popup-search-button');

    function keyDownFinal(wrapper, element, focus_element) {

        var final_shift = false;
        $(element).keydown(function(event){
            if(event.key == 'Shift') {
                final_shift = true;
            }
            if(event.key == 'Tab') {
                if(!final_shift) {
                    console.log($(wrapper).find(focus_element));
                    $(wrapper).find(focus_element).focus();
                    final_shift = false;
                    event.preventDefault();
                } else {
                    final_shift = false;
                }
            }
            return;
        });

    }


    function keyDownBack(wrapper, element, focus_element) {
        var back_shift = false;
        $(wrapper).on('keydown', element, function(event){
            console.log(event.key);
            if(event.key == 'Shift') {
                back_shift = true;
            }
            if(back_shift && event.key == 'Tab') {
                $(focus_element).focus();
                back_shift = false;
                event.preventDefault();
            }
            return;
        });
    }






    //function update


    $("#nnc-search-close").click(function(){
        $(".search-block").removeClass("active");
        $("body").removeClass("o-h");
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
        easing: 'ease-out-back',
        duration: 1500,
        delay: 200,
    });
});
