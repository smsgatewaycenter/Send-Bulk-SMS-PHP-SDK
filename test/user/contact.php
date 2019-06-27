<?php

	define("_SMSGATEWAYCENTRE_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../../../autoload.php';

	//Auth
	include_once '../userinfo.php';

	//SET PARAMS
	$User = new \SMSGatewayCenterPhpSdk\object\sgc_user();
	$User->setOutput("json");

	//INITIATE HANDLE
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_contact($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create Contact
	$User->setGroupId(17462);
	$User->setContactName("Milind");
	$User->setMobileNo("911234567890");
	echo "Create Contact: " . $request->create();
	echo "<br />";
	echo "<br />";

	//Read Contact list
	echo "Read Contact: " . $request->read();
	echo "<br />";
	echo "<br />";

	//Delete Contact
	$User->setContactId(8173062);
	echo "Delete Contact: " . $request->delete();
	