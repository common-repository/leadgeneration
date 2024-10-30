<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Mails
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new 
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/mails.php' );
	
?>

<div class="lg-container">		
	<div class="lg-element">
		<?php _e('In the following fields, you can use these mail-tags:', 'formgeneration'); ?><br/>
		<label><div class="mail-tags"></div></label>		
	</div>	
</div>

<div class="lg-container">		
	<div class="lg-element">
		<?php echo apply_filters( 'lg_create_option', $admin_mail ); ?> <label for="lg_admin_mail"><?php _e('Mail to the admin', 'formgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $admin_mail_help ); ?>
		
	</div>
	<div class="lg-element">
		<?php echo apply_filters( 'lg_create_option', $user_mail ); ?> <label for="lg_user_mail"><?php _e('Mail to the user', 'formgeneration'); ?></label><?php echo apply_filters( 'lg_help_tip', $user_mail_help ); ?>
	</div>	
	<div class="lg-element">	
		<label><?php echo apply_filters( 'lg_create_option', $save_mail ); ?> <?php _e('Save in database', 'formgeneration'); ?></label>
	</div>
</div>

<fieldset id="admin_mail">
	<legend><?php _e('Mail to Admin', 'formgeneration'); ?></legend>
	
	<div class="lg-container">		
		<div class="lg-element">
			<label><?php _e('To', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $admin_mail_to ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('From Email', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $admin_email_from ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('From Name', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $admin_mail_from ); ?>
		</div>
	</div>
	
	<div class="lg-container">			
		<div class="lg-element">
			<label><?php _e('Subject', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $admin_mail_subject ); ?>
		</div>
		
	</div>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Message Body', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $admin_mail_content ); ?>
		</div>
	</div>	
</fieldset>

<fieldset id="user_mail">
	<legend><?php _e('Mail to the User', 'formgeneration'); ?></legend>
	
	<div class="lg-container">		
		<div class="lg-element">
			<label><?php _e('To', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $user_mail_to ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('From Email', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $user_email_from ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('From Name', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $user_mail_from ); ?>
		</div>	
		
	</div>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Subject', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $user_mail_subject ); ?>
		</div>
	</div>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Message Body', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $user_mail_content ); ?>
		</div>
	</div>	
</fieldset>

<fieldset id="save_mail">
	<legend><?php _e('Save in Database', 'formgeneration'); ?></legend>
	
	<div class="lg-container">		
		<div class="lg-element">
			<label><?php _e('Primary Email', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $save_mail_email ); ?>
		</div>
		<div class="lg-element">
			<label><?php _e('Title', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $save_mail_title ); ?>
		</div>	
		<div class="lg-element">
			
		</div>
	</div>
	
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e('Body', 'formgeneration'); ?></label><br/>
			<?php echo apply_filters( 'lg_create_option', $save_mail_content ); ?>
		</div>
	</div>	
</fieldset>

<fieldset>
	<legend style="color:red"><?php _e('Notice!', 'formgeneration'); ?></legend>
	<div class="lg-container">
		<div class="lg-element">
			<?php _e('You can embed mail-tags anywhere in these fields:', 'formgeneration'); ?><p/>			
			<p/>
			<?php _e('The mail-tags are created based on attribute "name" for form fields.', 'formgeneration'); ?> <?php _e('For Example, if the field for user email has attribute "name" = user-email, the mail-tag for the value of this field will be <b>{user-email}</b>.', 'formgeneration'); ?>			 
			<p/>
			<?php _e( 'And then if you insert this mail-tag <b>{user-email}</b> into the field "To", the email will be send to user. Or if insert mail-tag <b>{user-email}</b> into "Body" you get the velue of this field', 'formgeneration'); ?>
			
					
		</div>
	</div>
</fieldset>