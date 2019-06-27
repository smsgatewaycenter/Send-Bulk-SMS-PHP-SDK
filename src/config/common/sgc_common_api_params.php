<?php

	namespace SMSGatewayCenterPhpSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_common_api_params {

		//Output format
		const API_COMMON_OUTPUT_FORMAT = array("plain", "json", "xml");
		const API_COMMON_OUTPUT_FORMAT_TEXT = "plain";
		const API_COMMON_OUTPUT_FORMAT_JSON = "json";
		const API_COMMON_OUTPUT_FORMAT_XML = "xml";
		//Common Params
		const API_COMMON_PARAM_USERID = "userId";
		const API_COMMON_PARAM_PASSWORD = "password";
		const API_COMMON_PARAM_API_KEY = "apiKey";
		const API_COMMON_PARAM_OUTPUT_FORMAT = "format";
		const API_COMMON_PARAM_UUID = "uuid";
		const API_COMMON_PARAM_ID = "id";
		//Static 
		const API_COMMON_CONST_TRUE = "true";
		const API_COMMON_CONST_FALSE = "false";
		const API_COMMON_CONST_SUCCESS = "ok";
		const API_COMMON_CONST_ERROR = "issue";
		//Method
		const API_COMMON_METHOD_GET = "GET";
		const API_COMMON_METHOD_POST = "POST";
		const API_COMMON_METHOD_FILE = "FILE";
		
		//Response 
		const API_COMMON_OUTPUT_TEXT_RESPONSE_SEPERATOR = " | ";

	}
	