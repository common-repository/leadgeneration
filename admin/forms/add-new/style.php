<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Form style
		*
		* @package     WPLG
		* @subpackage  
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
		<label><?php _e('Background Color', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $background_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $background ); ?>			
	</div>
	<div class="lg-element">		
		<?php echo apply_filters( 'lg_create_option', $responsive ); ?><label for="lg_responsive"><?php _e('Responsive rule', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $responsive_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $responsive_breakpoint ); ?>
	</div>
</div>

<div class="lg-container">		
	<div class="lg-element">
		<label><?php _e('Margin', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $margin_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $margin ); ?>	
	</div>
	<div class="lg-element">
		<label><?php _e('Padding', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $padding_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $padding ); ?>			
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
	<legend><?php _e('Title', 'leadgeneration'); ?></legend>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Font Size', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $title_size_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $title_size ); ?>
		</div>		
		<div class="lg-element">
			<label><?php _e('Font Family', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $title_font ); ?>
		</div>	
		<div class="lg-element">
			<label><?php _e('Font Weight', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $title_font_weight ); ?>
		</div>
	</div>
	
	<div class="lg-container">		
		<div class="lg-element">
			<label><?php _e('Font Style', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $title_font_style ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('Align', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $title_align ); ?>
		</div>	
		<div class="lg-element">
			<label><?php _e('Color', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $title_color ); ?>
		</div>
	</div>	
</fieldset>