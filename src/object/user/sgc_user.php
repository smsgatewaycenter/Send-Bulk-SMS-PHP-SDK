<?php

	namespace SMSGatewayCenterPhpSdk\object;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user {

		private $email;
		private $mobileNo;
		private $fullName;
		private $address;
		private $region;
		private $country;
		private $city;
		private $fromDate;
		private $toDate;
		private $groupName;
		private $groupId;
		private $contactName;
		private $contactId;
		private $draftId;
		private $draftTitle;
		private $draftContent;
		private $newPassword;
		private $confirmPassword;
		private $senderId;
		private $smsWebhook;
		private $smsWebhookRate;
		private $uuId;
		private $output;
		private $id;
		private $profilePic;
		private $message;
		private $domainName;
		private $newSenderId;
		private $oldSenderId;
		private $delSenderId;
		private $newGroupName;
		private $oldGroupName;
		private $delGroupName;

		/**
		 * Main Constructor
		 */
		function __construct() {
			
		}

		/**
		 * Email
		 * @return type
		 */
		function getEmail() {
			return $this->email;
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
		 * City
		 * @return type
		 */
		function getCity() {
			return $this->city;
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
		 * GroupName
		 * @return type
		 */
		function getGroupName() {
			return $this->groupName;
		}

		/**
		 * GroupId
		 * @return type
		 */
		function getGroupId() {
			return $this->groupId;
		}

		/**
		 * ContactName
		 * @return type
		 */
		function getContactName() {
			return $this->contactName;
		}

		/**
		 * ContactId
		 * @return type
		 */
		function getContactId() {
			return $this->contactId;
		}

		/**
		 * DraftId
		 * @return type
		 */
		function getDraftId() {
			return $this->draftId;
		}

		/**
		 * DraftTitle
		 * @return type
		 */
		function getDraftTitle() {
			return $this->draftTitle;
		}

		/**
		 * DraftContent
		 * @return type
		 */
		function getDraftContent() {
			return $this->draftContent;
		}

		/**
		 * NewPassword
		 * @return type
		 */
		function getNewPassword() {
			return $this->newPassword;
		}

		/**
		 * ConfirmPassword
		 * @return type
		 */
		function getConfirmPassword() {
			return $this->confirmPassword;
		}

		/**
		 * SenderId
		 * @return type
		 */
		function getSenderId() {
			return $this->senderId;
		}

		/**
		 * SmsWebHook
		 * @return type
		 */
		function getSmsWebhook() {
			return $this->smsWebhook;
		}

		/**
		 * SmsWebHookRate
		 * @return type
		 */
		function getSmsWebhookRate() {
			return $this->smsWebhookRate;
		}

		/**
		 * UuId
		 * @return type
		 */
		function getUuId() {
			return $this->uuId;
		}

		/**
		 * Output
		 * @return type
		 */
		function getOutput() {
			return $this->output;
		}

		/**
		 * Id
		 * @return type
		 */
		function getId() {
			return $this->id;
		}

		/**
		 * Profile Pic
		 * @return type
		 */
		function getProfilePic() {
			return $this->profilePic;
		}

		/**
		 * Message
		 * @return type
		 */
		function getMessage() {
			return $this->message;
		}

		/**
		 * DomainName
		 * @return type
		 */
		function getDomainName() {
			return $this->domainName;
		}

		/**
		 * Set Email
		 * @param type $email
		 */
		function setEmail($email) {
			$this->email = $email;
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
		 * Set City
		 * @param type $city
		 */
		function setCity($city) {
			$this->city = $city;
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
		 * Set GroupName
		 * @param type $groupName
		 */
		function setGroupName($groupName) {
			$this->groupName = $groupName;
		}

		/**
		 * Set GroupId
		 * @param type $groupId
		 */
		function setGroupId($groupId) {
			$this->groupId = $groupId;
		}

		/**
		 * Set ContactName
		 * @param type $contactName
		 */
		function setContactName($contactName) {
			$this->contactName = $contactName;
		}

		/**
		 * Set ContactId
		 * @return type
		 */
		function setContactId($contactId) {
			$this->contactId = $contactId;
		}

		/**
		 * Set DraftId
		 * @param type $draftId
		 */
		function setDraftId($draftId) {
			$this->draftId = $draftId;
		}

		/**
		 * Set DraftTitle
		 * @param type $draftTitle
		 */
		function setDraftTitle($draftTitle) {
			$this->draftTitle = $draftTitle;
		}

		/**
		 * Set DraftContent
		 * @param type $draftContent
		 */
		function setDraftContent($draftContent) {
			$this->draftContent = $draftContent;
		}

		/*
		 * Set NewPassword
		 */

		function setNewPassword($newPassword) {
			$this->newPassword = $newPassword;
		}

		/*
		 * Set ConfirmPassword
		 */

		function setConfirmPassword($confirmPassword) {
			$this->confirmPassword = $confirmPassword;
		}

		/**
		 * Set SenderId
		 * @param type $senderId
		 */
		function setSenderId($senderId) {
			$this->senderId = $senderId;
		}

		/**
		 * Set SmsWebHook
		 * @param type $smsWebhook
		 */
		function setSmsWebhook($smsWebhook) {
			$this->smsWebhook = $smsWebhook;
		}

		/**
		 * Set SmsWebHookRate
		 * @param type $smsWebhookRate
		 */
		function setSmsWebhookRate($smsWebhookRate) {
			$this->smsWebhookRate = $smsWebhookRate;
		}

		/**
		 * Set UuId
		 * @param type $uuId
		 */
		function setUuId($uuId) {
			$this->uuId = $uuId;
		}

		/**
		 * Set Output
		 * @param type $output
		 */
		function setOutput($output) {
			$this->output = $output;
		}

		/**
		 * Set Id
		 * @param type $id
		 */
		function setId($id) {
			$this->id = $id;
		}

		/**
		 * Set ProfilePic
		 * @param type $profilePic
		 */
		function setProfilePic($profilePic) {
			$this->profilePic = $profilePic;
		}

		/**
		 * Set Message
		 * @param type $Message
		 */
		function setMessage($message) {
			$this->message = $message;
		}

		/**
		 * Set DomainName
		 * @param type $DomainName
		 */
		function setDomainName($domainName) {
			$this->domainName = $domainName;
		}
		
		/**
		 * Get New Sender ID
		 * @return type
		 */
		function getNewSenderId() {
			return $this->newSenderId;
		}
		
		/**
		 * Get Old Sender ID
		 * @return type
		 */
		function getOldSenderId() {
			return $this->oldSenderId;
		}

		/**
		 * Get Delete Sender ID
		 * @return type
		 */
		function getDelSenderId() {
			return $this->delSenderId;
		}

		/**
		 * Set New Sender ID
		 * @return type
		 */
		function setNewSenderId($newSenderId) {
			$this->newSenderId = $newSenderId;
		}

		/**
		 * Set Old Sender ID
		 * @return type
		 */
		function setOldSenderId($oldSenderId) {
			$this->oldSenderId = $oldSenderId;
		}

		/**
		 * Set Delete Sender ID
		 * @return type
		 */
		function setDelSenderId($delSenderId) {
			$this->delSenderId = $delSenderId;
		}
		
		/**
		 * Get New Group Name
		 * @return type
		 */
		function getNewGroupName() {
			return $this->newGroupName;
		}

		/**
		 * Get Old Group Name
		 * @return type
		 */
		function getOldGroupName() {
			return $this->oldGroupName;
		}

		/**
		 * Get Delete Group Name
		 * @return type
		 */
		function getDelGroupName() {
			return $this->delGroupName;
		}

		/**
		 * Set New Group Name
		 * @return type
		 */
		function setNewGroupName($newGroupName) {
			$this->newGroupName = $newGroupName;
		}

		/**
		 * Set Old Group Name
		 * @return type
		 */
		function setOldGroupName($oldGroupName) {
			$this->oldGroupName = $oldGroupName;
		}

		/**
		 * Set Delete Group Name
		 * @return type
		 */
		function setDelGroupName($delGroupName) {
			$this->delGroupName = $delGroupName;
		}

	
	}
	