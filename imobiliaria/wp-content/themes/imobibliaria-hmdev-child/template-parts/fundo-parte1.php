<div class="container" id="parte1">
    <div class="row">
        <div class="col-12 vh-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                    <?php
                        $argsInicio = array(
                            'post_type' =>'page',
                            'page_id' => '8'
                        );
                        $inicio = new wp_query($argsInicio);
                        if($inicio->have_posts()){
                            while($inicio->have_posts()){
                                $inicio->the_post(); ?>
                                <h1><?php the_content(); ?></h1>
                </div>
                <div class="col-12">
                    <h2 class="display-4"><?php the_title(); ?></h2>
                </div><?php
                        }
                    }
                ?>
                <div class="col-12">
                    <?php get_template_part('template-parts/search','bar');?>
                </div>
                <div class="col-12" id="lancamentos"></div>                
            </div>
        </div>
    </div>
</div>
