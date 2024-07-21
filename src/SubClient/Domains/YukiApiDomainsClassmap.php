<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains;

use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class YukiApiDomainsClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GetDomainName', Type\GetDomainName::class),
            new ClassMap('GetDomainNameResponse', Type\GetDomainNameResponse::class),
            new ClassMap('CreateDomain', Type\CreateDomain::class),
            new ClassMap('CreateDomainResponse', Type\CreateDomainResponse::class),
            new ClassMap('CreateDomainResult', Type\CreateDomainResult::class),
            new ClassMap('CreateTrialDomain', Type\CreateTrialDomain::class),
            new ClassMap('CreateTrialDomainResponse', Type\CreateTrialDomainResponse::class),
            new ClassMap('CreateTrialDomainResult', Type\CreateTrialDomainResult::class),
            new ClassMap('GetDomainUsers', Type\GetDomainUsers::class),
            new ClassMap('GetDomainUsersResponse', Type\GetDomainUsersResponse::class),
            new ClassMap('GetDomainUsersResult', Type\GetDomainUsersResult::class),
            new ClassMap('AddDomainUser', Type\AddDomainUser::class),
            new ClassMap('AddDomainUserResponse', Type\AddDomainUserResponse::class),
            new ClassMap('AddDomainUserResult', Type\AddDomainUserResult::class),
            new ClassMap('GetDomainFunctions', Type\GetDomainFunctions::class),
            new ClassMap('GetDomainFunctionsResponse', Type\GetDomainFunctionsResponse::class),
            new ClassMap('GetDomainFunctionsResult', Type\GetDomainFunctionsResult::class),
            new ClassMap('UpdateDomainFunctions', Type\UpdateDomainFunctions::class),
            new ClassMap('UpdateDomainFunctionsResponse', Type\UpdateDomainFunctionsResponse::class),
            new ClassMap('LyantheRecognitionEngine', Type\LyantheRecognitionEngine::class),
            new ClassMap('LyantheRecognitionEngineResponse', Type\LyantheRecognitionEngineResponse::class),
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

