<?php get_header(); ?>

<!-- Services page container start -->
<div class="container-fluid blog-section brown">
    <div class="row">
        <div class="container my-5">
            <div class="row my-2">
                <div class="col div-img text-center">
                    <img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
                </div>
            </div>
            <div class="row">
                <?php	while ( have_posts() ) : the_post(); ?>
                    <div class="col-12 content">
                        <?php the_content(); ?>
                    </div>
                <?php   endwhile; ?>
            </div>
        </div>
    </div>
</div>
<!-- Services page container end -->

<?php get_footer(); ?>
