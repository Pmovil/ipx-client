<?php

namespace Pmovil\Ipx\OnlineLoockup;

class OnlineLookupApiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ResolveClientIPRequest' => 'Pmovil\\Ipx\\OnlineLoockup\\ResolveClientIPRequest',
      'ResolveClientIPResponse' => 'Pmovil\\Ipx\\OnlineLoockup\\ResolveClientIPResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://europe.ipx.com/api/services2/OnlineLookupApi10?wsdl')
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
     * @param ResolveClientIPRequest $request
     * @return ResolveClientIPResponse
     */
    public function resolveClientIP(ResolveClientIPRequest $request)
    {
      return $this->__soapCall('resolveClientIP', array($request));
    }

}
