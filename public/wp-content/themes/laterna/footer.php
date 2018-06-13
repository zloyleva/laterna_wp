<!-- Footer start -->
<footer class="container-fluid">
    <div class="row ">
        <div class="container my-5">
            <div class="row">

                <div class="col-md-4 col-lg-3 item">
                    <h3 class="header my-3"><?php _e('About Us', 'laterna')?></h3>
                    <p class="excerpt"><?php _e('Our team is as unique in our professional backgrounds as we are in lifestyle, but what we all have in commonis an intense curiosity about our world, desire to be a part of something bigger, creative vision, and dedication to our work.', 'laterna')?></p>
                    <p class="excerpt"><?php _e('17, Novembra 90/3739, 080 01 Presov, Slovakia', 'laterna')?></p>
                    <p class="excerpt"><a href="tel:+42 190 24 38 770">+42 190 24 38 770</a></p>
                    <p class="excerpt"><a href="mailto:info@laterna.sk">info@laterna.sk</a></p>
                </div>

                <div class="col-md-4 col-lg-3 item">
                    <h3 class="header my-3"><?php _e('General Information', 'laterna')?></h3>

                    <?php
                    $args =[
                        'theme_location'    => 'footer',
                        'menu_class'    => 'list-unstyled footer-menu',
                        'items_wrap'      => '<ul id="%1$s" class="nav-item %2$s">%3$s</ul>',
                        'container' => false
                    ];
                    ?>
                    <?php wp_nav_menu( $args ); ?>

                </div>

                <div class="item col-lg-3 d-none d-sm-none d-md-none d-lg-block">
                    <h3 class="header my-3"><?php _e('Recent Posts', 'laterna')?></h3>
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


                    <div class="article row mb-2">
                        <div class="thumbnail col-3 my-1">
                            <div class="clip">
                                <img src="<?= the_post_thumbnail_url('full')?>" alt="">
                            </div>
                        </div>
                        <div class="col-9 desc">
                            <a class="w-100" href="<?= get_permalink()?>"><?php the_title(); ?></a>
                            <div class="date"><?= get_the_date(__('F d, Y', 'laterna')) ?></div>
                        </div>
                    </div>

                    <?php

                    }

                    wp_reset_postdata();

                    ?>

                </div>

                <div class="item col-md-4 col-lg-3">
                    <h3 class="header my-3"><?php _e('Get In Touch', 'laterna')?></h3>
                    <form action="">
                        <div class="form-group my-2">
                            <input type="text" class="form-control" placeholder="<?php _e('Name', 'laterna')?>">
                        </div>
                        <div class="form-group my-2">
                            <input type="email" class="form-control" placeholder="<?php _e('Email', 'laterna')?>">
                        </div>
                        <div class="form-group my-2">
                            <input type="text" class="form-control" placeholder="<?php _e('Massage', 'laterna')?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"><?php _e('Submit', 'laterna')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
</div>

<?php wp_footer(); ?>

</body>
</html>