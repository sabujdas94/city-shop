<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CitySHop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function city_shop_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'city_shop_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function city_shop_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'city_shop_pingback_header' );

remove_filter( 'the_content', 'wpautop' ); 
remove_filter( 'the_excerpt', 'wpautop' );



/* MTT share icon */
function mtt_share_this() {
		$content = '';
    if ( is_single() || !is_single() ) {
        $title = get_the_title();
        $permalink = get_permalink();
        $postThumbnail = get_the_post_thumbnail_url();

        $facebook = 'https://www.facebook.com/sharer.php?u='.$permalink;
		$twitter = 'https://twitter.com/intent/tweet?text=Hey! Read this: '.$title.'&amp;url='.$permalink;
		$pinterest = 'https://pinterest.com/pin/create/button/?url='.$permalink.'/&amp;media='.$postThumbnail.'&amp;description='.$title;


        $content .= '<div class="mtt-single-product-share">';
		$content .= '<span class="font-weight-bold">SHARE</span>';
        $content .= '<a href="'.$facebook.'" target="_blank"><i class="fa fa-facebook px-2"></i> Facebook</a>';
        $content .= '<a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter px-2"></i> Twitter</a>';
        $content .= '<a href="'.$pinterest.'" target="_blank"><i class="fa fa-pinterest px-2"></i> Pinterest</a>';
        $content .= '</div><!-- .mtt-single-product-share -->';

        echo $content;
    } else {
        echo $content;
    }
}