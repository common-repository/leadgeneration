<?php
	/**
		* ReCaptcha
		*
		* @package     Lead_Generation
		* @subpackage  Sendmail
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;	
	
	if ( isset( $post_arr['g-recaptcha-response'] ) ) {
		$response_token = $post_arr['g-recaptcha-response'];
		$secret = $param['secret_key'];
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		
		$response = wp_safe_remote_post( $url, array(
			'body' => array(
			'secret' => $secret,
			'response' => $response_token,
			'remoteip' => $_SERVER['REMOTE_ADDR'],
			),
		) );		
		
		$response = wp_remote_retrieve_body( $response );
		$response = json_decode( $response, true );
		
		if ( isset( $response['success'] ) && true == $response['success'] ) {
			$robot = true;
		}
		else {
			$response['failed'] = 'true';
			$response['message'] = $param['recaptcha_error'];			
			$robot = false;
		}	
	}	
	else {
		$response['failed'] = 'true';
		$response['message'] = $param['recaptcha_error'];
		$robot = false;
	}	