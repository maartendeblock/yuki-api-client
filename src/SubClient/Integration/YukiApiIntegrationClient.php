<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\Integration\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiIntegrationClient
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
     * Get the Administration Data
     *
     * @param RequestInterface & Type\GetAdministrationData $parameters
     * @return ResultInterface & Type\GetAdministrationDataResponse
     * @throws SoapException
     */
    public function getAdministrationData(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetAdministrationData $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetAdministrationDataResponse
    {
        $response = ($this->caller)('GetAdministrationData', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetAdministrationDataResponse::class)->assert($response);
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
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateResponse::class)->assert($response);
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
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateClientResponse::class)->assert($response);
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
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AuthenticateByUserNameResponse::class)->assert($response);
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
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\DomainsResponse::class)->assert($response);
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
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\CompaniesResponse::class)->assert($response);
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
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationIDResponse::class)->assert($response);
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
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationsResponse::class)->assert($response);
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
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResponse::class)->assert($response);
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
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SetCurrentDomainResponse::class)->assert($response);
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
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\LanguageResponse::class)->assert($response);
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
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SupportedLanguagesResponse::class)->assert($response);
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
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

