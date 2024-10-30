<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* Styll settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

// Width
$width = array(
	'id'   => 'width',
	'name' => 'width',	
	'type' => 'text',
	'val' => isset( $param['width'] ) ? $param['width'] : '100px',	
	'option' => array( 
		'placeholder' => '100px',
	),
);

// Width helper
$width_help = array (
	'title' => __('Specify button width. Can be:', 'leadgeneration'), 
	'ul' => array (
		__('<strong>any integer value in px</strong> (for example: "400px" will set button width to 400px);', 'leadgeneration'),
		__('<strong>any integer value in %</strong> (for example: "80%" will set button width to 80% of the window width);', 'leadgeneration'),
		__('<strong>auto</strong> - the browser calculates the button width.', 'leadgeneration'),
	),
);

// Height
$height = array(
	'id'   => 'height',
	'name' => 'height',	
	'type' => 'text',
	'val' => isset( $param['height'] ) ? $param['height'] : '50px',
	'option' => array( 
		'placeholder' => '50px',
	),
);

// Height helper
$height_help = array (
'title' => __('Specify button height. Can be:', 'leadgeneration'),
	'ul' => array (
		__('<strong>any integer value in px</strong> (for example: "400px" will set button height to 400px);', 'leadgeneration'),
		__('<strong>any integer value in %</strong> (for example: "80%" will set button height to 80% of the window height);', 'leadgeneration'),
		__('<strong>auto</strong> - the browser calculates the button height.', 'leadgeneration'),
	),
);

// Z-index
$zindex  = array(
	'id'   => 'zindex',
	'name' => 'zindex',	
	'type' => 'number',
	'val' => isset( $param['zindex'] ) ? $param['zindex'] : '999',
	'option' => array (
		'min' => '1',
		'max' => '9999999',
		'step' => '1',
		'placeholder' => '999',
	),
);

// Z-index helper
$zindex_help = array(
	'text' => __('The z-index property specifies the stack order of an element. An element with greater stack order is always in front of an element with a lower stack order.', 'leadgeneration'),
);

// Text color
$color  = array(
	'id'   => 'color',
	'name' => 'color',	
	'type' => 'color',
	'val' => isset( $param['color'] ) ? $param['color'] : '#ffffff',		
);

$color_help = array (
	'text' => __('Specify button text color.', 'leadgeneration'),	
);

// Background
$background  = array(
	'id'   => 'background',
	'name' => 'background',	
	'type' => 'color',
	'val' => isset( $param['background'] ) ? $param['background'] : '#1f9ef8',		
);

// Background helper
$background_help = array (
	'text' => __('Specify button background color.', 'leadgeneration'),	
);


// Hover Text color
$hover_color  = array(
	'id'   => 'hover_color',
	'name' => 'hover_color',	
	'type' => 'color',
	'val' => isset( $param['hover_color'] ) ? $param['hover_color'] : '#ffffff',		
);

$hover_color_help = array (
	'text' => __('Specify button text color when hover on the button.', 'leadgeneration'),	
);

// Hover Background
$hover_background  = array(
	'id'   => 'hover_background',
	'name' => 'hover_background',	
	'type' => 'color',
	'val' => isset( $param['hover_background'] ) ? $param['hover_background'] : '#0090f7',		
);

// Hover Background helper
$hover_background_help = array (
	'text' => __('Specify button background color when hover on the button.', 'leadgeneration'),	
);


// Border Radius
$border_radius  = array(
	'id'   => 'border_radius',
	'name' => 'border_radius',	
	'type' => 'text',
	'val' => isset($param['border_radius']) ? $param['border_radius'] : '5px',	
	'option' => array (
		'placeholder' => '0',		
	),
);

// Border Radius helper
$border_radius_help = array (
	'title' => __('Set the radius of the corners of the element.', 'leadgeneration'),
	'ul' => array (
		__('any integer value in px (for example: "5px" will set button corners radius to 5px)', 'leadgeneration'),	
		__('if you enter 0, the button corners will have not radius', 'leadgeneration'),
		__('when four values are specified, the radius apply to the top, right, bottom, and left in that order (clockwise). Example: 5px 0 5px 5px', 'leadgeneration'),
	),
);

// Border Style
$border_style  = array(
	'id'   => 'border_style',
	'name' => 'border_style',	
	'type' => 'select',
	'val' => isset( $param['border_style'] ) ? $param['border_style'] : 'none',	
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
	'func' => 'border',
);

// Border Style helper
$border_style_help = array (
	'text' => __('Choose a border style for your button.', 'leadgeneration'),	
);

// Border Color
$border_color  = array(
	'id'   => 'border_color',
	'name' => 'border_color',	
	'type' => 'color',
	'val' => isset( $param['border_color'] ) ? $param['border_color'] : '#383838',
	'option' => array( 
		'placeholder' => '#383838',
	),
);

// Border Width
$border_width  = array(
	'id'   => 'border_width',
	'name' => 'border_width',	
	'type' => 'number',
	'val' => isset( $param['border_width'] ) ? $param['border_width'] : '1',
	'option' => array (
		'min' => '0',
		'max' => '100',
		'step' => '1',
		'placeholder' => '0',
	),
);

// Shadow
$shadow = array(
	'id'   => 'shadow',
	'name' => 'shadow',	
	'type' => 'select',
	'val' => isset( $param['shadow'] ) ? $param['shadow'] : 'none',	
	'option' => array (
		'none' => __('None', 'leadgeneration'),
		'outset' => __('Outset', 'leadgeneration'),
		'inset' => __('Inset', 'leadgeneration'),
	),
	'func' => 'shadow',
);

$shadow_help = array (
	'title' => __('Set the box shadow.', 'leadgeneration'),	
	'ul' => array (
		__('None - no shadow is displayed', 'leadgeneration'),
		__('Outset - outer shadow', 'leadgeneration'),
		__('Inset - inner shadow', 'leadgeneration'),
	),
);

// Shadow Horizontal Position
$shadow_h_offset  = array(
	'id'   => 'shadow_h_offset',
	'name' => 'shadow_h_offset',	
	'type' => 'number',
	'val' => isset( $param['shadow_h_offset'] ) ? $param['shadow_h_offset'] : '0',
	'option' => array (
		'min' => '-50',
		'max' => '50',
		'step' => '1',
		'placeholder' => '0',
	),
);

$shadow_h_offset_help = array (
	'text' => __('The horizontal offset of the shadow. A positive value puts the shadow on the right side of the box, a negative value puts the shadow on the left side of the box.', 'leadgeneration'),	
);

// Shadow Vertical Position
$shadow_v_offset  = array(
	'id'   => 'shadow_v_offset',
	'name' => 'shadow_v_offset',	
	'type' => 'number',
	'val' => isset( $param['shadow_v_offset'] ) ? $param['shadow_v_offset'] : '0',	
	'option' => array (
		'min' => '-50',
		'max' => '50',
		'step' => '1',
		'placeholder' => '0',
	),
);

$shadow_v_offset_help = array (
	'text' => __('The vertical offset of the shadow. A positive value puts the shadow below the box, a negative value puts the shadow above the box.', 'leadgeneration'),	
);

// Shadow Blur Radius
$shadow_blur  = array(
	'id'   => 'shadow_blur',
	'name' => 'shadow_blur',	
	'type' => 'number',
	'val' => isset( $param['shadow_blur'] ) ? $param['shadow_blur'] : '3',	
	'option' => array (
		'min' => '0',
		'max' => '100',
		'step' => '1',
		'placeholder' => '0',
	),
);

$shadow_blur_help = array (
	'text' => __('The blur radius. The higher the number, the more blurred the shadow will be.', 'leadgeneration'),	
);

// Shadow Spread
$shadow_spread  = array(
	'id'   => 'shadow_spread',
	'name' => 'shadow_spread',	
	'type' => 'number',
	'val' => isset( $param['shadow_spread'] ) ? $param['shadow_spread'] : '0',	
	'option' => array (
		'min' => '-100',
		'max' => '100',
		'step' => '1',
		'placeholder' => '0',
	),
);

$shadow_spread_help = array (
	'text' => __('The spread radius. A positive value increases the size of the shadow, a negative value decreases the size of the shadow.', 'leadgeneration'),	
);

// Shadow Color
$shadow_color  = array(
	'id'   => 'shadow_color',
	'name' => 'shadow_color',	
	'type' => 'color',
	'val' => isset( $param['shadow_color'] ) ? $param['shadow_color'] : '#020202',
	'option' => array (	
		'placeholder' => '#020202',
	),
);

$shadow_color_help = array (
	'text' => __('The color of the shadow.', 'leadgeneration'),	
);

// Font size
$font_size = array(
	'id'   => 'font_size',
	'name' => 'font_size',	
	'type' => 'number',
	'val' => isset( $param['font_size'] ) ? $param['font_size'] : '16',	
	'option' => array (
		'min' => '8',
		'max' => '54',
		'step' => '1',
		'placeholder' => '16',
	),
);

// Font size helper
$font_size_help = array (
	'text' => __('Set the font size for button in px', 'leadgeneration'),
);

// Font Family
$font_family = array(
	'id'   => 'font_family',
	'name' => 'font_family',	
	'type' => 'select',
	'val' => isset( $param['font_family'] ) ? $param['font_family'] : 'inherit',	
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

// Font Weight
$font_weight = array(
	'id'   => 'font_weight',
	'name' => 'font_weight',	
	'type' => 'select',
	'val' => isset( $param['font_weight'] ) ? $param['font_weight'] : 'normal',	
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
$font_style = array(
	'id'   => 'font_style',
	'name' => 'font_style',	
	'type' => 'select',
	'val' => isset( $param['font_style'] ) ? $param['font_style'] : 'normal',	
	'option' => array (
		'normal' => 'Normal',
		'italic' => 'Italic',		
	),
);
