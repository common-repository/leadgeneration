<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* reCAPTCHA settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

$recaptcha_enable = array(
	'id'   => 'recaptcha_enable',
	'name' => 'recaptcha_enable',	
	'type' => 'checkbox',
	'val' => isset( $param['recaptcha_enable'] ) ? $param['recaptcha_enable'] : '0',		
	'func' => 'recaptcha',
);

$secret_key = array(
	'id'   => 'secret_key',
	'name' => 'secret_key',	
	'type' => 'text',
	'val' => isset( $param['secret_key'] ) ? $param['secret_key'] : '',		
);

$scale_recaptcha = array(
	'id'   => 'scale_recaptcha',
	'name' => 'scale_recaptcha',	
	'type' => 'text',
	'val' => isset( $param['scale_recaptcha'] ) ? $param['scale_recaptcha'] : '0.77',	
	'option' => array (
		'placeholder' => '0.77',
		),
);

$scale_recaptcha_help = array (
	'text' => __('The function is specified with either one or two values, which represent the amount of scaling to be applied in each direction', 'leadgeneration'),
);

$recaptcha_error = array(
	'id'   => 'recaptcha_error',
	'name' => 'recaptcha_error',	
	'type' => 'editor',
	'val' => isset( $param['recaptcha_error'] ) ? $param['recaptcha_error'] : '<p style="text-align: center;"><span style="color: #ff0000;">Please retry CAPTCHA</span></p>',		
);