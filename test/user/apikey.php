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
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_apikey($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create apiKey
	echo "Create apiKey: " . $request->Create();
	