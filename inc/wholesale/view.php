<?php
defined( 'ABSPATH' ) || die();

global $wpdb;

if ( isset( $_GET['id'] ) && ! empty( $_GET['id'] ) ) {
	$id    = absint( $_GET['id'] );
	$value = $wpdb->get_row( $wpdb->prepare( "SELECT ID, subject, message, name, email, note, answered, created_at FROM {$wpdb->prefix}stcfq_queries WHERE ID = %d", $id ) );
}
if ( ! $value ) {
	die();
}

$subject = stripslashes( $value->subject );
$message = stripslashes( $value->message );
$message = json_decode($message);
$qty = $message->qty;
$phone = $message->phone;
$dadeline = $message->dadeline;
$reference = $message->reference;
$message = $message->message;
$name    = stripslashes( $value->name );
$email   = stripslashes( $value->email );
$note    = stripslashes( $value->note );
?>

<div class="wrap stcfq">
	<div class="stcfq-header">
		<h1>
			<span class="stcfq-header-label"><?php esc_html_e( 'Query', 'contact-form-query' ); ?>&nbsp;-</span>
			<span class="stcfq-header-subject"><?php echo esc_html( $subject ); ?></span>
		</h1>
	</div>

	<div class="stcfq-content">
		<ul class="stcfq-list">
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Product', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $subject ? $subject : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'QTY', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $qty ? $qty : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Deadline', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $dadeline ? $dadeline : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Message', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $message ? $message : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Name', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $name ? $name : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Phone', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $phone ? $phone : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Email', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $email ? $email : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Reference', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $reference ? $reference : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Answered', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $value->answered ? __( 'Yes', 'contact-form-query' ) : __( 'No', 'contact-form-query' ) ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Note', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( $note ? $note : '-' ); ?></span>
			</li>
			<li>
				<span class="stcfq-list-key"><?php esc_html_e( 'Timestamp', 'contact-form-query' ); ?></span>
				<span class="stcfq-list-value"><?php echo esc_html( date_i18n( 'M jS Y, g:i a', strtotime( $value->created_at ) ) ); ?></span>
			</li>
		</ul>

		<form action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post" id="stcfq-save-note-form">

			<?php $nonce = wp_create_nonce( 'save-note-' . $value->ID ); ?>
			<input type="hidden" name="save-note-<?php echo esc_attr( $value->ID ); ?>" value="<?php echo esc_attr( $nonce ); ?>">

			<input type="hidden" name="action" value="stcfq-save-note">

			<input type="hidden" name="id" value="<?php echo esc_attr( $value->ID ); ?>">

			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row"><?php esc_html_e( 'Is Answered?', 'contact-form-query' ); ?></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text">
									<span><?php esc_html_e( 'Is Answered?', 'contact-form-query' ); ?></span>
								</legend>
								<label for="stcfq_answered">
									<input <?php checked( $value->answered, true, true ); ?> name="answered" type="checkbox" id="stcfq_answered" value="1">
									<?php esc_html_e( 'Is Answered?', 'contact-form-query' ); ?>
								</label>
								<p class="description">
									<?php esc_html_e( 'Mark this message as "Answered".', 'contact-form-query' ); ?>
								</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">
							<label for="stcfq_note"><?php esc_html_e( 'Note', 'contact-form-query' ); ?></label>
						</th>
						<td>
							<textarea name="note" rows="8" cols="40" id="stcfq_note" class="large-text code"><?php echo esc_html( $note ); ?></textarea>
							<p class="description">
								<?php esc_html_e( 'Enter any extra note.', 'contact-form-query' ); ?>
							</p>
						</td>
					</tr>

				</tbody>
			</table>

			<button type="submit" class="button button-primary" id="stcfq-save-note-btn"><?php esc_html_e( 'Save Changes', 'contact-form-query' ); ?></button>

		</form>
	</div>
</div>
