<?php

use MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Authenticate;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Companies;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClientFactory;
use MaartenDeBlock\YukiApiClient\YukiApiClient;

require __DIR__ . '/../vendor/autoload.php';

// Change to your API Key.
$yukiApiKey = 'YUKI_API_KEY';

// Or add with a config file.
if(file_exists(__DIR__ . '/config.php')){
    require_once __DIR__ . '/config.php';
}

$client = new YukiApiClient();

$response = $client->sales->authenticate(new Authenticate($client->getApiKey()));

$sessionId = $response->getAuthenticateResult();

$companies = $client->sales->companies(new Companies($sessionId));
