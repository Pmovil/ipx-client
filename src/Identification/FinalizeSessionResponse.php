<?php

namespace Pmovil\Ipx\Identification;

class FinalizeSessionResponse
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var string $transactionId
     */
    protected $transactionId = null;

    /**
     * @var string $consumerId
     */
    protected $consumerId = null;

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var int $operatorNetworkCode
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
     * @param string $transactionId
     * @param string $consumerId
     * @param string $operator
     * @param int $operatorNetworkCode
     * @param string $country
     * @param string $countryName
     * @param int $responseCode
     * @param string $responseMessage
     */
    public function __construct($correlationId, $transactionId, $consumerId, $operator, $operatorNetworkCode, $country, $countryName, $responseCode, $responseMessage)
    {
      $this->correlationId = $correlationId;
      $this->transactionId = $transactionId;
      $this->consumerId = $consumerId;
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
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsumerId()
    {
      return $this->consumerId;
    }

    /**
     * @param string $consumerId
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
     */
    public function setConsumerId($consumerId)
    {
      $this->consumerId = $consumerId;
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
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return int
     */
    public function getOperatorNetworkCode()
    {
      return $this->operatorNetworkCode;
    }

    /**
     * @param int $operatorNetworkCode
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
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
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
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
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
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
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
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
     * @return \Pmovil\Ipx\Identification\FinalizeSessionResponse
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
      return $this;
    }

}
