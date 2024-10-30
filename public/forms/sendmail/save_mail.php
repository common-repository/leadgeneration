<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Save the mail into database
		*
		* @package     Lead_Generation
		* @subpackage  Public Form
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	$table_mails = $wpdb->prefix . "lg_mails";
	
	// Get fields for mail saving
	$primary_email = $param['save_mail_email'];
	$title = $param['save_mail_title'];
	$content = $param['save_mail_content'];
	
	// Change parametres
	$primary_email_save = str_replace( $arguments, $post_arr, $primary_email );
	$title_save = str_replace( $arguments, $post_arr, $title );
	$content_save = str_replace( $arguments, $post_arr, $content );
	
	$date = current_time('mysql');
	
	// Saving into the database			
	$wpdb->insert(	$table_mails, array( 
		'title' => $title_save, 
		'date' => $date, 
		'email' => $primary_email_save, 
		'form_title' => $val->title, 
		'form_id' => $form_id, 
		'message' => $content_save,
	) );