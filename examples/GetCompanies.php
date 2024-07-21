<?php

use MaartenDeBlock\YukiApiClient\YukiApiClientFactory;

require __DIR__ . '/../vendor/autoload.php';

// Change to your API Key.
$yukiApiKey = 'YUKI_API_KEY';

// Or add with a config file.
if(file_exists(__DIR__ . '/config.php')){
    require_once __DIR__ . '/config.php';
}


$client = YukiApiClientFactory::factory('https://api.yukiworks.be/ws/Sales.asmx?WSDL');

$response = $client->authenticate(new \MaartenDeBlock\YukiApiClient\Type\Authenticate($yukiApiKey));

$sessionId = $response->getAuthenticateResult();

$companies = $client->companies(new \MaartenDeBlock\YukiApiClient\Type\Companies($sessionId));

