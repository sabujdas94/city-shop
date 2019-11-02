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
							<?php

                                if(function_exists('wp_nav_menu')){
                                    wp_nav_menu(array(
                                        'theme_location' => 'header_left_menu',
                                        'menu_class'    => 'nav',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'walker'        => new city_shop_Walker_Nav_Menu()
                                    ));
                                }

								 // wp_nav_menu( array(
         //                            'menu'          => 'header_left_menu',
         //                            'menu_class'    => 'nav',
         //                            'echo'            => true,
         //                            'walker'        => new city_shop_Walker_Nav_Menu()
								 // ) );
                            ?>
<!-- 
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => '',

 -->
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
                    <div class="col-3">
                            <!-- The mobile menu -->
                            <div class="mtt-mobile-menu">
                                <a class="mtt-mmenu-collaps-btn" href="#mtt-mmenu"><i class="fa fa-bars"></i></a>
                                 <!-- The mobile menu -->
                                <nav id="mtt-mmenu">
                                    <ul>
                                        <li><a href="<?php echo home_url();?>">HOME</a></li>
                                        <li><a href="<?php echo home_url();?>/wholesale">WHOLESALE</a></li>
                                        <li><span>PRODUCTS</span>
                                            <ul>
                                                <li><a href="<?php echo home_url(); ?>/shop/">ALL PRODUCTS</a></li>
                                                <li><a href="<?php echo home_url(); ?>/accessories/">ACCESSORIES</a></li>
                                                <li><span>MORE PRODUCTS</span>
                                                    <ul>
                                                        <li><a href="<?php echo home_url(); ?>/accessories/">INDOOR PRODUCTS</a></li>
                                                        <li><a href="<?php echo home_url(); ?>/accessories/">OUTDOOR PRODUCTS</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><span>ACCOUNT</span>
                                            <ul>
                                                <li><a href="<?php echo home_url(); ?>/my-account/">MY ACCOUNT</a></li>
                                                <li><a href="<?php echo home_url(); ?>/cart/">CART</a></li>
                                                <li><a href="<?php echo home_url(); ?>/checkout/">CHECKOUT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo home_url(); ?>/why-titanium/">WHY TITANIUM</a></li>
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
                    <div class="col-5">
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

