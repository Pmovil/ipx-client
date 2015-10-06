<?php

namespace Pmovil\Ipx\OnlineLoockup;

class ResolveClientIPResponse
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var string $lookupId
     */
    protected $lookupId = null;

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var string $operatorNetworkCode
     */
    protected $operatorNetworkCode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @var int $responseCode
     */
    protected $responseCode = null;

    /**
     * @var string $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @param string $correlationId
     * @param string $lookupId
     * @param string $operator
     * @param string $operatorNetworkCode
     * @param string $country
     * @param string $countryName
     * @param int $responseCode
     * @param string $responseMessage
     */
    public function __construct($correlationId, $lookupId, $operator, $operatorNetworkCode, $country, $countryName, $responseCode, $responseMessage)
    {
      $this->correlationId = $correlationId;
      $this->lookupId = $lookupId;
      $this->operator = $operator;
      $this->operatorNetworkCode = $operatorNetworkCode;
      $this->country = $country;
      $this->countryName = $countryName;
      $this->responseCode = $responseCode;
      $this->responseMessage = $responseMessage;
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
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLookupId()
    {
      return $this->lookupId;
    }

    /**
     * @param string $lookupId
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setLookupId($lookupId)
    {
      $this->lookupId = $lookupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorNetworkCode()
    {
      return $this->operatorNetworkCode;
    }

    /**
     * @param string $operatorNetworkCode
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setOperatorNetworkCode($operatorNetworkCode)
    {
      $this->operatorNetworkCode = $operatorNetworkCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setCountryName($countryName)
    {
      $this->countryName = $countryName;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param int $responseCode
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
      return $this->responseMessage;
    }

    /**
     * @param string $responseMessage
     * @return \Pmovil\Ipx\OnlineLoockup\ResolveClientIPResponse
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
      return $this;
    }

}
