<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CitySHop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'city-shop' ); ?></a>
	<header id="masthead" class="header mtt-header site-header">
		<div class="mtt-nav-area <?php if(is_front_page()): echo 'mtt-transparent-nav-area'; endif; ?>">
			<div class="container-fluid">
				<div class=" mtt-nav-area-row row">
                    <div class="col-md-5">
                        <div class="mtt-nav-left">
                            <nav class="mtt-nav">
                                <!--
							     <?php
								// wp_nav_menu( array(
								//     'menu'          => 'header_left_menu',
                                //      'menu_class'    => 'nav',
                                //      'walker'        => walker_class()
								// ) );
                                ?>
                                -->
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link active" href="<?php echo home_url();?>">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/products/">Products</a>
                                        <ul class="mtt-megamenu">
                                            <div class="mtt-megamenu-content">
                                                <div class="row">
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Long Hande Spork</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/14.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Long Hande Spoon</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/15.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/15.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/14.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Long Hande Spoon</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Spork</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></a>
                                                            <a href="#">
                                                                <h6 class="mtt-megamenu-item-title text-center">Titanium Chopistics</h6>
                                                            </a>
                                                        </li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="mtt-megamenu-item">
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mtt-megamenu-bottom">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="text-center m-0">Free Delevery On Orders $50+</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/accessories/">Accesories</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/wholesale">Wholesale</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/why-titanium">Why Titanium</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- .col-md-5 -->
                    <div class="col-md-2">
                        <div class="mtt-logo site-branding">
                            <?php
                                if( get_custom_logo() != '' ){
                                    the_custom_logo();
                                }else {
                                    $home_url = home_url();
                                    echo '<a href=' . $home_url . '><h2>' . get_bloginfo('name') . '</h2></a>';
                                };
                            ?>
                        </div>
                    </div><!--.col-md-2 -->
                    <div class="col-md-5">
                        <div class="mtt-nav-right">
                            <nav class="mtt-nav">
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link active" href="<?php echo home_url(); ?>/why-titanium">Our Story</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>"><i class="fa fa-heart-o"></i> 2-Wishlist</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/my-account">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/cart">Cart .0,00$ <i class="fa fa-shopping-bag"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">USD</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- .col-md-5 -->
                </div><!-- .row -->
                <!-- for mobile menu only -->
                <div class="row mtt-mobile-menu-row">
                    <div class="col-4">
                            <!-- The mobile menu -->
                            <div class="mtt-mobile-menu">
                                <a class="mtt-mmenu-collaps-btn" href="#mtt-mmenu"><i class="fa fa-bars"></i></a>
                                 <!-- The mobile menu -->
                                <nav id="mtt-mmenu">
                                    <ul>
                                        <li><a href="<?php echo home_url();?>">Home</a></li>
                                        <li><a href="<?php echo home_url();?>/wholesale">Home</a></li>
                                        <li><span>Products</span>
                                            <ul>
                                                <li><a href="<?php echo home_url(); ?>/accessories/">History</a></li>
                                                <li><span>More Products</span>
                                                    <ul>
                                                        <li><a href="<?php echo home_url(); ?>/accessories/">Management</a></li>
                                                        <li><a href="<?php echo home_url(); ?>/accessories/">Sales</a></li>
                                                        <li><a href="<?php echo home_url(); ?>/accessories/">Development</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><span>Account</span>
                                            <ul>
                                                <li><a href="<?php echo home_url(); ?>/my-account/">Design</a></li>
                                                <li><a href="<?php echo home_url(); ?>/cart/">Development</a></li>
                                                <li><a href="<?php echo home_url(); ?>/checkout/">Marketing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo home_url(); ?>/why-titanium/">Why Titanium</a></li>
                                    </ul>
                                </nav>
                            </div>
                    </div>
                    <div class="col-4">
                        <div class="mtt-logo site-branding">
                            <?php
                                if( get_custom_logo() != '' ){
                                    the_custom_logo();
                                }else {
                                    $home_url = home_url();
                                    echo '<a href=' . $home_url . '><h2>' . get_bloginfo('name') . '</h2></a>';
                                };
                            ?>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mtt-nav-right">
                            <nav class="mtt-nav">
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>"><i class="fa fa-heart-o"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/cart"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/my-account">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
			</div><!-- #container-fluid -->
		</div><!-- .mtt-nav-area -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

