<main>
<div class="container-fluid">
        <div class="row">
            <?php
                $args = array(
                    'page_id' => '13',
                    'post_type' => 'page'

                );
                $tipos = new wp_query($args);
                if($tipos->have_posts()):
                    while ($tipos->have_posts()): $tipos->the_post();
                        get_template_part('template-parts/parte','slider');
                    endwhile;
                    wp_reset_postdata();
                endif
            ?>
        </div>
</div>
<div class="container-fluid bg-info h1 p-3 pb-4 m-0 text-center text-light fw-normal" id="chamada1-home">
        Seja quem você foi criada(o) para <span class="display-2 fw-bold">ser!</span>
</div>
<div class="container-fluid bg-light">
    <div class="row py-3 justify-content-center">
        <div class="col col-lg-10">
            <?php get_template_part('template-parts/parte','slider2'); ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-10 text-center">
            <button class="btn btn-info btn-lg text-light my-4">Clique aqui e confira Nossas Unidades</button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-between bg-video align-items-center">
                <div class="col-11 col-md-10 col-lg-5 col-xxl-5 d-flex position-relative mx-auto">
                    <iframe class="video-home position-absolute"
                    src="https://www.youtube.com/embed/CChQ6pDUXmk" 
                    title="Esmalteria padrão" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
                <div class="col-11 mx-auto col-lg-5 col-xxl-5 pe-xxl-4 me-xxl-4 texto-video">
                    <h1 class=" text-uppercase px-xl-4 mx-xl-4">sobre a <strong>esmalteria padrão</strong></h1>
                    <p class="fs-4 fs-md-5 pe-xl-4 me-xl-4"><strong>Em poucas palavras, o que é a Esmalteria Padrão? </strong>É um espaço 
                        <strong>agradável, moderno, retrô e apelidado de “casinha de boneca”.</strong>
                        Onde os serviços são realizados com perfeição e respeito aos padrões de biossegurança.
                    </p>
                    <button class="btn btn-info text-light my-3">Saiba mais</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row pt-4 pt-sm-0 cartoes justify-content-between bg-light align-items-center">
        <div class="col-12 col-sm-4 text-center">
        <svg class="text-info" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" class="svg-inline--fa fa-location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path></svg>
        <h3 class="text-info">Reconhecimento Nacional</h3>
        <p class="text-info">Uma grande rede de emalterias atendendo em todo o território nacional.</p>
        <button class="btn btn-info text-light">Saiba mais</button>
        </div>
        <div class="col-12 col-sm-4 text-center">
        <svg class="text-info" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="earth-americas" class="svg-inline--fa fa-earth-americas" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM57.71 192.1L67.07 209.4C75.36 223.9 88.99 234.6 105.1 239.2L162.1 255.7C180.2 260.6 192 276.3 192 294.2V334.1C192 345.1 198.2 355.1 208 359.1C217.8 364.9 224 374.9 224 385.9V424.9C224 440.5 238.9 451.7 253.9 447.4C270.1 442.8 282.5 429.1 286.6 413.7L289.4 402.5C293.6 385.6 304.6 371.1 319.7 362.4L327.8 357.8C342.8 349.3 352 333.4 352 316.1V307.9C352 295.1 346.9 282.9 337.9 273.9L334.1 270.1C325.1 261.1 312.8 255.1 300.1 255.1H256.1C245.9 255.1 234.9 253.1 225.2 247.6L190.7 227.8C186.4 225.4 183.1 221.4 181.6 216.7C178.4 207.1 182.7 196.7 191.7 192.1L197.7 189.2C204.3 185.9 211.9 185.3 218.1 187.7L242.2 195.4C250.3 198.1 259.3 195 264.1 187.9C268.8 180.8 268.3 171.5 262.9 165L249.3 148.8C239.3 136.8 239.4 119.3 249.6 107.5L265.3 89.12C274.1 78.85 275.5 64.16 268.8 52.42L266.4 48.26C262.1 48.09 259.5 48 256 48C163.1 48 84.4 108.9 57.71 192.1L57.71 192.1zM437.6 154.5L412 164.8C396.3 171.1 388.2 188.5 393.5 204.6L410.4 255.3C413.9 265.7 422.4 273.6 433 276.3L462.2 283.5C463.4 274.5 464 265.3 464 256C464 219.2 454.4 184.6 437.6 154.5H437.6z"></path></svg>
        <h3 class="text-info">Premiações</h3>
        <p class="text-info">Entre as potenciais empresas com maior crescimento, arrebatamos prêmios nas principais categorias de empreendedorismo.</p>
        <button class="btn btn-info text-light">Saiba mais</button>
        </div>
        <div class="col-12 col-sm-4 text-center">
        <svg class="text-info" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house-chimney" class="svg-inline--fa fa-house-chimney" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M511.8 287.6L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L416 100.7V64C416 46.33 430.3 32 448 32H480C497.7 32 512 46.33 512 64V185L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6L511.8 287.6z"></path></svg>
        <h3 class="text-info">Modelos de Franquia</h3>
        <p class="text-info">Clique no botão abaixo e conheça mais sobre os nossos modelos de franquias</p>
        <button class="btn btn-info text-light">Saiba mais</button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row vh-100 bg-info align-items-center text-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="display-3 text-uppercase">
                        <p>relaxe e aproveite o nosso <span class="fw-bolder">serviço private bar</span></p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 imagem-bar mt-4"></div>
                </div>
            </div>
            <div class="text-center fs-4 mt-4">
                <p>Cuide do seu corpo, da sua autoestima e seu bem-estar enquanto cuidamos de você.</p>
                <p>Aproveite e confira nossa lista de drinks frios e quentes em nosso bar.</p>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-light">Agenda o seu horário</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid parallax">
</div>
<div class="container-fluid parallax-frente"></div>
<div class="container-fluid">
    <div class="row text-center justify-content-center bg-info p-4 text-light">
        <div class="col-lg-6">
            <h2 class="display-1">a gente quer te ver <span class="fw-bolder">empoderada!</span></h2>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row py-3 align-items-center" id="foto-texto">
        <div class="col-12 col-sm-12 col-lg-6" id="foto-texto1"></div>
        <div class="col-12 col-lg-6" id="texto-foto1">
            <h2 class="display-4 text-uppercase fw-bold text-info">valorize o seu momento</h2>
            <p class="fs-4 text-info">Para um momento completo os cabelos não podem faltar. Permita-se e cuide-se por inteira aqui na Esmalteria Padrão</p>
            <button class=" btn btn-info text-light">Agendar horário</button>
        </div>
        <div class="col-12 col-lg-6" id="texto-foto2">
            <h2 class="display-4 text-uppercase fw-bold text-info">marque presença</h2>
            <p class="fs-4 text-info">A sua presença é notada também pelo seu olhar, por isso a importância em estar com os olhos bonitos, brilhantes e estonteantes. Consulte nossos serviços para os olhos e cílios.</p>
            <button class="btn btn-info text-light"> Agenda horário</button>
        </div>
        <div class="col-12 col-sm-12 col-lg-6" id="foto-texto2"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row align-items-center" id="franquias">
        <div class="col-12 col-lg-6 col-xl-4 mx-auto text-center mt-4">
            <p class="text-uppercase text-light mx-auto">SEJA DONA DO SEU PRÓPRIO NEGÓCIO E TENHA UMA ESMALTERIA padrão PARA CHAMAR DE SUA</p>
            <h2 class="display-1 text-uppercase text-light mx-auto mb-3">A GENTE QUER TE VER <strong>REALIZADA!</strong></h2>
        </div>
        <div class="col-12 col-lg-6 col-xl-7 pt-xl-4 mx-auto">
            <div id="foto-franquia"></div>
        </div>
        <button class="col-6 col-sm-8 col-md-4 col-lg-3 col-xl-2 btn btn-info text-light my-4 mx-auto">Franquias Esmalteria Padrão</button>
    </div>
</div>


</main>