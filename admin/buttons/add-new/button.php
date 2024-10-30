<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Button settings display
		*
		* @package     Lead_Generation
		* @subpackage  Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.1
	*/
	
	include_once ( 'settings/button.php' );
?>

<div class="lg-container">
	<div class="lg-element">
		<label><?php _e('Type', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $type_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $type ); ?>		
	</div>	
	<div class="lg-element">	
		<label><?php _e('Button appearance', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $appearance_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $appearance ); ?>
	</div>
	<div class="lg-element">		
		<label><?php _e('Rotate button', 'leadgeneration'); ?></label><br/>
		<?php echo apply_filters( 'lg_create_option', $rotate_button ); ?>
	</div>
</div>

<div class="button-text">
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Text', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $text_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $text ); ?>		
		</div>	
		<div class="lg-element text-location">	
			<label><?php _e('Text location', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $text_location_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $text_location ); ?>					
		</div>
		<div class="lg-element">				
		</div>
	</div>
</div>

<div class="button-icon">
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Icon', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $icon_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $icon ); ?>
		</div>	
		<div class="lg-element">
			<label><?php _e('Rotate icon', 'leadgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $rotate_icon ); ?>			
		</div>
		<div class="lg-element">				
		</div>
	</div>
</div>

<div class="lg-container">
	<div class="lg-element">
		<label><?php _e('Class', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $button_class_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $button_class ); ?>
	</div>	
	<div class="lg-element">
		<label><?php _e('ID', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $button_id_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $button_id ); ?>			
	</div>
	<div class="lg-element">			
		<label><?php _e('Button URL', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $button_url_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $button_url ); ?>
	</div>
</div>

<fieldset class="button-floating">
	<legend><?php _e('Location', 'leadgeneration'); ?></legend>
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Location', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $location_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $location ); ?>	
		</div>
		<div class="lg-element top-bottom">
			<div id="lg-top">
				<label><?php _e('Top', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $location_top_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $location_top ); ?>
			</div>			
			<div id="lg-bottom">
				<label><?php _e('Bottom', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $location_bottom_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $location_bottom ); ?>			
			</div>		
		</div>
		<div class="lg-element left-right">
			<div id="lg-left">
				<label><?php _e('Left', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $location_left_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $location_left ); ?>
			</div>			
			<div id="lg-right">
				<label><?php _e('Right', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $location_right_help ); ?><br/>
				<?php echo apply_filters( 'lg_create_option', $location_right ); ?>			
			</div>		
		</div>
	</div>
</fieldset>

<?php if( class_exists( 'LG_Buttons_Targeting' ) ) {
			echo apply_filters( 'lg_buttons_targeting_fields', $param, $tool_id ); 
		} else {
			echo '<span class="dashicons dashicons-migrate" style="color:#37c781;"></span> ';
			printf( __( '<a href="%s" target="_blank">Get more with Notification Badge</a>','leadgeneration' ), esc_url( 'https://wow-estore.com/lead-generation/#pro' ) );
		}
		
		?>