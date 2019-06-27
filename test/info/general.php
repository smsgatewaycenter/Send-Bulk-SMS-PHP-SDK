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
	$request = new \SMSGatewayCenterPhpSdk\api\info\sgc_general($Auth, $Sms);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Get SMS API Error Codes List
	echo "SMS API Error Codes: " . $request->apiErrorCode();
	echo "<br />";
	echo "<br />";

	//Get SMS Delivery Error Codes List
	echo "SMS Delivery Error Codes: " . $request->deliveryErrorCode();
	echo "<br />";
	echo "<br />";
	