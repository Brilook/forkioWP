<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forkio
 */

?>

<section class="footer">
        <div class="container">
            <div class="wrap-footer">
                <div class="footer-logo">
                    <div class="footer-logo-title">
                        <div class="footer-logo-title_img"></div>
                        <div class="wrap-flt">
                            <span class="footer-logo_title">ForkIO</span>
                        </div>
                    </div>
                    <p class="footer-logo_text">Lorem ipsum dolor sit amet, feugiat delicat liberavisse id cum no
                        quo.
                    </p>
                </div>
                
                <nav class="footer-nav">
                <span class="footer_titles">Navigation</span>
                <?php
                 wp_nav_menu( array(
                    'theme_location' => 'footermenu',
                    'menu_id'        => 'footer-menu',
                    'menu_class'     => 'footer-nav_items',
                    'container_class'=> 'footer-nav',
                ) );
                ?>
                </nav>


                <div class="footer-phadd">
                    <div class="footer-phon">
                        <p class="footer-phon_number">347 567 78 90</p>
                        <p class="footer-phon_available">AVAILABLE at 12PM - 18PM</p>
                    </div>
                    <div class="footer-address">
                        <p class="footer_titles">New York, NY</p>
                        <p class="footer-logo_text">560 Judah St & 15th Ave, Apt 5
                            <br> San Francisco, CA, 230903</p>
                    </div>
                </div>
                <div class="footer-info">
                    <p class="footer_titles">Info</p>
                    <p class="footer-logo_text">Wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit
                        lobortis nisl ut aliquip ex commodo consequat. Autem vel hendrerit iriure dolor in hendrerit.
                    </p>
                </div>
            </div>
        </div>


    </section>
    <!-- scroll button -->
    <div class="scroll-up" id="scroll-up">
        <i class="fas fa-chevron-circle-up icone-up"></i>
    </div>


<?php wp_footer(); ?>

</body>
</html>
