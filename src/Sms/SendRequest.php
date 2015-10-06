<?php

namespace Pmovil\Ipx\Sms;

class SendRequest
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var string $originatingAddress
     */
    protected $originatingAddress = null;

    /**
     * @var int $originatorTON
     */
    protected $originatorTON = null;

    /**
     * @var string $destinationAddress
     */
    protected $destinationAddress = null;

    /**
     * @var string $userData
     */
    protected $userData = null;

    /**
     * @var string $userDataHeader
     */
    protected $userDataHeader = null;

    /**
     * @var int $DCS
     */
    protected $DCS = null;

    /**
     * @var int $PID
     */
    protected $PID = null;

    /**
     * @var int $relativeValidityTime
     */
    protected $relativeValidityTime = null;

    /**
     * @var string $deliveryTime
     */
    protected $deliveryTime = null;

    /**
     * @var int $statusReportFlags
     */
    protected $statusReportFlags = null;

    /**
     * @var string $accountName
     */
    protected $accountName = null;

    /**
     * @var string $tariffClass
     */
    protected $tariffClass = null;

    /**
     * @var float $VAT
     */
    protected $VAT = null;

    /**
     * @var string $referenceId
     */
    protected $referenceId = null;

    /**
     * @var string $serviceName
     */
    protected $serviceName = null;

    /**
     * @var string $serviceCategory
     */
    protected $serviceCategory = null;

    /**
     * @var string $serviceMetaData
     */
    protected $serviceMetaData = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $correlationId
     * @param string $originatingAddress
     * @param int $originatorTON
     * @param string $destinationAddress
     * @param string $userData
     * @param string $userDataHeader
     * @param int $DCS
     * @param int $PID
     * @param int $relativeValidityTime
     * @param string $deliveryTime
     * @param int $statusReportFlags
     * @param string $accountName
     * @param string $tariffClass
     * @param float $VAT
     * @param string $referenceId
     * @param string $serviceName
     * @param string $serviceCategory
     * @param string $serviceMetaData
     * @param string $campaignName
     * @param string $username
     * @param string $password
     */
    public function __construct($correlationId, $originatingAddress, $originatorTON, $destinationAddress, $userData, $userDataHeader, $DCS, $PID, $relativeValidityTime, $deliveryTime, $statusReportFlags, $accountName, $tariffClass, $VAT, $referenceId, $serviceName, $serviceCategory, $serviceMetaData, $campaignName, $username, $password)
    {
      $this->correlationId = $correlationId;
      $this->originatingAddress = $originatingAddress;
      $this->originatorTON = $originatorTON;
      $this->destinationAddress = $destinationAddress;
      $this->userData = $userData;
      $this->userDataHeader = $userDataHeader;
      $this->DCS = $DCS;
      $this->PID = $PID;
      $this->relativeValidityTime = $relativeValidityTime;
      $this->deliveryTime = $deliveryTime;
      $this->statusReportFlags = $statusReportFlags;
      $this->accountName = $accountName;
      $this->tariffClass = $tariffClass;
      $this->VAT = $VAT;
      $this->referenceId = $referenceId;
      $this->serviceName = $serviceName;
      $this->serviceCategory = $serviceCategory;
      $this->serviceMetaData = $serviceMetaData;
      $this->campaignName = $campaignName;
      $this->username = $username;
      $this->password = $password;
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
      return $this->correlationId;
    }

    /**
     * @param string $correlationId
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginatingAddress()
    {
      return $this->originatingAddress;
    }

    /**
     * @param string $originatingAddress
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setOriginatingAddress($originatingAddress)
    {
      $this->originatingAddress = $originatingAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginatorTON()
    {
      return $this->originatorTON;
    }

    /**
     * @param int $originatorTON
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setOriginatorTON($originatorTON)
    {
      $this->originatorTON = $originatorTON;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationAddress()
    {
      return $this->destinationAddress;
    }

    /**
     * @param string $destinationAddress
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setDestinationAddress($destinationAddress)
    {
      $this->destinationAddress = $destinationAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserData()
    {
      return $this->userData;
    }

    /**
     * @param string $userData
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setUserData($userData)
    {
      $this->userData = $userData;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDataHeader()
    {
      return $this->userDataHeader;
    }

    /**
     * @param string $userDataHeader
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setUserDataHeader($userDataHeader)
    {
      $this->userDataHeader = $userDataHeader;
      return $this;
    }

    /**
     * @return int
     */
    public function getDCS()
    {
      return $this->DCS;
    }

    /**
     * @param int $DCS
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setDCS($DCS)
    {
      $this->DCS = $DCS;
      return $this;
    }

    /**
     * @return int
     */
    public function getPID()
    {
      return $this->PID;
    }

    /**
     * @param int $PID
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setPID($PID)
    {
      $this->PID = $PID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelativeValidityTime()
    {
      return $this->relativeValidityTime;
    }

    /**
     * @param int $relativeValidityTime
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setRelativeValidityTime($relativeValidityTime)
    {
      $this->relativeValidityTime = $relativeValidityTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
      return $this->deliveryTime;
    }

    /**
     * @param string $deliveryTime
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setDeliveryTime($deliveryTime)
    {
      $this->deliveryTime = $deliveryTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusReportFlags()
    {
      return $this->statusReportFlags;
    }

    /**
     * @param int $statusReportFlags
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setStatusReportFlags($statusReportFlags)
    {
      $this->statusReportFlags = $statusReportFlags;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setAccountName($accountName)
    {
      $this->accountName = $accountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffClass()
    {
      return $this->tariffClass;
    }

    /**
     * @param string $tariffClass
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setTariffClass($tariffClass)
    {
      $this->tariffClass = $tariffClass;
      return $this;
    }

    /**
     * @return float
     */
    public function getVAT()
    {
      return $this->VAT;
    }

    /**
     * @param float $VAT
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setVAT($VAT)
    {
      $this->VAT = $VAT;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
      return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setServiceName($serviceName)
    {
      $this->serviceName = $serviceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCategory()
    {
      return $this->serviceCategory;
    }

    /**
     * @param string $serviceCategory
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setServiceCategory($serviceCategory)
    {
      $this->serviceCategory = $serviceCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceMetaData()
    {
      return $this->serviceMetaData;
    }

    /**
     * @param string $serviceMetaData
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setServiceMetaData($serviceMetaData)
    {
      $this->serviceMetaData = $serviceMetaData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Pmovil\Ipx\Sms\SendRequest
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
