<div class="container-fluid bg-light">
    <div class="row py-3 justify-content-center">
        <div class="col col-lg-10">
            <div class="slider p-0">
                <?php 
                    $args = array('category_name' => 'unidades');
                    $tipos = new wp_query($args);
                    $cont = 0;
                        if($tipos->have_posts()){
                            while($tipos->have_posts()){
                                $tipos->the_post(); ?>
                                <div class="slide">
                                    <div class="imagensSlider2 m-2" style="background-image: url(<?php the_post_thumbnail_url()?>)">
                                    <div style="background: rgba(0,0,0,0.3)" class="imagensSlider2 p-0 pt-4 pb-4">
                                        <h1 class="text-light text-center p-0">Unidades</h1>
                                        <div class="display-4 fs-4 text-light text-center p-0"><?php the_title() ?> </div>
                                    </div>
                                    </div>
                                </div>
                                <?php }
                                wp_reset_postdata(); 
                            }
                        ?>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-10 text-center">
            <button class="btn btn-info btn-lg text-light my-4">Clique aqui e confira Nossas Unidades</button>
        </div>
    </div>
</div>