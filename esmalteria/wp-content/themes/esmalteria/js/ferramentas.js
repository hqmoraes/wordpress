jQuery('#menuSuperior div ul').addClass('navbar-nav px-0');
jQuery('#menuSuperior div ul li').addClass('nav-item px-0 mx-0');
jQuery('#menuSuperior div ul li a').addClass('nav-link fs-4 px-2 mx-0');

function alinhaMenuMobile(){
    if (jQuery('#iconesSociais').hasClass('mobile')){
        jQuery('#iconesSociais').removeClass('mobile'); 
    }
    else{
        jQuery('#iconesSociais').addClass('mobile'); 
    }
}
jQuery('.slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    infinite: true,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });