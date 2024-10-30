<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Popup style
		*
		* @package     Lead_Generation
		* @subpackage  Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/style.php' );
	
?>

<div class="lg-container">
	<div class="lg-element">
		<label><?php _e('Width', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $width_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $width ); ?>
	</div>
	<div class="lg-element">
		<label><?php _e('Height', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $height_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $height ); ?>
		
	</div>
	<div class="lg-element">		
		<label><?php _e('Z-index', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $zindex_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $zindex ); ?>
	</div>	
</div>

<div class="lg-container">	
	<div class="lg-element">
		<label><?php _e('Color', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $color_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $color ); ?>	
	</div>
	<div class="lg-element">
		<label><?php _e('Background', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $background_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $background ); ?>		
	</div>
	<div class="lg-element">					
	</div>	
</div>

<div class="lg-container">	
	<div class="lg-element">
		<label><?php _e('Hover Color', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $hover_color_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $hover_color ); ?>	
	</div>
	<div class="lg-element">
		<label><?php _e('Hover Background', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $hover_background_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $hover_background ); ?>		
	</div>
	<div class="lg-element">					
	</div>	
</div>

<fieldset>
	<legend><?php _e('Border', 'leadgeneration'); ?></legend>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Radius', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $border_radius_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $border_radius ); ?>	
			
		</div>
		<div class="lg-element">
			<label><?php _e('Style', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $border_style_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $border_style ); ?>	
		</div>
		<div class="lg-element">
			<label></label><br/>
			
		</div>	
	</div>
	
	<div class="lg-container">
		<div class="lg-element border">
			<label><?php _e('Color', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $border_color ); ?>
		</div>
		<div class="lg-element border">
			<label><?php _e('Thickness', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $border_width ); ?>			
		</div>
		<div class="lg-element border">
			
		</div>	
	</div>
	
</fieldset>

<fieldset>
	<legend><?php _e('Drop Shadow', 'leadgeneration'); ?></legend>
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Shadow', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $shadow_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $shadow ); ?>
		</div>
		<div class="lg-element shadow">
			<label><?php _e('Horizontal Position', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $shadow_h_offset_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $shadow_h_offset ); ?>
		</div>
		<div class="lg-element shadow">
			<label><?php _e('Vertical Position', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $shadow_v_offset_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $shadow_v_offset ); ?>
		</div>	
	</div>
	
	<div id="shadow">
		<div class="lg-container">
			<div class="lg-element">
				<label><?php _e('Blur', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $shadow_blur_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $shadow_blur ); ?>
			</div>
			<div class="lg-element">
				<label><?php _e('Spread', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $shadow_spread_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $shadow_spread ); ?>
			</div>
			<div class="lg-element">
				<label><?php _e('Color', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $shadow_color_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $shadow_color ); ?>
			</div>	
		</div>
	</div>
</fieldset>

<fieldset id="lg-popup-title">
	<legend><?php _e('Font', 'leadgeneration'); ?></legend>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Font Size', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $font_size_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $font_size ); ?>
		</div>		
		<div class="lg-element">
			<label><?php _e('Font Family', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $font_family ); ?>
		</div>	
		<div class="lg-element">			
		</div>
	</div>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Font Weight', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $font_weight ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('Font Style', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $font_style ); ?>
		</div>
		<div class="lg-element">			
		</div>	
	</div>	

</fieldset>