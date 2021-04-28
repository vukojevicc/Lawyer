<?php
get_header();
?>

<main>
    <!--Include part for Homepage Lead  Section-->
    <?php get_template_part('/template-parts/lead-section'); ?>

    <!--Include part for Homepage services-->
    <?php get_template_part('/template-parts/homepage-services'); ?>

    <!--Include part for Homepage Team Members-->
    <?php get_template_part('/template-parts/homepage-members'); ?>
    
    <!--Include part for Info Section-->
    <?php get_template_part('/template-parts/info-section'); ?>

    
</main>
<?php
get_footer();
