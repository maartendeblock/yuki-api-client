<?php

use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Authenticate;
use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactions;
use MaartenDeBlock\YukiApiClient\YukiApiClient;

require __DIR__ . '/../vendor/autoload.php';

// Change to your API Key.
$yukiApiKey = 'YUKI_API_KEY';

// Or add with a config file.
if(file_exists(__DIR__ . '/config.php')){
    require_once __DIR__ . '/config.php';
}

$client = new YukiApiClient($yukiApiKey);

$response = $client->accountinginfo->authenticate(new Authenticate($client->getApiKey()));

$sessionId = $response->getAuthenticateResult();

$start = new DateTime('-1 month');
$end = new DateTime('now');
$transactions = $client->accountinginfo->getTransactions(new GetTransactions($sessionId, null, null, $start, $end, null, null, null, null, null));
