<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
	* Fields Style settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

// Margin
$field_margin = array(
	'id'   => 'field_margin',
	'name' => 'field_margin',	
	'type' => 'text',
	'val' => isset( $param['field_margin'] ) ? $param['field_margin'] : '10px',
	'option' => array( 
		'placeholder' => '0',
	),
);

// Margin helper
$field_margin_help = array (
	'title' => __('Specify form field margins. Can be:', 'leadgeneration'),
	'ul' => array (
		__('any integer value in px (for example: "10px" will set form field margins to 10px)', 'leadgeneration'),	
		__('if you enter 0, the form will have not margins', 'leadgeneration'),
		__('when four values are specified, the margins apply to the top, right, bottom, and left in that order (clockwise)', 'leadgeneration'),
	),
);

// Padding
$field_padding = array(
	'id'   => 'field_padding',
	'name' => 'field_padding',	
	'type' => 'text',
	'val' => isset( $param['field_padding'] ) ? $param['field_padding'] : '10px',	
	'option' => array( 
		'placeholder' => '0',
	),
);

// Padding helper
$field_padding_help = array (
	'title' => __('Specify form fild inner padding. Can be:', 'leadgeneration'),
	'ul' => array (
		__('any integer value in px (for example: "10px" will set form inner paddings to 10px)', 'leadgeneration'),
		__('if you enter 0, the form will have not paddings', 'leadgeneration'),
		__('when four values are specified, the paddings apply to the top, right, bottom, and left in that order (clockwise)', 'leadgeneration'),
	),
);

// Background
$field_background  = array(
	'id'   => 'field_background',
	'name' => 'field_background',	
	'type' => 'color',
	'val' => isset( $param['field_background'] ) ? $param['field_background'] : '#ffffff',	
);

// Background helper
$field_background_help = array (
	'text' => __('Specify form background color.', 'leadgeneration'),	
);

// Font size
$field_font_size = array(
	'id'   => 'field_font_size',
	'name' => 'field_font_size',	
	'type' => 'number',
	'val' => isset( $param['field_font_size'] ) ? $param['field_font_size'] : '16',	
	'option' => array (
		'min' => '8',
		'max' => '54',
		'step' => '1',
		'placeholder' => '16',
	),
);

// Font size helper
$field_font_size_help = array (
	'text' => __('Set the font size for fields in px', 'leadgeneration'),
);

// Font Family
$field_font = array(
	'id'   => 'field_font',
	'name' => 'field_font',	
	'type' => 'select',
	'val' => isset( $param['field_font'] ) ? $param['field_font'] : 'inherit',	
	'option' => array (
		'inherit' => __('Use Your Themes', 'leadgeneration'),
		'Sans-Serif' => 'Sans-Serif',
		'Tahoma' => 'Tahoma',
		'Georgia' => 'Georgia',
		'Comic Sans MS' => 'Comic Sans MS',
		'Arial' => 'Arial',
		'Lucida Grande' => 'Lucida Grande',
		'Times New Roman' => 'Times New Roman',
	),
);

// Font weight
$field_font_weight = array(
	'id'   => 'field_font_weight',
	'name' => 'field_font_weight',	
	'type' => 'select',
	'val' => isset( $param['field_font_weight'] ) ? $param['field_font_weight'] : 'normal',	
	'option' => array (
		'normal' => 'Normal',
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	),
);

// Font Style
$field_font_style = array(
	'id'   => 'field_font_style',
	'name' => 'field_font_style',	
	'type' => 'select',
	'val' => isset( $param['field_font_style'] ) ? $param['field_font_style'] : 'normal',	
	'option' => array (
		'normal' => 'Normal',
		'italic' => 'Italic',		
	),
);

// Text color
$field_font_color = array(
	'id'   => 'field_font_color',
	'name' => 'field_font_color',	
	'type' => 'color',
	'val' => isset( $param['field_font_color'] ) ? $param['field_font_color'] : '#383838',	
	'option' => array (		
		'placeholder' => '#383838',
	),
);

// Placeholder Color
$field_placeholder_color = array(
	'id'   => 'field_placeholder_color',
	'name' => 'field_placeholder_color',	
	'type' => 'color',
	'val' => isset( $param['field_placeholder_color'] ) ? $param['field_placeholder_color'] : '#eeeeee',	
	'option' => array (		
		'placeholder' => '#eeeeee',
	),
);

// Placeholder Color helper
$field_placeholder_color_help = array (
	'title' => __('Specify color for input and textarea placeholder', 'leadgeneration'),
	'ul' => array (
		__('Not displayed in the form preview, but works on the frontend', 'leadgeneration'),			
	),
);


$field_border_radius  = array(
	'id'   => 'field_border_radius',
	'name' => 'field_border_radius',	
	'type' => 'text',
	'val' => isset($param['field_border_radius']) ? $param['field_border_radius'] : '0px',	
	'option' => array (		
		'placeholder' => '0px',
	),
);

// Border Radius helper
$field_border_radius_help = array (
	'text' => __('Specify form border radius in px.', 'leadgeneration'),	
);

// Border Style
$field_border_style  = array(
	'id'   => 'field_border_style',
	'name' => 'field_border_style',	
	'type' => 'select',
	'val' => isset( $param['field_border_style'] ) ? $param['field_border_style'] : 'solid',	
	'option' => array(		
		'none'    => __('None', 'leadgeneration'),	
		'solid'   => __('Solid', 'leadgeneration'),
		'dotted'  => __('Dotted', 'leadgeneration'),
		'dashed'  => __('Dashed', 'leadgeneration'),
		'double'  => __('Double', 'leadgeneration'),
		'groove'  => __('Groove', 'leadgeneration'),
		'inset'   => __('Inset', 'leadgeneration'),
		'outset'  => __('Outset', 'leadgeneration'),
		'ridge'   => __('Ridge', 'leadgeneration'),
	),
	'func' => 'field_border',
);

// Border Style helper
$field_border_style_help = array (
	'text' => __('Choose a border style for your form.', 'leadgeneration'),	
);

// Border Color
$field_border_color  = array(
	'id'   => 'field_border_color',
	'name' => 'field_border_color',	
	'type' => 'color',
	'val' => isset( $param['field_border_color'] ) ? $param['field_border_color'] : '#383838',
	'option' => array( 
		'placeholder' => '#383838',
	),
);

// Border Width
$field_border_width  = array(
	'id'   => 'field_border_width',
	'name' => 'field_border_width',	
	'type' => 'number',
	'val' => isset( $param['field_border_width'] ) ? $param['field_border_width'] : '1',
	'option' => array (
		'min' => '0',
		'max' => '100',
		'step' => '1',
		'placeholder' => '0',
	),
);

// Shadow
$field_shadow = array(
	'id'   => 'field_shadow',
	'name' => 'field_shadow',	
	'type' => 'select',
	'val' => isset( $param['field_shadow'] ) ? $param['field_shadow'] : 'none',	
	'option' => array (
		'none' => __('None', 'leadgeneration'),
		'outset' => __('Outset', 'leadgeneration'),
		'inset' => __('Inset', 'leadgeneration'),
	),
	'func' => 'field_shadow',
);

$field_shadow_help = array (
	'title' => __('Set the box shadow.', 'leadgeneration'),	
	'ul' => array (
		__('None - no shadow is displayed', 'leadgeneration'),
		__('Outset - outer shadow of form', 'leadgeneration'),
		__('Inset - inner shadow of form', 'leadgeneration'),
	),
);

//Shadow Horizontal Position
$field_shadow_h_offset  = array(
	'id'   => 'field_shadow_h_offset',
	'name' => 'field_shadow_h_offset',	
	'type' => 'number',
	'val' => isset( $param['field_shadow_h_offset'] ) ? $param['field_shadow_h_offset'] : '0',
	'option' => array (
		'min' => '-50',
		'max' => '50',
		'step' => '1',
		'placeholder' => '0',
	),
);

$field_shadow_h_offset_help = array (
	'text' => __('The horizontal offset of the shadow. A positive value puts the shadow on the right side of the box, a negative value puts the shadow on the left side of the box.', 'leadgeneration'),	
);

//Shadow Vertical Position
$field_shadow_v_offset  = array(
	'id'   => 'field_shadow_v_offset',
	'name' => 'field_shadow_v_offset',	
	'type' => 'number',
	'val' => isset( $param['field_shadow_v_offset'] ) ? $param['field_shadow_v_offset'] : '0',	
	'option' => array (
		'min' => '-50',
		'max' => '50',
		'step' => '1',
		'placeholder' => '0',
	),
);

$field_shadow_v_offset_help = array (
	'text' => __('The vertical offset of the shadow. A positive value puts the shadow below the box, a negative value puts the shadow above the box.', 'leadgeneration'),	
);

// Shadow Blur Radius
$field_shadow_blur  = array(
	'id'   => 'field_shadow_blur',
	'name' => 'field_shadow_blur',	
	'type' => 'number',
	'val' => isset( $param['field_shadow_blur'] ) ? $param['field_shadow_blur'] : '3',	
	'option' => array (
		'min' => '0',
		'max' => '100',
		'step' => '1',
		'placeholder' => '0',
	),
);

$field_shadow_blur_help = array (
	'text' => __('The blur radius. The higher the number, the more blurred the shadow will be.', 'leadgeneration'),	
);

//Shadow Spread
$field_shadow_spread  = array(
	'id'   => 'field_shadow_spread',
	'name' => 'field_shadow_spread',	
	'type' => 'number',
	'val' => isset( $param['field_shadow_spread'] ) ? $param['field_shadow_spread'] : '0',	
	'option' => array (
		'min' => '-100',
		'max' => '100',
		'step' => '1',
		'placeholder' => '0',
	),
);

$field_shadow_spread_help = array (
	'text' => __('The spread radius. A positive value increases the size of the shadow, a negative value decreases the size of the shadow.', 'leadgeneration'),	
);

// Shadow Color
$field_shadow_color  = array(
	'id'   => 'field_shadow_color',
	'name' => 'field_shadow_color',	
	'type' => 'color',
	'val' => isset( $param['field_shadow_color'] ) ? $param['field_shadow_color'] : '#020202',
	'option' => array (	
		'placeholder' => '#020202',
	),
);

$field_shadow_color_help = array (
	'text' => __('The color of the shadow.', 'leadgeneration'),	
);

