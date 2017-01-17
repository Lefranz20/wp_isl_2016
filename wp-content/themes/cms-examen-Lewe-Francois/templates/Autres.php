<?php
/*
 * Template Name: Autres
 */
?>

<?php /*$alltweets = new Tweets();
$tw = $alltweets->getTweets(1,"@FT");
//var_dump($alltweets);
$a = array_slice($tw,0,15);
//var_dump($a);
$b = json_encode($a);
// echo $b['media_url'];
var_dump($b);
$t = json_decode($a);
var_dump($t);
*/?>

<?php get_header(); ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
<?php $args = array(
    'post_type'=>'post',
    'posts_per_page'=>'3',
    'paged'=>$paged
);?>
<?php $query = new WP_Query($args);?>
<?php while (have_posts()) : ?>
    <?php the_post();?>
    <div class="main ">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    <p class=""><?php echo  get_the_title(); ?></p>
                    <?php if(is_page('actualite')):?>
                        <?php if($query->have_posts()):?>
                            <?php while($query->have_posts()): $query->the_post();?>
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
                            <?php endwhile;?>
                            <!-- pagination -->
                           <?php the_posts_pagination();?>

                            <?php wp_reset_postdata();?>
                        <?php endif;?>
                    <?php endif ;?>
                    <?php echo do_shortcode(get_the_content());?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>