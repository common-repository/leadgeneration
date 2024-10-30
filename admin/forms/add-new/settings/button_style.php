<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* Button style settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

// Width
$button_width = array(
	'id'   => 'button_width',
	'name' => 'button_width',	
	'type' => 'text',
	'val' => isset( $param['button_width'] ) ? $param['button_width'] : 'auto',	
	'option' => array( 
		'placeholder' => 'auto',
	),
);

// Width helper
$button_width_help = array (
	'title' => __('Specify width. Can be:', 'leadgeneration'), 
	'ul' => array (
		__('<strong>any integer value in px</strong> (for example: "150px" will set width to 150px);', 'leadgeneration'),
		__('<strong>any integer value in %</strong> (for example: "80%" will set width to 80% of the window width);', 'leadgeneration'),
		__('<strong>auto</strong> - the browser calculates the width.', 'leadgeneration'),
	),
);

// Text color
$button_color  = array(
	'id'   => 'button_color',
	'name' => 'button_color',	
	'type' => 'color',
	'val' => isset( $param['button_color'] ) ? $param['button_color'] : '#ffffff',
	'option' => array( 
		'placeholder' => '#ffffff',
	),
);

// Background
$button_background  = array(
	'id'   => 'button_background',
	'name' => 'button_background',	
	'type' => 'color',
	'val' => isset( $param['button_background'] ) ? $param['button_background'] : '#8cfa16',	
);

// Background Hover 
$button_background_hover  = array(
	'id'   => 'button_background_hover',
	'name' => 'button_background_hover',	
	'type' => 'color',
	'val' => isset( $param['button_background_hover'] ) ? $param['button_background_hover'] : '#16fa84',	
);

// Button alignment 
$button_align = array(
	'id'   => 'button_align',
	'name' => 'button_align',	
	'type' => 'select',
	'val' => isset( $param['button_align'] ) ? $param['button_align'] : 'center',	
	'option' => array (
		'left' => 'Left',
		'center' => 'Center',		
		'right' => 'Right',
	),
);

// Button text alignment
$button_text_align = array(
	'id'   => 'button_text_align',
	'name' => 'button_text_align',	
	'type' => 'select',
	'val' => isset( $param['button_text_align'] ) ? $param['button_text_align'] : 'center',	
	'option' => array (
		'left' => 'Left',
		'center' => 'Center',		
		'right' => 'Right',
	),
);