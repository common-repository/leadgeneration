<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* Styly settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/


// Form Width
$width = array(
	'id'   => 'width',
	'name' => 'width',	
	'type' => 'text',
	'val' => isset( $param['width'] ) ? $param['width'] : '480px',	
	'option' => array( 
		'placeholder' => '480px',
	),
);

// Width helper
$width_help = array (
	'title' => __('Specify form width. Can be:', 'leadgeneration'), 
	'ul' => array (
		__('<strong>any integer value in px</strong> (for example: "400px" will set form width to 400px);', 'leadgeneration'),
		__('<strong>any integer value in %</strong> (for example: "80%" will set form width to 80% of the window width);', 'leadgeneration'),
		__('<strong>auto</strong> - the browser calculates the form width.', 'leadgeneration'),
	),
);

// Form Background
$background  = array(
	'id'   => 'background',
	'name' => 'background',	
	'type' => 'color',
	'val' => isset( $param['background'] ) ? $param['background'] : '#ffffff',	
);

// Form Background helper
$background_help = array (
	'text' => __('Specify form background color.', 'leadgeneration'),	
);

// Responsive rule
$responsive = array(
	'id'   => 'responsive',
	'name' => 'responsive',	
	'type' => 'checkbox',
	'val' => isset( $param['responsive'] ) ? $param['responsive'] : '0',
	'func' => 'responsive',
);

$responsive_breakpoint = array(
	'id'   => 'responsive_breakpoint',
	'name' => 'responsive_breakpoint',	
	'type' => 'number',
	'val' => isset( $param['responsive_breakpoint'] ) ? $param['responsive_breakpoint'] : '480',	
	'option' => array (
		'min' => '1',
		'max' => '1400',
		'step' => '1',
		'placeholder' => '480',
	),
);

$responsive_help = array (
	'title' => __('Specify the window breakpoint (width) when the form will accept responsive rules defined below this option', 'leadgeneration'),
	'ul' => array(
		__('any integer value (for example: 480 will set form responsive rules at 480px and resolutions below that value)', 'leadgeneration'),
	),
);

// Form Margin
$margin = array(
	'id'   => 'margin',
	'name' => 'margin',	
	'type' => 'text',
	'val' => isset( $param['margin'] ) ? $param['margin'] : '0 auto',	
	'option' => array( 
		'placeholder' => '0 auto',
	),
);

// Form Margin helper
$margin_help = array (
	'title' => __('Specify form margins. Can be:', 'leadgeneration'),
	'ul' => array (
		__('any integer value in px (for example: "20px" will set form margins to 20px)', 'leadgeneration'),	
		__('if you enter 0, the form will have not margins', 'leadgeneration'),
		__('when four values are specified, the margins apply to the top, right, bottom, and left in that order (clockwise)', 'leadgeneration'),
	),
);

// Form Padding
$padding = array(
	'id'   => 'padding',
	'name' => 'padding',	
	'type' => 'text',
	'val' => isset( $param['padding'] ) ? $param['padding'] : '30px',	
	'option' => array( 
		'placeholder' => '0px',
	),
);

// Form Padding helper
$padding_help = array (
	'title' => __('Specify form inner padding. Can be:', 'leadgeneration'),
	'ul' => array (
		__('any integer value in px (for example: "10px" will set form inner paddings to 10px)', 'leadgeneration'),
		__('if you enter 0, the form will have not paddings', 'leadgeneration'),
		__('when four values are specified, the paddings apply to the top, right, bottom, and left in that order (clockwise)', 'leadgeneration'),
	),
);

// Border Radius
$border_radius  = array(
	'id'   => 'border_radius',
	'name' => 'border_radius',	
	'type' => 'text',
	'val' => isset($param['border_radius']) ? $param['border_radius'] : '0px',	
	'option' => array (		
		'placeholder' => '0',
	),
);

// Border Radius helper
$border_radius_help = array (
	'title' => __('Specify form border radius in px.', 'leadgeneration'),
	'ul' => array (
		__('any integer value in px (for example: "10px" will set border radius to 10px)', 'leadgeneration'),
		__('if you enter 0, the form will have not radius', 'leadgeneration'),
		__('when four values are specified, the radius apply to the top, right, bottom, and left in that order (clockwise)', 'leadgeneration'),
	),
);

// Border Style
$border_style  = array(
	'id'   => 'border_style',
	'name' => 'border_style',	
	'type' => 'select',
	'val' => isset( $param['border_style'] ) ? $param['border_style'] : 'solid',	
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
	'text' => __('Choose a border style for your form.', 'leadgeneration'),	
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

// Form Shadow
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
		__('Outset - outer shadow of form', 'leadgeneration'),
		__('Inset - inner shadow of form', 'leadgeneration'),
	),
);

// Form Shadow Horizontal Position
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

// Popup Shadow Vertical Position
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

// Popup Shadow Blur Radius
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

// Popup Shadow Spread
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

// Form Shadow Color
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

// Form field Title font size
$title_size = array(
	'id'   => 'title_size',
	'name' => 'title_size',	
	'type' => 'number',
	'val' => isset( $param['title_size'] ) ? $param['title_size'] : '16',	
	'option' => array (
		'min' => '8',
		'max' => '54',
		'step' => '1',
		'placeholder' => '16',
	),
);

// Form field Title font size helper
$title_size_help = array (
	'text' => __('Set the font size for form Title content in px', 'leadgeneration'),
);


// Form Title Font Family
$title_font = array(
	'id'   => 'title_font',
	'name' => 'title_font',	
	'type' => 'select',
	'val' => isset( $param['title_font'] ) ? $param['title_font'] : 'inherit',	
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

// Form Title Font Weight
$title_font_weight = array(
	'id'   => 'title_font_weight',
	'name' => 'title_font_weight',	
	'type' => 'select',
	'val' => isset( $param['title_font_weight'] ) ? $param['title_font_weight'] : 'normal',	
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

// Form Title Font Style
$title_font_style = array(
	'id'   => 'title_font_style',
	'name' => 'title_font_style',	
	'type' => 'select',
	'val' => isset( $param['title_font_style'] ) ? $param['title_font_style'] : 'normal',	
	'option' => array (
		'normal' => 'Normal',
		'italic' => 'Italic',		
	),
);

// Form Title Align
$title_align = array(
	'id'   => 'title_align',
	'name' => 'title_align',	
	'type' => 'select',
	'val' => isset( $param['title_align'] ) ? $param['title_align'] : 'left',	
	'option' => array (
		'left' => 'Left',
		'center' => 'Center',		
		'right' => 'Right',
	),
);

// Form Title Color
$title_color = array(
	'id'   => 'title_color',
	'name' => 'title_color',	
	'type' => 'color',
	'val' => isset( $param['title_color'] ) ? $param['title_color'] : '#383838',	
	'option' => array (		
		'placeholder' => '#383838',
	),
);