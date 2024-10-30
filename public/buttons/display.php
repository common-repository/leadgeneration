<?php 
	/**
		* Display Popup via option Show
		*
		* @package     Lead_Generation
		* @subpackage  Public 
		* @copyright   Copyright (c) 2017, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	ob_start();
	include( 'partials/public.php' );
	$path_style = $this->basedir . $val->tool . '-' . $val->id . '.css';
	$path_script = $this->basedir . $val->tool . '-' . $val->id . '.js';
	
	$button = ob_get_contents();
	ob_end_clean();
	
	$param['users'] = !empty( $param['users'] ) ? $param['users'] : 'all';
	if ( $param['users'] == 'all' ) {
		$user = true;
	}
	elseif ( $param['users'] == 'authorized' ) {
		if ( is_user_logged_in() ) {
			if ( $param['users_roles'] == 'all'){
				$user = true;
			}
			else {
				$current_user = wp_get_current_user();
				if ( $param['users_roles'] == $current_user->roles[0] ) {
					$user = true;										
				}
				else {
					$user = false;										
				}									
			}								
		}
		else {
			$user = false;
		}							
	}
	elseif ( $param['users'] == 'unauthorized' ) {
		$user = !is_user_logged_in();
	}
	
	if ( !empty( $param['language_enable'] ) ) {
		$item_lang = $param['language'];
		$site_lang = get_locale();				
		if (substr($site_lang, 0, 2) == $item_lang) {
			$lang = true;
		}
		else {
			$lang = false;
		}
	}
	else if ( empty($param['language_enable'] ) ){
		$lang = true;
	}
		
	if ( $user == true && $lang == true ) {
		echo $button;
		$time = !empty( $param['time'] ) ? $param['time'] : '';
		wp_enqueue_script( 'lg-buttons', WPLG_PLUGIN_URL . 'assets/js/buttons/jquery.buttons.js', array( 'jquery' ), '1.0' );
		wp_localize_script( 'lg-buttons', 'lg_count', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		if ( file_exists( $path_style ) ) {
			wp_enqueue_style( $val->tool . '-' . $val->id, $this->baseurl . $val->tool . '-' . $val->id . '.css', array(), $time);	
		}
		if ( file_exists( $path_script ) ) {					
			wp_enqueue_script( $val->tool . '-' . $val->id, $this->baseurl . $val->tool . '-' . $val->id . '.js', array( 'jquery' ), $time );
		}				
		do_action( 'lg_tools_counter', 'button', $val->id );
	}	