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
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_templates($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create Template (###123### -> variable differs)
	$User->setMessage("Dear ###123###, your subscription will end on ###123###");
	echo "Create Template: " . $request->create();
	echo "<br />";
	echo "<br />";

	//Read Templates list
	echo "Read Template: " . $request->read();
	echo "<br />";
	echo "<br />";

	//Update Template (###123### -> variable differs)
	$User->setMessage("Dear ###123###, your UPDATED subscription will end on ###123###");
	$User->setId(3);
	echo "Update Template: " . $request->update();
	echo "<br />";
	echo "<br />";

	//Delete Template
	$User->setId(3);
	echo "Delete Template: " . $request->delete();
	