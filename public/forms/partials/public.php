<?php if ( ! defined( 'ABSPATH' ) ) exit; 		
	$content = $param['content'];		 	
	$content = str_replace( 'data-required="required"', 'required="true"', $content );
	$form = '<form name="lg-form-' . $val->id . '" id="lg-form-' . $val->id . '" class="lg-form" metod="post" >';
	$form .= $content;
	$form .= '</form>';
	echo $form;		
?>