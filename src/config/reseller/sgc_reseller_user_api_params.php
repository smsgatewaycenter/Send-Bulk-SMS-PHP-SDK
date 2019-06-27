<?php

	namespace SMSGatewayCenterPhpSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_reseller_user_api_params extends sgc_common_api_params {

		//API NAME
		const API_RESELLER_USER_API_NAME = "user";
		//User Method
		const API_RESELLER_USER_METHOD_CREATE_USER = "createuser";
		const API_RESELLER_USER_METHOD_UPDATE_USER = "updateuser";
		const API_RESELLER_USER_METHOD_READ_USER = "readuser";
		const API_RESELLER_USER_METHOD_GENERATE_USER_PASSWORD = "generateuserpassword";
		const API_RESELLER_USER_METHOD_RESET_USER_PASSWORD = "resetuserpassword";
		//User Params
		const API_RESELLER_USER_PARAM_NEWPASSWORD = "Client_NewPassword";
		const API_RESELLER_USER_PARAM_USER_TYPE = "Client_Usertype";
		const API_RESELLER_USER_PARAM_USERNAME = "Client_Username";
		const API_RESELLER_USER_PARAM_EMAIL_ID = "Client_Email";
		const API_RESELLER_USER_PARAM_CONTACT_NO = "Client_Mobile";
		const API_RESELLER_USER_PARAM_FULL_NAME = "Client_Fullname";
		const API_RESELLER_USER_PARAM_ADDRESS = "Client_Address";
		const API_RESELLER_USER_PARAM_SENDERID = "Client_Senderid";
		const API_RESELLER_USER_PARAM_EXPIRY_DATE = "ExpDate";
		const API_RESELLER_USER_PARAM_CITY = "city";

	}
	