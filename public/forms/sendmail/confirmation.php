<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Confirmation after seding
		*
		* @package     Lead_Generation
		* @subpackage  Public Form
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
			
	if ( $mail_admin == false || $mail_user == false ) {
		$response['failed'] = 'true';
		$response['message'] = $param['sending_failed_send'];				
	}
	else {		
		if ( $param['sending_options'] == 1 ) {		
			$response['failed'] = 'false';
			$response['sending'] = '1';
			$response['close'] = !empty( $param['sending_close_text'] ) ? 'true' : 'false';
			$response['timer'] = !empty( $param['sending_close_time'] ) ? $param['sending_close_time'] : '3';	
			$response['close_popup'] = !empty( $param['sending_close_popup'] ) ? 'true' : 'false';
			$response['message'] = $param['sending_confirmation_text'];				
		}
		else {
			$response['failed'] = 'false';
			$response['sending'] = '2';
			$response['redirect'] = $param['sending_redirect_url'];
		}	
	}	