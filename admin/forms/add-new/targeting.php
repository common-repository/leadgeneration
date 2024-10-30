<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Targeting
		*
		* @package     Lead_Generation
		* @subpackage  Forms Add-new 
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	include_once ( 'settings/targeting.php' );
	
	$option_name = '_lg_tool_form_view_counter_' . $tool_id;
	$tool_view = get_option( $option_name, '0' );	
	$table_mails = $wpdb->prefix . 'lg_mails';
	$tool_action = intval( $wpdb->get_var( "SELECT COUNT(ID) FROM " . $table_mails . " WHERE form_id='" . $tool_id ."'" ) );
	if ( !empty( $tool_view ) ) {
		$ñonversion = round( $tool_action/$tool_view*100, 2 ) . '%';
	}
	else {
		$ñonversion = '0%';
	}
	$mails_url = admin_url( '/admin.php?page=leadgeneration-mails&s=' . $tool_id );
?>

<div id="lg-analytics" class="postbox lg-sidebar">
	<h2><?php _e('Analytics', 'leadgeneration'); ?></h2>
	<div class="inside">
	<div class="lg-container">
		<div class="lg-element">			
			<span class="dashicons dashicons-visibility"></span> <?php _e('Views', 'leadgeneration'); ?> - <span id="tool_view"><?php echo $tool_view; ?></span><p/>			
			<span class="dashicons dashicons-email-alt"></span> <?php _e('Emails', 'leadgeneration'); ?> - <a href="<?php echo $mails_url; ?>"><?php echo $tool_action; ?></a><p/>
			<span class="dashicons dashicons-filter"></span> <?php _e('Conversion', 'leadgeneration'); ?> - <span id="ñonversion"><?php echo $ñonversion; ?></span><p/>
			<span class="preview button" onclick="reset_counts('form', <?php echo $tool_id; ?>);"><?php _e('Reset', 'leadgeneration'); ?></span>
		</div>		
	</div>
	</div>
</div>

<div id="lg-targeting" class="postbox lg-sidebar">
	<h2><?php _e('Targeting', 'leadgeneration'); ?></h2>
	<div class="inside">		
		<?php if( class_exists( 'LG_Form_Targeting' ) ) { 
			echo apply_filters( 'lg_forms_targeting_fields', $param ); 
		} else {
			printf( __( 'Need more <a href="%s" target="_blank">advanced targeting</a> options?','leadgeneration' ), esc_url( 'https://wow-estore.com/lead-generation/#pro' ) );			
		}
		
		?>		
	</div>
</div>

