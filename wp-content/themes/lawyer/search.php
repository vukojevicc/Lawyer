<?php

get_header();

?>

<main>
    <section class="lead-page-section mb-5" style="background-image: url(<?php bloginfo('url'); echo '/wp-content/uploads/2019/12/search.jpg'?>)">

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6 col-xl-5">
                    <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                        <h1 class="lead-section-title mb-4"><span class="text-uppercase">Search <br> result for:<br></span> <?php echo get_search_query(); ?></h1>
                        
                    </article>
                </div>
            </div>
        </div>

    </section>
    
    <section class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    
                    <?php
    if (have_posts()) {
        ?>
        <section class="news-section">
            <div class="container-fluid">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <article class="news-item mb-5 animation" data-animation="slide-top">
                        <div class="row justify-content-sm-between">
                            <div class="col-12 mb-4 col-md-7 mb-md-0 col-lg-6">
                                <div class="news-item-content">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <?php the_excerpt(); ?>
                                    
                                    <a href="<?php the_permalink(); ?>" class="read-more text-uppercase text-primary">read more</a>

                                </div>
                            </div><!--.col left end-->

                            <div class="col-12 col-md-5">
                                <a class="d-block news-item-img" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('news-list'); ?>
                                </a>
                            </div>
                        </div>
                    </article><!--.news-item end-->
                    <?php
                }
                ?>
            </div><!--.container end-->
        </section><!--.news-section end-->
        
       
        
        
        <section class="news-pagination-full mb-5">
            <div class="container-fluid">
                <?php the_posts_pagination( array(
                    'screen_reader_text'=> ' ',
                    'mid_size'=>2,
                    'prev_text'=> '&lang;',
                    'next_text'=>'&rang;'
                    )); ?>
            </div>
        </section>
        <?php
    } else {
        ?>
        <section class="news-section">
            <div class="container">
                <div class="jumbotron">
                    <h3>The are no posts to show</h3>
                </div>
            </div><!--.container end-->
        </section><!--.news-section end-->
        <?php
    }
    ?>
                    
                    
                </div>
                
                <div class="col-12 col-md-4">
                    <aside>
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    
    
    
</main>

<?php 
get_footer();
?>
