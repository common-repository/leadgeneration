<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Actions after sending form
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/sending.php' );
	
?>

<div class="lg-container">	
	<div class="lg-element">		
		<?php echo apply_filters( 'lg_create_option', $sending_options ); ?>
	</div>	
</div>

<div class="lg-sending-1">
	<div class="lg-container">
		<div class="lg-element">		
			<?php echo apply_filters( 'lg_create_option', $sending_close_text ); ?><label for="lg_sending_close_text"><?php _e('Hide Form', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $sending_close_text_help ); ?><br/>
			<?php echo apply_filters( 'lg_create_option', $sending_close_time ); ?>
		</div>
		<div class="lg-element close-popup">	
			<?php if( class_exists( 'LG_Popups_Close' ) ) {
				echo apply_filters( 'lg_forms_popup_close_fields', $param ); 
				} else {
					echo '<span class="dashicons dashicons-migrate" style="color:#37c781;"></span> ';
					printf( __( '<a href="%s" target="_blank">More advanced closen</a>','leadgeneration' ), esc_url( 'https://dayes.co/leadgeneration/#pro' ) );
				}?>					
		</div>	
		<div class="lg-element">			
		</div>
	</div>
	
	
	<div class="lg-container">
		<div class="lg-element">	
			<label><?php _e('Sender\'s message was sent successfully', 'leadgeneration'); ?></label><p/>
			<?php echo apply_filters( 'lg_create_option', $sending_confirmation_text ); ?>
		</div>
	</div>
	
</div>

<div class="lg-sending-2">
	<div class="lg-container">
		<div class="lg-element">	
			<label><?php _e('Redirect URL', 'leadgeneration'); ?></label>
			<?php echo apply_filters( 'lg_create_option', $sending_redirect_url ); ?>
		</div>
		<div class="lg-element">
		</div>
		<div class="lg-element">
		</div>
	</div>
</div>	

<div class="lg-container">
	<div class="lg-element">	
		<label><?php _e('Sender\'s message failed to send', 'leadgeneration'); ?></label><p/>
		<?php echo apply_filters( 'lg_create_option', $sending_failed_send ); ?>
	</div>
</div>