<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* Main Page
		*
		* @package    Lead_Generation
		* @subpackage  
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	$logo = plugin_dir_url( __FILE__ ).'image/icon.png.';
?>
<style>
		.about-wrap .wow-badge {
	position: absolute;
	top: 0;
	right: 0;
	}
	.wow-badge {
	background: url(<?php echo esc_url( $logo );?>) center 15px no-repeat #e95645;
	background-size: 100px 100px;
	color: #ffffff;
	font-size: 14px;
	text-align: center;
	font-weight: 600;
	margin: 5px 0 0;
	padding-top: 120px;
	height: 40px;
	display: inline-block;
	width: 140px;
	text-rendering: optimizeLegibility;
	box-shadow: 0 1px 3px rgba(0,0,0,.2);
	}
	.lg-subscribe {
	padding: 5px 7px;
	border-radius: 5px;
	border: 1px solid #ccc;
	text-decoration: none;
	font-size: 14px;
	line-height: 14px;
	color: #999;
	}
	.lg-subscribe::before {
	font-family: dashicons;		
	font-size: 12px;
	line-height: 14px;
	}
</style>


<div class="wrap about-wrap full-width-layout">
	
	<h1><?php esc_attr_e( 'Welcome to Lead Generation', 'leadgeneration' ); ?> <?php echo WPLG_VERSION; ?> </h1>
	
	<p class="about-text">		
	<?php esc_attr_e( 'Congratulations! You are about to use a complete set of the most feature-rich tools for the marketing.', 'leadgeneration' ); ?> </p>
	<p>
		<a href="https://www.facebook.com/wowaffect/" class="lg-subscribe" target="_blank">Stay in touch <span class="dashicons dashicons-facebook-alt"></span></a> <a href="<?php echo admin_url('admin.php?page=leadgeneration&tab=subscribe'); ?>" class="lg-subscribe">Start saving time <span class="dashicons dashicons-email-alt"></span></a>
	</p>
	<span class="wow-badge">Version <?php echo WPLG_VERSION; ?></span>
	
	<?php
		$current = ( isset( $_GET['tab'] ) ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'welcome';
		$tabs = array(						
		'welcome' => __( 'About', 'leadgeneration' ),		
		'support' => __( 'Support', 'leadgeneration' ),
		'subscribe' => __( 'Start saving time', 'leadgeneration' ),
		);
		
		echo '<h2 class="nav-tab-wrapper wp-clearfix">';
		foreach ( $tabs as $tab => $name ) {
			$class = ( $tab === $current ) ? ' nav-tab-active' : '';
			echo '<a class="nav-tab' .esc_attr( $class ) . '" href="?page=leadgeneration&tab=' . esc_attr( $tab ) . '">' . esc_attr( $name ) . '</a>';
		}
		echo '</h2>';
		
		echo '<div class="stem-content">';
		include ( $current.'.php' );
		echo '</div>';
	?>
</div>


