<?php 
	/**
		* Admin Page Class
		*
		* @package     WPLG
		* @subpackage  
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	namespace leadgeneration;
	if ( ! defined( 'ABSPATH' ) ) exit;
	class WPLG_Admin {					
		
		public function __construct( ) {	
			
			add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
			remove_all_filters( 'lg_create_option' );
			add_filter( 'lg_create_option', array( $this, 'create_option' ) );
			remove_all_filters( 'lg_help_tip' );
			add_filter( 'lg_help_tip', array( $this, 'help_tooltip' ) );
			add_action( 'plugins_loaded', array( $this, 'plugin_check' ) );
			add_filter( 'admin_footer_text', array( $this, 'rate_us' ) );
			$this->includes();
		}
		
		private function includes() {			
			require_once 'class-db-update.php';		
			require_once 'class-js-packer.php';			
		}
		function add_menu_page() {			
			add_menu_page( 'WordPress Lead Generation', 'Lead Generation', 'manage_options', 'leadgeneration', array( $this, 'main_page' ), 'dashicons-megaphone' );
			add_submenu_page( 'leadgeneration', 'About  LeadGeneration ', 'About', 'manage_options', 'leadgeneration' );	
			add_submenu_page( 'leadgeneration', 'Lead Generation Tool Popups', 'Popups', 'manage_options', 'leadgeneration-popups', array( $this, 'main_page' ) );
			add_submenu_page( 'leadgeneration', 'Lead Generation Tool Forms', 'Forms', 'manage_options', 'leadgeneration-forms', array( $this, 'main_page' ) );
			add_submenu_page( 'leadgeneration', 'Lead Generation Tool Mails', 'Emails', 'manage_options', 'leadgeneration-mails', array( $this, 'main_page' ) );			
			add_submenu_page( 'leadgeneration', 'Lead Generation Tool Buttons', 'Buttons', 'manage_options', 'leadgeneration-buttons', array( $this, 'main_page' ) );
		}
		
		
		function main_page() {
			global $typenow;
			$typenow = 'leadgeneration';
			$page =  isset( $_REQUEST["page"] ) ? sanitize_text_field( $_REQUEST["page"] ) : 'main';
			$page_tool = explode('-', $page);	
			if( !empty( $page_tool[1] ) ) {
				require_once WPLG_PLUGIN_DIR . 'admin/' . $page_tool[1] . '/main.php';				
			}
			else {
				require_once WPLG_PLUGIN_DIR . 'admin/general/main.php';
			}
			if ( isset( $page_tool[1] ) ) {
				self:: admin_style_script( $page_tool[1] );
			}
			
		}
		
		function admin_style_script( $tool ) {
			wp_enqueue_style( 'leadgeneration', WPLG_PLUGIN_URL . 'assets/css/admin.min.css', false, WPLG_VERSION );			
			$admin_style = WPLG_PLUGIN_DIR . '/assets/css/' . $tool . '/admin.min.css';
			$admin_script = WPLG_PLUGIN_DIR . '/assets/js/' . $tool . '/admin.min.js';				
			if ( file_exists( $admin_style ) ) {
				wp_enqueue_style( 'lg-tool', WPLG_PLUGIN_URL . 'assets/css/' . $tool . '/admin.min.css', array(), WPLG_VERSION );	
			}
			if ( file_exists( $admin_script ) ) {					
				wp_enqueue_script( 'lg-tool', WPLG_PLUGIN_URL . 'assets/js/' . $tool . '/admin.min.js', array('wp-color-picker'), WPLG_VERSION );
			}				
			wp_enqueue_script( 'leadgeneration', WPLG_PLUGIN_URL . 'assets/js/admin.min.js', array('wp-color-picker'), WPLG_VERSION );
			wp_localize_script( 'leadgeneration', 'lg_count', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'wp-color-picker' );
			wp_enqueue_script( 'lg-color-picker-alpha', WPLG_PLUGIN_URL . 'assets/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ) );			
			wp_enqueue_script( 'jquery-ui-tooltip' );
			wp_enqueue_script( 'jquery-ui-sortable' );
			wp_enqueue_script( 'jquery-ui-droppable' );	
			if ( $tool == 'forms' ) {
				wp_enqueue_script( 'lg-tool-preview', WPLG_PLUGIN_URL . 'assets/js/' . $tool . '/preview.min.js', array('jquery'), WPLG_VERSION );
			}
			elseif ( $tool == 'buttons' ) {
				wp_enqueue_style( 'lg-fontawesome', WPLG_PLUGIN_URL . 'assets/vendors/fontawesome/css/fontawesome-all.min.css', array(), WPLG_VERSION );
				wp_enqueue_script( 'lg-fonticonpicker', WPLG_PLUGIN_URL . 'assets/vendors/fonticonpicker/fonticonpicker.min.js', array('jquery'), WPLG_VERSION );
				wp_enqueue_style( 'lg-fonticonpicker', WPLG_PLUGIN_URL . 'assets/vendors/fonticonpicker/css/fonticonpicker.min.css', array(), WPLG_VERSION );
				wp_enqueue_style( 'lg-fonticonpicker-darkgrey', WPLG_PLUGIN_URL . 'assets/vendors/fonticonpicker/fonticonpicker.darkgrey.min.css', array(), WPLG_VERSION );
				wp_enqueue_script( 'lg-tool-preview', WPLG_PLUGIN_URL . 'assets/js/' . $tool . '/preview.min.js', array('jquery'), WPLG_VERSION );
			}
		}
		
		
		function create_option ($arg){
			$id        = isset($arg['id'])     ? $arg['id']                         : null;
			$name      = isset($arg['name'])   ? $arg['name']                       : '';
			$type      = isset($arg['type'])   ? $arg['type']                       : '';
			$func      = !empty($arg['func'])  ? ' onchange="'.$arg['func'].'();"'  : '';
			$options   = isset($arg['option']) ? $arg['option']                     : '';
			$val       = $arg['val'];
			$separator = isset($arg['sep'])    ? $arg['sep']                        : '';			
			// create radio fields
			if ($type == 'radio'){									
				$option = '';
				foreach ($options as $key => $value){
					$select = ($key == $val) ? 'checked="checked"' : '';				
					$option .= '<input name="param['.$name.']" type="radio" value="'.$key.'" id="lg_'.$id.'_'.$key.'" '.$select.$func.'><label for="lg_'.$id.'_'.$key.'"> '.$value.'</label>'.$separator;					
				}
				$field = $option;
			}
			
			// create checkbox field
			elseif ($type == 'checkbox'){							
				$select = !empty($val) ? 'checked="checked"' : '';
				$field = '<input type="checkbox" '.$select.$func.' id="lg_'.$id.'">'.$separator;	
				$field .= '<input type="hidden" name="param['.$name.']" value="">';
			}
			
			// create text field
			elseif ($type == 'text'){		
				$option = '';
				if ( is_array( $options ) ) {
					foreach ($options as $key => $value){ 
						$option .= ' ' . $key . '="' . $value . '"';
					}
				}				
				$field = '<input name="param[' . $name . ']" type="text" value="' . $val . '" id="lg_' . $id . '"' . $func . $option .'>'.$separator;
			}
			
			// create number field
			elseif ($type == 'number'){	
				$option = '';
				if ( is_array( $options ) ) {
					foreach ($options as $key => $value){ 
						$option .= ' ' . $key . '="' . $value . '"';
					}
				}
				$field = '<input name="param['.$name.']" type="number"  value="'.$val.'" id="lg_'.$id.'"' . $func . $option . '>'.$separator;
			}
			
			// create color field
			elseif ($type == 'color'){							
				$field = '<input name="param['.$name.']" type="text" value="'.$val.'" class="wp-color-picker-field" data-alpha="true" id="lg_'.$id.'">'.$separator;
			}
			
			// create select field
			elseif ($type == 'select'){													
				$option = '';
				foreach ($options as $key => $value){
					$select = ($key == $val) ? 'selected="selected"' : '';
					$option .= '<option value="'.$key.'" '.$select.'>'.$value.'</option>';
				}
				$field = '<select name="param['.$name.']"'.$func.' id="lg_'.$id.'">';
				$field .= $option;
				$field .= '</select>' . $separator;
			}
			
			// create editor field
			elseif ($type == 'editor'){
				$settings = array(
				'wpautop'       => 0,
				'textarea_name' => 'param['.$name.']',	
				'textarea_rows' => 15,
				);
				$field = wp_editor( $val, $id, $settings );				
			}		
			
			// create textarea field
			elseif ($type == 'textarea'){
				$field = '<textarea name="param['.$name.']" id="lg_'.$id.'">'.$val.'</textarea>'.$separator;	
			}
			
			return $field;
		}
		
		function help_tooltip( $arg ) {
			$tooltip = '';
			foreach ( $arg as $key => $value ) {
				if( $key == 'title' ) {
					$tooltip .= $value . '<p/>';
				}
				elseif ( $key == 'ul' ) {
					$tooltip .= '<ul>';
					$arr = $value;
					foreach ( $arr as $val ) {
						$tooltip .= '<li>' . $val . '</li>';
					}
					$tooltip .= '</ul>';
				}
				else {
					$tooltip .= $value;
				}
			}			
			$tooltip = "<span class='lg-help dashicons dashicons-editor-help' title='" .  $tooltip . "'></span>";
			return $tooltip;			
		}
		
		public function plugin_check() {
			if ( isset( $_POST['lg_plugin_nonce_field'] ) ) {
				if ( !empty( $_POST ) && wp_verify_nonce( $_POST['lg_plugin_nonce_field'],'lg_plugin_action' ) && current_user_can( 'manage_options' ) ) {
					self:: save_data();
				}
			}
		}
		public function save_data(){
			global $wpdb;
			$objItem = new LG_DB_Update();
			$add = ( isset($_REQUEST['add'] ) ) ? absint( $_REQUEST['add'] ) : '';
			$data = ( isset($_REQUEST['data'] ) ) ? sanitize_text_field( $_REQUEST['data'] ) : '';
			$page = sanitize_text_field( $_REQUEST['page'] );
			$page_tool = explode( '-', $page );
			$tool = $page_tool[1];
			$tool_id = absint( $_POST['tool_id'] );
			$param = $_POST['param'];			
			$param_new = self::lg_sanitize_tool( $param, $tool );		
				
			$info = array();
			$info['id'] = $tool_id;
			$info['title'] = sanitize_text_field( $_POST['title'] );
			$info['param'] = $param_new;
			$info['tool'] = $tool;
			if ( isset( $_POST['submit'] ) ) {
				if ( absint( $_POST['add'] ) == '1') {
					$objItem->addNewItem( $data, $info, $tool );					
					header( 'Location:admin.php?page=' . $page . '&tab=add_new&act=update&id=' . $tool_id . '&info=saved' );
					exit;
				} 
				elseif ( absint($_POST['add'] ) == '2' ) {
					$objItem->updItem( $data, $info, $tool );
					header( 'Location:admin.php?page=' . $page . '&tab=add_new&act=update&id=' . $tool_id . '&info=update' );
					exit;
				}
			}
		}			
		function lg_sanitize_tool ( $param, $tool ) {
			$param_new = array();
			if ( $tool == 'popups' ) {							
				foreach ( $param as $key => $value ) {
					if ( $key == 'content') {
						$param_new[$key] = $value;					
					}
					else {
						$param_new[$key] = sanitize_text_field( $value );
					}				
				}				
			}
			elseif( $tool == 'forms' ) {
				$allowed_html = array(
					'div' => array(
						'class' => true,					
					),
					'input' => array(
						'name' => true,
						'type' => true,
						'class' => true,
						'id' => true,
						'value' => true,
						'placeholder' => true,
						'data-required' => true,
						'checked' => true,
						'selected' => true,
					),
					'textarea' => array(
						'name' => true,
						'type' => true,
						'class' => true,
						'id' => true,
						'value' => true,
						'placeholder' => true,
						'data-required' => true,
						'rows' => true,
					),
					'select' => array(
						'name' => true,
						'type' => true,
						'class' => true,
						'id' => true,
						'value' => true,
						'placeholder' => true,
						'data-required' => true,					
					),
					'option' => array(
						'value' => true,
						'selected' => true,
					),
					'label' => array (
						'for' => true,
					),
				);
				foreach ( $param as $key => $value ) {
					if ( $key == 'content') {
						$param_new[$key] = wp_kses( $value, $allowed_html );						
					}
					elseif ( $key == 'admin_mail_content' || $key == 'user_mail_content' || $key == 'save_mail_content' || $key == 'sending_failed_send' || $key == 'sending_confirmation_text' || $key == 'recaptcha_error') {
						$param_new[$key] = wp_kses_post( $value );
					}
					else {
						$param_new[$key] = sanitize_text_field( $value );
					}				
				}
			
			}
			else {
				foreach ( $param as $key => $value ) {
					$param_new[$key] = sanitize_text_field( $value );
				}
			}
			return $param_new;
			
		}
			
		function rate_us( $footer_text ) {
			global $typenow;
			if ( $typenow == 'leadgeneration' ) {
				$rate_text = sprintf( __( 'Thank you for using <a href="%1$s" target="_blank">Lead Generation</a>! Please <a href="%2$s" target="_blank">rate us on WordPress.org</a>', 'leadgeneration' ),
				'https://wow-estore.com/lead-generation/#pro',
				'https://wordpress.org/plugins/leadgeneration/reviews/?rate=5#new-post'
				);				
				return str_replace( '</span>', '', $footer_text ) . ' | ' . $rate_text . '</span>';
				} else {
				return $footer_text;
			}
		}		
	}									