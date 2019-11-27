<?php
defined( 'ABSPATH' ) || die();

$action = '';
if ( isset( $_GET['action'] ) && ! empty( $_GET['action'] ) ) {
	$action = sanitize_text_field( $_GET['action'] );
}

if ( 'view' === $action && isset( $_GET['id'] ) ) {
	require_once get_template_directory() . '/inc/wholesale/view.php';
} else {
	require_once get_template_directory() . '/inc/wholesale/index.php';
}
