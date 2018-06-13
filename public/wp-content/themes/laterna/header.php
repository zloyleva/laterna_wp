<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:100,400,700,900');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Laterna</title>

    <?php wp_head(); ?>

</head>
<body>

<div id="app">
<!-- start div#app -->

    <div class="container-fluid first-row-header">
        <div class="row">
            <div class="container">
                <div class="row">
                    <ul class="list-inline contact col-md-6 col-sm-12">
                        <li class="list-inline-item"><a href="tel: +42 190 24 38 770">+42 190 24 38 770</a></li>
                        <li class="list-inline-item"><a href="mailto: info@laterna.sk">info@laterna.sk</a></li>
                    </ul>
                    <form class="form-inline my-2 col-md-6 col-sm-12">
                        <input name="s" class="form-control mr-sm-2" type="search" placeholder="<?php _e('Search', 'laterna')?>..." aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><?php _e('Search', 'laterna')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main menu start -->
    <div class="container-fluid second-row-header">
        <div class="row">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light col">
                        <a href="<?php echo get_home_url(); ?>" class="navbar-brand"><img src="<?= get_template_directory_uri()?>/images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main_menu" id="navbarText">

                            <?php
                            $args = [
                                'theme_location'    => 'primary',
                                'menu_class'    => 'navbar-nav ml-auto',
                                'items_wrap'      => '<ul id="%1$s" class="nav-item %2$s">%3$s</ul>',
                                'container' => false
                            ];
                            ?>
                            <?php wp_nav_menu( $args ); ?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Main menu end -->
