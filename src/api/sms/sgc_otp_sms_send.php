<?php
	namespace SMSGatewayCenterPhpSdk\api\sms;
	
	/*	 * *******smsgatewaycentre******* * */

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	use SMSGatewayCenterPhpSdk\object\sgc_auth;
	use SMSGatewayCenterPhpSdk\config\sgc_common_api_params;
	use SMSGatewayCenterPhpSdk\config\sgc_sms_send_otp_params;
	use SMSGatewayCenterPhpSdk\lib\sgc_callapi;
	use SMSGatewayCenterPhpSdk\config\sgc_constant;
	use SMSGatewayCenterPhpSdk\object\sgc_sms;

	/**
	 * Class for sgc otp sms send.
	 */
	class sgc_otp_sms_send {

		private $auth;
		private $sms;
		private $header;
		private $data;
		private $useRestApi = false;

		/**
		 * Enable/Disable RestAPI
		 *
		 * @param      <type>  $useRestApi  The use rest api
		 */
		function useRestApi($useRestApi) {
			$this->useRestApi = $useRestApi;
		}

		/**
		 * Main Constructor
		 *
		 * @param      \SMSGatewayCenterPhpSdk\object\sgc_auth  $auth   The auth
		 * @param      \SMSGatewayCenterPhpSdk\object\sgc_sms   $sms    The sms
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
		 * Generate OTP Code
		 *
		 * @return     <string>  Output as per required format
		 */
		function generate() {
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_SENDER_ID] = $this->sms->getSenderId();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_SEND_METHOD] = $this->sms->getSendMethod();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_MESSAGE_TYPE] = $this->sms->getMsgType();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_MOBILE] = $this->sms->getPhone();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_CODE_EXPIRY] = $this->sms->getCodeExpiry();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_CODE_LENGTH] = $this->sms->getCodeLength();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_CODE_TYPE] = $this->sms->getCodeType();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_RETRY_EXPIRY] = $this->sms->getRetryExpiry();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_RENEW] = $this->sms->getRenew();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_MEDIUM] = $this->sms->getMedium();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_EMAILID] = $this->sms->getEmailId();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_CALLBACK] = $this->sms->getCallback();
			$response = new sgc_callapi(sgc_constant::SGC_OTP_API, sgc_constant::SGC_ENDPOINT_OTP, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}
		
		/**
		 * Verify OTP Code
		 *
		 * @return     <string>  Output as per required format
		 */
		function verify(){
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_OTP_CODE] = $this->sms->getOtpCode();
			$this->data[sgc_sms_send_otp_params::API_SMS_SEND_OTP_PARAM_SEND_METHOD] = $this->sms->getSendMethod();
			$response = new sgc_callapi(sgc_constant::SGC_OTP_API, sgc_constant::SGC_ENDPOINT_OTP, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	