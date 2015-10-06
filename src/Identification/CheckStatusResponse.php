<?php

namespace Pmovil\Ipx\Identification;

class CheckStatusResponse
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @var int $statusReasonCode
     */
    protected $statusReasonCode = null;

    /**
     * @var string $statusMessage
     */
    protected $statusMessage = null;

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
     * @param int $statusCode
     * @param int $statusReasonCode
     * @param string $statusMessage
     * @param int $responseCode
     * @param string $responseMessage
     */
    public function __construct($correlationId, $statusCode, $statusReasonCode, $statusMessage, $responseCode, $responseMessage)
    {
      $this->correlationId = $correlationId;
      $this->statusCode = $statusCode;
      $this->statusReasonCode = $statusReasonCode;
      $this->statusMessage = $statusMessage;
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
     * @return \Pmovil\Ipx\Identification\CheckStatusResponse
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return \Pmovil\Ipx\Identification\CheckStatusResponse
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusReasonCode()
    {
      return $this->statusReasonCode;
    }

    /**
     * @param int $statusReasonCode
     * @return \Pmovil\Ipx\Identification\CheckStatusResponse
     */
    public function setStatusReasonCode($statusReasonCode)
    {
      $this->statusReasonCode = $statusReasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return \Pmovil\Ipx\Identification\CheckStatusResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
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
     * @return \Pmovil\Ipx\Identification\CheckStatusResponse
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
     * @return \Pmovil\Ipx\Identification\CheckStatusResponse
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
      return $this;
    }

}
