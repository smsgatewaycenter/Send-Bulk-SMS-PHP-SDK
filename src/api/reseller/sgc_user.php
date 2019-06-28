<?php

	namespace SMSGatewayCenterPhpSdk\api\reseller;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SMSGatewayCenterPhpSdk\object\sgc_auth;
	use SMSGatewayCenterPhpSdk\config\sgc_common_api_params;
	use SMSGatewayCenterPhpSdk\config\sgc_reseller_user_api_params;
	use SMSGatewayCenterPhpSdk\lib\sgc_callapi;
	use SMSGatewayCenterPhpSdk\config\sgc_constant;
	use SMSGatewayCenterPhpSdk\object\sgc_reseller;

	class sgc_user {

		private $auth;
		private $reseller;
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
		function __construct(sgc_auth $auth, sgc_reseller $reseller) {
			$this->auth = $auth;
			$this->reseller = $reseller;
			$this->header = [
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->reseller->getOutput()
			];
		}

		/**
		 * Create New User
		 * @return type
		 */
		function createUser() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USER_TYPE] = $this->reseller->getUserType();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EMAIL_ID] = $this->reseller->getEmailId();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_CONTACT_NO] = $this->reseller->getMobileNo();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_FULL_NAME] = $this->reseller->getFullName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_ADDRESS] = $this->reseller->getAddress();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EXPIRY_DATE] = $this->reseller->getExpiryDate();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_SENDERID] = $this->reseller->getSenderId();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_CREATE_USER, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Update User
		 * @return type
		 */
		function updateUser() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EMAIL_ID] = $this->reseller->getEmailId();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_CONTACT_NO] = $this->reseller->getMobileNo();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_FULL_NAME] = $this->reseller->getFullName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_ADDRESS] = $this->reseller->getAddress();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EXPIRY_DATE] = $this->reseller->getExpiryDate();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USER_STATUS] = $this->reseller->getUserStatus();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_CREATE_USER, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Read User
		 * @return type
		 */
		function readUser() {
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_READ_USER, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Check User Balance
		 * @return type
		 */
		function readUserBalance() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_CHECK_USER_BALANCE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Check User Expiry
		 * @return type
		 */
		function readUserExpiry() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_CHECK_USER_EXPIRY, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Change User's Password
		 * @return type
		 */
		function changeUserPassword() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_NEWPASSWORD] = $this->reseller->getNewPassword();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_CHANGE_USER_PASSWORD, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Reset User's Password
		 * @return type
		 */
		function resetUserPassword() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_RESELLER_RESET_USER_PASSWORD, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	