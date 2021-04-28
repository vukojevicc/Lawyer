        <footer class="bg-white">
            
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php get_sidebar('footer-1'); ?>
                    </div>
                    <div class="col-md-4">
                        <?php get_sidebar('footer-2'); ?>
                    </div>
                    <div class="col-md-4">
                        <?php get_sidebar('footer-3'); ?>
                    </div>
                </div>
            </div>
            <div class="container text-center d-sm-flex justify-content-sm-between align-items-sm-center">
                
                <?php
                
                $menuLocations = get_nav_menu_locations();
                $socialMenuID = $menuLocations['social'];
                $socialMenuItems = wp_get_nav_menu_items($socialMenuID);
                
                //var_dump($socialMenuItems);
                
                if($socialMenuItems){
                    ?>
                    <nav class="social mb-4 mb-sm-0 order-sm-last">
                        <?php
                        foreach($socialMenuItems as $socialItem){
                            if($socialItem->menu_item_parent == 0){
                                ?>
                                <a href="<?php echo $socialItem->url ?>" class="fab fa-<?php echo strtolower($socialItem->title); if($socialItem->title=='Facebook'){echo '-f';} ?>"></a>
                                <?php
                            }
                        }
                        ?>
                    </nav>
                    <?php
                }
                
                
                
                ?>
                
<!--                <nav class="social mb-4 mb-sm-0 order-sm-last">
                    <a href="https://facebook.com" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com" class="fab fa-twitter"></a>
                    <a href="https://instagram.com" class="fab fa-instagram"></a>
                </nav>-->
                
                <p class="copyright mb-0">Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
            </div>
        </footer><!--footer end-->


        
        <?php
            //Include default WordPress js files
            wp_footer();
        ?>
    </body>
</html>