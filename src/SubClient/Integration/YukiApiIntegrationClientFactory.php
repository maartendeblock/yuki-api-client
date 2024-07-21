<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration;

use MaartenDeBlock\YukiApiClient\SubClient\Integration\YukiApiIntegrationClient;
use MaartenDeBlock\YukiApiClient\SubClient\Integration\YukiApiIntegrationClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class YukiApiIntegrationClientFactory
{
    public static function factory(string $wsdl) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\YukiApiIntegrationClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(YukiApiIntegrationClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new YukiApiIntegrationClient($caller);
    }
}

