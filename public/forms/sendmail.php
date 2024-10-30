<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Sendmail
		*
		* @package     Lead_Generation
		* @subpackage  Public Form
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	// Get ID form
	$form_id = absint( $_POST['form_id'] );
	$post_arr = array();
	
	// Sanitize $_POST
	foreach ($_POST as $key => $value) {
		if ( is_array( $value ) == true){
			$value = implode(", ", $value);
		}
    $post_arr[$key] = sanitize_text_field( $value );
	}	
	// Create array for change element
	$arguments = array();	
	foreach ($post_arr as $key => $value) {
		$arguments[] = '{' . $key . '}';
	}	
	// Get Tool parametrs from database
	global $wpdb;
	$table = $wpdb->prefix . "lg_tools";		
	$sSQL = $wpdb->prepare( "select * from $table WHERE id = %d", $form_id );
	$result = $wpdb->get_results($sSQL);
	if (count($result) > 0) {
		foreach ($result as $key => $val) {		
			$param = unserialize( $val->param );
			$response = array();
			if( !empty( $param['recaptcha_enable'] ) ) {
				include ('sendmail/captcha.php');
			}
			else {
				$robot = true;
			}	
			if( $robot === true ) {		
				$mail_admin = true;
				$mail_user = true;
				if ( !empty( $param['save_mail'] ) ) {
					include ('sendmail/save_mail.php');
				}
				if ( !empty( $param['admin_mail'] ) ) {
					include ('sendmail/admin_mail.php');
				}
				if ( !empty( $param['user_mail'] ) ) {
					include ('sendmail/user_mail.php');
				}				
				include ('sendmail/confirmation.php');
				do_action('lg_email_integration', $arguments, $post_arr, $param );
			}
			wp_send_json( $response );
		}
	}	
die();		