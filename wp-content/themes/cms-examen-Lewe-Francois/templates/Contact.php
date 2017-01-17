<?php
/*
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

<?php while (have_posts()) :
    the_post();
    ?>
    <div class="main ">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    <div class="background-white">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2127.5923207585956!2d5.558687651885896!3d50.64294383497562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa164d342d39%3A0xa33e2d934b144ff1!2sInstitut+Saint-Laurent+de+Promotion+Sociale!5e0!3m2!1sfr!2sbe!4v1476725781088" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p class=""><?php echo  get_the_title(); ?></p>
                    <?php
                    echo do_shortcode(get_the_content());
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile; ?>
<?php get_footer(); ?>