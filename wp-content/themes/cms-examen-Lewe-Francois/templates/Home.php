<?php
/*
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<?php $args = array('post_type'=>array('post'),'posts_per_page'=>'5'); ?>
<?php $query = new WP_Query($args); ?>
<?php while (have_posts()):?>
    <?php the_post();?>
    <div class="main ">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    <!--le carousel -->

                    <div class="mb80">
                        <div class="hero-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active ">
                                        <div class="item-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/assets/img/slider/fitness-s1-large.jpg')"></div>
                                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/slider/fitness-s1-large.jpg" alt="fitness-s1-large">
                                        <div class="carousel-caption">
                                            <div class="hero-slider-content">
                                                <h1>slider1 </h1>
                                            </div><!-- /.hero-slider-content -->
                                        </div><!-- /.carousel-caption -->
                                    </div><!-- /.item -->
                                   <!-- boucle pour avoir toutes les images du slider-->
                                    <div class="item">
                                        <div class="item-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/assets/img/slider/fitness-s2-large.jpg')"></div>
                                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/slider/fitness-s2-large.jpg" alt="fitness-s2-large"/>
                                        <div class="carousel-caption">
                                            <div class="hero-slider-content">
                                                <h1>slider 2</h1>
                                            </div><!-- /.hero-slider-content -->
                                        </div><!-- /.carousel-caption -->
                                    </div><!-- /.item -->
                                  <!--  fin de la boucle-->
                                </div><!-- /.carousel-inner -->

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.hero-slider -->
                    </div>

                    <!--description de la page d'accueil-->
                    <?php echo get_the_content(); ?>
                    <!--les 5 derniers articles viendront ici-->
                    <!--début de la boucle pour récuperer les articles-->

                    <div class="row filter">
                        <h2 class="text-primary"><?php _e('derniers-articles','cms-examen-theme-translate')?></h2>
                        <?php if($query->have_posts()) : ?>
                            <?php while($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-sm-6 col-md-4 col-lg-4 article">
                                    <a href="<?php the_permalink();?>">
                                        <div class="card-simple" data-background-image="<?php echo get_stylesheet_directory_uri() ?>/assets/img/tmp/product-1.jpg" style="background-image: url('<?php get_stylesheet_directory_uri()?>/assets/img/tmp/product-1.jpg');">
                                            <div class="card-simple-background">
                                                <div class="card-simple-content">
                                                    <h2><?php the_title();?></h2>
                                                </div>
                                                <div class="card-simple-price">Detail >></div>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!--bloc article-->
                            <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                        <?php else :?>
                            <p><?php _e('aucun-article','cms-examen-theme-translate')?></p>
                        <?php endif; ?>
                    </div>
                    <!-- fin de la boucle-->
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>
