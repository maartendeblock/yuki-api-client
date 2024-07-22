<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Projects;

use MaartenDeBlock\YukiApiClient\SubClient\Projects\YukiApiProjectsClient;
use MaartenDeBlock\YukiApiClient\SubClient\Projects\YukiApiProjectsClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class YukiApiProjectsClientFactory
{
    public static function factory(string $wsdl) : \MaartenDeBlock\YukiApiClient\SubClient\Projects\YukiApiProjectsClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(YukiApiProjectsClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new YukiApiProjectsClient($caller);
    }
}

