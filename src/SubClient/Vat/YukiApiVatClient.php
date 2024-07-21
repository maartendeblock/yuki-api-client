<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiVatClient
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
     * Returns a list of VATReturns
     *
     * @param RequestInterface & Type\VATReturnList $parameters
     * @return ResultInterface & Type\VATReturnListResponse
     * @throws SoapException
     */
    public function vATReturnList(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATReturnList $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATReturnListResponse
    {
        $response = ($this->caller)('VATReturnList', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATReturnListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a list of active VAT codes
     *
     * @param RequestInterface & Type\ActiveVATCodesList $parameters
     * @return ResultInterface & Type\ActiveVATCodesListResponse
     * @throws SoapException
     */
    public function activeVATCodesList(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ActiveVATCodesList $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ActiveVATCodesListResponse
    {
        $response = ($this->caller)('ActiveVATCodesList', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ActiveVATCodesListResponse::class)->assert($response);
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
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateResponse::class)->assert($response);
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
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateClientResponse::class)->assert($response);
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
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AuthenticateByUserNameResponse::class)->assert($response);
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
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\DomainsResponse::class)->assert($response);
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
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResponse::class)->assert($response);
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
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AdministrationIDResponse::class)->assert($response);
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
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\AdministrationsResponse::class)->assert($response);
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
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResponse::class)->assert($response);
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
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SetCurrentDomainResponse::class)->assert($response);
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
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\LanguageResponse::class)->assert($response);
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
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SupportedLanguagesResponse::class)->assert($response);
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
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

