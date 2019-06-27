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
	$request = new \SMSGatewayCenterPhpSdk\api\user\sgc_account($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Read Account Status
	echo "Read Account Status:" . $request->readAccountStatus();
	echo "<br />";
	echo "<br />";
	
	//Read Account Balance
	echo "Read Account Balance:" . $request->checkBalance();
	echo "<br />";
	echo "<br />";
	
	//Read Account Expiry
	echo "Read Account Expiry:" . $request->checkExpiry();
	echo "<br />";
	echo "<br />";
	
	//Read Profile
	echo "Read Profile:" . $request->ReadProfile();
	echo "<br />";
	echo "<br />";

	//Read Credit History
	echo "Read Credit History:" . $request->readCreditHistory();
	echo "<br />";
	echo "<br />";
	