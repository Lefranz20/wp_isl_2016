<?php
 /*
  * Template qui permet d'afficher un article ou un autre type de contenu
  */
get_header(); ?>

<?php while (have_posts()) :
    the_post();
    //$image = get_field('cover');
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1><?php echo  get_the_title(); ?></h1>
           <!-- <h2 class="bg-primary text-center"><?php /*echo get_field('sous-titre')*/?></h2>-->
            <!--<img src="<?php /*echo $image['url']*/?>" class="img-responsive" alt="Image">-->

            <p class="lead">
                <?php
                echo get_the_content();
                ?>
            </p>
        </div>
    </div>
    <?php
endwhile; ?>
<?php get_footer(); ?>
