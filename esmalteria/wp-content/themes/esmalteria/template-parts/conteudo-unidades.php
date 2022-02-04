<div class="container-fluid">
            <div class="row">
                <div class="col-12" id="bannerUnidades" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                <div class="col-12 bg-info text-light fs-3 text-center py-3">Confira abaixo todas as nossas unidades</div>
            </div>
</div>
<div class="container my-4">
    <div class="row gy-5">
        <?php
        $catID = array();
            $argsUnidade = array(
                'category_name'=>'unidades',
                'nopaging'=>'true',
                'orderby'=>'id',
                'order'=>'asc'
            );
            $cnt = 0;
            $unidade = new wp_query($argsUnidade);
            if($unidade->have_posts()){
                while($unidade->have_posts()){
                    $unidade->the_post();
                    $sub = (get_the_category());
                    $item = $sub[0]->term_id;
                    if  (!in_array($item, $catID)){
                        $catID[] = $item;
                    }
                    if ($cnt <= 2){ ?> 
                        <div class="col-12 col-md-4 p-4"> <?php $cnt++;
                    }else{ ?>
                        <div class="col-12 col-sm-4 col-lg-3 p-4"> <?php
                    } ?>
                            <div class="mx-auto" id="bkg-unidades" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
                                <div class="p-3 text-center">
                                    <div>
                                        <h2>UNIDADES</h2>
                                        <h3><?php the_title() ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div> 
    <?php       }
                wp_reset_postdata();
            } ?>
    </div>
</div>    
<?php get_template_part('template-parts/slides','unidades') ?>