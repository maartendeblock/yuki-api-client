<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiAccountingInfoClient
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
     * Returns all GL accounts in a domain
     *
     * @param RequestInterface & Type\GetGLAccountScheme $parameters
     * @return ResultInterface & Type\GetGLAccountSchemeResponse
     * @throws SoapException
     */
    public function getGLAccountScheme(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetGLAccountScheme $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetGLAccountSchemeResponse
    {
        $response = ($this->caller)('GetGLAccountScheme', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetGLAccountSchemeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve all custom Payment Methods
     *
     * @param RequestInterface & Type\GetCustomPaymentMethods $parameters
     * @return ResultInterface & Type\GetCustomPaymentMethodsResponse
     * @throws SoapException
     */
    public function getCustomPaymentMethods(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetCustomPaymentMethods $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetCustomPaymentMethodsResponse
    {
        $response = ($this->caller)('GetCustomPaymentMethods', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetCustomPaymentMethodsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all GL accounts with RGS codes in a domain
     *
     * @param RequestInterface & Type\GetRGSScheme $parameters
     * @return ResultInterface & Type\GetRGSSchemeResponse
     * @throws SoapException
     */
    public function getRGSScheme(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetRGSScheme $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetRGSSchemeResponse
    {
        $response = ($this->caller)('GetRGSScheme', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetRGSSchemeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the start date of the given financial year per administration
     *
     * @param RequestInterface & Type\GetPeriodDateTable $parameters
     * @return ResultInterface & Type\GetPeriodDateTableResponse
     * @throws SoapException
     */
    public function getPeriodDateTable(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetPeriodDateTable $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetPeriodDateTableResponse
    {
        $response = ($this->caller)('GetPeriodDateTable', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetPeriodDateTableResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the last modified date of the transactions in a financial year
     *
     * @param RequestInterface & Type\GetFinancialYearModifiedDate $parameters
     * @return ResultInterface & Type\GetFinancialYearModifiedDateResponse
     * @throws SoapException
     */
    public function getFinancialYearModifiedDate(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetFinancialYearModifiedDate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetFinancialYearModifiedDateResponse
    {
        $response = ($this->caller)('GetFinancialYearModifiedDate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetFinancialYearModifiedDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the balance of a GL account
     *
     * @param RequestInterface & Type\GetStartBalanceByGlAccount $parameters
     * @return ResultInterface & Type\GetStartBalanceByGlAccountResponse
     * @throws SoapException
     */
    public function getStartBalanceByGlAccount(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetStartBalanceByGlAccount $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetStartBalanceByGlAccountResponse
    {
        $response = ($this->caller)('GetStartBalanceByGlAccount', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetStartBalanceByGlAccountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns transaction details
     *
     * @param RequestInterface & Type\GetTransactionDetails $parameters
     * @return ResultInterface & Type\GetTransactionDetailsResponse
     * @throws SoapException
     */
    public function getTransactionDetails(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionDetails $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionDetailsResponse
    {
        $response = ($this->caller)('GetTransactionDetails', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns document as binary data for the given transactionID
     *
     * @param RequestInterface & Type\GetTransactionDocument $parameters
     * @return ResultInterface & Type\GetTransactionDocumentResponse
     * @throws SoapException
     */
    public function getTransactionDocument(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionDocument $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionDocumentResponse
    {
        $response = ($this->caller)('GetTransactionDocument', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionDocumentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns default values for the given contact and administration
     *
     * @param RequestInterface & Type\GetContactDefaultValues $parameters
     * @return ResultInterface & Type\GetContactDefaultValuesResponse
     * @throws SoapException
     */
    public function getContactDefaultValues(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetContactDefaultValues $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetContactDefaultValuesResponse
    {
        $response = ($this->caller)('GetContactDefaultValues', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetContactDefaultValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get GL account transactions
     *
     * @param RequestInterface & Type\GetTransactions $parameters
     * @return ResultInterface & Type\GetTransactionsResponse
     * @throws SoapException
     */
    public function getTransactions(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactions $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionsResponse
    {
        $response = ($this->caller)('GetTransactions', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactionsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the balance of a project per GL account
     *
     * @param RequestInterface & Type\GetProjectBalance $parameters
     * @return ResultInterface & Type\GetProjectBalanceResponse
     * @throws SoapException
     */
    public function getProjectBalance(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectBalance $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectBalanceResponse
    {
        $response = ($this->caller)('GetProjectBalance', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectBalanceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetProjects $parameters
     * @return ResultInterface & Type\GetProjectsResponse
     * @throws SoapException
     */
    public function getProjects(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjects $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectsResponse
    {
        $response = ($this->caller)('GetProjects', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetProjectsAndID $parameters
     * @return ResultInterface & Type\GetProjectsAndIDResponse
     * @throws SoapException
     */
    public function getProjectsAndID(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectsAndID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectsAndIDResponse
    {
        $response = ($this->caller)('GetProjectsAndID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetProjectsAndIDResponse::class)->assert($response);
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
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateResponse::class)->assert($response);
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
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateClientResponse::class)->assert($response);
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
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AuthenticateByUserNameResponse::class)->assert($response);
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
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DomainsResponse::class)->assert($response);
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
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\CompaniesResponse::class)->assert($response);
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
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationIDResponse::class)->assert($response);
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
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResponse::class)->assert($response);
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
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetCurrentDomainResponse::class)->assert($response);
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
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SetCurrentDomainResponse::class)->assert($response);
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
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\LanguageResponse::class)->assert($response);
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
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SupportedLanguagesResponse::class)->assert($response);
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
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

