/* ========= INFORMATION ============================
	- document:  LeadGeneration!
	- author:    Dmytro Lobov 
	- version:   1.0
	- url:       https://wordpress.org/plugins/leadgeneration/

==================================================== */

<?php
		/**
		* Forms style generator
		*
		* @package     Lead_Generation
		* @subpackage  Forms_Generator
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	if ( ! defined( 'ABSPATH' ) ) exit;	
	
	$id = $val->id;
	
	// Form 	
	$width = !empty( $param['width'] ) ? $param['width'] : '480px';
	$background = !empty( $param['background'] ) ? $param['background'] : '#ffffff';
	$margin = !empty( $param['margin'] ) ? $param['margin'] : '0 auto';
	$padding = !empty( $param['padding'] ) ? $param['padding'] : '0';
	
	$border_radius = !empty( $param['border_radius'] ) ? $param['border_radius'] : '0';
	$border_style = !empty( $param['border_style'] ) ? $param['border_style'] : 'solid';
	$border_color = !empty( $param['border_color'] ) ? $param['border_color'] : '#383838';
	$border_width = !empty( $param['border_width'] ) ? $param['border_width'] . 'px' : '0';
	
	$shadow = !empty( $param['shadow'] ) ? $param['shadow'] : 'none';	
	$shadow_h_offset = !empty( $param['shadow_h_offset'] ) ? $param['shadow_h_offset'] . 'px' : '0';
	$shadow_v_offset = !empty( $param['shadow_v_offset'] ) ? $param['shadow_v_offset'] . 'px' : '0';
	$shadow_blur = !empty( $param['shadow_blur'] ) ? $param['shadow_blur'] . 'px' : '0';
	$shadow_spread = !empty( $param['shadow_spread'] ) ? $param['shadow_spread'] . 'px' : '0';
	$shadow_color = !empty( $param['shadow_color'] ) ? $param['shadow_color'] : '#020202';	
	
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
	
	$title_size = !empty( $param['title_size'] ) ? $param['title_size'] . 'px' : '16';	
	$title_font = !empty( $param['title_font'] ) ? $param['title_font'] : 'inherit';
	$title_font_weight = !empty( $param['title_font_weight'] ) ? $param['title_font_weight'] : 'normal';
	$title_font_style = !empty( $param['title_font_style'] ) ? $param['title_font_style'] : 'normal';
	$title_align = !empty( $param['title_align'] ) ? $param['title_align'] : 'left';
	$title_color = !empty( $param['title_color'] ) ? $param['title_color'] : '#383838';
	
	// Field 
	$field_background = !empty( $param['field_background'] ) ? $param['field_background'] : '#ffffff';
	$field_margin = !empty( $param['field_margin'] ) ? $param['field_margin'] : '0';
	$field_padding = !empty( $param['field_padding'] ) ? $param['field_padding'] : '0';
	
	$field_font_size = !empty( $param['field_font_size'] ) ? $param['field_font_size'] . 'px' : '16';	
	$field_font = !empty( $param['field_font'] ) ? $param['field_font'] : 'inherit';
	$field_font_weight = !empty( $param['field_font_weight'] ) ? $param['field_font_weight'] : 'normal';
	$field_font_style = !empty( $param['field_font_style'] ) ? $param['field_font_style'] : 'normal';	
	$field_font_color = !empty( $param['field_font_color'] ) ? $param['field_font_color'] : '#383838';
	$field_placeholder_color = !empty( $param['field_placeholder_color'] ) ? $param['field_placeholder_color'] : '#eeeeee';
	
	$field_border_radius = !empty( $param['field_border_radius'] ) ? $param['field_border_radius'] : '0';
	$field_border_style = !empty( $param['field_border_style'] ) ? $param['field_border_style'] : 'solid';
	$field_border_color = !empty( $param['field_border_color'] ) ? $param['field_border_color'] : '#383838';
	$field_border_width = !empty( $param['field_border_width'] ) ? $param['field_border_width'] . 'px' : '0';
	
	$field_shadow = !empty( $param['field_shadow'] ) ? $param['field_shadow'] : 'none';	
	$field_shadow_h_offset = !empty( $param['field_shadow_h_offset'] ) ? $param['field_shadow_h_offset'] . 'px' : '0';
	$field_shadow_v_offset = !empty( $param['field_shadow_v_offset'] ) ? $param['field_shadow_v_offset'] . 'px' : '0';
	$field_shadow_blur = !empty( $param['field_shadow_blur'] ) ? $param['field_shadow_blur'] . 'px' : '0';
	$field_shadow_spread = !empty( $param['field_shadow_spread'] ) ? $param['field_shadow_spread'] . 'px' : '0';
	$field_shadow_color = !empty( $param['field_shadow_color'] ) ? $param['field_shadow_color'] : '#020202';	
	
	switch( $field_shadow ) {					
		case 'none':
		$field_box_shadow = 'box-shadow: none;';
		break;
		case 'outset':
		$field_box_shadow = 'box-shadow: ' . $field_shadow_h_offset .' ' . $field_shadow_v_offset .' ' . $field_shadow_blur .' ' . $field_shadow_spread .' ' . $field_shadow_color .';';
		break;
		default:
		$field_box_shadow = 'box-shadow: inset ' . $field_shadow_h_offset .' ' . $field_shadow_v_offset .' ' . $field_shadow_blur .' ' . $field_shadow_spread .' ' . $field_shadow_color .';';			
	}	
	
	// Button
	
	$button_width = !empty( $param['button_width'] ) ? $param['button_width'] : 'auto';
	$button_color = !empty( $param['button_color'] ) ? $param['button_color'] : '#ffffff';
	$button_background = !empty( $param['button_background'] ) ? $param['button_background'] : '#8cfa16';
	$button_background_hover = !empty( $param['button_background_hover'] ) ? $param['button_background_hover'] : '#16fa84';
	$button_align = !empty( $param['button_align'] ) ? $param['button_align'] : 'center';
	$button_text_align = !empty( $param['button_text_align'] ) ? $param['button_text_align'] : 'center';
	
	// Show on devices	
	$max_screen = !empty( $param['max_screen'] ) ? $param['max_screen'] . 'px' : '1024px';	
	$min_screen = !empty( $param['min_screen'] ) ? $param['min_screen'] . 'px' : '480px';	
	
	// reCAPTCHA
	$scale_recaptcha = !empty( $param['scale_recaptcha'] ) ? $param['scale_recaptcha'] : '0.77';
	
	// Responsive Rule
	$responsive_breakpoint = !empty( $param['responsive_breakpoint'] ) ? $param['responsive_breakpoint'] . 'px' : '480px';
		
	$css = '';
	// Form
	$css .= '
	#lg-form-' . $id . ' {
		max-width: ' . $width . ';
		margin: ' . $margin . ';
		padding: ' . $padding . ';
		background: ' . $background . ';
		border-radius: ' . $border_radius . ';
		border-style: ' . $border_style . ';
		border-color: ' . $border_color . ';
		border-width: ' . $border_width . ';		
		' . $box_shadow . '
	}
	';
	
	$css .= '
	#lg-form-' . $id . ' .lg-field-title { 
		font-size: ' . $title_size . ';		
		font-family: ' . $title_font . ';
		font-weight: ' . $title_font_weight . ';
		font-style: ' . $title_font_style . ';
		text-align: ' . $title_align . ';
		color: ' . $title_color . ';
	}
	';
	$css .= '#lg-form-' . $id . ' .lg-col-1, #lg-form-' . $id . ' .lg-col-2, #lg-form-' . $id . ' .lg-col-3, #lg-form-' . $id . ' .lg-col-4, #lg-form-' . $id . ' .lg-col-5, #lg-form-' . $id . ' .lg-col-6, #lg-form-' . $id . ' .lg-col-7, #lg-form-' . $id . ' .lg-col-8, #lg-form-' . $id . ' .lg-col-9, #lg-form-' . $id . ' .lg-col-10, #lg-form-' . $id . ' .lg-col-11, #lg-form-' . $id . ' .lg-col-12 {		
	padding: ' . $field_margin . ';
	}';
	
	$css .= '
	#lg-form-' . $id . ' input[type="text"], #lg-form-' . $id . ' input[type="email"], #lg-form-' . $id . ' input[type="url"], #lg-form-' . $id . ' input[type="tel"], #lg-form-' . $id . ' input[type="number"], #lg-form-' . $id . ' input[type="date"], #lg-form-' . $id . ' select, #lg-form-' . $id . ' textarea { 
		width: 100%;
		font-size : ' . $field_font_size . ';		
		font-family : ' . $field_font . ';
		font-weight : ' . $field_font_weight . ';
		font-style : ' . $field_font_style . ';		
		color : ' . $field_font_color . ';
		padding : ' . $field_padding . ';
		line-height : auto;
		height : auto;		
		background : ' . $field_background . ';
		border-radius : ' . $field_border_radius . ';
		border-style : ' . $field_border_style . ';
		border-color : ' . $field_border_color . ';
		border-width : ' . $field_border_width . ';		
		' . $field_box_shadow . '
	}
	';
	
	$css .= '
	#lg-form-' . $id . ' input[type="text"]::placeholder, #lg-form-' . $id . ' input[type="email"]::placeholder, #lg-form-' . $id . ' input[type="url"]::placeholder, #lg-form-' . $id . ' input[type="tel"]::placeholder, #lg-form-' . $id . ' input[type="number"]::placeholder, #lg-form-' . $id . ' input[type="date"]::placeholder, #lg-form-' . $id . ' select::placeholder, #lg-form-' . $id . ' textarea::placeholder {			
		color : ' . $field_placeholder_color . ';		
	}
	';
	
	$css .= '
	#lg-form-' . $id . ' label {			
		font-size : ' . $field_font_size . ';		
		font-family : ' . $field_font . ';
		font-weight : ' . $field_font_weight . ';
		font-style : ' . $field_font_style . ';		
		color : ' . $field_font_color . ';	
	}
	';
	
	$css .= '
	#lg-form-' . $id . ' .lg-button {			
		text-align: ' . $button_align . '		
	}
	';
	
	$css .= '
	#lg-form-' . $id . ' input[type="submit"] {		
		width: ' . $button_width . ';
		font-size : ' . $field_font_size . ';		
		font-family : ' . $field_font . ';
		font-weight : ' . $field_font_weight . ';
		font-style : ' . $field_font_style . ';		
		color : ' . $button_color . ';
		background: ' . $button_background . ';		
		line-height: auto;
		height: auto;
		text-align: ' . $button_text_align . ';
		border-radius : ' . $field_border_radius . ';		
		border : none;	
	}
	';
	
	$css .= '
	#lg-form-' . $id . ' input[type="submit"]:hover {			
		background: ' . $button_background_hover . ';		
	}
	';	
	
	$css .= '
	#lg-form-' . $id . ' .g-recaptcha {			
		transform: scale(' . $scale_recaptcha . ');	
		-webkit-transform: scale(' . $scale_recaptcha . ');
		transform-origin:0 0;
		-webkit-transform-origin:0 0;
	}
	';
	
	if ( !empty( $param['max_screen_enable'] ) ) {
		$css .= ' 
		@media only screen and (min-width: ' . $max_screen . ') {
			#lg-form-' . $id . ' {
				display: none;
			}		
		}
		';		
	}
	
	if ( !empty( $param['min_screen_enable'] ) ) {
		$css .= ' 
		@media only screen and (max-width: ' . $min_screen . ') {
			#lg-form-' . $id . ' {
				display: none;
			}		
		}
		';		
	}
	
	if ( !empty( $param['responsive'] ) ) {
		$css .= ' 
		@media only screen and (max-width: ' . $responsive_breakpoint . ') {
			#lg-form-' . $id . ' .lg-col-el {
				width: 100% !important;
			}		
		}
		';		
	}		
	$css = trim(preg_replace('~\s+~s', ' ', $css));
	echo $css;