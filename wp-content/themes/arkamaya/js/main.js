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
    $('.slider-event').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.short-slider'
    });
    $('.short-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-event',
      dots: false,
      centerMode: true,
      focusOnSelect: true
    });

    $('.fancybox-content .btn-close').click(function(){
      $.fancybox.close();
    });

    $(".click").click(function (){
        $('html, body').animate({
            scrollTop: $("#get-connected").offset().top
        }, 2000);
    });

    $('.grid').masonry({
    // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      // use element for option
      columnWidth: '.grid-sizer',
      gutter: 20,
      percentPosition: true
    })

});