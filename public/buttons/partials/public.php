<?php 
	/**
		* Public Button on Front-End
		*
		* @package     Lead_Generation
		* @subpackage  Public 
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.1
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	if ( $param['appearance'] == 'text' ) {
		$btn_text = $param['text'];	
	}
	else if ( $param['appearance'] == 'text_icon' ) {
		if ( $param['text_location'] == 'after' ) {
			$btn_text = '<i class="' . $param['icon'] .' ' . $param['rotate_icon'] .'"></i> ' . $param['text'];			
		} 
		else {
			$btn_text = $param['text'] . ' <i class="' . $param['icon'] .' ' . $param['rotate_icon'] .'"></i>';
		}
		
	}
	else if ( $param['appearance'] == 'icon' ) {
		$btn_text = '<i class="' . $param['icon'] .' ' . $param['rotate_icon'] .'"></i>';
	}
	
	$float = '';
	if ( $param['type'] == 'floating') {
		$float = ' lg-' . $param['location'];
	}
	
	$class = '';
	if ( !empty( $param['button_class'] ) ) {
		$class = ' ' . $param['button_class'];
	}
		
	$badge = '';
	if ( !empty( $param['enable_badge'] ) ) { 
		$badge = '<span class="badge">' . $param['badge_content'] . '</span>';
	}
	
	$button_id = '';
	if ( !empty( $param['button_id'] ) ) {
		$button_id = ' id="' . $param['button_id'] . '"';
	}
	
	$button_url = '';
	if ( !empty( $param['button_url'] ) ) {
		$button_url = ' data-url="' . $param['button_url'] . '"';		
	}
	
	$button = '<div class="lg-button-' . $val->id . $float . $class . '"' . $button_id . $button_url . ' onclick="btnaction(' . $val->id . ')">' . $btn_text . $badge . '</div>';
	
	echo $button;
?>