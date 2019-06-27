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
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_drafts($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);
	
	//Create Draft
	$User->setDraftContent("My new draft");
	echo "Create New Draft: " . $request->create();
	echo "<br />";
	echo "<br />";

	//Read Draft list
	echo "Read Drafts: " . $request->read();
	echo "<br />";
	echo "<br />";

	//Update Draft
	$User->setDraftId("34628");
	$User->setDraftContent("insert from api 4");
	echo "Update Draft: " . $request->update();
	echo "<br />";
	echo "<br />";

	//Delete Draft
	$User->setDraftId("34632");
	echo "Delete Draft: " . $request->delete();
	