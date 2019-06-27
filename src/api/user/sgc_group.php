<?php

	namespace SMSGatewayCenterPhpSdk\api\user;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SMSGatewayCenterPhpSdk\object\sgc_auth;
	use SMSGatewayCenterPhpSdk\config\sgc_common_api_params;
	use SMSGatewayCenterPhpSdk\config\sgc_user_group_api_params;
	use SMSGatewayCenterPhpSdk\lib\sgc_callapi;
	use SMSGatewayCenterPhpSdk\config\sgc_constant;
	use SMSGatewayCenterPhpSdk\object\sgc_user;

	class sgc_group {

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
		 * Create Group
		 * @return type
		 */
		function create() {
			$this->data['do'] = 'add';
			$this->data[sgc_user_group_api_params::API_USER_GROUP_PARAM_NEW_GROUP_NAME] = $this->user->getNewGroupName();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_GROUP, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read Group
		 * @return type
		 */
		function read() {
			$this->data['do'] = 'list';
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_GROUP, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Update Group
		 * @return type
		 */
		function update() {
			$this->data['do'] = 'edit';
			$this->data[sgc_user_group_api_params::API_USER_GROUP_PARAM_OLD_GROUP_NAME] = $this->user->getOldGroupName();
			$this->data[sgc_user_group_api_params::API_USER_GROUP_PARAM_NEW_GROUP_NAME] = $this->user->getNewGroupName();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_GROUP, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Delete Group
		 * @return type
		 */
		function delete() {
			$this->data['do'] = 'delete';
			$this->data[sgc_user_group_api_params::API_USER_GROUP_PARAM_DELETE_GROUP_NAME] = $this->user->getDelGroupName();
			$response = new sgc_callapi(sgc_constant::SGC_LIB_API, sgc_constant::SGC_ENDPOINT_GROUP, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	