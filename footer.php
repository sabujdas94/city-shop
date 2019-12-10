<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CitySHop
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer footer">
    <div id="footer-top-widget" class="mtt-footer-top-widget">
        <div class="mtt-footer-subscribtion">
            <div class="container">
                <div class="mtt-footer-signup">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mtt-footer-signup-des">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2 mb-4 mb-md-0"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/envelope.png" alt="">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 mb-4 mb-md-0">
                                        <h5 class="font-weight-bold">SUBSCRIBE TO KNOW ABOUT NEW <br> PRODUCT LAUNCH &
                                            SPECIAL OFFERS</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mtt-footer-signup-form">
                                <form action="#">
                                    <input type="email" class="text-center text-sm-left mb-3 mb-md-0"
                                        placeholder="Enter email address">
                                    <input type='submit'
                                        class="btn rounded-0 mtt-btn text-uppercase px-xs-1 mb-3 mb-md-0"
                                        value="Sign Up">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .mtt-footer-subscribtion -->
    </div><!-- #footer-top-widget -->

    <div class="mtt-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="mtt-footer-right">
                        <div class="row">
                            <?php dynamic_sidebar('footer-top-sidebar'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="mtt-footer-left">
                        <?php dynamic_sidebar('footer-top-description-sidebar'); ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="mtt-footer-bottom">
                        <div class="row">
                            <div class="col-md-6 text-center order-md-2 d-table mx-auto">
                                <!-- mtt footer menu -->
                                <?php
                                if (function_exists('wp_nav_menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_menu',
                                        'container_class' => 'd-table ml-auto mr-md-0 mr-auto',
                                        'menu_class'    => 'nav float-none float-md-right',
                                        'echo'            => true,
                                    ));
                                }
                                ?>
                            </div>
                            <div class="col-md-6 col-sm-12 order-md-1">
                                <div class="mtt-copywrite text-center text-sm-left">
                                    <span>
                                        <?php
                                        if (get_theme_mod('copyright_text') != '') {
                                            echo get_theme_mod('copyright_text');
                                        } else {
                                            echo "&copy; FINESCITY 2019, ALL RIGHTS RESERVED";
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <!-- MTT Go to top Button -->
                            <button id="gototop" title="Go to top"><i
                                    class="fa fa-angle-double-up text-center"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #footer -->

<script>
// for mobile menu -> mmenu
document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu("#mtt-mmenu", {
            "extensions": [
                "pagedim-black"
            ],
            "counters": true
        });
    }
);
jQuery("#close-cart-widget").on('click', function(e) {
    e.preventDefault();
    jQuery("#site-header-cart").removeClass('open');
});
jQuery(".menu-cart-link").on('click', function(e) {
    e.preventDefault();
    jQuery("#site-header-cart").addClass('open');
});
</script>

<?php wp_footer(); ?>

</body>

</html>