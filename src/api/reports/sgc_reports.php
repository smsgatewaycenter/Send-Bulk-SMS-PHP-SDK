<?php

	namespace SMSGatewayCenterPhpSdk\api\reports;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SMSGatewayCenterPhpSdk\object\sgc_auth;
	use SMSGatewayCenterPhpSdk\config\sgc_common_api_params;
	use SMSGatewayCenterPhpSdk\config\sgc_sms_reports_api_params;
	use SMSGatewayCenterPhpSdk\lib\sgc_callapi;
	use SMSGatewayCenterPhpSdk\config\sgc_constant;
	use SMSGatewayCenterPhpSdk\object\sgc_user;

	class sgc_reports {

		private $auth;
		private $user;
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
		function __construct(sgc_auth $auth, sgc_user $user) {
			$this->auth = $auth;
			$this->user = $user;
			$this->header = [
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->user->getOutput()
			];
		}

		/**
		 * Fetch SMS Delivery Report
		 * @return type
		 */
		function readSMSDlr() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_FROM_DATE] = $this->user->getFromDate();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_SMSDLR, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Fetch SMS Delivery Report by Transaction ID
		 * @return type
		 */
		function readSMSDlrTransId() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_TRANSACTION_ID] = $this->user->getUuId();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_SMSDLR_TRANSID, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Fetch SMS Delivery Summary
		 * @return type
		 */
		function readSMSDlrSummary() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_FROM_DATE] = $this->user->getFromDate();
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_TO_DATE] = $this->user->getToDate();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_SUMMARY, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Fetch SMS Uploaded Files Report
		 * @return type
		 */
		function readSMSUploadedFiles() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_FROM_DATE] = $this->user->getFromDate();
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_TO_DATE] = $this->user->getToDate();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_FILEUPLOAD, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Fetch Incoming SMS Report
		 * @return type
		 */
		function readIncomingSmsReport() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_FROM_DATE] = $this->user->getFromDate();
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_TO_DATE] = $this->user->getToDate();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_INCOMINGSMS, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Fetch Miss Call Report
		 * @return type
		 */
		function readMissCallReport() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_FROM_DATE] = $this->user->getFromDate();
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_TO_DATE] = $this->user->getToDate();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_MISSCALL, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Fetch Optin Subscribers Report
		 * @return type
		 */
		function readOptinSubscribersReport() {
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_FROM_DATE] = $this->user->getFromDate();
			$this->data[sgc_sms_reports_api_params::API_SMS_REPORTS_PARAM_TO_DATE] = $this->user->getToDate();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_REPORT_OPTIN_SUBSCRIBERS, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}

	}
	