<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales;

use MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClient;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class YukiApiSalesClientFactory
{
    public static function factory(string $wsdl) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(YukiApiSalesClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new YukiApiSalesClient($caller);
    }
}

