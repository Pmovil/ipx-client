<?php

namespace Pmovil\Ipx\Identification;

class IdentificationApiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'CreateSessionRequest' => 'Pmovil\\Ipx\\Identification\\CreateSessionRequest',
      'CreateSessionResponse' => 'Pmovil\\Ipx\\Identification\\CreateSessionResponse',
      'CheckStatusRequest' => 'Pmovil\\Ipx\\Identification\\CheckStatusRequest',
      'CheckStatusResponse' => 'Pmovil\\Ipx\\Identification\\CheckStatusResponse',
      'FinalizeSessionRequest' => 'Pmovil\\Ipx\\Identification\\FinalizeSessionRequest',
      'FinalizeSessionResponse' => 'Pmovil\\Ipx\\Identification\\FinalizeSessionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://europe.ipx.com/api/services2/IdentificationApi31?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateSessionRequest $request
     * @return CreateSessionResponse
     */
    public function createSession(CreateSessionRequest $request)
    {
      return $this->__soapCall('createSession', array($request));
    }

    /**
     * @param CheckStatusRequest $request
     * @return CheckStatusResponse
     */
    public function checkStatus(CheckStatusRequest $request)
    {
      return $this->__soapCall('checkStatus', array($request));
    }

    /**
     * @param FinalizeSessionRequest $request
     * @return FinalizeSessionResponse
     */
    public function finalizeSession(FinalizeSessionRequest $request)
    {
      return $this->__soapCall('finalizeSession', array($request));
    }

}
