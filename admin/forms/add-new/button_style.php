<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Button style
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/button_style.php' );
	
?>

<div class="lg-container">		
	<div class="lg-element">
		<label><?php _e('Width', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $button_width_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $button_width ); ?>	
	</div>
	<div class="lg-element">
		<label><?php _e('Color', 'leadgeneration'); ?></label><br/>
		<?php echo apply_filters( 'lg_create_option', $button_color ); ?>			
	</div>	
	<div class="lg-element">	
		<label><?php _e('Background', 'leadgeneration'); ?></label><br/>
		<?php echo apply_filters( 'lg_create_option', $button_background ); ?>		
	</div>
</div>

<div class="lg-container">		
	<div class="lg-element">
		<label><?php _e('Background Hover', 'leadgeneration'); ?></label><br/>
		<?php echo apply_filters( 'lg_create_option', $button_background_hover ); ?>	
	</div>
	<div class="lg-element">	
		<label><?php _e('Button alignment', 'leadgeneration'); ?></label><br/>
		<?php echo apply_filters( 'lg_create_option', $button_align ); ?>	
	</div>	
	<div class="lg-element">	
		<label><?php _e('Text alignment', 'leadgeneration'); ?></label><br/>
		<?php echo apply_filters( 'lg_create_option', $button_text_align ); ?>	
	</div>
</div>