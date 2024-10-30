<?php
	/**
		* Plugin Name: Lead Generation
		* Plugin URI: https://wordpress.org/plugins/leadgeneration/
		* Description: The easiest way for Lead Generation with WordPress.
		* Author: Dmytro Lobov
		* Author URI: https://dayes.co/
		* Version: 1.1.6
		* Text Domain: leadgeneration
		* Domain Path: languages
		*
		* Lead Generation is free software: you can redistribute it and/or modify
		* it under the terms of the GNU General Public License as published by
		* the Free Software Foundation, either version 2 of the License, or
		* any later version.
		*
		* You should have received a copy of the GNU General Public License
		* along with Easy Digital Downloads. If not, see <http://www.gnu.org/licenses/>.
		*
		* @package WPLG
		* @category Core
		* @author Dmytro Lobov
		* @version 1.0
	*/
	namespace leadgeneration;
	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	if ( ! class_exists( 'LeadGeneration' ) ) :
	
	final class LeadGeneration {
		
		private static $instance;	
		
		public static function instance() {			
			
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof LeadGeneration ) ) {
				self::$instance = new LeadGeneration;
				self::$instance->setup_constants();
				
				register_activation_hook( __FILE__, array( self::$instance, 'plugin_activate' ) );
				register_deactivation_hook( __FILE__, array( self::$instance, 'plugin_deactivate' ) );
				
				add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
				add_filter( 'plugin_action_links', array( self::$instance, 'action_links' ), 10, 2 );
				
				self::$instance->includes();
				
				self::$instance->admin  = new WPLG_Admin();
				self::$instance->public = new WPLG_Public();				
			}		
			return self::$instance;	
		}
		
		/**
			* Throw error on object clone.
			*
			* The whole idea of the singleton design pattern is that there is a single
			* object therefore, we don't want the object to be cloned.
			*
			* @since 1.0
			* @access protected
			* @return void
		*/
		public function __clone() {
			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'leadgeneration' ), '1.0' );
		}
		
		/**
			* Disable unserializing of the class.
			*
			* @since 1.0
			* @access protected
			* @return void
		*/
		public function __wakeup() {
			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'leadgeneration' ), '1.0' );
		}
		
		/**
			* Setup plugin constants.
			*
			* @access private
			* @since 1.0
			* @return void
		*/
		private function setup_constants() {
			
			// Plugin version.
			if ( ! defined( 'WPLG_VERSION' ) ) {
				define( 'WPLG_VERSION', '1.1.6' );
			}
			
			if ( ! defined( 'WPLG_NAME' ) ) {
				define( 'WPLG_NAME', 'Lead Generation' );
			}
			
			// Plugin Folder Path.
			if ( ! defined( 'WPLG_PLUGIN_DIR' ) ) {
				define( 'WPLG_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}
			
			// Plugin Folder URL.
			if ( ! defined( 'WPLG_PLUGIN_URL' ) ) {
				define( 'WPLG_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}
			
			// Plugin Root File.
			if ( ! defined( 'WPLG_PLUGIN_FILE' ) ) {
				define( 'WPLG_PLUGIN_FILE', __FILE__ );
			}			
		}
		
		private function includes() {
			require_once plugin_dir_path( __FILE__ ) . 'admin/class-admin.php';			
			require_once plugin_dir_path( __FILE__ ) . 'public/class-public.php';			
		}
		
		// Activate & diactivate
		function plugin_activate() {
			require_once plugin_dir_path( __FILE__ ) . 'activator.php';	
		}
		function plugin_deactivate() {	
			require_once plugin_dir_path( __FILE__ ) . 'deactivator.php';
		}
		
		function load_textdomain(){
			load_plugin_textdomain( 'leadgeneration', FALSE, dirname( plugin_basename(__FILE__) ).'/languages/' );
		}
		
		function action_links( $actions, $plugin_file ){
			if( false === strpos( $plugin_file, basename(__FILE__) ) )
			return $actions;
			$settings_link = '<a href="admin.php?page=leadgeneration">Settings</a>';
			array_unshift( $actions, $settings_link );
			return $actions;
		}	
		
	}
	
	endif; // End if class_exists check.
	
	
	function leadgeneration() {
		return LeadGeneration::instance();
	}	
	// Get Running.
	leadgeneration();	