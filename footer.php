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
	                        <div class="col">
	                            <div class="mtt-footer-signup-des">
	                                <div class="row">
	                                    <div class="col-md-2 col"><img src="<?php echo get_template_directory_uri(); ?>/img/envelope.png" alt=""></div>
	                                    <div class="col-md-10 col">
	                                        <h5 class="font-weight-bold">SUBSCRIBE TO KNOW OUR NEW <br> PRODUCTS LAUNCH $ SPECIAL OFFERS</h5>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col">
	                            <div class="mtt-footer-signup-form">
	                                <form action="#">
	                                    <input type="email" placeholder="Your Email">
	                                    <a class="btn rounded-0 mtt-btn text-uppercase px-5" href="#">sign up</a>
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
                    <div class="col-md-6">
                        <div class="mtt-footer-left">
                            <?php dynamic_sidebar('footer-top-description-sidebar'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mtt-footer-right">
                            <div class="row">
                                <?php dynamic_sidebar('footer-top-sidebar'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mtt-footer-bottom">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mtt-copywrite">
                                        <span>
                                        <?php 
                                            if(get_theme_mod('copyright_text')!=''){
                                                echo get_theme_mod('copyright_text');
                                            }else{
                                                echo "&copy; FINESCITY 2019, ALL RIGHTS RESERVED";
                                            }
                                        ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <!-- mtt footer menu -->
                                <?php
                                    wp_nav_menu( array(
                                         'menu'          => 'footer_menu',
                                          'menu_class'    => 'nav'
                                    ) );
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->

    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu( "#mtt-mmenu", {
                   "extensions": [
                      "pagedim-black"
                   ],
                   "counters": true
                });
            }
        );
    </script>

<?php wp_footer(); ?>

</body>
</html>
