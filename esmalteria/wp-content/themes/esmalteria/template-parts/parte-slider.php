<article id="imprimirConteudo" class="p-0" <?php post_class(array ('class' =>'sliderHome')); ?>>
    <?php $cont_slides = 0; ?>
    <div id="repetidorACF" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
          <div class="carousel-inner" id="imagens">
            <?php $count2 = 0; if( have_rows('imagens_do_slider_na_home') ): ?>
                <?php while( have_rows('imagens_do_slider_na_home') ): the_row();
                if($count2 == 0){ ?>
                    <div class="carousel-item active">
                <?php } else { ?>
                    <div class="carousel-item">
                <?php }?>
                <div class="slideImagens" style="background-image: url(<?php the_sub_field('imagens'); ?>)"></div>

                    </div>
                <?php $count2++; endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
    <div id="texto-slide-home" class="d-block">
        <p>Uma esmalteria moderna e cheia de charme!</p>
        <p>Sempre aberta</p>
        <button class="btn btn-info">Saiba mais</button>
    </div>
</article>
