<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Mail main page
		*
		* @package     Lead_Generation
		* @subpackage  Mails
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	require_once 'mails-data-base.php';
	$shortcode = 'Mails';
	$toolpage = 'leadgeneration-mails';
	
	$current_tab = ( isset( $_REQUEST["tab"] ) ) ? sanitize_text_field( $_REQUEST["tab"] ) : 'list';
	
	$tabs = array(
		'list'    => __( 'List', 'leadgeneration' ),
 		'view_mail'    => __( 'View Mail', 'leadgeneration' ),
	);
	
?>
<style>
	.nav-tab-wrapper {
		margin-bottom: 20px;
	}
	.wrap .nav-tab-wrapper .page-title-action {
    top: 4px;
    margin-left: 5px;
}
</style>

<div class="wrap">
	<h1 class="wp-heading-inline"><?php _e( 'Mails', 'leadgeneration' ); ?></h1>	
	<a href="https://www.facebook.com/wowaffect/" class="page-title-action lg-facebook"  target="_blank">Stay in touch</a> <a href="<?php echo admin_url('admin.php?page=leadgeneration&tab=subscribe'); ?>" class="page-title-action lg-email">Start saving time</a>
	<hr class="wp-header-end">	
	<?php
		echo '<h2 class="nav-tab-wrapper">';
		if ( $current_tab == 'list' ) {
			echo '<a class="nav-tab nav-tab-active" href="?page=' . $toolpage . '&tab=' . esc_attr( $current_tab ) . '">'. __( 'List', 'leadgeneration' ) . '</a>';
		}
		else {
			echo '<a class="nav-tab" href="?page=' . $toolpage . '&tab=list">'. __( 'List', 'leadgeneration' ) . '</a>';
			echo '<a class="nav-tab nav-tab-active" href="?page=' . $toolpage . '&tab=view_mail">'. __( 'View Mail', 'leadgeneration' ) . '</a>';
		}		
		echo '</h2>';
		
		include_once ( $current_tab . '.php' );
		
	?>
</div>
