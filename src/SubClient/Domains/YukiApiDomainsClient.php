<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiDomainsClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * Returns the possible name of a new domain based on an administration name
     *
     * @param RequestInterface & Type\GetDomainName $parameters
     * @return ResultInterface & Type\GetDomainNameResponse
     * @throws SoapException
     */
    public function getDomainName(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainNameResponse
    {
        $response = ($this->caller)('GetDomainName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainNameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Create a new domain. If the domain name is empty, the administration name will be used.
     *
     * @param RequestInterface & Type\CreateDomain $parameters
     * @return ResultInterface & Type\CreateDomainResponse
     * @throws SoapException
     */
    public function createDomain(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResponse
    {
        $response = ($this->caller)('CreateDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Create a new trial domain.If the domain name is empty, the administration name will be used.
     *
     * @param RequestInterface & Type\CreateTrialDomain $parameters
     * @return ResultInterface & Type\CreateTrialDomainResponse
     * @throws SoapException
     */
    public function createTrialDomain(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResponse
    {
        $response = ($this->caller)('CreateTrialDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the users that have access to a domain
     *
     * @param RequestInterface & Type\GetDomainUsers $parameters
     * @return ResultInterface & Type\GetDomainUsersResponse
     * @throws SoapException
     */
    public function getDomainUsers(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsers $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResponse
    {
        $response = ($this->caller)('GetDomainUsers', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Adds a new user to a domain
     *
     * @param RequestInterface & Type\AddDomainUser $parameters
     * @return ResultInterface & Type\AddDomainUserResponse
     * @throws SoapException
     */
    public function addDomainUser(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUser $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResponse
    {
        $response = ($this->caller)('AddDomainUser', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get the domain functions for a domain
     *
     * @param RequestInterface & Type\GetDomainFunctions $parameters
     * @return ResultInterface & Type\GetDomainFunctionsResponse
     * @throws SoapException
     */
    public function getDomainFunctions(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctions $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResponse
    {
        $response = ($this->caller)('GetDomainFunctions', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Update the domain functions for a domain
     *
     * @param RequestInterface & Type\UpdateDomainFunctions $parameters
     * @return ResultInterface & Type\UpdateDomainFunctionsResponse
     * @throws SoapException
     */
    public function updateDomainFunctions(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\UpdateDomainFunctions $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\UpdateDomainFunctionsResponse
    {
        $response = ($this->caller)('UpdateDomainFunctions', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\UpdateDomainFunctionsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Marks or unmarks a domain as a Lyanthe domain
     *
     * @param RequestInterface & Type\LyantheRecognitionEngine $parameters
     * @return ResultInterface & Type\LyantheRecognitionEngineResponse
     * @throws SoapException
     */
    public function lyantheRecognitionEngine(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\LyantheRecognitionEngine $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\LyantheRecognitionEngineResponse
    {
        $response = ($this->caller)('LyantheRecognitionEngine', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\LyantheRecognitionEngineResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a session ID if a valid API key is given
     *
     * @param RequestInterface & Type\Authenticate $parameters
     * @return ResultInterface & Type\AuthenticateResponse
     * @throws SoapException
     */
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a session ID if a valid API key and API client are given
     *
     * @param RequestInterface & Type\AuthenticateClient $parameters
     * @return ResultInterface & Type\AuthenticateClientResponse
     * @throws SoapException
     */
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateClientResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a session ID if an existing Yuki username and password are given
     *
     * @param RequestInterface & Type\AuthenticateByUserName $parameters
     * @return ResultInterface & Type\AuthenticateByUserNameResponse
     * @throws SoapException
     */
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AuthenticateByUserNameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all domains that can be accessed with the given session ID
     *
     * @param RequestInterface & Type\Domains $parameters
     * @return ResultInterface & Type\DomainsResponse
     * @throws SoapException
     */
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\DomainsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all available administrations
     *
     * @param RequestInterface & Type\Companies $parameters
     * @return ResultInterface & Type\CompaniesResponse
     * @throws SoapException
     */
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CompaniesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns an administration ID for the given administration name
     *
     * @param RequestInterface & Type\AdministrationID $parameters
     * @return ResultInterface & Type\AdministrationIDResponse
     * @throws SoapException
     */
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationIDResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all administrations that can be accessed with the given session ID
     *
     * @param RequestInterface & Type\Administrations $parameters
     * @return ResultInterface & Type\AdministrationsResponse
     * @throws SoapException
     */
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the current Yuki domain for the active session
     *
     * @param RequestInterface & Type\GetCurrentDomain $parameters
     * @return ResultInterface & Type\GetCurrentDomainResponse
     * @throws SoapException
     */
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Set the current domain for the active session
     *
     * @param RequestInterface & Type\SetCurrentDomain $parameters
     * @return ResultInterface & Type\SetCurrentDomainResponse
     * @throws SoapException
     */
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SetCurrentDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * The language of the current user
     *
     * @param RequestInterface & Type\Language $parameters
     * @return ResultInterface & Type\LanguageResponse
     * @throws SoapException
     */
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\LanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the supported languages for the domain
     *
     * @param RequestInterface & Type\SupportedLanguages $parameters
     * @return ResultInterface & Type\SupportedLanguagesResponse
     * @throws SoapException
     */
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SupportedLanguagesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Sets the language for the webservice session
     *
     * @param RequestInterface & Type\SetLanguage $parameters
     * @return ResultInterface & Type\SetLanguageResponse
     * @throws SoapException
     */
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

