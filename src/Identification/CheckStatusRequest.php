<?php

namespace Pmovil\Ipx\Identification;

class CheckStatusRequest
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
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $correlationId
     * @param string $sessionId
     * @param string $username
     * @param string $password
     */
    public function __construct($correlationId, $sessionId, $username, $password)
    {
      $this->correlationId = $correlationId;
      $this->sessionId = $sessionId;
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
     * @return \Pmovil\Ipx\Identification\CheckStatusRequest
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
     * @return \Pmovil\Ipx\Identification\CheckStatusRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
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
     * @return \Pmovil\Ipx\Identification\CheckStatusRequest
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
     * @return \Pmovil\Ipx\Identification\CheckStatusRequest
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
