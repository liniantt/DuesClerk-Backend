<?php

//  Copyright (c) 2020 by David Kariuki (dk).
//  All Rights Reserved.


// Client Signin

// Enable Error Reporting
error_reporting(1);

// Call Required Functions Classes
require_once 'classes/ClientAccountFunctions.php';
require_once 'classes/Keys.php';


// Create Classes Objects
$clientAccountFunctions	= new ClientAccountFunctions();

// Create Json Response Array And Initialize Error To FALSE
$response = array(KEY_ERROR => false);

// Receive Email Address And Password
if (isset($_POST[FIELD_EMAIL_ADDRESS]) && isset($_POST[FIELD_PASSWORD])) {

	// Get Values From POST
	$emailAddress 	= $_POST[FIELD_EMAIL_ADDRESS]	? $_POST[FIELD_EMAIL_ADDRESS]	: '';
	$password 		= $_POST[FIELD_PASSWORD] 		? $_POST[FIELD_PASSWORD]		: '';

	// Get client by email address and password
	$getClient = $clientAccountFunctions->getClientByEmailAddressAndPassword(
        $emailAddress,
        $password
    );

	// Check if client was found
	if ($getClient !== false) {
		// Client found

		// Set response error to false
		$response[KEY_ERROR] = false;

		// Add Client Details To Response Array
		$response[KEY_SIGN_IN][FIELD_CLIENT_ID]      = $getClient[FIELD_CLIENT_ID];
		$response[KEY_SIGN_IN][FIELD_EMAIL_ADDRESS]  = $getClient[FIELD_EMAIL_ADDRESS];

		// Encode and echo Json response
		echo json_encode($response);

	} else {
		// Client Not Found

		// Check For Wrong Password (Credentials Mismatch)
		if ($clientAccountFunctions->isEmailAddressInClientsTable($emailAddress)) {
			// Client with the emailAddress exists in the database

			// Set response error to true
			$response[KEY_ERROR]         = true;
			$response[KEY_ERROR_MESSAGE] = "Incorrect email address or password!";

			// Encode and echo Json response
			echo json_encode($response);

		} else {
			// Client not found

			// Set response error to true
			$response[KEY_ERROR]         = true;
			$response[KEY_ERROR_MESSAGE] = "We didn't find an account with that emailAddress!";

			// Encode and echo Json response
			echo json_encode($response);
		}
	}
} else {
	// Mising Fields

	// Set response error to true
	$response[KEY_ERROR]           = true;
	$response[KEY_ERROR_MESSAGE]   = "Something went terribly wrong!";

	//Return Response
	echo json_encode($response);
}

// EOF: SignInClient.php
