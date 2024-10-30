<?php if ( ! defined( 'ABSPATH' ) ) exit;
	/**
		* View the mail
		*
		* @package     Lead_Generation
		* @subpackage  Mails
		* @copyright   Copyright (c) 2018, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	$recid = absint( $_REQUEST["id"] );
	$result = $wpdb->get_row("SELECT * FROM $data WHERE id=$recid");
	if ($result){
		$id = $result->id;
		$title = $result->title;
		$date = $result->date;
		$email = $result->email;
		$message = $result->message;
		$notice = $result->notice;
	}
	else {
		$id = '';
		$title = '';
		$date = '';
		$email = '';
		$message = '';
		$notice = '';	}

?>


	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			
			<div id="postbox-container-2" class="postbox-container">
				<div id="message-box" class="postbox">
					<h2 class="hndle"><span><?php _e( 'Message', 'leadgeneration' ); ?></span></h2>
					<div class="inside">
						<?php echo $message; ?>
					</div>
				</div>				
			</div>
			<div id="postbox-container-1" class="postbox-container">
				
				<div id="submitdiv" class="postbox ">
					<h2 class="hndle ui-sortable-handle"><span><?php echo $title; ?></span></h2>
					<div class="inside">
					<div id="misc-publishing-actions">						
						<div class="misc-pub-section">
							<span class="dashicons dashicons-email"></span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
						</div>
						<div class="misc-pub-section curtime misc-pub-curtime">
							<span id="timestamp"><?php echo $date; ?></span>
						</div>
					</div>
						<div class="submitbox" id="submitpost">
							
							<div id="major-publishing-actions">
								<div id="delete-action">
									<?php if( !empty( $id ) ){
										echo '<a class="submitdelete deletion" href="admin.php?page=' . $toolpage . '&info=delete&did=' . $id . '">' . __( 'Delete', 'leadgeneration' ) . '</a>';
									}; ?>									
								</div>
								
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>						
			</div>
		</div>
	</div>	
