<?php
defined( 'ABSPATH' ) || die();

global $wpdb;

$current_page = 1;
require_once get_template_directory() . '/inc/wholesale/query.php';
?>

<div class="wrap stcfq">
	<table class="stcfq-table">
		<caption class="stcfq-table-heading"><?php esc_html_e( 'WHOLESALE & CUSTOM ORDERS', 'contact-form-query' ); ?></caption>
		<caption class="stcfq-table-filter">
			<?php require_once STCFQ_PLUGIN_DIR_PATH . 'admin/inc/message/filter.php'; ?>
		</caption>
		<thead>
			<tr>
				<th scope="col"><?php esc_html_e( 'S.No', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Product', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'QTY', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Name', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Email', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Answered', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Timestamp', 'contact-form-query' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Action', 'contact-form-query' ); ?></th>
			</tr>
		</thead>
		<tbody class="stcfq-table-body">
			<?php require_once get_template_directory() . '/inc/wholesale/load.php'; ?>
		</tbody>
	</table>
</div>

<?php ob_start(); ?>
(function($) {
	'use strict';
	var cpage = 2;
	var lastPage = false;
	$(document).ready(function() {
		$(window).on('scroll', function() {
			if($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
				var data = {
					'action': 'stcfq-load-more-messages',
					'cpage': cpage,
					'security': '<?php echo esc_attr( wp_create_nonce( 'paginate-messages' ) ); ?>'
				};

				<?php if ( $filter_items_count ) { ?>
					data.search_key = [];
					data.search_value = [];
					<?php foreach ( $_POST['search_key'] as $key => $value ) { ?>
						data.search_key[<?php echo esc_attr( $key ); ?>] = '<?php echo esc_attr( $value ); ?>';
						data.search_value[<?php echo esc_attr( $key ); ?>] = '<?php echo esc_attr( $_POST['search_value'][ $key ] ); ?>';
					<?php } ?>
				<?php } ?>

				$.post('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', data, function(response) {
					if($.trim(response) != '') {
						$('.stcfq-table-body').append(response);
						cpage++;
					} else {
						$(window).unbind('scroll');
						if(!lastPage) {
							$('.stcfq-table-body').append('' +
							'<tr class="stcfq-no-more-records-row">' +
								'<td colspan="8">' +
									'<div class="stcfq-no-more-records">' +
										'<?php echo esc_html__( 'No more messages.', 'contact-form-query'); ?>' +
									'</div>' +
								'</td>' +
							'</tr>' +
							'');
							lastPage = true;
						}
					}
				});
			}
		});
	});
})(jQuery);
<?php
$js = ob_get_clean();
wp_add_inline_script( 'stcfq-admin', $js );
