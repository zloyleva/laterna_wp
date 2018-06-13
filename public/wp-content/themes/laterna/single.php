<?php get_header(); ?>

<!-- Services page container start -->
<div class="container-fluid article-section brown">
    <div class="row">
        <div class="container my-5">
            <div class="row">
            <?php	while ( have_posts() ) : the_post(); ?>
                <div class="col-12 meta-info">
                    <small><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F jS, Y') ?></small>
                    <small><i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ?></small>
                </div>
                <div class="col-12 article-title">
                    <h2><?php the_title(); ?></h2>
                </div>
            <div class="col-12 article-thumbnail">
                <?php the_post_thumbnail();?>
            </div>
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
