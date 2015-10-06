<?php

namespace Pmovil\Ipx\Sms;

class SendResponse
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var string $messageId
     */
    protected $messageId = null;

    /**
     * @var int $responseCode
     */
    protected $responseCode = null;

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @var boolean $temporaryError
     */
    protected $temporaryError = null;

    /**
     * @var int $billingStatus
     */
    protected $billingStatus = null;

    /**
     * @var float $VAT
     */
    protected $VAT = null;

    /**
     * @param string $correlationId
     * @param string $messageId
     * @param int $responseCode
     * @param int $reasonCode
     * @param string $responseMessage
     * @param boolean $temporaryError
     * @param int $billingStatus
     * @param float $VAT
     */
    public function __construct($correlationId, $messageId, $responseCode, $reasonCode, $responseMessage, $temporaryError, $billingStatus, $VAT)
    {
      $this->correlationId = $correlationId;
      $this->messageId = $messageId;
      $this->responseCode = $responseCode;
      $this->reasonCode = $reasonCode;
      $this->responseMessage = $responseMessage;
      $this->temporaryError = $temporaryError;
      $this->billingStatus = $billingStatus;
      $this->VAT = $VAT;
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
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
      return $this->messageId;
    }

    /**
     * @param string $messageId
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setMessageId($messageId)
    {
      $this->messageId = $messageId;
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
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param int $reasonCode
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
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
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTemporaryError()
    {
      return $this->temporaryError;
    }

    /**
     * @param boolean $temporaryError
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setTemporaryError($temporaryError)
    {
      $this->temporaryError = $temporaryError;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingStatus()
    {
      return $this->billingStatus;
    }

    /**
     * @param int $billingStatus
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setBillingStatus($billingStatus)
    {
      $this->billingStatus = $billingStatus;
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
     * @return \Pmovil\Ipx\Sms\SendResponse
     */
    public function setVAT($VAT)
    {
      $this->VAT = $VAT;
      return $this;
    }

}
