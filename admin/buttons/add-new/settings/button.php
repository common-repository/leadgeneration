<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* Button settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.1
*/

include_once ('icons.php');

// Type
$type  = array(
	'id'   => 'type',
	'name' => 'type',	
	'type' => 'select',
	'val' => isset( $param['type'] ) ? $param['type'] : 'standart',	
	'option' => array(
		'standart'        => __('Standart', 'leadgeneration'),
		'floating'        => __('Floating', 'leadgeneration'),	
	),
	'func' => 'button_type',
);

// Type helper
$type_help = array (
	'title' => __('Select the type of button you want to use:', 'leadgeneration'),
	'ul' => apply_filters('lg_popups_triggers_help', array (
		__('<strong>Standart</strong> - inserting a button only via shortcode into the content;', 'leadgeneration'),		
		__('<strong>Floating</strong> - fixed floating button on the page;', 'leadgeneration'),		
		) ),
);

// Appearance
$appearance  = array(
	'id'   => 'appearance',
	'name' => 'appearance',	
	'type' => 'select',
	'val' => isset( $param['appearance'] ) ? $param['appearance'] : 'standart',	
	'option' => array(
		'text'        => __('Only Text', 'leadgeneration'),
		'text_icon'   => __('Text & Icon', 'leadgeneration'),	
		'icon'        => __('Icon', 'leadgeneration'),	
	),
	'func' => 'button_appearance',
);

// Appearance helper
$appearance_help = array (
	'text' => __('Set the button appearance.', 'leadgeneration'),	
);

// Location
$location  = array(
	'id'   => 'location',
	'name' => 'location',	
	'type' => 'select',
	'val' => isset( $param['location'] ) ? $param['location'] : 'center',	
	'option' => array(		
		'topLeft'       => __('Top Left location on the page', 'leadgeneration'),
		'topCenter'     => __('Top Center location on the page', 'leadgeneration'),
		'topRight'      => __('Top Right location on the page', 'leadgeneration'),
		'bottomLeft'    => __('Bottom Left location on the page', 'leadgeneration'),
		'bottomCenter'  => __('Bottom Center location on the page', 'leadgeneration'),
		'bottomRight'   => __('Bottom Right location on the page', 'leadgeneration'),
		'left'          => __('Left location on the page', 'leadgeneration'),
		'right'         => __('Right location on the page', 'leadgeneration'),
	),
	'func' => 'button_location',
);

// Location helper
$location_help = array (
	'text' => __('Specify modal window location on screen.', 'leadgeneration'),
);

// Location Top
$location_top = array(
	'id'   => 'location_top',
	'name' => 'location_top',	
	'type' => 'number',
	'val' => isset( $param['location_top'] ) ? $param['location_top'] : '0',
	'option' => array (
		'min' => '-500',
		'max' => '500',
		'step' => '1',
		'placeholder' => '0',
	),
);

// Location Top helper
$location_top_help = array (
	'text' => __('Distance from the top edge of the screen in px.', 'leadgeneration'),
);

// Location Bottom
$location_bottom = array(
	'id'   => 'location_bottom',
	'name' => 'location_bottom',	
	'type' => 'number',
	'val' => isset( $param['location_bottom'] ) ? $param['location_bottom'] : '0',
	'option' => array (
		'min' => '-500',
		'max' => '500',
		'step' => '1',
		'placeholder' => '0',
	),
);

// Location Top helper
$location_bottom_help = array (
	'text' => __('Distance from the bottom  edge of the screen in px.', 'leadgeneration'),
);

// Location Left
$location_left = array(
	'id'   => 'location_left',
	'name' => 'location_left',	
	'type' => 'number',
	'val' => isset( $param['location_left'] ) ? $param['location_left'] : '0',
	'option' => array (
		'min' => '-500',
		'max' => '500',
		'step' => '1',
		'placeholder' => '0',
	),
);

// Location Top helper
$location_left_help = array (
	'text' => __('Distance from the left edge of the screen in px.', 'leadgeneration'),
);

// Location Right
$location_right = array(
	'id'   => 'location_right',
	'name' => 'location_right',	
	'type' => 'number',
	'val' => isset( $param['location_right'] ) ? $param['location_right'] : '0',
	'option' => array (
		'min' => '-500',
		'max' => '500',
		'step' => '1',
		'placeholder' => '0',
	),
);

// Location Top helper
$location_right_help = array (
	'text' => __('Distance from the right edge of the screen in px.', 'leadgeneration'),
);

// Button Text
$text = array(
	'id'   => 'text',
	'name' => 'text',	
	'type' => 'text',
	'val' => isset( $param['text'] ) ? $param['text'] : __( 'Text', 'leadgeneration'),
	'option' => array (
		'placeholder' => 'Text',		
	),
);

// Button Text helper
$text_help = array (
	'text' => __('Enter Text for button.', 'leadgeneration'),
);

// Rotating Text
$rotate_button  = array(
	'id'   => 'rotate_button',
	'name' => 'rotate_button',	
	'type' => 'select',
	'val' => isset( $param['rotate_button'] ) ? $param['rotate_button'] : '0deg',	
	'option' => array(		
		'0deg'       => __('none', 'leadgeneration'),
		'90deg'     => __('90&deg;', 'leadgeneration'),
		'180deg'    => __('180&deg;', 'leadgeneration'),
		'270deg'    => __('270&deg;', 'leadgeneration'),		
	),	
);

$icons_new = array();
foreach ( $icons as $key => $value ) {
	$icons_new[$value] = $value;
}

// Button Icon
$icon = array(
	'id'   => 'icon',
	'name' => 'icon',	
	'type' => 'select',
	'val' => isset( $param['icon'] ) ? $param['icon'] : '',
	'option' => $icons_new,
);

// Button Icon helper
$icon_help = array (
	'text' => __('Select the Icon for button', 'leadgeneration'),
);

// Rotating Icons
$rotate_icon  = array(
	'id'   => 'rotate_icon',
	'name' => 'rotate_icon',	
	'type' => 'select',
	'val' => isset( $param['rotate_icon'] ) ? $param['rotate_icon'] : '',	
	'option' => array(		
		''       => __('none', 'leadgeneration'),
		'fa-rotate-90'     => __('90&deg;', 'leadgeneration'),
		'fa-rotate-180'    => __('180&deg;', 'leadgeneration'),
		'fa-rotate-270'    => __('270&deg;', 'leadgeneration'),		
	),	
);

// Button Text location
$text_location = array(
	'id'   => 'text_location',
	'name' => 'text_location',	
	'type' => 'select',
	'val' => isset( $param['text_location'] ) ? $param['text_location'] : 'before',	
	'option' => array(				
		'before'   => __('Before Icon', 'leadgeneration'),
		'after'    => __('After Icon', 'leadgeneration'),				
	),	
);

$text_location_help = array (
	'text' => __('Set where the button text will be displayed.', 'leadgeneration'),
);

// Button Class
$button_class = array(
	'id'   => 'button_class',
	'name' => 'button_class',	
	'type' => 'text',
	'val' => isset( $param['button_class'] ) ? $param['button_class'] : '',	
);


$button_class_help = array (
	'text' => __('Add extra class to the button.', 'leadgeneration'),
);

// Button ID
$button_id = array(
	'id'   => 'button_id',
	'name' => 'button_id',	
	'type' => 'text',
	'val' => isset( $param['button_id'] ) ? $param['button_id'] : '',	
);


$button_id_help = array (
	'text' => __('Add ID to the button.', 'leadgeneration'),
);

// Button URL 
$button_url = array(
	'id'   => 'button_url',
	'name' => 'button_url',	
	'type' => 'text',
	'val' => isset( $param['button_url'] ) ? $param['button_url'] : '',	
);


$button_url_help = array (
	'text' => __('Enter URL for the button or leave empty.', 'leadgeneration'),
);

