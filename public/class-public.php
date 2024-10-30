<?php 
	/**
		* Public Class
		*
		* @package     Lead_Generation
		* @subpackage  Public
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	namespace leadgeneration;
	if ( ! defined( 'ABSPATH' ) ) exit;
	class WPLG_Public {
		public function __construct() {	
			$upload = wp_upload_dir();
			$this->basedir = $upload['basedir'] . '/lg-tools/';
			$this->baseurl = $upload['baseurl'] . '/lg-tools/';
			add_action( 'wp_head', array( $this, 'header_style' ) );
			add_action( 'wp_footer', array( $this, 'footer_style' ) );
			add_shortcode( 'Popup', array( $this, 'shortcode_popup' ) );
			add_shortcode( 'Form', array( $this, 'shortcode_form' ) );
			add_shortcode( 'Button', array( $this, 'shortcode_button' ) );
			add_filter( 'the_content', array( $this, 'after_post_content' ) );
			// Senf forms
			if( defined('DOING_AJAX') && DOING_AJAX ){
				add_action( 'wp_ajax_lg_send_form', array( $this, 'send_form' ) );
				add_action( 'wp_ajax_nopriv_lg_send_form', array( $this, 'send_form' ) );
				add_action( 'wp_ajax_lg_count', array( $this, 'lg_count' ) );
				add_action( 'wp_ajax_nopriv_lg_count', array( $this, 'lg_count' ) );
				
			}			
			add_action( 'wp_footer', array( $this, 'display') );		
			add_action( 'lg_tools_counter', array( $this, 'view_counter'), 2, 10 );
		}		
		
		function header_style() {
			wp_enqueue_style( 'lg-main', WPLG_PLUGIN_URL . 'assets/css/main.min.css', array(), '1.0' );			
		}
		
		function footer_style() { 
			wp_enqueue_style( 'lg-animate', WPLG_PLUGIN_URL . 'assets/css/animate.min.css', array(), '1.0' );
			wp_enqueue_style( 'lg-fontawesome', WPLG_PLUGIN_URL . 'assets/vendors/fontawesome/css/fontawesome-all.min.css', array(), WPLG_VERSION );
		}
		
		function shortcode_popup( $atts ) {
			ob_start();
			require plugin_dir_path( __FILE__ ) . 'popups/shortcode.php';				
			$shortcode = ob_get_contents();
			ob_end_clean();					
			return $shortcode;
		}
		
		function shortcode_form( $atts ) {
			ob_start();
			require plugin_dir_path( __FILE__ ) . 'forms/shortcode.php';				
			$shortcode = ob_get_contents();
			ob_end_clean();					
			return $shortcode;
		}
		
		function shortcode_button( $atts ) {
			ob_start();
			require plugin_dir_path( __FILE__ ) . 'buttons/shortcode.php';				
			$shortcode = ob_get_contents();
			ob_end_clean();					
			return $shortcode;
		}
		
		function send_form() {
			require plugin_dir_path( __FILE__ ) . 'forms/sendmail.php';
		}
		
		function display() {
			require plugin_dir_path( __FILE__ ) . 'display.php';
		}
		
		function view_counter ( $tool, $id ) {
			$should_count = true;			
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; 
			$bot = "Bot/|robot|Slurp/|yahoo";
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) ) {
				$should_count = false;
			}
			if( $should_count == true ) {
				$option_name = '_lg_tool_' . $tool . '_view_counter_' . $id;
				$tool_view = get_option( $option_name, '0' );				
				update_option( $option_name, ( $tool_view+1 ) );
			}
		}
		
		function lg_count() {
			$type = sanitize_text_field( $_POST['count_type'] );			
			$id = absint( $_POST['tool_id'] );		
			$tool = sanitize_text_field( $_POST['tool'] );	
			if( $type == 'reset' ) {
				$option_name_view = '_lg_tool_' . $tool . '_view_counter_' . $id;
				$option_name_action = '_lg_tool_' . $tool . '_action_counter_' . $id;
				$delete_view = delete_option( $option_name_view );
				$delete_action = delete_option( $option_name_action );
				if ( $delete_view == true ) {
					$response = array(
					"result" => 'OK',													
					);
					wp_send_json( $response );	
				}				
				exit();
			}
			
			$option_name = '_lg_tool_' . $tool . '_' . $type . '_counter_' . $id;
			$tool_view = get_option( $option_name, '0' );				
			update_option( $option_name, ( $tool_view+1 ) );		
		}
		
		function after_post_content( $content ) {
			global $wpdb;
			$table = $wpdb->prefix . "lg_tools";    
			$result = $wpdb->get_results("SELECT * FROM " . $table . " WHERE tool='forms' order by id asc");    	
			if ( count( $result ) > 0 ) {
				foreach ( $result as $key => $val ) {
					$param = unserialize( $val->param );
					if ( !empty($param['after_post_content'] ) ) {
						if ( is_single() && in_the_loop() && is_main_query() ) {
							return $content . do_shortcode('[Form id='.$val->id.']');
						}
					}				
				}
			}   
			return $content;
		}		
	}		