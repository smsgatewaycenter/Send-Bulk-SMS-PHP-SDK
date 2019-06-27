<?php

	namespace SMSGatewayCenterPhpSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_senderId_api_params extends sgc_common_api_params {

		//User Params
		const API_USER_SENDER_ID_PARAM_NEW_SENDER_ID = "newSendername";
		const API_USER_SENDER_ID_PARAM_UPDATE_SENDER_ID = "oldSendername";
		const API_USER_SENDER_ID_PARAM_DELETE_SENDER_ID = "delSendername";
		const API_USER_SENDER_ID_PARAM_ID = "id";

	}
	