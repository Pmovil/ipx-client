<?php

namespace Pmovil\Ipx\Identification;

class CreateSessionResponse
{

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $redirectURL
     */
    protected $redirectURL = null;

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
     * @param string $sessionId
     * @param string $redirectURL
     * @param int $responseCode
     * @param string $responseMessage
     */
    public function __construct($correlationId, $sessionId, $redirectURL, $responseCode, $responseMessage)
    {
      $this->correlationId = $correlationId;
      $this->sessionId = $sessionId;
      $this->redirectURL = $redirectURL;
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
     * @return \Pmovil\Ipx\Identification\CreateSessionResponse
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Pmovil\Ipx\Identification\CreateSessionResponse
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRedirectURL()
    {
      return $this->redirectURL;
    }

    /**
     * @param string $redirectURL
     * @return \Pmovil\Ipx\Identification\CreateSessionResponse
     */
    public function setRedirectURL($redirectURL)
    {
      $this->redirectURL = $redirectURL;
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
     * @return \Pmovil\Ipx\Identification\CreateSessionResponse
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
     * @return \Pmovil\Ipx\Identification\CreateSessionResponse
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
      return $this;
    }

}
