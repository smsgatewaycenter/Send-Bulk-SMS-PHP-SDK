<?php

	namespace SMSGatewayCenterPhpSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_contact_api_params extends sgc_common_api_params {
		
		//User Params
		const API_USER_CONTACT_PARAM_GROUP_NAME = "groupname";
		const API_USER_CONTACT_PARAM_GROUP_ID = "groupid";
		const API_USER_CONTACT_PARAM_CONTACT_NAME = "fname";
		const API_USER_CONTACT_PARAM_MOBILE_NO = "mobile";
		const API_USER_CONTACT_PARAM_DELETE_CONTACT_ID = "delcontactId";

	}
	