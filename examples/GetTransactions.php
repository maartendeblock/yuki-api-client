<?php

use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Authenticate;
use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactions;
use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\YukiApiAccountingInfoClientFactory;

require __DIR__ . '/../vendor/autoload.php';

// Change to your API Key.
$yukiApiKey = 'YUKI_API_KEY';

// Or add with a config file.
if(file_exists(__DIR__ . '/config.php')){
    require_once __DIR__ . '/config.php';
}


$client = YukiApiAccountingInfoClientFactory::factory('https://api.yukiworks.be/ws/AccountingInfo.asmx?WSDL');

$response = $client->authenticate(new Authenticate($yukiApiKey));

$sessionId = $response->getAuthenticateResult();

$start = new DateTime('-1 month');
$end = new DateTime('now');

$transactions = $client->getTransactions(new GetTransactions($sessionId, null, null, $start, $end, null, null, null, null, null));
