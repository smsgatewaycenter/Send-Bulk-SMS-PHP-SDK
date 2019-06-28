<?php

	namespace SMSGatewayCenterPhpSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_reseller_user_api_params extends sgc_common_api_params {

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
		const API_RESELLER_USER_PARAM_USER_STATUS = "UserStatus";

	}
	