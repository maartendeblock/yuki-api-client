<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\CodeGeneratorEngineFactory;

return Config::create()
    ->setEngine($engine = CodeGeneratorEngineFactory::create(
        'https://api.yukiworks.be/ws/Sales.asmx?WSDL'
    ))
    ->setTypeDestination('src/SubClient/Sales/Type')
    ->setTypeNamespace('MaartenDeBlock\YukiApiClient\SubClient\Sales\Type')
    ->setClientDestination('src/SubClient/Sales')
    ->setClientName('YukiApiSalesClient')
    ->setClientNamespace('MaartenDeBlock\YukiApiClient\SubClient\Sales')
    ->setClassMapDestination('src/SubClient/Sales')
    ->setClassMapName('YukiApiSalesClassmap')
    ->setClassMapNamespace('MaartenDeBlock\YukiApiClient\SubClient\Sales')
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
