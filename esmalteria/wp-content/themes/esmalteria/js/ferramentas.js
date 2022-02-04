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

  jQuery('#texto-foto1 p').addClass('text-info fs-3');
  jQuery('#texto-foto2 p').addClass('text-info fs-3');


  if(document.querySelector('#texto-slide-home.texto-publico p')){
    var quebrar = document.querySelector('#texto-slide-home.texto-publico p').innerText.split(' ');
    var juntar = '';
    var contar = 0;
    quebrar.forEach(element => {
      if (contar === 2){
        juntar = juntar + "<br>" + element;
        contar++;
      }
      else{
        juntar = juntar + " " + element;
        contar++;
      }
    });
    document.querySelector('#texto-slide-home.texto-publico p').innerHTML = juntar;
  }
  
  slidesUnidades = document.querySelectorAll(".slidesUnidades");
  sl1 = [0,6];
  sl2 = [2,8];
  sl3 = [4,10];

    for (i = 0; i < slidesUnidades.length; i++){
      if (sl1.includes(i)) slidesUnidades[i].classList.add('sl1');
      else if (sl2.includes(i)) slidesUnidades[i].classList.add('sl2');
      else if (sl3.includes(i)) slidesUnidades[i].classList.add('sl3');
      else {
        slidesUnidades[i].style.background = "white";
        slidesUnidades[i].children[0].style.color = "white";
      }
    }

   
    
    slds = document.querySelectorAll(".slds");
    slds.forEach(i =>{
      ID = '#' + i.id + ' .slidesUnidade';
      IDnav = '#' + i.id + ' .slide-nav';      
      if(i.dataset.qtd == 2){
        jQuery(ID).slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: IDnav
        });
        jQuery(IDnav).slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          asNavFor: ID,
          dots: true,
          centerMode: false,
          focusOnSelect: true,
        }); 
        var c = 0;
        document.querySelectorAll("#"+i.id + " .slide-unidade-nav .slideunidade-nav").forEach(e =>{
          e.style.height = "30vh";
          e.parentElement.classList.remove("mx-2");
          e.parentElement.classList.remove("mx-2");
          if (c == 0) {
            e.parentElement.classList.add("me-2");
            c++;
          }
           else {
             e.parentElement.classList.add("ms-2");
             c++;
            }
        })
      }
      else{
        jQuery(ID).slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: IDnav,
          autoplay: true
        });
        if (screen.width >= 992){
          jQuery(IDnav).slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: ID,
            dots: true,
            centerMode: true,
            focusOnSelect: true
          });
        }
        else{
          jQuery(IDnav).slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: ID,
            dots: true,
            centerMode: true,
            focusOnSelect: true
          });
        }
 
      }
      nav = i.id + " .slick-track";
      nv = i.id + " .slide-nav";
      navs = document.querySelector("#" + nav);
      if (i.dataset.qtd == 1){
        document.querySelector("#" + nv).style.display = "none";
      }
    })

    jQuery('#slides-parceria').slick({
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      arrows: false,
      autoplay: true
    });

    document.querySelector('.oq div h4').classList.add('display-6');
var modelosNegocios = document.querySelector('#modelosNegocios').split(' ');