<?php

	namespace SMSGatewayCenterPhpSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_group_api_params extends sgc_common_api_params {

		//User Params
		const API_USER_GROUP_PARAM_NEW_GROUP_NAME = "newGroupname";
		const API_USER_GROUP_PARAM_OLD_GROUP_NAME = "oldGroupname";
		const API_USER_GROUP_PARAM_DELETE_GROUP_NAME = "delGroupname";

	}
	