/* ========= INFORMATION ============================
	- document:  LeadGeneration!
	- author:    Dmytro Lobov 
	- version:   1.0
	- url:       https://wordpress.org/plugins/leadgeneration/

==================================================== */

<?php
		/**
		* Button Style generation
		*
		* @package     Lead_Generation
		* @subpackage  Generator
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;	
	
	$id = $val->id;
	
	// Button 
	$zindex = !empty( $param['zindex'] ) ? $param['zindex'] : '999';
	$type = !empty( $param['type'] ) ? $param['type'] : 'standart';
	if ( $type == 'standart' ) {
		$position = 'relative';
	}
	else {
		$position = 'fixed';
	}
	
	
	$width = !empty( $param['width'] ) ? $param['width'] : '100px';
	$height = !empty( $param['height'] ) ? $param['height'] : '50px';
	$rotate_button = !empty( $param['rotate_button'] ) ? $param['rotate_button'] : '0deg';
	$color = !empty( $param['color'] ) ? $param['color'] : '#ffffff';
	$background = !empty( $param['background'] ) ? $param['background'] : '#1f9ef8';	
	$hover_color = !empty( $param['hover_color'] ) ? $param['hover_color'] : '#ffffff';
	$hover_background = !empty( $param['hover_background'] ) ? $param['hover_background'] : '#0090f7';
	
	$location = !empty( $param['location'] ) ? $param['location'] : 'bottomRight';
	$location_top = !empty( $param['location_top'] ) ? $param['location_top'] : '0';
	$location_bottom = !empty( $param['location_bottom'] ) ? $param['location_bottom'] : '0';
	$location_left = !empty( $param['location_left'] ) ? $param['location_left'] : '0';
	$location_right = !empty( $param['location_right'] ) ? $param['location_right'] : '0';
	switch( $location ) {
		case 'topLeft':
		$loc = 'top: ' . $location_top . 'px;';
		$loc .= 'left: ' . $location_left . 'px;';
		break;
		case 'topCenter':
		$loc = 'top: ' . $location_top . 'px;';		
		break;
		case 'topRight':
		$loc = 'top: ' . $location_top . 'px;';
		$loc .= 'right: ' . $location_right . 'px;';
		break;
		case 'bottomLeft':
		$loc = 'bottom: ' . $location_bottom . 'px;';
		$loc .= 'left: ' . $location_left . 'px;';
		break;
		case 'bottomCenter':
		$loc = 'bottom: ' . $location_bottom . 'px;';		
		break;
		case 'bottomRight':
		$loc = 'bottom: ' . $location_bottom . 'px;';
		$loc .= 'right: ' . $location_right . 'px;';
		break;
		case 'left':
		$loc = 'left: ' . $location_left . 'px;';		
		break;
		case 'right':
		$loc = 'right: ' . $location_right . 'px;';		
		break;
		default:
		$loc = '';
	}	
	$border_radius = !empty( $param['border_radius'] ) ? $param['border_radius'] : '0';
	$border_style = !empty( $param['border_style'] ) ? $param['border_style'] : 'none';
	$border_color = !empty( $param['border_color'] ) ? $param['border_color'] : '#383838';
	$border_width = !empty( $param['border_width'] ) ? $param['border_width'] . 'px' : '0';	
	$shadow = !empty( $param['shadow'] ) ? $param['shadow'] : 'none';	
	$shadow_h_offset = !empty( $param['shadow_h_offset'] ) ? $param['shadow_h_offset'] . 'px' : '0';
	$shadow_v_offset = !empty( $param['shadow_v_offset'] ) ? $param['shadow_v_offset'] . 'px' : '0';
	$shadow_blur = !empty( $param['shadow_blur'] ) ? $param['shadow_blur'] . 'px' : '0';
	$shadow_spread = !empty( $param['shadow_spread'] ) ? $param['shadow_spread'] . 'px' : '0';
	$shadow_color = !empty( $param['border_color'] ) ? $param['border_color'] : '#020202';	
	switch( $shadow ) {					
			case 'none':
			$box_shadow = 'box-shadow: none;';
			break;
			case 'outset':
			$box_shadow = 'box-shadow: ' . $shadow_h_offset .' ' . $shadow_v_offset .' ' . $shadow_blur .' ' . $shadow_spread .' ' . $shadow_color .';';
			break;
			default:
			$box_shadow = 'box-shadow: inset ' . $shadow_h_offset .' ' . $shadow_v_offset .' ' . $shadow_blur .' ' . $shadow_spread .' ' . $shadow_color .';';			
	}	
		
	$font_family = !empty( $param['font_family'] ) ? $param['font_family'] : 'inherit';
	$font_size = !empty( $param['font_size'] ) ? $param['font_size'] : '16';	
	$font_weight = !empty( $param['font_weight'] ) ? $param['font_weight'] : 'normal';
	$font_style = !empty( $param['font_style'] ) ? $param['font_style'] : 'normal';
	
	
	
	
	// Badge
	$badge_width = !empty( $param['badge_width'] ) ? $param['badge_width'] : '25px';
	$badge_height = !empty( $param['badge_height'] ) ? $param['badge_height'] : '25px';
	$badge_color = !empty( $param['badge_color'] ) ? $param['badge_color'] : '#ffffff';
	$badge_background = !empty( $param['badge_background'] ) ? $param['badge_background'] : '#e95645';	
	
	$badge_border_radius = !empty( $param['badge_border_radius'] ) ? $param['badge_border_radius'] : '0';
	$badge_border_style = !empty( $param['badge_border_style'] ) ? $param['badge_border_style'] : 'none';
	$badge_border_color = !empty( $param['badge_border_color'] ) ? $param['badge_border_color'] : '#383838';
	$badge_border_width = !empty( $param['badge_border_width'] ) ? $param['badge_border_width'] . 'px' : '0';
	
	$badge_font_family = !empty( $param['badge_font_family'] ) ? $param['badge_font_family'] : 'inherit';
	$badge_font_size = !empty( $param['badge_font_size'] ) ? $param['badge_font_size'] : '12';	
	$badge_font_weight = !empty( $param['badge_font_weight'] ) ? $param['badge_font_weight'] : 'normal';
	$badge_font_style = !empty( $param['badge_font_style'] ) ? $param['badge_font_style'] : 'normal';
	
	// Show on devices	
	$max_screen = !empty( $param['max_screen'] ) ? $param['max_screen'] . 'px' : '1024px';	
	$min_screen = !empty( $param['min_screen'] ) ? $param['min_screen'] . 'px' : '480px';
	
	$css = '';
	// Button
	$css .= '
	.lg-button-' . $id . ' {
		z-index: ' . $zindex . ';			
		width: ' . $width . ';
		height: ' . $height . ';
		line-height: ' . $height . ';
		position: ' . $position . ';
		border-radius: ' . $border_radius . ';
		border-style: ' . $border_style . ';
		border-color: ' . $border_color . ';
		border-width: ' . $border_width . ';
		color: ' . $color . ';
		background-color: ' . $background . ';
		' . $box_shadow . '
		font-family: ' . $font_family . ';
		font-size: ' . $font_size . 'px;
		font-weight: ' . $font_weight . ';
		font-style: ' . $font_style . ';
		-ms-transform: rotate(' . $rotate_button . '); 
    -webkit-transform: rotate(' . $rotate_button . ');
    transform: rotate(' . $rotate_button . ');		
		text-align: center;
		cursor: pointer;		
	}
	';
	// Popup location
	if ( $type == 'floating' ){
		$css .= ' 
		.lg-button-' . $id . '.lg-' . $location . ' {
			' . $loc . '
		}
		';
	}
	$css .= ' 
		.lg-button-' . $id . ':hover {
			color: ' . $hover_color . ';
			background-color: ' . $hover_background . ';
		}
	';
	
	$css .= ' 
		.lg-button-' . $id . ' .badge {					
			width: ' . $badge_width . ';
			height: ' . $badge_height . ';
			line-height: ' . $badge_height . ';
			position: absolute;
			border-radius: ' . $badge_border_radius . ';
			border-style: ' . $badge_border_style . ';
			border-color: ' . $badge_border_color . ';
			border-width: ' . $badge_border_width . ';
			color: ' . $badge_color . ';
			background-color: ' . $badge_background . ';			
			font-family: ' . $badge_font_family . ';
			font-size: ' . $badge_font_size . 'px;
			font-weight: ' . $badge_font_weight . ';
			font-style: ' . $badge_font_style . ';		
			text-align: center;
			top: -10px;
			right: -10px;
		}
	';
	
	if ( !empty( $param['max_screen_enable'] ) ) {
		$css .= ' 
		@media only screen and (min-width: ' . $max_screen . ') {
			.lg-button-' . $id . ' {
				display: none;
			}		
		}
		';		
	}
	
	if ( !empty( $param['min_screen_enable'] ) ) {
		$css .= ' 
		@media only screen and (max-width: ' . $min_screen . ') {
			.lg-button-' . $id . ' {
				display: none;
			}		
		}
		';		
	}
	
	$css = trim(preg_replace('~\s+~s', ' ', $css));
	echo $css;