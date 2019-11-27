<?php
function city_shop_wholesell_query_entry() {
    try {
    	ob_start();
		global $wpdb;

		$error_message = esc_html__( 'Error occurred while sending your message. Please try again after some time.', 'contact-form-query' );

		if ( ! wp_verify_nonce( $_POST['save-contact'], 'save-contact' ) ) {
			die();
		}

		//die(print_r($_POST));

		require_once STCFQ_PLUGIN_DIR_PATH . 'includes/class-stcfq-helper.php';

		$contact_fields    = STCFQ_Helper::contact_fields();
		$consent_field     = STCFQ_Helper::consent_field();
		$feedback_messages = STCFQ_Helper::feedback_messages();

		$name_required    = true;
		$email_required   = true;
		$subject_required = true;
		$name_required    = true;

		foreach ( $contact_fields as $key => $field ) {
			if ( 'name' === $field['name'] ) {
				$name_enabled = (bool) $field['enable'];
				$name_required = (bool) $field['required'];
			} elseif ( 'email' === $field['name'] ) {
				$email_enabled = (bool) $field['enable'];
				$email_required = (bool) $field['required'];
			} elseif ( 'subject' === $field['name'] ) {
				$subject_enabled = (bool) $field['enable'];
				$subject_required = (bool) $field['required'];
			} elseif ( 'message' === $field['name'] ) {
				$message_enabled = (bool) $field['enable'];
				$message_required = (bool) $field['required'];
			}
		}

		$errors = array();

		$name = '';
		if ( ! isset( $name_enabled ) || $name_enabled ) {
			if ( $name_required && ( ! isset( $_POST['fname'] ) || empty( trim( $_POST['fname'] ) ) ) ) {
				$errors['name'] = esc_html__( 'Please provide your name.', 'contact-form-query' );
			} else {
				$name = sanitize_text_field( $_POST['fname'] );
				if( isset( $_POST['lname'] ) )
				{
					$name .= " ". sanitize_text_field( trim( $_POST['lname'] ) );
				}
			}
		}

		$email = '';
		if ( ! isset( $email_enabled ) || $email_enabled ) {
			if ( $email_required && ( ! isset( $_POST['email'] ) || empty( trim( $_POST['email'] ) ) ) ) {
				$errors['email'] = esc_html__( 'Please provide your email.', 'contact-form-query' );
			} elseif ( ! empty( trim( $_POST['email'] ) ) && ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
				$errors['email'] = esc_html__( 'Please provide a valid email.', 'contact-form-query' );
			} else {
				$email = sanitize_email( $_POST['email'] );
			}
		}

		$subject = '';
		if ( ! isset( $subject_enabled ) || $subject_enabled ) {
			if ( $subject_required && ( ! isset( $_POST['interest'] ) || empty( trim( $_POST['interest'] ) ) ) ) {
				$errors['interest'] = esc_html__( 'Please specify interest.', 'contact-form-query' );
			} else {
				// assuming the list of product IDs is are stored in an array called IDs;
				$_pf = new WC_Product_Factory();
				$_product = $_pf->get_product(intval($_POST['interest'])); 
				$subject = sanitize_text_field( $_product->name );
			}
		}

		$message = '';
		if ( ! isset( $message_enabled ) || $message_enabled ) {
			if ( $message_required && ( ! isset( $_POST['additional_details'] ) || empty( trim( $_POST['additional_details'] ) ) ) ) {
				$errors['additional_details'] = esc_html__( 'Please provide your message.', 'contact-form-query' );
			} else {
				$message = sanitize_text_field( $_POST['additional_details'] );
			}
		}

		$phone = '';
		if ( ! isset( $_POST['phone']) || empty( $_POST['phone'][0] ) || empty( $_POST['phone'][1] ) ) {
			$errors['phone'] = esc_html__( 'Please provide your phone number.', 'contact-form-query' );
		} else {
			$phone = sanitize_text_field( $_POST['phone'][0].''.$_POST['phone'][1]  );
		}

		$qty = '';
		if ( ! isset( $_POST['qty'] ) || empty( trim( $_POST['qty'] ) ) ) {
			$errors['qty'] = esc_html__( 'Please provide interested units.', 'contact-form-query' );
		} else {
			$qty = sanitize_text_field( $_POST['qty'] );
		}
		
		$dadeline = '';
		if ( ! isset( $_POST['dadeline'] ) || empty( trim( $_POST['dadeline'] ) ) ) {
			$errors['dadeline'] = esc_html__( 'Please provide dadeline to recieve product.', 'contact-form-query' );
		} else {
			$dadeline = sanitize_text_field( $_POST['dadeline'] );
		}
		$reference = '';
		if ( ! isset( $_POST['reference'] ) || empty( trim( $_POST['reference'] ) ) ) {
			$errors['reference'] = esc_html__( 'Please provide reference.', 'contact-form-query' );
		} else {
			$reference = sanitize_text_field( $_POST['reference'] );
		}

	}	catch ( Exception $exception ) {
		$buffer = ob_get_clean();
		if ( ! empty( $buffer ) ) {
			$response = $error_message;
		} else {
			$response = $exception->getMessage();
		}
		wp_send_json_error( $response );
	}

	if ( count( $errors ) < 1 ) {
		try {
			$wpdb->query( 'BEGIN;' );

			$message = array(
				'phone' => $phone, 
				'qty' => $qty, 
				'dadeline' => $dadeline,
				'message' => $message,
				'reference' => $reference,
			);

			$data = array(
				'name'    => $name,
				'email'   => $email,
				'subject' => $subject,
				'message' => json_encode($message),
			);

			$success = $wpdb->insert( "{$wpdb->prefix}stcfq_queries", $data );

			$message = $feedback_messages['success'];

			$buffer = ob_get_clean();
			if ( ! empty( $buffer ) ) {
				throw new Exception( $error_message );
			}

			if ( false === $success ) {
				throw new Exception( $error_message );
			}

			$wpdb->query( 'COMMIT;' );
			// Email to admin template.
			$email_to_admin  = STCFQ_Helper::email_to_admin();
			$enable_to_admin = $email_to_admin['enable'];
			$receiver_email  = $email_to_admin['to'];

			if ( $enable_to_admin && $receiver_email ) {
				// Sender's parameters.
				$sender_name    = $data['name'];
				$sender_email   = $data['email'];
				$sender_subject = stripcslashes( $data['subject'] );
				$sender_message = stripcslashes( $data['message'] );

				$subject_to_admin = $email_to_admin['subject'];
				$body_to_admin    = $email_to_admin['body'];

				// Replace placeholders for subject.
				$subject_to_admin = str_replace( '[SENDER_NAME]', $sender_name, $subject_to_admin );
				$subject_to_admin = str_replace( '[SENDER_EMAIL]', $sender_email, $subject_to_admin );
				$subject_to_admin = str_replace( '[SUBJECT]', $sender_subject, $subject_to_admin );
				$subject_to_admin = str_replace( '[MESSAGE]', $sender_message, $subject_to_admin );

				// Replace placeholders for body.
				$body_to_admin = str_replace( '[SENDER_NAME]', $sender_name, $body_to_admin );
				$body_to_admin = str_replace( '[SENDER_EMAIL]', $sender_email, $body_to_admin );
				$body_to_admin = str_replace( '[SUBJECT]', $sender_subject, $body_to_admin );
				$body_to_admin = str_replace( '[MESSAGE]', $sender_message, $body_to_admin );

				// Send email to admin.
				STCFQ_Helper::send_email( $receiver_email, $subject_to_admin, $body_to_admin );
			}
			if (!session_id()) {
			    session_start();
			}
			$response = array(
				"success" => true,
				'data' => array( 'message' => $message )
			);
			$_SESSION['wholsale_save_response'] = $response;

			// wp_send_json_success( array( 'message' => $message ) );
			wp_redirect( get_permalink( get_page_by_path('wholesale') ) );
        	die;

		} catch ( Exception $exception ) {
			$wpdb->query( 'ROLLBACK;' );
			wp_send_json_error( $error_message );
		}
	}
	$response = array(
		"success" => false,
		'data' => array( 'message' => $errors )
	);
	if (!session_id()) {session_start();}
	$_SESSION['wholsale_save_response'] = $response;
	wp_redirect( get_permalink( get_page_by_path('wholesale') ) );
    die;
}
add_action( 'admin_post_nopriv_contact_form', 'city_shop_wholesell_query_entry' );
add_action( 'admin_post_contact_form', 'city_shop_wholesell_query_entry' );


function mtt_wholesale_create_menu() {
	$messages = add_menu_page(
		esc_html__( 'Wholesale Query', 'contact-form-query' ),
		esc_html__( 'Wholesale', 'contact-form-query' ),
		'manage_options',
		'wholesale_messages',
		'mtt_wholesale_messages',
		'dashicons-email',
		27
	);
	add_action( 'admin_print_styles-' . $messages, array( 'STCFQ_Admin_Menu', 'messages_assets' ) );

	$messages_submenu = add_submenu_page( 'stcfq_messages', esc_html__( 'Messages', 'contact-form-query' ), esc_html__( 'Messages', 'contact-form-query' ), 'manage_options', 'stcfq_messages', array( 'STCFQ_Admin_Menu', 'messages' ) );
	add_action( 'admin_print_styles-' . $messages_submenu, array( 'STCFQ_Admin_Menu', 'messages_assets' ) );

	$settings_submenu = add_submenu_page( 'stcfq_messages', esc_html__( 'Settings', 'contact-form-query' ), esc_html__( 'Settings', 'contact-form-query' ), 'manage_options', 'stcfq_settings', array( 'STCFQ_Admin_Menu', 'settings' ) );
	add_action( 'admin_print_styles-' . $settings_submenu, array( 'STCFQ_Admin_Menu', 'settings_assets' ) );
}
/* Action to create menu pages */
add_action( 'admin_menu', 'mtt_wholesale_create_menu' );

function mtt_wholesale_messages() {
	require_once get_template_directory() . '/inc/wholesale/route.php';
}