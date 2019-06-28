<?php
	/*	 * *******smsgatewaycentre******* * */
	
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
	$request = new \SMSGatewayCenterPhpSdk\api\sms\sgc_otp_sms_send($Auth, $Sms);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//GENERATE
	$Sms->setSenderId("SMSGAT");
	$Sms->setSendMethod("generate");
	$Sms->setMsgType("text");
	$Sms->setText("Hello  World");
	$Sms->setPhone("919999999999");
	//Optional
	$Sms->setCodeExpiry(60);
	$Sms->setCodeLength(4);
	$Sms->setCodeType('num');//num|alpha|alphanum
	$Sms->setRetryExpiry(60);
	$Sms->setRenew('false');
	$Sms->setMedium('sms'); //sms|email
	$Sms->setEmailId(''); //include this if only medium is set to email
	$Sms->setCallback(''); //URL (Parameters will be sent to your url as status=success&type=new&generationTime=2017-12-06%2023%3A18%3A15&validity=120%20secs&otp=6754)
	echo $request->generate();
	echo "<br><br>";
	
	//VERIFY
	$Sms->setPhone("919999999999");
	$Sms->setOtpCode("1234");
	$Sms->setSendMethod("verify");
	echo $request->verify();