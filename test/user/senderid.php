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
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_senderid($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create SenderId
	$User->setNewSenderId("TESTIG");
	echo "Create Sender New Name: " . $request->create();
	echo "<br />";
	echo "<br />";

	//Read SenderId list
	echo "Read SenderId: " . $request->read();
	echo "<br />";
	echo "<br />";

	//Update SenderId
	$User->setOldSenderId("TESTIG");
	$User->setNewSenderId("TESTII");
	//$User->setId(33);
	echo "Update SenderId: " . $request->update();
	echo "<br />";
	echo "<br />";

	//Delete SenderId
	$User->setDelSenderId("TESTII");
	echo "Delete SenderId: " . $request->delete();
	