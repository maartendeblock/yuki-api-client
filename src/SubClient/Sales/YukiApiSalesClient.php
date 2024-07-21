<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiSalesClient
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
     * Processes XML documents containing sales invoices.
     *
     * @param RequestInterface & Type\ProcessSalesInvoices $parameters
     * @return ResultInterface & Type\ProcessSalesInvoicesResponse
     * @throws SoapException
     */
    public function processSalesInvoices(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoices $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResponse
    {
        $response = ($this->caller)('ProcessSalesInvoices', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Processes XML documents containing recognized sales invoices.
     *
     * @param RequestInterface & Type\ProcessRecognizedSalesInvoices $parameters
     * @return ResultInterface & Type\ProcessRecognizedSalesInvoicesResponse
     * @throws SoapException
     */
    public function processRecognizedSalesInvoices(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoices $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResponse
    {
        $response = ($this->caller)('ProcessRecognizedSalesInvoices', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SalesInvoiceSchemaPath $parameters
     * @return ResultInterface & Type\SalesInvoiceSchemaPathResponse
     * @throws SoapException
     */
    public function salesInvoiceSchemaPath(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SalesInvoiceSchemaPath $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SalesInvoiceSchemaPathResponse
    {
        $response = ($this->caller)('SalesInvoiceSchemaPath', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SalesInvoiceSchemaPathResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get all sales items for administration
     *
     * @param RequestInterface & Type\GetSalesItems $parameters
     * @return ResultInterface & Type\GetSalesItemsResponse
     * @throws SoapException
     */
    public function getSalesItems(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\GetSalesItems $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\GetSalesItemsResponse
    {
        $response = ($this->caller)('GetSalesItems', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\GetSalesItemsResponse::class)->assert($response);
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
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateResponse::class)->assert($response);
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
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateClientResponse::class)->assert($response);
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
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AuthenticateByUserNameResponse::class)->assert($response);
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
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\DomainsResponse::class)->assert($response);
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
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\CompaniesResponse::class)->assert($response);
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
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AdministrationIDResponse::class)->assert($response);
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
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\AdministrationsResponse::class)->assert($response);
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
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\GetCurrentDomainResponse::class)->assert($response);
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
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SetCurrentDomainResponse::class)->assert($response);
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
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\LanguageResponse::class)->assert($response);
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
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SupportedLanguagesResponse::class)->assert($response);
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
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

