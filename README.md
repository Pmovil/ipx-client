# Synopsis
Ready-to-use automatic-generated stub classes for IPX WebServices (Netsize)

# Code Example
```php

use Pmovil\Ipx\Sms\SmsApiService;
use Pmovil\Ipx\Sms\SendRequest;


$service = new SmsApiService();
$request = new SendRequest(
    uniqid(),               //correlationId
    '1122334455',           //originatingAddress
    1,                      //originatorTON
    '5544332211'            //destinationAddress
    'Helo',                 //userData
    '',                     //userDataHeader
    0x01,                   //DCS
    0x00,                   //PID
    '',                     //relativeValidityTime
    '',                     //deliveryTime
    0,                      //statusReportFlags
    'IPXACC',               //accountName
    'TF',                   //tariffClass
    3.20,                   //VAT
    '0',                    //referenceId
    'MyService',            //serviceName
    'MyCategory',           //serviceCategory
    'MyServiceData',        //serviceMetaData
    'MyChampaignName',      //campaignName
    'MyUsername',           //username
    'MyPassword'           //password
);
$response = $service->send($request);
echo $response->getResponseCode();

```

# Motivation
A composer-powered project with an OO aprouch to use IPX WebServices

#Installing
```
composer require pmovil/ipx-client 
```

