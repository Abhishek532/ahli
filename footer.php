<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="footer-left col-md-4">
                <?php
                    $logo = get_header_image();
                ?>
                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_header_image(); ?>"></a>

                <?php wp_nav_menu(array(
                'theme_location' => 'footer1'
                )) 
                ?>
            </div>
            <div class="footer-mid col-md-4">
                <?php wp_nav_menu(array(
                'theme_location' => 'footer2'
                , )) 
                ?>
            </div>

            <div class="footer-right col-md-4">
                <img src="<?php bloginfo('template_url'); ?>/images/ahli-ontario.png">
            </div>
            
        </div>
    </div>
  
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo home_url();?>/wp-content/themes/ahli/script.js" defer></script>
