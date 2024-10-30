<?php
	/**
		* Send Email to Admin
		*
		* @package     Lead_Generation
		* @subpackage  Sendmail
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;	
	
	// Get fields for email
	$admin_mail_to = $param['admin_mail_to'];
	$admin_mail_from = $param['admin_mail_from'];
	$admin_mail_subject = $param['admin_mail_subject'];	
	$admin_mail_content = $param['admin_mail_content'];
	$admin_email_from = !empty( $param['admin_email_from'] ) ? $param['admin_email_from'] : get_option( 'admin_email' );
	
	// Change parametres
	$admin_mail_to = str_replace( $arguments, $post_arr, $admin_mail_to );
	$admin_mail_from = str_replace( $arguments, $post_arr, $admin_mail_from );
	$admin_mail_subject = str_replace( $arguments, $post_arr, $admin_mail_subject );
	$admin_mail_content = str_replace( $arguments, $post_arr, $admin_mail_content );
	
	$headers = array(
    'From: '. $admin_mail_from .' <' . $admin_email_from . '>',
    'content-type: text/html; charset=utf-8\r\n',
   );	
	
	$mail_admin = wp_mail( $admin_mail_to, $admin_mail_subject, $admin_mail_content, $headers );
	
?>