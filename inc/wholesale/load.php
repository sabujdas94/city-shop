<?php
defined( 'ABSPATH' ) || die();

$message_count = count( $messages );
if ( $message_count > 0 ) {
	$offset = ( $current_page - 1 ) * $items_per_page;

	foreach ( $messages as $key => $value ) {
		if ( strlen( $value->subject ) > 100 ) {
			$subject = implode( ' ', array_slice( explode( ' ', stripslashes( $value->subject ) ), 0, 20 ) ) . '&hellip;';
		} else {
			$subject = stripslashes( $value->subject );
		}
		
		$message = json_decode( $value->message )->qty;

		if ( strlen( $value->name ) > 100 ) {
			$name = implode( ' ', array_slice( explode( ' ', stripslashes( $value->name ) ), 0, 20 ) ) . '&hellip;';
		} else {
			$name = stripslashes( $value->name );
		}

		if ( strlen( $value->email ) > 100 ) {
			$email = implode( ' ', array_slice( explode( ' ', stripslashes( $value->email ) ), 0, 20 ) ) . '&hellip;';
		} else {
			$email = stripslashes( $value->email );
		}
	?>
	<tr>
		<td data-label="<?php esc_attr_e( 'S.No', 'contact-form-query' ); ?>">
			<?php echo esc_html( $total - ( $offset + $key ) ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Subject', 'contact-form-query' ); ?>">
			<?php echo esc_html( $subject ? $subject : '-' ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Message', 'contact-form-query' ); ?>">
			<?php echo esc_html( $message ? $message : '-' ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Name', 'contact-form-query' ); ?>">
			<?php echo esc_html( $name ? $name: '-' ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Email', 'contact-form-query' ); ?>">
			<?php echo esc_html( $email ? $email : '-' ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Answered', 'contact-form-query' ); ?>">
			<?php echo esc_html( $value->answered ? __( 'Yes', 'contact-form-query' ) : __( 'No', 'contact-form-query' ) ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Date', 'contact-form-query' ); ?>">
			<?php echo esc_html( date_i18n( 'M jS Y, g:i a', strtotime( $value->created_at ) ) ); ?>
		</td>
		<td data-label="<?php esc_attr_e( 'Action', 'contact-form-query' ); ?>">
			<a href="<?php echo esc_url( admin_url( 'admin.php?page=wholesale_messages' ) . '&id=' . $value->ID . '&action=view' ); ?>">
				<span class="dashicons dashicons-search"></span>
			</a>&nbsp;
			<a href="javascript:void(0)" class="stcfq-delete-message" data-message="<?php echo esc_attr( $value->ID ); ?>" data-nonce="<?php echo esc_attr( wp_create_nonce( 'delete-message-' . $value->ID ) ); ?>" data-message-confirm="<?php esc_attr_e( 'Are you sure to delete this message?', 'contact-form-query' ); ?>">
				<span class="dashicons dashicons-trash"></span>
			</a>
		</td>
	</tr>
<?php }
}
