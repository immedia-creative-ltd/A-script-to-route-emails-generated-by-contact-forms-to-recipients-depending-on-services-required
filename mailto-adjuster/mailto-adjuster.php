<?php

/*
 * Plugin Name: Mailto Adjuster
 * Plugin URI: http://www.immedia-creative.com
 * Description: Amends recipients on 'Make an Enquiry' based on location
 * Version: 1.0.0
 * Author: Chris Brown
*/

// hook into wpcf7_before_send_mail
add_action( 'wpcf7_before_send_mail', 'wpcf7_mail_adjuster');
//the main function
function wpcf7_mail_adjuster($contact_form){
	
	
 
// create new instance of WPCF7_Submission class
$submission = WPCF7_Submission::get_instance();
$posted_data = $submission->get_posted_data();	
//get the email address
$mailProp = $contact_form->get_properties('mail');
 
// set up variable for email address we want to change

// assign emails to locations below
$test_to = "email1@immedia-creative";
$test_cc = "email1cc@immedia-creative";
$devizes_to = "email1@gmail.com";
$devizes_cc = "email1cc@gmail.com";
$frome_to = "email2@gmail.com";
$frome_cc = "email2cc@gmail.com";
$huntley_to = "email3@gmail.com";
$huntley_cc = "email3cc@gmail.com";
$knockdown_to = "email4@gmail.com";
$knockdown_cc = "email4cc@gmail.com";
$marlborough_to = "email5@gmail.com";
$marlborough_cc = "email5cc@gmail.com";
$stockbridge_to = "email6@gmail.com";
$stockbridge_cc = "email6cc@gmail.com";
$Toddington_to = "email7@gmail.com";
$Toddington_cc = "email7cc@gmail.com";
$hereford_to = "email8@gmail.com";
$hereford_cc = "email8cc@gmail.com";
$andoversford_to = "email9@gmail.com";
$andoversford_cc = "email8cc@gmail.com";


//***************main loop for 'make an enquiry'

if(isset($posted_data['mae-form-name'])){
	
	$thw_email_address = $test_to;
	$thw_cc_email_address = $test_cc;
// check if enquiry-type has been selected and if so, do a 'switch/case' loop
	$enquiry = isset($posted_data['mae-enquiry-type'])?$posted_data['mae-enquiry-type']:'';	
	print_r ($enquiry);
				
	switch ($enquiry) {
    case "Sales":
	
	
	 // if sales-closeststore has been selected do a switch\case subloop
	$location = isset($posted_data['sales-closeststore'])?$posted_data['sales-closeststore']:'';
	
       				switch ($location) {
						
						case 'Devizes':
							$thw_email_address = $devizes_to;
							$thw_cc_email_address = $devizes_cc;
							break;

						case 'Frome':
							$thw_email_address = $frome_to;
							$thw_cc_email_address = $frome_cc;
							break;

						case 'Huntley':
							$thw_email_address = $huntley_to;
							$thw_cc_email_address = $huntley_cc;
							break;

						case 'Knockdown':
							$thw_email_address = $knockdown_to;
							$thw_cc_email_address = $knockdown_cc;
							break;

						case 'Marlborough':
							$thw_email_address = $marlborough_to;
							$thw_cc_email_address = $marlborough_cc;
							break;

						case 'Toddington':
							$thw_email_address = $Toddington_to;
							$thw_cc_email_address = $Toddington_cc;
							break;

						case 'Stockbridge':
							$thw_email_address = $stockbridge_to;
							$thw_cc_email_address = $stockbridge_cc;
							break;
							
						case 'Hereford':
							$thw_email_address = $hereford_to;
							$thw_cc_email_address = $hereford_cc;
							break;	
					}// End switch().

	break;
	
	case "Service":
    
	 // if service-closeststore has been selected do a switch\case subloop
	$location = isset($posted_data['service-closeststore'])?$posted_data['service-closeststore']:'';
	
       		switch ($location) {
						
	   			case 'Devizes':
					$thw_email_address = $devizes_to;
					$thw_cc_email_address = $devizes_cc;
					break;

				case 'Frome':
					$thw_email_address = $frome_to;
					$thw_cc_email_address = $frome_cc;
					break;

				case 'Huntley':
					$thw_email_address = $huntley_to;
					$thw_cc_email_address = $huntley_cc;
					break;

				case 'Knockdown':
					$thw_email_address = $knockdown_to;
					$thw_cc_email_address = $knockdown_cc;
					break;

				case 'Marlborough':
					$thw_email_address = $marlborough_to;
					$thw_cc_email_address = $marlborough_cc;
					break;

				case 'Toddington':
					$thw_email_address = $Toddington_to;
					$thw_cc_email_address = $Toddington_cc;
					break;

				case 'Stockbridge':
					$thw_email_address = $stockbridge_to;
					$thw_cc_email_address = $stockbridge_cc;
					break;
					
				case 'Hereford':
					$thw_email_address = $hereford_to;
					$thw_cc_email_address = $hereford_cc;
					break;	
			}// End switch().
	
	break;
	
	case "Parts":
    
	 // if parts-closeststore has been selected do a switch\case subloop
	$location = isset($posted_data['parts-closeststore'])?$posted_data['parts-closeststore']:'';
	
       		switch ($location) {
	   				
				case 'Devizes':
					$thw_email_address = $devizes_to;
					$thw_cc_email_address = $devizes_cc;
					break;

				case 'Frome':
					$thw_email_address = $frome_to;
					$thw_cc_email_address = $frome_cc;
					break;

				case 'Huntley':
					$thw_email_address = $huntley_to;
					$thw_cc_email_address = $huntley_cc;
					break;

				case 'Knockdown':
					$thw_email_address = $knockdown_to;
					$thw_cc_email_address = $knockdown_cc;
					break;

				case 'Marlborough':
					$thw_email_address = $marlborough_to;
					$thw_cc_email_address = $marlborough_cc;
					break;

				case 'Toddington':
					$thw_email_address = $Toddington_to;
					$thw_cc_email_address = $Toddington_cc;
					break;

				case 'Stockbridge':
					$thw_email_address = $stockbridge_to;
					$thw_cc_email_address = $stockbridge_cc;
					break;
					
				case 'Hereford':
					$thw_email_address = $hereford_to;
					$thw_cc_email_address = $hereford_cc;
					break;					
			}// End switch().
	
	break;
	
	case "General Enquiry":
    
	// if general-closeststore has been selected do a switch\case subloop
	$location = isset($posted_data['general-closeststore'])?$posted_data['general-closeststore']:'';
	
       		switch ($location) {
				
	   				case 'Devizes':
					$thw_email_address = $devizes_to;
					$thw_cc_email_address = $devizes_cc;
					break;

				case 'Frome':
					$thw_email_address = $frome_to;
					$thw_cc_email_address = $frome_cc;
					break;

				case 'Huntley':
					$thw_email_address = $huntley_to;
					$thw_cc_email_address = $huntley_cc;
					break;

				case 'Knockdown':
					$thw_email_address = $knockdown_to;
					$thw_cc_email_address = $knockdown_cc;
					break;

				case 'Marlborough':
					$thw_email_address = $marlborough_to;
					$thw_cc_email_address = $marlborough_cc;
					break;

				case 'Toddington':
					$thw_email_address = $Toddington_to;
					$thw_cc_email_address = $Toddington_cc;
					break;

				case 'Stockbridge':
					$thw_email_address = $stockbridge_to;
					$thw_cc_email_address = $stockbridge_cc;
					break;
					
				case 'Hereford':
					$thw_email_address = $hereford_to;
					$thw_cc_email_address = $hereford_cc;
					break;
			}// End switch().
	
	break;
	
	case "Farming Technology - PLM / AFS":
    
	// if farming-closeststore has been selected do a switch\case subloop
	$location = isset($posted_data['farming-closeststore'])?$posted_data['farming-closeststore']:'';
	
       		switch ($location) {
				
	   				case 'Devizes':
					$thw_email_address = $devizes_to;
					$thw_cc_email_address = $devizes_cc;
					break;

				case 'Frome':
					$thw_email_address = $frome_to;
					$thw_cc_email_address = $frome_cc;
					break;

				case 'Andoversford':
					$thw_email_address = $andoversford_to;
					$thw_cc_email_address = $andoversford_cc;
					break;

				case 'Huntley':
					$thw_email_address = $huntley_to;
					$thw_cc_email_address = $huntley_cc;
					break;

				case 'Knockdown':
					$thw_email_address = $knockdown_to;
					$thw_cc_email_address = $knockdown_cc;
					break;

				case 'Marlborough':
					$thw_email_address = $marlborough_to;
					$thw_cc_email_address = $marlborough_cc;
					break;

				case 'Toddington':
					$thw_email_address = $Toddington_to;
					$thw_cc_email_address = $Toddington_cc;
					break;

				case 'Stockbridge':
					$thw_email_address = $stockbridge_to;
					$thw_cc_email_address = $stockbridge_cc;
					break;
					
				case 'Hereford':
					$thw_email_address = $hereford_to;
					$thw_cc_email_address = $hereford_cc;
					break;	
			}// End switch().
	
	break;

		} //end of big case loop
 
// set the email address to recipient
$mailProp ['mail']['recipient'] = $thw_email_address;

// set the Cc email address
//$mailProp ['mail']['additional_headers'] = 'Cc: ' . $thw_cc_email_address . ', cameron.kinross@immedia-creative.com';
 
// update the form properties
$contact_form->set_properties(array('mail' => $mailProp['mail']));


//***************end of  'make an enquiry' code
}




 
}; //end