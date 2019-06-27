<?php

	namespace SMSGatewayCenterPhpSdk\api\sms;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SMSGatewayCenterPhpSdk\object\sgc_auth;
	use SMSGatewayCenterPhpSdk\config\sgc_common_api_params;
	use SMSGatewayCenterPhpSdk\config\sgc_sms_send_api_params;
	use SMSGatewayCenterPhpSdk\lib\sgc_callapi;
	use SMSGatewayCenterPhpSdk\config\sgc_constant;
	use SMSGatewayCenterPhpSdk\object\sgc_sms;

	class sgc_sms_send {

		private $auth;
		private $sms;
		private $header;
		private $data;
		private $useRestApi = false;

		/**
		 * Enable/Disable RestAPI
		 * @param type $useRestApi
		 */
		function useRestApi($useRestApi) {
			$this->useRestApi = $useRestApi;
		}

		/**
		 * Main Constructor
		 * @param Auth $auth
		 * @param User $user
		 */
		function __construct(sgc_auth $auth, sgc_sms $sms) {
			$this->auth = $auth;
			$this->sms = $sms;
			$this->header = [
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->sms->getOutput()
			];
		}

		/**
		 * Send Batch
		 * @return type
		 */
		function batch() {
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SEND_METHOD] = sgc_sms_send_api_params::API_SMS_SEND_METHOD_BATCH;
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MESSAGE_TEXT] = $this->sms->getText();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MESSAGE_TYPE] = $this->sms->getMsgType();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SCHEDULE_TIME] = $this->sms->getScheduleTime();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SENDER_ID] = $this->sms->getSenderId();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_TEST_MESSAGE] = $this->sms->getTestMessage();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_DUPLICATE_CHECK] = $this->sms->getDuplicateCheck();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MOBILE] = $this->sms->getPhone();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_SMS_BATCH, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Send PhoneBook
		 * @return type
		 */
		function phonebook() {
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SEND_METHOD] = sgc_sms_send_api_params::API_SMS_SEND_METHOD_PHONEBOOK;
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MESSAGE_TEXT] = $this->sms->getText();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MESSAGE_TYPE] = $this->sms->getMsgType();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SCHEDULE_TIME] = $this->sms->getScheduleTime();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SENDER_ID] = $this->sms->getSenderId();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_TEST_MESSAGE] = $this->sms->getTestMessage();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_DUPLICATE_CHECK] = $this->sms->getDuplicateCheck();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_GROUP_NAME] = $this->sms->getGroupName();

			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_SMS_PHONEBOOK, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Send File
		 * @return type
		 */
		function file() {
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SEND_METHOD] = sgc_sms_send_api_params::API_SMS_SEND_METHOD_FILE_UPLOAD;
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MESSAGE_TEXT] = $this->sms->getText();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_MESSAGE_TYPE] = $this->sms->getMsgType();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SCHEDULE_TIME] = $this->sms->getScheduleTime();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_SENDER_ID] = $this->sms->getSenderId();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_TEST_MESSAGE] = $this->sms->getTestMessage();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_DUPLICATE_CHECK] = $this->sms->getDuplicateCheck();
			$this->data[sgc_sms_send_api_params::API_SMS_SEND_PARAM_FILE_NAME] = $this->sms->getFile();

			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_SMS_FILE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	