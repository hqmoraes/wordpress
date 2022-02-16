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

jQuery('.card-imagens').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    infinite: true,

});

const lancamentos = document.querySelector('#parte1 .wp-block-buttons').cloneNode(true);
document.getElementById('lancamentos').appendChild(lancamentos);
document.querySelector('#parte1 .wp-block-buttons').style.display='none';