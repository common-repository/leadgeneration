<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Mails settings
		*
		* @package     Lead_Generation
		* @subpackage  Settings
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
// Email to admin
$admin_mail = array(
	'id'   => 'admin_mail',
	'name' => 'admin_mail',	
	'type' => 'checkbox',
	'val' => isset( $param['admin_mail'] ) ? $param['admin_mail'] : '1',
	'func' => 'adminmail',
);

$admin_mail_help = array ( 
	'text' => __('Settings for sending email to admin.', 'formgeneration'),
);

$admin_mail_to = array(
	'id'   => 'admin_mail_to',
	'name' => 'admin_mail_to',	
	'type' => 'text',
	'val' => isset( $param['admin_mail_to'] ) ? $param['admin_mail_to'] : get_option( 'admin_email' ),	
); 

$admin_email_from = array(
	'id'   => 'admin_email_from',
	'name' => 'admin_email_from',	
	'type' => 'text',
	'val' => isset( $param['admin_email_from'] ) ? $param['admin_email_from'] : get_option( 'admin_email' ),	
); 

$admin_mail_from = array(
	'id'   => 'admin_mail_from',
	'name' => 'admin_mail_from',	
	'type' => 'text',
	'val' => isset( $param['admin_mail_from'] ) ? $param['admin_mail_from'] : get_option( 'blogname' ),	
); 

$admin_mail_subject = array(
	'id'   => 'admin_mail_subject',
	'name' => 'admin_mail_subject',	
	'type' => 'text',
	'val' => isset( $param['admin_mail_subject'] ) ? $param['admin_mail_subject'] : __('New letter from the site', 'formgeneration'),	
);

$admin_mail_content = array(
	'id'   => 'admin_mail_content',
	'name' => 'admin_mail_content',	
	'type' => 'editor',
	'val' => isset( $param['admin_mail_content'] ) ? $param['admin_mail_content'] : '',	
);

// Email to user
$user_mail = array(
	'id'   => 'user_mail',
	'name' => 'user_mail',	
	'type' => 'checkbox',
	'val' => isset( $param['user_mail'] ) ? $param['user_mail'] : '0',	
	'func' => 'usermail',
);

$user_mail_help = array ( 
	'text' => __('Settings for sending email to user.', 'formgeneration'),
);

$user_mail_to = array(
	'id'   => 'user_mail_to',
	'name' => 'user_mail_to',	
	'type' => 'text',
	'val' => isset( $param['user_mail_to'] ) ? $param['user_mail_to'] : '',	
); 

$user_email_from = array(
	'id'   => 'user_email_from',
	'name' => 'user_email_from',	
	'type' => 'text',
	'val' => isset( $param['user_email_from'] ) ? $param['user_email_from'] : get_option( 'admin_email' ),	
); 

$user_mail_from = array(
	'id'   => 'user_mail_from',
	'name' => 'user_mail_from',	
	'type' => 'text',
	'val' => isset( $param['user_mail_from'] ) ? $param['user_mail_from'] : get_option( 'blogname' ) . '<' . get_option( 'user_email' ) . '>',	
); 

$user_mail_subject = array(
	'id'   => 'user_mail_subject',
	'name' => 'user_mail_subject',	
	'type' => 'text',
	'val' => isset( $param['user_mail_subject'] ) ? $param['user_mail_subject'] : __('New letter from the site', 'formgeneration'),	
);

$user_mail_content = array(
	'id'   => 'user_mail_content',
	'name' => 'user_mail_content',	
	'type' => 'editor',
	'val' => isset( $param['user_mail_content'] ) ? $param['user_mail_content'] : '',	
);

// Email to admin
$save_mail = array(
	'id'   => 'save_mail',
	'name' => 'save_mail',	
	'type' => 'checkbox',
	'val' => isset( $param['save_mail'] ) ? $param['save_mail'] : '0',
	'func' => 'savemail',
);

$save_mail_help = array ( 
	'text' => __('Settings for saving email in database.', 'formgeneration'),
);

$save_mail_email = array(
	'id'   => 'save_mail_email',
	'name' => 'save_mail_email',	
	'type' => 'text',
	'val' => isset( $param['save_mail_email'] ) ? $param['save_mail_email'] : '',
	'option' => array (
		'placeholder' => __('Enter Primary Email', 'formgeneration'),
	),
);

$save_mail_title = array(
	'id'   => 'save_mail_title',
	'name' => 'save_mail_title',	
	'type' => 'text',
	'val' => isset( $param['save_mail_title'] ) ? $param['save_mail_title'] : '',	
	'option' => array (
		'placeholder' => __('Maybe the User Name', 'formgeneration'),
	),
);

$save_mail_content = array(
	'id'   => 'save_mail_content',
	'name' => 'save_mail_content',	
	'type' => 'editor',
	'val' => isset( $param['save_mail_content'] ) ? $param['save_mail_content'] : '',	
);