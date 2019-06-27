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
	$request = new \SMSGatewayCenterPhpSdk\api\reports\sgc_reports($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);
	
	//Read SMS Delivery Report
	$User->setFromDate('2019-06-25');
	echo "SMS Delivery Report: " . $request->readSMSDlr();
	echo "<br />";
	echo "<br />";
	
	//Read SMS Delivery Report
	$User->setUuId('4395794037129563135');
	echo "SMS Delivery Report by Trans ID: " . $request->readSMSDlrTransId();
	echo "<br />";
	echo "<br />";
	
	//Read SMS Delivery Summary
	$User->setFromDate('2019-05-25');
	$User->setToDate('2019-06-24');
	echo "SMS Delivery Summary: " . $request->readSMSDlrSummary();
	echo "<br />";
	echo "<br />";
	
	//Read SMS Uploaded Files Report
	$User->setFromDate('2019-06-25');
	$User->setToDate('2019-06-25');
	echo "SMS Uploaded Files Report: " . $request->readSMSUploadedFiles();
	echo "<br />";
	echo "<br />";
	
	//Read Incoming SMS Report
	$User->setFromDate('2019-01-25');
	$User->setToDate('2019-06-25');
	echo "Incoming SMS Report: " . $request->readIncomingSmsReport();
	echo "<br />";
	echo "<br />";
	
	//Read Miss Call Report
	$User->setFromDate('2019-01-25');
	$User->setToDate('2019-06-27');
	echo "Miss Call Report: " . $request->readMissCallReport();
	echo "<br />";
	echo "<br />";