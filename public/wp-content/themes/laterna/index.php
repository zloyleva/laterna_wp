<?php get_header(); ?>

    <!-- Slider start -->
    <div class="container-fluid slider-section">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col d-none d-sm-none d-md-flex image-container">
                        <div class="mt-4">
                            <img src="<?= get_template_directory_uri()?>/images/skleeno.png" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col my-5 slider-content">
                        <h2><?php _e('Search engine optimisaton(SEO)', 'laterna')?></h2>
                        <p><?php _e('We’re an SEO agency that runs remarkably successful SEO campaigns in the most competitive sectors, using a unique blend of technical and creative expertise.', 'laterna')?></p>
                        <div class="controls">
                            <a href="<?php echo get_home_url(); ?>/services" class="btn btn-outline-primary"><?php _e('Services', 'laterna')?></a>
                            <button type="button" class="btn btn-outline-danger"><?php _e('Last news', 'laterna')?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider end -->

    <!-- Content container #01 start -->
    <div class="container-fluid content-section brown">
        <div class="row">
            <div class="container my-5">
                <div class="row my-2">
                    <div class="col div-img text-center">
                        <img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center"><?php _e('Our full-service web solutions help your business grow online leads, calls, and revenue', 'laterna')?></h2>
                    <p class="desc text-center"><?php _e('Laterna s.r.o is Internet marketing company offering innovative web marketing solutions to mid to large size companies across the globe', 'laterna')?></p>
                </div>
                <div class="row mt-5">
                    <div class="col-sm field-column">
                        <div class="text-center img">
                            <img src="<?= get_template_directory_uri()?>/images/01.png" alt="">
                        </div>
                        <div class="text-center my-3 text-content">
                            <p class="desc"><?php _e('Our firm prides ourselves on driving traffic, converting visitors, and measuring effectiveness to ultimately deliver real results for our clients.', 'laterna')?></p>
                        </div>
                        <div class="dots">
                            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                        </div>
                    </div>
                    <div class="col-sm field-column">
                        <div class="text-center img">
                            <img src="<?= get_template_directory_uri()?>/images/02.png" alt="">
                        </div>
                        <div class="text-center my-3 text-content">
                            <p class="desc"><?php _e('Our team of online marketing and SEO consultants are driven professionals who balance passion, creativity, and accountability to produce great results.', 'laterna')?></p>
                        </div>
                        <div class="dots">
                            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                        </div>
                    </div>
                    <div class="col-sm field-column">
                        <div class="text-center img">
                            <img src="<?= get_template_directory_uri()?>/images/03.png" alt="">
                        </div>
                        <div class="text-center my-3 text-content">
                            <p class="desc"><?php _e('Our digital marketing agency was founded on the desire to bring more transparency to a complex, ever-changing industry.', 'laterna')?></p>
                        </div>
                        <div class="dots">
                            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container my-5">
                <div class="row my-2">
                    <div class="col div-img text-center">
                        <img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center w-100"><?php _e('Ready to grow?', 'laterna')?></h2>
                    <p class="text-center w-100"><?php _e('Request a free SEO consultation', 'laterna')?></p>
                </div>
                <form action="" class="form-inline justify-content-center" method="post">
                    <div class="input-group mb-2 mr-sm-2">
                        <input name="username" type="text" class="form-control" placeholder="<?php _e('Type Your name here', 'laterna')?>">
                    </div>
                    <div class="input-group mb-2 mr-sm-2">
                        <input name="useremail" type="email" class="form-control" placeholder="<?php _e('Type Your Mail here', 'laterna')?>">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><?php _e('Submit', 'laterna')?></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Content container #01 end -->

    <!-- Content container #02 start -->
    <div class="container-fluid content-section blue">
        <div class="row">
            <div class="container my-5">
                <div class="row my-2">
                    <div class="col div-img text-center">
                        <img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
                    </div>
                </div>
                <div class="row flex-column mb-4">
                    <h2 class="text-center"><?php _e('Our Services', 'laterna')?></h2>
                    <p class="desc text-center"><?php _e('Our SEO Consulting services include:', 'laterna')?></p>
                </div>
                <div class="row">

                    <div class="col-md-6 seo-item">
                        <div class="row">
                            <div class="content-block col-md-10 order-0">
                                <h4 class="heading left-text"><?php _e('SEO strategy development', 'laterna')?></h4>
                                <p class="left-text"><?php _e('Not sure what you need, but have an SEO budget?We’ll help you define a custom needs assessment and strategy for long-termsearch marketing success', 'laterna')?></p>
                            </div>
                            <div class="icon-block col-md-2 order-1 my-2">
                                <img src="<?= get_template_directory_uri()?>/images/skeleton.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 seo-item">
                        <div class="row">
                            <div class="icon-block col-md-2 my-2">
                                <img src="<?= get_template_directory_uri()?>/images/docs.png" alt="">
                            </div>
                            <div class="content-block col-md-10">
                                <h4 class="heading right-text"><?php _e('Implementation guidelines', 'laterna')?></h4>
                                <p class="right-text"><?php _e('Do you already have a clear direction in mind for search engine optimization but need help knowing how best to implement your ideas without losing rankings? We can guide your development team through tough technical situations', 'laterna')?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 seo-item">
                        <div class="row">
                            <div class="content-block col-md-10 order-0">
                                <h4 class="heading left-text"><?php _e('SEO audits', 'laterna')?></h4>
                                <p class="left-text"><?php _e('With each audit we compile an in-depth analysis of your site’s on-page optimization and locate immediate areas for improvement. We understand that no two sites or industries are alike, so this audit can be as specific or general as needed. Either way, when complete, we guarantee your team will have multiple actionable items', 'laterna')?></p>
                            </div>
                            <div class="icon-block col-md-2 order-1 my-2">
                                <img src="<?= get_template_directory_uri()?>/images/tacho.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 seo-item">
                        <div class="row">
                            <div class="icon-block col-md-2 my-2">
                                <img src="<?= get_template_directory_uri()?>/images/headphones.png" alt="">
                            </div>
                            <div class="content-block col-md-10">
                                <h4 class="heading right-text"><?php _e('Keyword research and analysis', 'laterna')?></h4>
                                <p class="right-text"><?php _e('Perhaps the most boring and dreaded task in search marketing, keyword research can quickly overwhelm fledgling SEOs. We do the dirty work so your in-house team can focus on the big picture. This analysis goes beyond Word tracker data,looking at important search and user behavior, in addition to your high converting and competitive keywords', 'laterna')?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 seo-item">
                        <div class="row">
                            <div class="content-block col-md-10 order-0">
                                <h4 class="heading left-text"><?php _e('Competitive analysis', 'laterna')?></h4>
                                <p class="left-text"><?php _e('Are you neck and neck with the competition and need to know exactly what they’redoing and how? We’ll break down their on- and off-site tactics, potential service providers, budget estimates and more', 'laterna')?></p>
                            </div>
                            <div class="icon-block col-md-2 order-1 my-2">
                                <img src="<?= get_template_directory_uri()?>/images/teapot.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 seo-item">
                        <div class="row">
                            <div class="icon-block col-md-2 my-2">
                                <img src="<?= get_template_directory_uri()?>/images/bomb.png" alt="">
                            </div>
                            <div class="content-block col-md-10">
                                <h4 class="heading right-text"><?php _e('Pay-Per-Click (PPC) Management Services', 'laterna')?></h4>
                                <p class="right-text"><?php _e('From single keyword ad groups to dedicated landing pages, we believe that truly groundbreaking pay per click advertising is founded upon a detailed foundation & constant optimization', 'laterna')?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Content container #02 end -->

    <!-- Blog container start -->
    <div class="container-fluid blog-section brown">
        <div class="row">
            <div class="container my-5">
                <div class="row my-2">
                    <div class="col div-img text-center">
                        <img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center w-100"><?php _e('Blog Posts', 'laterna')?></h2>
                    <p class="desc text-center w-100"><?php _e('What You Get Using Our SEO Company’s', 'laterna')?></p>
                </div>

                <div class="row articles">

                <?php

                $args = array(
                    'numberposts' => 3,
                    'post_status' => 'publish',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                );

                $posts = get_posts( $args );

                foreach($posts as $post){ setup_postdata($post);

                ?>
                    <div class="col-md-4 article">
                        <div class="thumbnail row my-2">
                            <a class="col" href="<?= get_permalink()?>"><img class="w-100" src="<?= the_post_thumbnail_url('full')?>" alt=""></a>
                        </div>
                        <div class="row">
                            <div class="col-12 w-100">
                                <h5 class="title display-6"><a href="<?= get_permalink()?>"><?php the_title(); ?></a></h5>
                                <p class="excerpt"><?php the_excerpt()?></p>
                            </div>
                            <div class="col-12 w-100 footer">
                                <div class="row">
                                    <div class="col-auto">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> <?= get_the_date(__('F d, Y', 'laterna')) ?>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user" aria-hidden="true"></i> <?php the_author()?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                }

                wp_reset_postdata();

                ?>

                </div>

            </div>
        </div>
    </div>
    <!-- Blog container stop -->

    <!-- Contact container start -->
    <div class="container-fluid contact-section brown">
        <div class="row">
            <div class="container my-5">
                <div class="row my-2">
                    <div class="col div-img text-center">
                        <img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center w-100"><?php _e('Questions about pricing?', 'laterna')?></h2>
                </div>
                <form class="row contact-form">
                    <div class="col-md-4 my-2">
                        <input type="text" class="form-control" placeholder="<?php _e('First name', 'laterna')?>">
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="text" class="form-control" placeholder="<?php _e('Last name', 'laterna')?>">
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="text" class="form-control" placeholder="<?php _e('Business name', 'laterna')?>">
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="email" class="form-control" placeholder="<?php _e('Business email', 'laterna')?>">
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="email" class="form-control" placeholder="<?php _e('Business phone', 'laterna')?>">
                    </div>
                    <div class="col-md-4 my-2">
                        <button class="btn btn-primary btn-block"><?php _e('Send', 'laterna')?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact container stop -->

<?php get_footer(); ?>