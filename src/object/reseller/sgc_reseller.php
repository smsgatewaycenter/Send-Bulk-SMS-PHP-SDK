<?php

	namespace SMSGatewayCenterPhpSdk\object;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_reseller {

		private $credit;
		private $comment;
		private $userLoginName;
		private $fromDate;
		private $toDate;
		private $userType;
		private $emailId;
		private $mobileNo;
		private $fullName;
		private $address;
		private $region;
		private $country;
		private $newPassword;
		private $notifyUser;
		private $city;
		private $output;
		private $domainName;
		private $expiryDate;
		private $enableCMS;
		private $userStatus;
		private $product;
		private $transactionType;
		private $senderId;

		/**
		 * User Product
		 * @return type
		 */
		function getProduct() {
			return $this->product;
		}

		/**
		 * User TransactionType
		 * @return type
		 */
		function getTransactionType() {
			return $this->transactionType;
		}

		/**
		 * Set Product
		 * @param type $product
		 */
		function setProduct($product) {
			$this->product = $product;
		}

		/**
		 * Set TransactionType
		 * @param type $transactionType
		 */
		function setTransactionType($transactionType) {
			$this->transactionType = $transactionType;
		}

		/**
		 * Main Constructor
		 */
		function __construct() {
			
		}

		/**
		 * User Status
		 * @return type
		 */
		function getUserStatus() {
			return $this->userStatus;
		}

		/**
		 * Set UserStatus
		 * @param type $userStatus
		 */
		function setUserStatus($userStatus) {
			$this->userStatus = $userStatus;
		}

		/**
		 * Credit
		 * @return type
		 */
		function getCredit() {
			return $this->credit;
		}

		/**
		 * Comment
		 * @return type
		 */
		function getComment() {
			return $this->comment;
		}

		/**
		 * LoginName
		 * @return type
		 */
		function getUserLoginName() {
			return $this->userLoginName;
		}

		/**
		 * FromDate
		 * @return type
		 */
		function getFromDate() {
			return $this->fromDate;
		}

		/**
		 * ToDate
		 * @return type
		 */
		function getToDate() {
			return $this->toDate;
		}

		/**
		 * UserType
		 * @return type
		 */
		function getUserType() {
			return $this->userType;
		}

		/**
		 * EmailId
		 * @return type
		 */
		function getEmailId() {
			return $this->emailId;
		}

		/**
		 * MobileNo
		 * @return type
		 */
		function getMobileNo() {
			return $this->mobileNo;
		}

		/**
		 * FullName
		 * @return type
		 */
		function getFullName() {
			return $this->fullName;
		}

		/**
		 * Address
		 * @return type
		 */
		function getAddress() {
			return $this->address;
		}

		/**
		 * Region
		 * @return type
		 */
		function getRegion() {
			return $this->region;
		}

		/**
		 * Country
		 * @return type
		 */
		function getCountry() {
			return $this->country;
		}

		/**
		 * NewPassword
		 * @return type
		 */
		function getNewPassword() {
			return $this->newPassword;
		}

		/**
		 * NotifyUser
		 * @return type
		 */
		function getNotifyUser() {
			return $this->notifyUser;
		}

		/**
		 * City
		 * @return type
		 */
		function getCity() {
			return $this->city;
		}

		/**
		 * Output
		 * @return type
		 */
		function getOutput() {
			return $this->output;
		}

		/**
		 * Domain Name
		 * @return type
		 */
		function getDomainName() {
			return $this->domainName;
		}

		/**
		 * Expiry Date
		 * @return type
		 */
		function getExpiryDate() {
			return $this->expiryDate;
		}

		/**
		 * Enable CMS
		 * @return type
		 */
		function getEnableCMS() {
			return $this->enableCMS;
		}

		/**
		 * Set Credit
		 * @param type $credit
		 */
		function setCredit($credit) {
			$this->credit = $credit;
		}

		/**
		 * Set Comment
		 * @param type $comment
		 */
		function setComment($comment) {
			$this->comment = $comment;
		}

		/**
		 * Set UserLoginName
		 * @param type $userLoginName
		 */
		function setUserLoginName($userLoginName) {
			$this->userLoginName = $userLoginName;
		}

		/**
		 * Set FromDate
		 * @param type $fromDate
		 */
		function setFromDate($fromDate) {
			$this->fromDate = $fromDate;
		}

		/**
		 * Set ToDate
		 * @param type $toDate
		 */
		function setToDate($toDate) {
			$this->toDate = $toDate;
		}

		/**
		 * Set UserType
		 * @param type $userType
		 */
		function setUserType($userType) {
			$this->userType = $userType;
		}

		/**
		 * Set EmailId
		 * @param type $emailId
		 */
		function setEmailId($emailId) {
			$this->emailId = $emailId;
		}

		/**
		 * Set MobileNo
		 * @param type $mobileNo
		 */
		function setMobileNo($mobileNo) {
			$this->mobileNo = $mobileNo;
		}

		/**
		 * Set FullName
		 * @param type $fullName
		 */
		function setFullName($fullName) {
			$this->fullName = $fullName;
		}

		/**
		 * Set Address
		 * @param type $address
		 */
		function setAddress($address) {
			$this->address = $address;
		}

		/**
		 * Set Region
		 * @param type $region
		 */
		function setRegion($region) {
			$this->region = $region;
		}

		/**
		 * Set Country
		 * @param type $country
		 */
		function setCountry($country) {
			$this->country = $country;
		}

		/**
		 * Set NewPassword
		 * @param type $newPassword
		 */
		function setNewPassword($newPassword) {
			$this->newPassword = $newPassword;
		}

		/**
		 * Set NotifyUser
		 * @param type $notifyUser
		 */
		function setNotifyUser($notifyUser) {
			$this->notifyUser = $notifyUser;
		}

		/**
		 * Set City
		 * @param type $city
		 */
		function setCity($city) {
			$this->city = $city;
		}

		/**
		 * Set Output
		 * @param type $output
		 */
		function setOutput($output) {
			$this->output = $output;
		}

		/**
		 * Set Domain Name
		 * @param type $domainName
		 */
		function setDomainName($domainName) {
			$this->domainName = $domainName;
		}

		/**
		 * Set Expiry Date
		 * @param type $expiryDate
		 */
		function setExpiryDate($expiryDate) {
			$this->expiryDate = $expiryDate;
		}

		/**
		 * Set Enable CMS
		 * @param type $enableCMS
		 */
		function setEnableCMS($enableCMS) {
			$this->enableCMS = $enableCMS;
		}
		
		/**
		 * Get Sender ID
		 * @param type $senderId
		 */
		function getSenderId() {
			return $this->senderId;
		}

		/**
		 * Set Sender ID
		 * @param type $senderId
		 */
		function setSenderId($senderId) {
			$this->senderId = $senderId;
		}

	
	}
	