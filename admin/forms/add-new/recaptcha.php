<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* reCAPTCHA
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/recaptcha.php' );
	
	
	
?>

<div class="lg-container">	
	<div class="lg-element">	
		<?php echo apply_filters( 'lg_create_option', $recaptcha_enable ); ?><label for="lg_recaptcha_enable"><?php _e(' Enable reCAPTCHA', 'leadgeneration'); ?></label>
	</div>
	<div class="lg-element recaptcha">	
		<label><?php _e('Secret key', 'leadgeneration'); ?> (<?php printf( __( 'Grab it <a href="%s" target="_blank">here</a>','leadgeneration' ), esc_url( 'https://www.google.com/recaptcha/admin' ) ); ?>)</label><br/>
		<?php echo apply_filters( 'lg_create_option', $secret_key ); ?>
	</div>	
	<div class="lg-element recaptcha">
		<label><?php _e('Scale', 'leadgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $scale_recaptcha_help ); ?><br/>
		<?php echo apply_filters( 'lg_create_option', $scale_recaptcha ); ?>			
	</div>	
</div>

<div class="lg-container">
	<div class="lg-element recaptcha">
		<?php echo apply_filters( 'lg_create_option', $recaptcha_error ); ?>	
	</div>	
</div>