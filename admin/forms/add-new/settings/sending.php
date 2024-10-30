<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* Sending Settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

$sending_options = array (
	'id'   => 'sending_options',
	'name' => 'sending_options',	
	'type' => 'radio',
	'val' => isset( $param['sending_options'] ) ? $param['sending_options'] : '1',	
	'option' => array( 
		'1' => __('Show confirmation text','leadgeneration'),
		'2' => __('Redirect','leadgeneration'),
	),
	'func' => 'sending',
	'sep' => '&emsp;',
);

$sending_redirect_url = array (
	'id'   => 'sending_redirect_url',
	'name' => 'sending_redirect_url',	
	'type' => 'text',
	'val' => isset( $param['sending_redirect_url'] ) ? $param['sending_redirect_url'] : '',		
);

$sending_close_text = array (
	'id'   => 'sending_close_text',
	'name' => 'sending_close_text',	
	'type' => 'checkbox',
	'val' => isset( $param['sending_close_text'] ) ? $param['sending_close_text'] : 0,		
	'func' => 'sendingclosetext',
);

$sending_close_text_help = array (
	'text' => __('You can set the time in seconds after which the confirmation text of the successful sending will be hidden. And also set the closing of the popup, if the form is in it', 'leadgeneration'),
);

$sending_close_time = array (
	'id'   => 'sending_close_time',
	'name' => 'sending_close_time',	
	'type' => 'number',
	'val' => isset( $param['sending_close_time'] ) ? $param['sending_close_time'] : 3,
	'option' => array( 
		'min' => '0',
		'max' => '500',
		'step' => '1',
		'placeholder' => '3',
	),
);


$arr_modal = $wpdb->get_results("SELECT * FROM " . $data . " WHERE tool='popups' order by title asc");
$popups_arr = array();
if ($arr_modal) {
	foreach ($arr_modal as $key => $value) {
		$prev_id = $value->id;
		$prev_title = !empty( $value->title ) ? $value->title : __('Untitle Popup', 'leadgeneration');	
		$popups_arr['lg-popup-' . $prev_id] = $prev_title;			
	}	
}
else {
	$popups_arr[] = __('Not created yet','leadgeneration');
}

$sending_close_popup_id = array(
	'id'   => 'sending_close_popup_id',
	'name' => 'sending_close_popup_id',	
	'type' => 'select',
	'val' => isset( $param['sending_close_popup_id'] ) ? $param['sending_close_popup_id'] : '',	
	'option' => $popups_arr,	
);

// Sender's message was sent successfully
$sending_confirmation_text = array(
	'id'   => 'sending_confirmation_text',
	'name' => 'sending_confirmation_text',	
	'type' => 'editor',
	'val' => isset( $param['sending_confirmation_text'] ) ? $param['sending_confirmation_text'] : '<p style="text-align: center;">' . __( 'Thank you for your message. It has been sent.', 'leadgeneration' ) . '</p>',	

);

// Sender's message failed to send
$sending_failed_send = array(
	'id'   => 'sending_failed_send',
	'name' => 'sending_failed_send',	
	'type' => 'editor',
	'val' => isset( $param['sending_failed_send'] ) ? $param['sending_failed_send'] : '<p style="text-align: center;">' . __( 'There was an error trying to send your message. Please try again later.', 'leadgeneration' ) . '</p>',	

);