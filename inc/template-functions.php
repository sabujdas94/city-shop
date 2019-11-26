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
    if ( is_single() || !is_single() ) {
        $title = get_the_title();
        $permalink = get_permalink();

        $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink;
		$twitter = 'https://twitter.com/intent/tweet?text=Hey! Read this: '.$title.'&amp;url='.$permalink;



        $google = 'https://plus.google.com/share?url='.$permalink;

// https://pinterest.com/pin/create/button/?url=http://dainikaloron.com/five-things-you-may-have-missed-over-the-weekend/&amp;media=http://dainikaloron.com/wp-content/uploads/2019/11/3.jpg&amp;description=Five+things+you+may+have+missed+over+the+weekend



        $content .= '<ul>';
		$content .= '<li>Share <i class="fa fa-share-alt" aria-hidden="true"></i></li>';
        $content .= '<li><a href="'.$facebook.'" target="_blank" rel="nofollow"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>';
        $content .= '<li><a href="'.$twitter.'" target="_blank" rel="nofollow"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>';
        $content .= '<li><a href="'.$google.'" target="_blank" rel="nofollow"><span><i class="fa fa-google-plus" aria-hidden="true"></i></span></a></li>';
        $content .= '</ul><!-- .aama-shareThis -->';

        echo $content;
    } else {
        echo $content;
    }
}