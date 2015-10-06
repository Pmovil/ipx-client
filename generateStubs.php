<?php

require_once __DIR__ . '/vendor/autoload.php';

$wsdls = array(
    array(
        'inputFile' => 'http://europe.ipx.com/api/services2/OnlineLookupApi10?wsdl',
        'outputDir' => __DIR__ . '/src/OnlineLoockup',
        'namespaceName' => 'Pmovil\Ipx\OnlineLoockup'
    ),
    array(
        'inputFile' => 'http://europe.ipx.com/api/services2/IdentificationApi31?wsdl',
        'outputDir' => __DIR__ . '/src/Identification',
        'namespaceName' => 'Pmovil\Ipx\Identification'
    ),
    array(
        'inputFile' => 'https://europe.ipx.com/api/services2/SmsApi52?wsdl',
        'outputDir' => __DIR__ . '/src/Sms',
        'namespaceName' => 'Pmovil\Ipx\Sms'
    )
);

$generator = new \Wsdl2PhpGenerator\Generator();

foreach ($wsdls as $wsdl) {
    rrmdir($wsdl['outputDir']);
    $generator->generate(new \Wsdl2PhpGenerator\Config($wsdl));
    unlink($wsdl['outputDir'].'/autoload.php');
}

function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir")
                    rmdir($dir . "/" . $object);
                else
                    unlink($dir . "/" . $object);
            }
        }
        reset($objects);
        rmdir($dir);
    }
}
