<?php

	namespace SMSGatewayCenterPhpSdk\lib;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_callapi {

		private $response;
		private $statusCode;

		/**
		 * Response
		 * @return type
		 */
		function getResponse() {
			return $this->response;
		}

		/**
		 * StatusCode
		 * @return type
		 */
		function getStatusCode() {
			return $this->statusCode;
		}

		/**
		 * Set Response
		 * @param type $response
		 */
		function setResponse($response) {
			$this->response = $response;
		}

		/**
		 * Set StatusCode
		 * @param type $statusCode
		 */
		function setStatusCode($statusCode) {
			$this->statusCode = $statusCode;
		}

		/**
		 * Main Constructor
		 * @param type $api
		 * @param type $endpoint
		 * @param type $data
		 * @param type $header
		 * @param type $method
		 * @param type $restApi
		 */
		function __construct($api, $endpoint, $data, $header, $method = "POST", $restApi = false) {
			$api = \SMSGatewayCenterPhpSdk\config\sgc_constant::SERVER_HOST . $api;
			$response = "";
			$client = new \GuzzleHttp\Client();
			
			if ($method == 'POST') {
				try {
					$response = $client->request('POST', $api . $endpoint, [
						'form_params' => $data,
						'headers' => $header
					]);

					$this->response = $response->getBody();
					$this->statusCode = $response->getStatusCode();
				} catch (\GuzzleHttp\Exception\RequestException $e) {
					$this->response = $e->getResponse();
					$this->response = 500;
				}
			} else if ($method == 'GET') {
				try {
					$response = $client->request('GET', $api . $endpoint, [
						'query' => $data,
						'headers' => $header
					]);

					$this->response = $response->getBody();
					$this->statusCode = $response->getStatusCode();
				} catch (\GuzzleHttp\Exception\RequestException $e) {
					$this->response = $e->getResponse();
					$this->response = 500;
				}
			} else if ($method == 'FILE') {
				try {
					$response = $client->request('POST', $api . $endpoint, [
						'multipart' => $data,
						'headers' => $header
					]);

					$this->response = $response->getBody();
					$this->statusCode = $response->getStatusCode();
				} catch (\GuzzleHttp\Exception\RequestException $e) {
					$this->response = $e->getResponse();
					$this->response = 500;
				}
			}
		}

	}
	