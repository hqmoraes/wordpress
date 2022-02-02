<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0  position-relative">
            <div id="slides-parceria">
                <?php
                $Cat = '';
                    $argsParceria = array ('category_name' => 'parceria');
                    $parceria = new wp_query($argsParceria);
                    if($parceria->have_posts()){
                        while($parceria->have_posts()){
                            $parceria->the_post();
                            $Cat = get_the_category(get_the_ID())[0]->term_id;?>
                            <div class="slide-parceria">
                                <div style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
            <div class="col-3 p-4 position-absolute top-50 h2 text-light" style="background: rgba(0,255,255,0.5)">
            <?php echo category_description($Cat); ?>
            </div>                                        
        </div>
    </div>
</div>