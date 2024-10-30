<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Form Fields style
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/field_style.php' );
	
?>

<div class="lg-container">		
	<div class="lg-element">
		<label><?php _e('Margin', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_margin_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $field_margin ); ?>
	</div>
	<div class="lg-element">
		<label><?php _e('Padding', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_padding_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $field_padding ); ?>
	</div>	
	<div class="lg-element">			
		<label><?php _e('Background', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_background_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $field_background ); ?>
	</div>
</div>


<fieldset>
	<legend><?php _e('Font', 'leadgeneration'); ?></legend>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Font Size', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_font_size_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_font_size ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('Font Family', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $field_font ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('Font Weight', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $field_font_weight ); ?>			
		</div>	
	</div>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Font Style', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $field_font_style ); ?>
		</div>
		<div class="lg-element">			
			<label><?php _e('Color', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $field_font_color ); ?>
		</div>
		<div class="lg-element">			
			<label><?php _e('Placeholder Color', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_placeholder_color_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_placeholder_color ); ?>
		</div>	
	</div>
	
</fieldset>

<fieldset>
	<legend><?php _e('Border', 'leadgeneration'); ?></legend>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Radius', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_border_radius_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_border_radius ); ?>	
			
		</div>
		<div class="lg-element">
			<label><?php _e('Style', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_border_style_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_border_style ); ?>	
		</div>
		<div class="lg-element">
			<label></label><br/>
			
		</div>	
	</div>
	
	<div class="lg-container">
		<div class="lg-element field-border">
			<label><?php _e('Color', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $field_border_color ); ?>
		</div>
		<div class="lg-element field-border">
			<label><?php _e('Thickness', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $field_border_width ); ?>			
		</div>
		<div class="lg-element border">
			
		</div>	
	</div>
	
</fieldset>

<fieldset>
	<legend><?php _e('Drop Shadow', 'leadgeneration'); ?></legend>
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Shadow', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_shadow_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_shadow ); ?>
		</div>
		<div class="lg-element field-shadow">
			<label><?php _e('Horizontal Position', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_shadow_h_offset_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_shadow_h_offset ); ?>
		</div>
		<div class="lg-element field-shadow">
			<label><?php _e('Vertical Position', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_shadow_v_offset_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $field_shadow_v_offset ); ?>
		</div>	
	</div>
	
	<div id="field-shadow">
		<div class="lg-container">
			<div class="lg-element">
				<label><?php _e('Blur', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_shadow_blur_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $field_shadow_blur ); ?>
			</div>
			<div class="lg-element">
				<label><?php _e('Spread', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_shadow_spread_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $field_shadow_spread ); ?>
			</div>
			<div class="lg-element">
				<label><?php _e('Color', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $field_shadow_color_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $field_shadow_color ); ?>
			</div>	
		</div>
	</div>
</fieldset>