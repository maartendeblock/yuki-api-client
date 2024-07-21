<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\CodeGeneratorEngineFactory;

return Config::create()
    ->setEngine($engine = CodeGeneratorEngineFactory::create(
        'https://api.yukiworks.be/ws/Domains.asmx?WSDL'
    ))
    ->setTypeDestination('src/SubClient/Domains/Type')
    ->setTypeNamespace('MaartenDeBlock\YukiApiClient\SubClient\Domains\Type')
    ->setClientDestination('src/SubClient/Domains')
    ->setClientName('YukiApiDomainsClient')
    ->setClientNamespace('MaartenDeBlock\YukiApiClient\SubClient\Domains')
    ->setClassMapDestination('src/SubClient/Domains')
    ->setClassMapName('YukiApiDomainsClassmap')
    ->setClassMapNamespace('MaartenDeBlock\YukiApiClient\SubClient\Domains')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler())
        )
    )
    ->addRule(
        new Rules\IsAbstractTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\AbstractClassAssembler())
        )
    )
;
