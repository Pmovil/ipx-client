<?php

namespace Pmovil\Ipx\Sms;

class SmsApiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SendRequest' => 'Pmovil\\Ipx\\Sms\\SendRequest',
      'SendResponse' => 'Pmovil\\Ipx\\Sms\\SendResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://europe.ipx.com/api/services2/SmsApi52?wsdl')
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
     * @param SendRequest $request
     * @return SendResponse
     */
    public function send(SendRequest $request)
    {
      return $this->__soapCall('send', array($request));
    }

}
