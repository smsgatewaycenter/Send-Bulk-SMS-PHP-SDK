<?php

	namespace SMSGatewayCenterPhpSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_constant {

		//SGC API LINK
		//?userId=YOURUSERNAME&password=YOURPASSWORD&senderId=YOURSENDERNAME&sendMethod=simpleMsg&msgType=TEXT&msg=YOUR+MESSAGE&mobile=919999999999,919999999998&duplicateCheck=true&format=json
		const SERVER_HOST ="https://www.smsgateway.center";
		const SGC_API =  "/SMSApi";
		const SGC_OTP_API = "/OTPApi";
		const SGC_LIB_API = "/library/api";

		//SMS API ENDPOINTS
		const SGC_ENDPOINT_SMS_BATCH = "/rest/send";
		const SGC_ENDPOINT_SMS_PHONEBOOK = "/rest/send";
		const SGC_ENDPOINT_SMS_FILE = "/rest/send";

		//SCHEDULE API ENDPOINTS
		const SGC_ENDPOINT_SCHEDULE_READ = "/self/Schedule/";
		const SGC_ENDPOINT_SCHEDULE_CANCEL = "/rest/cancelScheduled";

		//APIKEY API ENDPOINTS
		const SGC_ENDPOINT_APIKEY_CREATE = "/rest/regenerateAPIKey";

		//ACCOUNT API ENDPOINTS
		const SGC_ENDPOINT_ACCOUNT_READ_BALANCE_VALIDITY_CHECK = "/rest/balanceValidityCheck";
		const SGC_ENDPOINT_ACCOUNT_READ_BALANCE = "/self/CheckBalance/";
		const SGC_ENDPOINT_ACCOUNT_READ_EXPIRY = "/self/CheckExpiry/";
		const SGC_ENDPOINT_ACCOUNT_READ_PROFILE = "/self/ViewProfile/";
		const SGC_ENDPOINT_ACCOUNT_READ_CREDIT_HISTORY = "/self/CreditHistory/";
		const SGC_ENDPOINT_PASSWORD_CHANGE = "/self/ChangePassword/";

		//SENDERID API ENDPOINTS
		const SGC_ENDPOINT_SENDER_ID = "/self/SenderName/";

		//GROUP API ENDPOINTS
		const SGC_ENDPOINT_GROUP = "/self/Group/";

		//CONTACTS API ENDPOINTS
		const SGC_ENDPOINT_CONTACT = "/self/Contact/";
		
		//MESSAGE TEMPLATES API ENDPOINTS
		const SGC_ENDPOINT_TEMPLATES = "/self/Templates/";
		
		//DRAFTS API ENDPOINTS
		const SGC_ENDPOINT_DRAFTS = "/self/Drafts/";

		//RESELLER USER API ENDPOINTS
		const SGC_ENDPOINT_RESELLER_READ_USER = "/reseller/ClientList/";
		const SGC_ENDPOINT_RESELLER_CHECK_USER_BALANCE = "/reseller/CheckBalance/";
		const SGC_ENDPOINT_RESELLER_CHECK_USER_EXPIRY = "/reseller/CheckExpiry/";
		const SGC_ENDPOINT_RESELLER_CREATE_USER = "/reseller/AddClient/";
		const SGC_ENDPOINT_RESELLER_UPDATE_USER = "/reseller/UpdateClient/";
		const SGC_ENDPOINT_RESELLER_CHANGE_USER_PASSWORD = "/reseller/ChangePassword/";
		const SGC_ENDPOINT_RESELLER_RESET_USER_PASSWORD = "/reseller/ForgotPassword/";

		//RESELLER CREDIT MANAGEMENT API ENDPOINTS
		const SGC_ENDPOINT_RESELLER_CREDIT_UPDATE = "/reseller/UpdateBalance/";
		const SGC_ENDPOINT_RESELLER_READ_CREDIT_HISTORY = "/reseller/CreditHistory/";


		//REPORT API ENDPOINTS
		const SGC_ENDPOINT_REPORT_SMSDLR = "/self/SMSDlr/";
		const SGC_ENDPOINT_REPORT_SMSDLR_TRANSID = "/self/SMSDlrTrans/";
		const SGC_ENDPOINT_REPORT_SUMMARY = "/self/DLRSummary/";
		const SGC_ENDPOINT_REPORT_FILEUPLOAD = "/self/uploadedFiles/";
		const SGC_ENDPOINT_REPORT_INCOMINGSMS = "/self/ShortcodeReport/";
		const SGC_ENDPOINT_REPORT_MISSCALL = "/self/MisscallReport/";
		const SGC_ENDPOINT_REPORT_OPTIN_SUBSCRIBERS = "/self/OptinReport/";

		//INFO API ENDPOINTS
		const SGC_ENDPOINT_INFO_DELIVERY_CODES = "/self/deliveryErrorCodes/";
		const SGC_ENDPOINT_INFO_API_CODES = "/self/apiErrorCodes/";

	}
