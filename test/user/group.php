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
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_group($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create group
	$User->setNewGroupName("TESTIN");
	echo "Create Group: " . $request->create();
	echo "<br />";
	echo "<br />";

	//Read group list
	echo "Read Group: " . $request->read();
	echo "<br />";
	echo "<br />";

	//Update group
	$User->setOldGroupName("TESTIN");
	$User->setNewGroupName("TESTII");
	echo "Update Group: " . $request->update();
	echo "<br />";
	echo "<br />";

	//Delete group
	$User->setDelGroupName("TESTII");
	echo "Delete Group: " . $request->delete();
	