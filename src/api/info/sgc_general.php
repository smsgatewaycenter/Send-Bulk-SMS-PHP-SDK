<?php

	namespace SMSGatewayCenterPhpSdk\api\info;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SMSGatewayCenterPhpSdk\object\sgc_auth;
	use SMSGatewayCenterPhpSdk\config\sgc_common_api_params;
	use SMSGatewayCenterPhpSdk\lib\sgc_callapi;
	use SMSGatewayCenterPhpSdk\config\sgc_constant;
	use SMSGatewayCenterPhpSdk\object\sgc_user;
	use SMSGatewayCenterPhpSdk\object\sgc_sms;

	class sgc_general {

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
		 * Get SMS Delivery Error Codes List
		 * @return type
		 */
		function deliveryErrorCode() {
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_INFO_DELIVERY_CODES, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Get SMS API Error Codes List
		 * @return type
		 */
		function apiErrorCode() {
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_INFO_API_CODES, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	