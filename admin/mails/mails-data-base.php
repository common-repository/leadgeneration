<?php if ( ! defined( 'ABSPATH' ) ) exit;
		
		/**
		* Mails database
		*
		* @package     Lead_Generation
		* @subpackage  Mails
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	global $wpdb;
	$data = $wpdb->prefix . 'lg_mails';
	$info = ( isset( $_REQUEST['info'] ) ) ? sanitize_text_field( $_REQUEST['info'] ) : '';
	if ( $info == 'saved' ) {
		echo '<div class="updated" id="message"><p><strong>' . __( 'Record Added', 'leadgeneration' ) . '</strong>.</p></div>';
	}
	elseif ( $info == 'update' ) {
		echo '<div class="updated" id="message"><p><strong>' . __( 'Record Updated', 'leadgeneration' ) . '</strong>.</p></div>';
	}
	elseif ( $info == 'delete' ) {
		$delid = absint( $_GET['did'] );
		$page = ( isset( $_REQUEST['page'] ) ) ? sanitize_text_field( $_REQUEST['page'] ) : '';				
		$wpdb->query( 'delete from ' . $data . ' where id=' . $delid );
		
		echo '<div class="updated" id="message"><p><strong>' . __( 'Record Deleted', 'leadgeneration' ) . '</strong>.</p></div>';
	}
$resultat = $wpdb->get_results( 'SELECT * FROM ' . $data . ' order by id asc' );