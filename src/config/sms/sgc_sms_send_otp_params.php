<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SMSGatewayCenterPhpSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_send_otp_params {

		//Send Method Params
		const API_SMS_SEND_OTP_PARAM_SENDER_ID = "senderId";
		const API_SMS_SEND_OTP_PARAM_SEND_METHOD = "sendMethod";
		const API_SMS_SEND_OTP_PARAM_MESSAGE_TYPE = "msgType";
		const API_SMS_SEND_OTP_PARAM_MOBILE = "mobile";
		const API_SMS_SEND_OTP_PARAM_MESSAGE_TEXT = "msg";
		const API_SMS_SEND_OTP_PARAM_CODE_EXPIRY = "codeExpiry";
		const API_SMS_SEND_OTP_PARAM_CODE_LENGTH = "codeLength";
		const API_SMS_SEND_OTP_PARAM_CODE_TYPE = "codeType";
		const API_SMS_SEND_OTP_PARAM_RETRY_EXPIRY = "retryExpiry";
		const API_SMS_SEND_OTP_PARAM_RENEW = "renew";
		const API_SMS_SEND_OTP_PARAM_MEDIUM = "medium";
		const API_SMS_SEND_OTP_PARAM_EMAILID = "emailId";
		const API_SMS_SEND_OTP_PARAM_CALLBACK = "callback";
		//verify
		const API_SMS_SEND_OTP_PARAM_OTP_CODE = "otp";

	}
	