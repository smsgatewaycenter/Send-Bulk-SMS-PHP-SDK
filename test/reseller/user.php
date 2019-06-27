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
	$request = new \SMSGatewayCenterPhpSdk\api\reseller\sgc_user($Auth,$Reseller);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);
	
	//Create New User
	$Reseller->setUserType("customer");
	$Reseller->setUserLoginName("12343w");
	$Reseller->setEmailId("test@testing.com");
	$Reseller->setMobileNo("919999999999");
	$Reseller->setFullName("Test");
	$Reseller->setAddress("Mumbai India");
	$Reseller->setExpiryDate("2021-01-20");
	$Reseller->setSenderId("SMSGAT");
	echo $request->createUser();
	echo "<br />";
	echo "<br />";
	
	//Change User Password
	$Reseller->setUserLoginName("testssss");
	$Reseller->setNewPassword(urlencode("Rags$0303$"));
	echo "Change User Password: " . $request->changeUserPassword();
	echo "<br />";
	echo "<br />";
	
	//Reset User Password
	$Reseller->setUserLoginName("testssss");
	echo "Reset User Password: " . $request->resetUserPassword();
	echo "<br />";
	echo "<br />";
	
	//Read User Expiry
	$Reseller->setUserLoginName("testssss");
	echo "Check User Expiry: " . $request->readUserExpiry();
	echo "<br />";
	echo "<br />";
	
	//Read User Balance
	$Reseller->setUserLoginName("testssss");
	echo "Check User Balance: " . $request->readUserBalance();
	echo "<br />";
	echo "<br />";
	
	//Read UserList
	echo "Read Users List: " . $request->readUser();
	echo "<br />";
	echo "<br />";