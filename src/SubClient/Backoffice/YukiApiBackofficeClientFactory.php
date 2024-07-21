<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice;

use MaartenDeBlock\YukiApiClient\SubClient\Backoffice\YukiApiBackofficeClient;
use MaartenDeBlock\YukiApiClient\SubClient\Backoffice\YukiApiBackofficeClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class YukiApiBackofficeClientFactory
{
    public static function factory(string $wsdl) : \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\YukiApiBackofficeClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(YukiApiBackofficeClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new YukiApiBackofficeClient($caller);
    }
}

