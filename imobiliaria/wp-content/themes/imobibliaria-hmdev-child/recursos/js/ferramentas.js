$ = jQuery;  
function atualizaValorMinMax(){
    document.getElementById('valorMax').min = document.getElementById('valorMin').value;
    document.getElementById('resultadoMin').innerText = document.getElementById('valorMin').value;
}
function atualizaValorMaxMin(){
    document.getElementById('valorMin').max = document.getElementById('valorMax').value;
    document.getElementById('resultadoMax').innerText = document.getElementById('valorMax').value;
}

var aux = 1;
var cont = document.querySelectorAll('.card-imagens');
cont.forEach(im =>{
    imG = im.id;
    document.querySelectorAll('#' + imG + ' .cont img').forEach(imgs =>{
        var img = document.createElement('div');
        img.id = imG + "-" + aux;
        img.classList.add('card-img-item');
        img.style.backgroundImage = "url("+ imgs.src + ")";
        im.appendChild(img);
        aux++;
    })
    aux = 1;
    document.querySelector('#' + imG + ' .cont').style.display = 'none';
})

$('.card-imagens').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    infinite: true,

});

if(document.querySelector('#parte1 .wp-block-buttons')){
  const lancamentos = document.querySelector('#parte1 .wp-block-buttons').cloneNode(true);
  document.getElementById('lancamentos').appendChild(lancamentos);
  document.querySelector('#parte1 .wp-block-buttons').style.display='none';
}
imagesCount = 0;

const bannerImages = document.querySelectorAll('.bannerImagens figure');
bannerImages.forEach( bn  => {
    srcImage = bn.childNodes[0].src;
    div = document.createElement('div');
    div.classList.add('banner' + imagesCount);
    div.classList.add('bannerImages');
    div.style.backgroundImage = "url(" + srcImage + ")";
    document.querySelector('.banner').appendChild(div);
    subDiv = document.createElement('div');
    subDiv.classList.add('bgBanner');
    div.appendChild(subDiv);
    divConteudo = document.createElement('div');
    divConteudo.classList.add('conteudoBanner');
    subDiv.appendChild(divConteudo);
    h2 = bn.parentElement.querySelectorAll('h2');
    p = bn.parentElement.querySelectorAll('p');
    divConteudo.appendChild(h2[0].cloneNode(true));
    divConteudo.appendChild(p[0].cloneNode(true));
    divConteudo.childNodes[0].style.display = 'block';
    divConteudo.childNodes[1].style.display = 'block';
    imagesCount++;    
});


$('.banner').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });


var contDst = 0;
const baseDestaques = document.querySelectorAll('.sliderDestaques .cardDestaque');
contImg = 0;
baseDestaques.forEach(dst => {
  dst.querySelectorAll('p')[0].classList.add('texto');


  dq = dst.querySelectorAll('img');
  dq.forEach( d => {
    if (contDst !== contImg){
      d.style.display = 'none';
    }
    contDst++;
    d.classList.add('imgDestaques');
  })
  contDst = 0;
  if(contImg < dq.length -1){contImg++;}else{contImg = 0}
  
})

$('.sliderDestaques').slick({
    centerMode: true,
    centerPadding: '100px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerPadding: '40px',
          centerMode: true,
          slidesToShow: 1
        }
      }
    ]
  });


  var textoDestaque = document.querySelectorAll('.corpoDestaque div');
  textoDestaque.forEach(t =>{
    if(t.innerText === 'Destaques'){
      t.classList.add('textoDestaque');
    }

  })

  function imgsSingle (){
  const singleImg = document.querySelectorAll('#single p');
  singleImg[0].classList.add('singleTxt');
  singleImg[0].classList.add('col-12');
  singleImg[0].classList.add('col-lg-5');
  singleImg[1].classList.add('singleImg');
  singleImg[1].classList.add('col-12');
  singleImg[1].classList.add('col-lg-5');

  $('.singleImg').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
  }


  
