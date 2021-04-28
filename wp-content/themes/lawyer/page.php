
<?php
get_header();
?>

<main>

    <?php
    // Include Lead Section
    
    get_template_part('/template-parts/lead-section');
    ?>


<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
            <section class="about-content">
                <div class="container">
                    <div class="row justify-content-sm-between">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-first">
                            <figure class="mb-0 animation" data-animation="slide-right">
                                <img src="<?php the_field('page_side_image') ?>" alt=""/>
                            </figure>
                        </div>
                        <div class="col-12 col-md-6 mb-4 mb-md-0">
                            <article class="animation" data-animation="slide-left">
                                <?php the_content(); ?>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }
}
?>





<?php 
// Include Info Section

    get_template_part('/template-parts/info-section');

?>
  



</main>

<?php
get_footer();
?>