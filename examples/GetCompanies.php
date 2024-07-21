<?php

use MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Authenticate;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Companies;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClientFactory;

require __DIR__ . '/../vendor/autoload.php';

// Change to your API Key.
$yukiApiKey = 'YUKI_API_KEY';

// Or add with a config file.
if(file_exists(__DIR__ . '/config.php')){
    require_once __DIR__ . '/config.php';
}


$client = YukiApiSalesClientFactory::factory('https://api.yukiworks.be/ws/Sales.asmx?WSDL');

$response = $client->authenticate(new Authenticate($yukiApiKey));

$sessionId = $response->getAuthenticateResult();

$companies = $client->companies(new Companies($sessionId));

$b =1;
