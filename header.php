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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="iam00">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'city-shop'); ?></a>
        <div class="mtt-nav-popup">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mtt-nav-popup-content text-center">
                            <?php
                            echo do_shortcode('[mtt_popup_offer]');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="masthead" class="header mtt-header site-header">
            <div class="mtt-nav-area <?php if (is_front_page()) : echo 'mtt-transparent-nav-area';
                                        endif ?>">
                <div class="container-fluid">
                    <div class=" mtt-nav-area-row row">
                        <div class="col-md-5 mtt-mobile-col">
                            <div class="mtt-nav-left mtt-hide-sm">
                                <?php
                                if (function_exists('wp_nav_menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'header_left_menu',
                                        'menu_class'    => 'nav',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'walker'        => new city_shop_Walker_Nav_Menu()
                                    ));
                                }
                                ?>
                            </div>

                            <div class="mtt-nav-left mtt-hide mtt-show-sm">
                                <div class="mtt-mobile-nav-icon">
                                    <a href="#mtt-mmenu"><img src="<?php echo get_template_directory_uri(); ?>/img/finesscity-mobile-nav-icon.png" alt="FinessCity"></a>
                                </div>
                                <nav id="mtt-mmenu">
                                    <?php
                                    if (function_exists('wp_nav_menu')) {
                                        wp_nav_menu(array(
                                            'theme_location' => 'header_left_mobile_menu',
                                            'container_class' => 'panel-menu',
                                            // 'menu_class'    => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'walker'        => new city_shop_Walker_Mobile_Nav_Menu()
                                        ));
                                    }
                                    ?>
                                </nav>
                            </div>
                        </div><!-- .col-md-5 -->
                        <div class="col-md-2 mtt-mobile-col text-center text-sm-center">
                            <div class="mtt-logo site-branding">
                                <?php
                                if (get_custom_logo() != '') {
                                    the_custom_logo();
                                } else {
                                    $home_url = home_url();
                                    echo '<a href=' . $home_url . '><h2>' . get_bloginfo('name') . '</h2></a>';
                                };
                                ?>
                            </div>
                        </div>
                        <!--.col-md-2 -->
                        <div class="col-md-5 mtt-mobile-col">
                            <div class="mtt-nav-right mtt-hide-sm">
                                <nav class="mtt-nav">
                                    <ul class="nav">
                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo home_url(); ?>/about">Our Story</a></li>
                                        <?php if (class_exists('TInvWL_Public_WishlistCounter')) : ?>
                                        <?php $count_item = TInvWL_Public_WishlistCounter::instance()->counter(); ?>
                                        <li class="nav-item">
                                            <a class="nav-link wishlist-link"
                                                href="<?php echo esc_url(tinv_url_wishlist_default()); ?>"><i
                                                    class="fa fa-heart-o"></i><?php echo $count_item; ?>
                                                <span>&bull;</span> Wishlist</a>
                                        </li>
                                        <?php endif ?>

                                        <li class="nav-item">
                                            <?php if (is_user_logged_in()): ?>
                                                <a class="nav-link" href="<?php echo esc_url( wc_logout_url() ); ?>">Logout</a>
                                            <?php else: ?>
                                                <a class="nav-link" href="<?php echo home_url(); ?>/login">Login</a>
                                            <?php endif ?>
                                        </li>
                                        <?php city_shop_woocommerce_header_cart(); ?>

                                        <!-- menu currency changer -->
                                        <?php
                                        $settings = new WOOMULTI_CURRENCY_Data();
                                        $links = $settings->get_links();
                                        $currency_selected = $settings->get_current_currency();
                                        $currency_name = get_woocommerce_currencies();
                                        ?>

                                        <!-- menu currency changer -->
                                        <div class="dropdown dropdown-currency">
                                            <a class="btn dropdown-toggle pl-0" href="#" role="button"
                                                id="dropdownMenuCurrency" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <?php echo $currency_selected; ?>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-currency-menu"
                                                aria-labelledby="dropdownMenuCurrency">
                                                <?php foreach ($links as $k => $link) :
                                                    $selected = '';
                                                    if ($currency_selected == $k) {
                                                        $selected = 'wmc-active';
                                                    }
                                                    ?>
                                                <a data-currency="<?php echo esc_attr($k) ?>"
                                                    class="wmc-currency-redirect dropdown-item dropdown-currency-item <?php if ($selected) echo 'active'; ?>"
                                                    href="#"><?php echo esc_html($currency_name[$k]); ?></a>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </ul>
                                </nav>
                            </div>

                            <div class="mtt-nav-right mtt-hide mtt-show-sm">
                                <nav class="mtt-nav">
                                    <ul class="nav mtt-mobile-right-nav-icons">
                                        <?php if (class_exists('TInvWL_Public_WishlistCounter')) : ?>
                                            <li class="nav-item mtt-mobile-nav-wishlist-icon">
                                                <?php $count_item = TInvWL_Public_WishlistCounter::instance()->counter(); ?>
                                            <a class="nav-link wishlist-link"
                                            href="<?php echo esc_url(tinv_url_wishlist_default()); ?>"><i
                                            class="fa fa-heart-o"></i><span class="mobile-wishlist-items"><?php echo $count_item; ?></span></a>
                                            </li>
                                        <?php endif ?>
                                        <li class="nav-item mtt-mobile-nav-cart-icon">
                                            <?php city_shop_woocommerce_mobile_header_cart(); ?>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- .col-md-5 -->
                    </div><!-- .row -->
                </div><!-- #container-fluid -->
            </div><!-- .mtt-nav-area -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">