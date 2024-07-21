<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice;

use MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class YukiApiBackofficeClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GetWorkflow', Type\GetWorkflow::class),
            new ClassMap('GetWorkflowResponse', Type\GetWorkflowResponse::class),
            new ClassMap('GetWorkflowResult', Type\GetWorkflowResult::class),
            new ClassMap('GetOutstandingQuestions', Type\GetOutstandingQuestions::class),
            new ClassMap('GetOutstandingQuestionsResponse', Type\GetOutstandingQuestionsResponse::class),
            new ClassMap('GetOutstandingQuestionsResult', Type\GetOutstandingQuestionsResult::class),
            new ClassMap('Authenticate', Type\Authenticate::class),
            new ClassMap('AuthenticateResponse', Type\AuthenticateResponse::class),
            new ClassMap('AuthenticateClient', Type\AuthenticateClient::class),
            new ClassMap('AuthenticateClientResponse', Type\AuthenticateClientResponse::class),
            new ClassMap('AuthenticateByUserName', Type\AuthenticateByUserName::class),
            new ClassMap('AuthenticateByUserNameResponse', Type\AuthenticateByUserNameResponse::class),
            new ClassMap('Domains', Type\Domains::class),
            new ClassMap('DomainsResponse', Type\DomainsResponse::class),
            new ClassMap('DomainsResult', Type\DomainsResult::class),
            new ClassMap('Companies', Type\Companies::class),
            new ClassMap('CompaniesResponse', Type\CompaniesResponse::class),
            new ClassMap('CompaniesResult', Type\CompaniesResult::class),
            new ClassMap('AdministrationID', Type\AdministrationID::class),
            new ClassMap('AdministrationIDResponse', Type\AdministrationIDResponse::class),
            new ClassMap('Administrations', Type\Administrations::class),
            new ClassMap('AdministrationsResponse', Type\AdministrationsResponse::class),
            new ClassMap('AdministrationsResult', Type\AdministrationsResult::class),
            new ClassMap('GetCurrentDomain', Type\GetCurrentDomain::class),
            new ClassMap('GetCurrentDomainResponse', Type\GetCurrentDomainResponse::class),
            new ClassMap('GetCurrentDomainResult', Type\GetCurrentDomainResult::class),
            new ClassMap('SetCurrentDomain', Type\SetCurrentDomain::class),
            new ClassMap('SetCurrentDomainResponse', Type\SetCurrentDomainResponse::class),
            new ClassMap('Language', Type\Language::class),
            new ClassMap('LanguageResponse', Type\LanguageResponse::class),
            new ClassMap('SupportedLanguages', Type\SupportedLanguages::class),
            new ClassMap('SupportedLanguagesResponse', Type\SupportedLanguagesResponse::class),
            new ClassMap('SupportedLanguagesResult', Type\SupportedLanguagesResult::class),
            new ClassMap('SetLanguage', Type\SetLanguage::class),
            new ClassMap('SetLanguageResponse', Type\SetLanguageResponse::class),
        );
    }
}

