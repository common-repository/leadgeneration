<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Popups page
		*
		* @package     Lead_Generation
		* @subpackage  Popups
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	require_once WPLG_PLUGIN_DIR . 'admin/tools-data-base.php';
	$shortcode = 'Popup';
	$toolpage = 'leadgeneration-popups';
	
	$current_tab = ( isset( $_REQUEST["tab"] ) ) ? sanitize_text_field( $_REQUEST["tab"] ) : 'list';
	
	$tabs = array(
		'list'    => __( 'List', 'leadgeneration' ), 	
		'add_new' => __( 'Add new', 'leadgeneration' ),
		'extensions' => __( 'Extensions', 'leadgeneration' ),
		'support' => __( 'Support', 'leadgeneration' ),
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
	<h1 class="wp-heading-inline"><?php _e( 'Popups', 'leadgeneration' ); ?></h1>
	<a href="?page=<?php echo $toolpage; ?>&tab=add_new" class="page-title-action"><?php _e( 'Add New', 'leadgeneration' ); ?></a> <a href="https://www.facebook.com/wowaffect/" class="page-title-action lg-facebook"  target="_blank">Stay in touch</a> <a href="<?php echo admin_url('admin.php?page=leadgeneration&tab=subscribe'); ?>" class="page-title-action lg-email">Start saving time</a>
	<hr class="wp-header-end">
	<p>
	
	</p>
	<?php
		echo '<h2 class="nav-tab-wrapper">';
		foreach ( $tabs as $tab => $name ) {
			$class = ( $tab === $current_tab ) ? ' nav-tab-active' : '';
			if ( $tab == 'add_new' ) {
				$action = ( isset( $_REQUEST["act"] ) ) ? sanitize_text_field( $_REQUEST["act"] ) : '';
				if ( !empty( $action ) && $action == 'update' ) {
					echo '<a class="nav-tab' .esc_attr( $class ) . '" href="?page=' . $toolpage . '&tab=' . esc_attr( $tab ) . '">' . __( 'Update', 'leadgeneration' ) . ' #' . absint( $_REQUEST["id"] ) . '</a>';
				}
				else {
					echo '<a class="nav-tab' .esc_attr( $class ) . '" href="?page=' . $toolpage . '&tab=' . esc_attr( $tab ) . '">' . esc_attr( $name ) . '</a>';
				}
			}
			else {
				echo '<a class="nav-tab' .esc_attr( $class ) . '" href="?page=' . $toolpage . '&tab=' . esc_attr( $tab ) . '">' . esc_attr( $name ) . '</a>';
			}		
			
		}
		echo '</h2>';
		
		include_once ( $current_tab . '.php' );
		
	?>
</div>
