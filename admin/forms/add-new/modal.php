<?php if ( ! defined( 'ABSPATH' ) ) exit; 
	/**
		* Form Field Generator
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	include_once ( 'settings/modal.php' );
?>

<div id="lg-field-generator" style="display:none;">
	<h2><?php _e( 'Field Generator', 'leadgeneration' ); ?></h2>
	<div class="lg-container lg-required">
		<div class="lg-element">
			<input type="checkbox" name="field_required" id="field_required"> <label for="field_required"> <?php _e( 'Required field', 'leadgeneration' ); ?></label><?php echo apply_filters( 'lg_help_tip', $modal_required_help ); ?>
		</div>		
	</div>
	<div class="lg-container">
		<div class="lg-element">
			<label><?php _e( 'Field Type', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_type_help ); ?><br/>
			<select id="field_type" onchange="field_type();">
				<option value="text">text</option>
				<option value="select">drop-down menu</option>
				<option value="checkbox">checkboxes</option>
				<option value="radio">radio buttons</option>
				<option value="textarea">text area</option>
				<option value="email">email</option>
				<option value="url">URL</option>
				<option value="tel">telephone</option>
				<option value="number">number</option>
				<option value="date">date</option>
				<option value="hidden">hidden</option>
				<option value="recaptcha">reCAPTCHA</option>
				<option value="submit">submit</option>
			</select>			
		</div>
		<div class="lg-element">
			<label><?php _e( 'Width', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_width_help ); ?><br/>
			<select id="field_width">
				<option value="12">12/12</option>
				<option value="11">11/12</option>
				<option value="10">10/12</option>
				<option value="9">9/12</option>
				<option value="8">8/12</option>
				<option value="7">7/12</option>
				<option value="6">6/12</option>
				<option value="5">5/12</option>
				<option value="4">4/12</option> 
				<option value="3">3/12</option> 
				<option value="2">2/12</option> 
				<option value="1">1/12</option>
			</select>			
		</div>
		<div class="lg-element lg-submit">				
			<label><?php _e( 'Title', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_title_help ); ?><br/>
			<input type="text" name="fieldlabel" id="field_label">
		</div>	
	</div>
	<div id="lg-recaptcha">
		<div class="lg-container">
			<div class="lg-element lg-submit">
				<label><?php _e( 'Site key', 'leadgeneration' ); ?> (<?php printf( __( 'Grab it <a href="%s" target="_blank">here</a>','leadgeneration' ), esc_url( 'https://www.google.com/recaptcha/admin' ) ); ?>)</label><br/>
				<input type="text" name="fieldsitekey" id="field_site_key">
			</div>
			<div class="lg-element">
				<label><?php _e( 'Theme', 'leadgeneration' ); ?></label><br/>
				<select name="captchathem" id="field_captcha_them">
					<option value="light" selected="selected">Light</option>
					<option value="dark">Dark</option>
				</select>
			</div>
			<div class="lg-element">
				<label><?php _e( 'Size', 'leadgeneration' ); ?></label><br/>
				<select name="captchasize" id="field_captcha_size">
					<option value="normal" selected="selected">normal</option>
					<option value="compact">compact </option>
				</select>
			</div>	
		</div>	
	</div>
	<div class="lg-attribute">
		<div class="lg-container">
			<div class="lg-element lg-submit">
				<label><?php _e( 'Name', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_name_help ); ?><br/>
				<input type="text" name="fieldname" id="field_name">
			</div>
			<div class="lg-element">
				<label><?php _e( 'ID attribute', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_id_help ); ?><br/>
				<input type="text" name="fieldid" id="field_id">
			</div>
			<div class="lg-element">
				<label><?php _e( 'Class attribute', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_class_help ); ?><br/>
				<input type="text" name="fieldclass" id="field_class">
			</div>	
		</div>
	</div>
	<div class="lg-text">
		<div class="lg-container">
			<div class="lg-element lg-submit">
				<label><?php _e( 'Placeholder', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_placeholder_help ); ?><br/>
				<input type="text" name="fieldplaceholder" id="field_placeholder">
			</div>
			<div class="lg-element">
				<label><?php _e( 'Default value', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_value_help ); ?><br/>
				<input type="text" name="fieldvalue" id="field_value">
			</div>
			<div class="lg-element lg-textarea">	
				<label><?php _e( 'Height (rows)', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_rows_help ); ?><br/>
				<input type="text" name="fieldrows" id="field_rows" placeholder="10" value="10">
				</div>	
			</div>
			</div>
			
			<div class="lg-number">
				<div class="lg-container">
					<div class="lg-element">
						<label><?php _e( 'Min', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_min_help ); ?><br/>
						<input type="number" name="fieldmin" id="field_min">
					</div>
					<div class="lg-element">
						<label><?php _e( 'Max', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_max_help ); ?><br/>
						<input type="number" name="fieldmax" id="field_max">
					</div>
					<div class="lg-element">			
						<label><?php _e( 'Step', 'leadgeneration' ); ?></label><?php echo apply_filters( 'lg_help_tip', $modal_step_help ); ?><br/>
						<input type="number" name="fieldstep" id="field_step">
					</div>	
				</div>
			</div>
			
			<div class="lg-date">
				<div class="lg-container">
					<div class="lg-element">
						<label><?php _e( 'Min', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_min_help ); ?><br/>
						<input type="date" name="fielddatemin" id="field_date_min">
					</div>
					<div class="lg-element">
						<label><?php _e( 'Max', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_max_help ); ?><br/>
						<input type="date" name="fielddatemax" id="field_date_max">
					</div>
					<div class="lg-element">			
					</div>	
				</div>
			</div>
			
			<div class="lg-selected">
				<div class="lg-container">
					<div class="lg-element">
						<label><?php _e( 'Options', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_options_help ); ?><br/>
						<textarea name="lg-options" id="lg-options" rows="10" cols="40"></textarea>
					</div>
					<div class="lg-element">
						<div class="lg-select">
							<label><input type="checkbox" name="field_multiple" id="field_multiple"> <?php _e( 'Allow multiple selections', 'leadgeneration' ); ?></label> <?php echo apply_filters( 'lg_help_tip', $modal_multiple_help ); ?>
						</div>
						<div class="lg-radio">
							<label><input type="checkbox" name="field_label_first" id="field_label_first"> <?php _e( 'Put a label first', 'leadgeneration' ); ?></label>	<?php echo apply_filters( 'lg_help_tip', $modal_label_help ); ?>		
						</div>
					</div>
					<div class="lg-element">			
					</div>	
				</div>
			</div>	
			
			
			<div class="lg-container">
				<div class="lg-element">
					<div class="submitbox">
						<input class="button button-primary lg-insert-form" value="<?php _e( 'Insert', 'leadgeneration' ); ?>" type="button">
					</div>
				</div>
			</div>
			
		</div>
		
		