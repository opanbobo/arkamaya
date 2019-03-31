jQuery( document ).ready(function($) {

    $('.single-item').slick({
        infinite: true,
        speed: 500,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.stories-slider').slick({
        infinite: true,
        speed: 500,
        dots:true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.multiple-items').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1
    });
    $('.kitchen-slider').slick({
        infinite: true,
        speed: 500,
        arrows:false,
        dots:true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.gallery-sliders').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1
    });

    $('.fancybox-content .btn-close').on('click', function(){
      $.fancybox.close();
    });
});