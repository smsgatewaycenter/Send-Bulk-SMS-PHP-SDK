<?php

	define("_SMSGATEWAYCENTRE_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../../../autoload.php';

	//Auth
	include_once '../userinfo.php';

	//SET PARAMS
	$Sms = new \SMSGatewayCenterPhpSdk\object\sgc_sms();
	$Sms->setOutput("json");

	//INITIATE HANDLE
	$request = new \SMSGatewayCenterPhpSdk\api\sms\sgc_schedule($Auth, $Sms);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Read Schedule list
	echo "Fetch Schedule: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Cancel Schedule
	$Sms->setUuId("2611261893078893973");
	echo "Cancel Schedule: " . $request->Cancel();
	