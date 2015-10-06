<?php

namespace Pmovil\Ipx\Identification;

class CreateSessionRequest
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var string $clientIPAddress
     */
    protected $clientIPAddress = null;

    /**
     * @var string $returnURL
     */
    protected $returnURL = null;

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
     * @var string $language
     */
    protected $language = null;

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
     * @param string $clientIPAddress
     * @param string $returnURL
     * @param string $serviceName
     * @param string $serviceCategory
     * @param string $serviceMetaData
     * @param string $language
     * @param string $campaignName
     * @param string $username
     * @param string $password
     */
    public function __construct($correlationId, $clientIPAddress, $returnURL, $serviceName, $serviceCategory, $serviceMetaData, $language, $campaignName, $username, $password)
    {
      $this->correlationId = $correlationId;
      $this->clientIPAddress = $clientIPAddress;
      $this->returnURL = $returnURL;
      $this->serviceName = $serviceName;
      $this->serviceCategory = $serviceCategory;
      $this->serviceMetaData = $serviceMetaData;
      $this->language = $language;
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientIPAddress()
    {
      return $this->clientIPAddress;
    }

    /**
     * @param string $clientIPAddress
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
     */
    public function setClientIPAddress($clientIPAddress)
    {
      $this->clientIPAddress = $clientIPAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
      return $this->returnURL;
    }

    /**
     * @param string $returnURL
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
     */
    public function setReturnURL($returnURL)
    {
      $this->returnURL = $returnURL;
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
     */
    public function setServiceMetaData($serviceMetaData)
    {
      $this->serviceMetaData = $serviceMetaData;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
     */
    public function setLanguage($language)
    {
      $this->language = $language;
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
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
     * @return \Pmovil\Ipx\Identification\CreateSessionRequest
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
