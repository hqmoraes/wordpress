<?php 
    get_header();?>
<div class="container" id="single">
    <div class="row">
        <div class="col-12">
            <?php 
            while(have_posts()){
                the_post();
                the_content();
            }?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/search','bar');
get_footer();?>
<script>imgsSingle();</script>