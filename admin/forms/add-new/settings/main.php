<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
* Main settings
*
* @package     Lead_Generation
* @subpackage  Settings
* @copyright   Copyright (c) 2018, Dmytro Lobov
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

// Show after post content
$after_post_content = array(
	'id'   => 'after_post_content',
	'name' => 'after_post_content',	
	'type' => 'checkbox',
	'val' => isset( $param['after_post_content'] ) ? $param['after_post_content'] : 0,	
);

// Show after post content helper
$after_post_content_helper = array(
	'text' => __('Show this form the end of the each post on the site.', 'leadgeneration'),
);

// Shortcode helper
$shortcode_helper = array(
	'text' => __('Insert this shortcode into the page content for showing form.', 'leadgeneration'),
);