<?php

namespace Pmovil\Ipx\OnlineLoockup;

class ResolveClientIPRequest
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
     * @param string $campaignName
     * @param string $username
     * @param string $password
     */
    public function __construct($correlationId, $clientIPAddress, $campaignName, $username, $password)
    {
      $this->correlationId = $correlationId;
      $this->clientIPAddress = $clientIPAddress;
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
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPRequest
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
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPRequest
     */
    public function setClientIPAddress($clientIPAddress)
    {
      $this->clientIPAddress = $clientIPAddress;
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
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPRequest
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
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPRequest
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
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPRequest
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
