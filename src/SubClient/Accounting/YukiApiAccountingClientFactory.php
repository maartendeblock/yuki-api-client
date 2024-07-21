<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting;

use MaartenDeBlock\YukiApiClient\SubClient\Accounting\YukiApiAccountingClient;
use MaartenDeBlock\YukiApiClient\SubClient\Accounting\YukiApiAccountingClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class YukiApiAccountingClientFactory
{
    public static function factory(string $wsdl) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\YukiApiAccountingClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(YukiApiAccountingClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new YukiApiAccountingClient($caller);
    }
}

