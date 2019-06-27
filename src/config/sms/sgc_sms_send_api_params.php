<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SMSGatewayCenterPhpSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_send_api_params {

		//API NAME
		const API_SMS_SEND_API_NAME = "send";
		//Send Method Values
		const API_SMS_SEND_METHOD_BATCH = "simpleMsg";
		const API_SMS_SEND_METHOD_PHONEBOOK = "groupMsg";
		const API_SMS_SEND_METHOD_FILE_UPLOAD = "excelMsg";
		//Send Method Params
		const API_SMS_SEND_PARAM_SEND_METHOD = "sendMethod";
		const API_SMS_SEND_PARAM_MOBILE = "mobile";
		const API_SMS_SEND_PARAM_MESSAGE_TEXT = "msg";
		const API_SMS_SEND_PARAM_MESSAGE_TYPE = "msgType";
		const API_SMS_SEND_PARAM_SCHEDULE_TIME = "scheduleTime";
		const API_SMS_SEND_PARAM_SENDER_ID = "senderId";
		const API_SMS_SEND_PARAM_TEST_MESSAGE = "testMessage";
		const API_SMS_SEND_PARAM_GROUP_NAME = "group";
		const API_SMS_SEND_PARAM_DUPLICATE_CHECK = "duplicateCheck";
		const API_SMS_SEND_PARAM_FILE_NAME = "file";
		const API_SMS_SEND_FILE_ALLOWED_EXTENSION = array(
			"xls",
			"xlsx",
			"zip",
			"csv",
			"txt");
		const API_SMS_SEND_FILE_ALLOWED_MIME_TYPE = array(
			'application/excel',
			'application/octet-stream',
			'application/plain',
			'application/vnd.ms-excel',
			'application/vnd.ms-excel.addin.macroEnabled.12',
			'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
			'application/vnd.ms-excel.sheet.macroEnabled.12',
			'application/vnd.ms-excel.template.macroEnabled.12',
			'application/vnd.oasis.opendocument.spreadsheet',
			'application/x-excel',
			'application/x-msexcel',
			'application/x-zip',
			'application/x-zip-compressed',
			'application/zip',
			'text/plain',
			'text/csv');
		//REQUEST METHOD ACCEPT
		const API_SMS_SEND_REQUEST_METHOD_BATCH = array('POST', 'GET');
		const API_SMS_SEND_REQUEST_METHOD_PHONEBOOK = array('POST', 'GET');
		const API_SMS_SEND_REQUEST_METHOD_FILE_UPLOAD = array('POST');

	}
	