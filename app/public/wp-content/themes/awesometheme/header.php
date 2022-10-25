<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Awesome Theme</title>
        <?php wp_head(); ?>
    </head>
    
    <?php


        if( is_front_page() ) :
            $awesome_classes = array('awesome_class', 'my-class');
        else:
            $awesome_classes = array('no-awesome-class');
        endif;

    ?>
    <body <?php body_class($awesome_classes) ?>>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand nad toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand">Awesome Theme</a>
                            </div>
                            <div class="collape navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav navbar-right'
                                    ));
                                ?>
                            </div>
                        </div> <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>

            <img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height ?>" width="<?php echo get_custom_header()->width ?>" alt="">