<?php

	define("_SMSGATEWAYCENTRE_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../../../autoload.php';

	//Auth
	include_once '../userinfo.php';

	//SET PARAMS
	$Reseller = new \SMSGatewayCenterPhpSdk\object\sgc_reseller();
	$Reseller->setOutput("json");

	//INITIATE HANDLE
	$request = new \SMSGatewayCenterPhpSdk\api\reseller\sgc_credit_management($Auth, $Reseller);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Read Credit History
	$Reseller->setUserLoginName("test");
	echo "Read Credit History:" . $request->readUserCreditUsage();
	echo "<br />";
	echo "<br />";
	
	//Add Credit
	$Reseller->setCredit(1);
	$Reseller->setUserLoginName("test");
	$Reseller->setComment("Added new balance via sdk");
	echo "Add Credit:" . $request->addCredit();
	echo "<br />";
	echo "<br />";

	//Remove Credit
	$Reseller->setCredit(1);
	$Reseller->setComment("removed balance via sdk");
	$Reseller->setUserLoginName("test");
	echo "Remove Credit:" . $request->removeCredit();
	echo "<br />";
	echo "<br />";
	