
<!DOCTYPE html>
<html>

    <?php wp_head()?>

<body>

<div class="page-wrapper">
    <header class="header">
        <div class="header-wrapper">
            <div class="container">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="Logo">
                            <span>Online News</span>
                        </a>
                    </div><!-- /.header-logo -->

                    <div class="header-content">
                        <div class="header-bottom">
                            <?php
                            $menu = wp_get_nav_menu_object('menu-top');
                            $menu_items = wp_get_nav_menu_items($menu->term_id);
                            ?>
                            <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                <?php foreach ($menu_items as $nav):?>
                                    <li><a href="<?php echo $nav->url;?>"><?php echo $nav->title ?></a></li>
                                <?php endforeach?>
                            </ul>

                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div><!-- /.header-bottom -->
                    </div><!-- /.header-content -->
                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-wrapper -->
    </header><!-- /.header -->


