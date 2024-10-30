<?php if ( ! defined( 'ABSPATH' ) ) exit; 
	/**
		* Add new Button
		*
		* @package     Lead_Generation
		* @subpackage  Buttons
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.1
	*/
	include_once ( 'include-data.php' );
	
	include_once ( 'add-new/settings/main.php' );
?>

<form action="admin.php?page=<?php echo $toolpage;?>" method="post" name="post" id="leadgeneration">
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content" style="position: relative;">
				<div id="titlediv">
					<div id="titlewrap">
						<label class="screen-reader-text" id="title-prompt-text" for="title">Enter title here</label>
						<input type="text" name="title" size="30" value="<?php echo $title; ?>" id="title" placeholder="<?php _e( 'Register a button name', 'leadgeneration' ); ?>">												
					</div>
				</div>
				
				<div class="postarea wp-editor-expand lg-button-preview">
					<h3><span class="dashicons dashicons-admin-customizer"></span> <?php _e( 'Button', 'leadgeneration' ); ?></h3>
					<div class="button-builder">
						<div id="button-preview"><span class="content"></span><span class="badge"></span></div>
					</div>
				</div>
			</div>
			<div id="postbox-container-1" class="postbox-container">
				<?php include_once ('add-new/targeting.php'); ?>
				<div id="submitdiv" class="postbox ">
					<h2 class="hndle ui-sortable-handle"><span>Publish</span> </h2>
					
					<div class="inside">					
						<div class="lg-container">
							<div class="lg-element">								
								<?php echo apply_filters( 'lg_create_option', $show ); ?>
								<?php echo apply_filters( 'lg_create_option', $taxonomy_select ); ?>
								<?php echo apply_filters( 'lg_create_option', $show_id ); ?>
								<span id="lg-shortcode"><code>[Button id="<?php echo $tool_id; ?>"]</code></span><p/>								
							</div>
						</div>
						<div class="submitbox" id="submitpost">							
							<div id="major-publishing-actions">
								<div id="delete-action">
									<?php if( !empty( $id ) ){
										echo '<a class="submitdelete deletion" href="admin.php?page=' . $toolpage . '&info=delete&did=' . $id . '">' . __( 'Delete', 'leadgeneration' ) . '</a>';
									}; ?>									
								</div>
								
								<div id="publishing-action">
									<span class="spinner"></span>									
									<input name="submit" id="submit" class="button button-primary button-large" value="<?php echo $btn; ?>" type="submit">
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>	
				
			</div>
			
			<div id="postbox-container-2" class="postbox-container">
				<div id="postoptions" class="postbox ">					
					<div class="inside">
						<div class="tab-box">
							<ul class="tab-nav">
								<?php 
									$tab_menu = apply_filters( 'lg_buttons_tab_menu', array(
									'button'      => __( 'Button Settings', 'leadgeneration' ),																		
									'style'      => __( 'Button Style', 'leadgeneration' ),																			
									) );						
									$i = 1;
									foreach ($tab_menu as $menu => $val){
									if ( is_array( $val ) ) { 
										echo '<li><a href="#t' . $i . '">' . $val['name'] . '</a></li>';
									}
									else {
										echo '<li><a href="#t' . $i . '">' . $val . '</a></li>';
									}
										$i++;
									}
								?>						
							</ul>
							<div class="tab-panels">
								<?php
									$t = 1;
									foreach ($tab_menu as $menu => $val){							
										echo '<div id="t' . $t . '">';
										if ( is_array( $val ) ) {
											include_once ( $val['path'] );
										}
										else {
											include_once ('add-new/'.$menu.'.php');
										}										
										echo '</div>';
										$t++;
									}				
								?>					
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
	<input type="hidden" name="tool_id" value="<?php echo $tool_id; ?>" id="tool_id" />
	<input type="hidden" name="param[time]" value="<?php echo time(); ?>" />
	<input type="hidden" name="add" value="<?php echo $hidval; ?>" />    
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="hidden" name="data" value="<?php echo $data; ?>" />
	<input type="hidden" name="page" value="<?php echo $toolpage;?>" />	
	<input type="hidden" name="plugdir" value="<?php echo $toolpage;?>" />		
	<input type="hidden" name="tool" value="<?php echo $page_tool[1];?>" />
	<?php wp_nonce_field('lg_plugin_action','lg_plugin_nonce_field'); ?>	
</form>