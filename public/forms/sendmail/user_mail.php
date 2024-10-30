<?php
	/**
		* Send Email to User
		*
		* @package     Lead_Generation
		* @subpackage  Sendmail
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;	
	
	// Get fields for email
	$user_mail_to = $param['user_mail_to'];
	$user_mail_from = $param['user_mail_from'];
	$user_mail_subject = $param['user_mail_subject'];	
	$user_mail_content = $param['user_mail_content'];
	$user_email_from = !empty( $param['user_email_from'] ) ? $param['user_email_from'] : get_option( 'admin_email' );
	
	// Change parametres
	$user_mail_to = str_replace( $arguments, $post_arr, $user_mail_to );
	$user_mail_from = str_replace( $arguments, $post_arr, $user_mail_from );
	$user_mail_subject = str_replace( $arguments, $post_arr, $user_mail_subject );
	$user_mail_content = str_replace( $arguments, $post_arr, $user_mail_content );
	
	$headers = array(
    'From: '. $admin_mail_from .' <' . $user_email_from . '>',
    'content-type: text/html; charset=utf-8\r\n',
   );		
	
	$mail_user = wp_mail( $user_mail_to, $user_mail_subject, $user_mail_content, $headers );
	
?>