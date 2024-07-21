<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiAccountingClient
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
     * Returns the balance of all GL accounts in an administration on a specific date
     *
     * @param RequestInterface & Type\GLAccountBalance $parameters
     * @return ResultInterface & Type\GLAccountBalanceResponse
     * @throws SoapException
     */
    public function gLAccountBalance(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalance $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResponse
    {
        $response = ($this->caller)('GLAccountBalance', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the balance of all GL accounts in an administration on a specific date, including fiscal corrections
     *
     * @param RequestInterface & Type\GLAccountBalanceFiscal $parameters
     * @return ResultInterface & Type\GLAccountBalanceFiscalResponse
     * @throws SoapException
     */
    public function gLAccountBalanceFiscal(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscal $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResponse
    {
        $response = ($this->caller)('GLAccountBalanceFiscal', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the balance of all GL accounts in an administration on a specific date, including fiscal corrections and special accounts with extra details
     *
     * @param RequestInterface & Type\GLAccountBalanceYearEnd $parameters
     * @return ResultInterface & Type\GLAccountBalanceYearEndResponse
     * @throws SoapException
     */
    public function gLAccountBalanceYearEnd(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEnd $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResponse
    {
        $response = ($this->caller)('GLAccountBalanceYearEnd', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the transactions of a specific GL account of an administration in a given date range
     *
     * @param RequestInterface & Type\GLAccountTransactions $parameters
     * @return ResultInterface & Type\GLAccountTransactionsResponse
     * @throws SoapException
     */
    public function gLAccountTransactions(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactions $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResponse
    {
        $response = ($this->caller)('GLAccountTransactions', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Obsolete - do not use
     *
     * @param RequestInterface & Type\GLAccountTransactionsAndContact $parameters
     * @return ResultInterface & Type\GLAccountTransactionsAndContactResponse
     * @throws SoapException
     */
    public function gLAccountTransactionsAndContact(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContact $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResponse
    {
        $response = ($this->caller)('GLAccountTransactionsAndContact', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the transactions of a specific GL account (including fiscal corrections) of an administration in a given date range
     *
     * @param RequestInterface & Type\GLAccountTransactionsFiscal $parameters
     * @return ResultInterface & Type\GLAccountTransactionsFiscalResponse
     * @throws SoapException
     */
    public function gLAccountTransactionsFiscal(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscal $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResponse
    {
        $response = ($this->caller)('GLAccountTransactionsFiscal', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the net turnover of a specific administration in a given date range
     *
     * @param RequestInterface & Type\NetRevenue $parameters
     * @return ResultInterface & Type\NetRevenueResponse
     * @throws SoapException
     */
    public function netRevenue(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\NetRevenue $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\NetRevenueResponse
    {
        $response = ($this->caller)('NetRevenue', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\NetRevenueResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the net turnover of a specific administration (including fiscal corrections) in a given date range
     *
     * @param RequestInterface & Type\NetRevenueFiscal $parameters
     * @return ResultInterface & Type\NetRevenueFiscalResponse
     * @throws SoapException
     */
    public function netRevenueFiscal(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\NetRevenueFiscal $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\NetRevenueFiscalResponse
    {
        $response = ($this->caller)('NetRevenueFiscal', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\NetRevenueFiscalResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Creditors list
     *
     * @param RequestInterface & Type\OutstandingCreditorItems $parameters
     * @return ResultInterface & Type\OutstandingCreditorItemsResponse
     * @throws SoapException
     */
    public function outstandingCreditorItems(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItems $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResponse
    {
        $response = ($this->caller)('OutstandingCreditorItems', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Creditors list with the filter by Outstanding Date
     *
     * @param RequestInterface & Type\OutstandingCreditorItemsByDateOutstanding $parameters
     * @return ResultInterface & Type\OutstandingCreditorItemsByDateOutstandingResponse
     * @throws SoapException
     */
    public function outstandingCreditorItemsByDateOutstanding(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstanding $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResponse
    {
        $response = ($this->caller)('OutstandingCreditorItemsByDateOutstanding', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Creditors list by startdate / enddate
     *
     * @param RequestInterface & Type\OutstandingCreditorItemsByDate $parameters
     * @return ResultInterface & Type\OutstandingCreditorItemsByDateResponse
     * @throws SoapException
     */
    public function outstandingCreditorItemsByDate(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResponse
    {
        $response = ($this->caller)('OutstandingCreditorItemsByDate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Debtors list
     *
     * @param RequestInterface & Type\OutstandingDebtorItems $parameters
     * @return ResultInterface & Type\OutstandingDebtorItemsResponse
     * @throws SoapException
     */
    public function outstandingDebtorItems(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItems $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResponse
    {
        $response = ($this->caller)('OutstandingDebtorItems', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Debtors list with the filter by Outstanding Date
     *
     * @param RequestInterface & Type\OutstandingDebtorItemsByDateOutstanding $parameters
     * @return ResultInterface & Type\OutstandingDebtorItemsByDateOutstandingResponse
     * @throws SoapException
     */
    public function outstandingDebtorItemsByDateOutstanding(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstanding $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResponse
    {
        $response = ($this->caller)('OutstandingDebtorItemsByDateOutstanding', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Debtors list including the layout language
     *
     * @param RequestInterface & Type\OutstandingDebtorItemsWithLanguage $parameters
     * @return ResultInterface & Type\OutstandingDebtorItemsWithLanguageResponse
     * @throws SoapException
     */
    public function outstandingDebtorItemsWithLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResponse
    {
        $response = ($this->caller)('OutstandingDebtorItemsWithLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * List of open items in Debtors list by startdate / enddate
     *
     * @param RequestInterface & Type\OutstandingDebtorItemsByDate $parameters
     * @return ResultInterface & Type\OutstandingDebtorItemsByDateResponse
     * @throws SoapException
     */
    public function outstandingDebtorItemsByDate(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResponse
    {
        $response = ($this->caller)('OutstandingDebtorItemsByDate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns open amount for transaction referenced by the Reference parameter (can be either Invoice Number (Numeric) or ID (GUID).<br><b>NOTE:</b> Reference by GUID is unique, but reference by Invoice Number might return several items.
     *
     * @param RequestInterface & Type\CheckOutstandingItem $parameters
     * @return ResultInterface & Type\CheckOutstandingItemResponse
     * @throws SoapException
     */
    public function checkOutstandingItem(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItem $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResponse
    {
        $response = ($this->caller)('CheckOutstandingItem', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns open amount for the given administration and transaction referenced by the Reference parameter (can be either Invoice Number (Numeric) or ID (GUID).<br><b>NOTE:</b> Reference by GUID is unique, but reference by Invoice Number might return several items.
     *
     * @param RequestInterface & Type\CheckOutstandingItemAdmin $parameters
     * @return ResultInterface & Type\CheckOutstandingItemAdminResponse
     * @throws SoapException
     */
    public function checkOutstandingItemAdmin(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdmin $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResponse
    {
        $response = ($this->caller)('CheckOutstandingItemAdmin', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Processes XML document containing general journal.
     *
     * @param RequestInterface & Type\ProcessJournal $parameters
     * @return ResultInterface & Type\ProcessJournalResponse
     * @throws SoapException
     */
    public function processJournal(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\ProcessJournal $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\ProcessJournalResponse
    {
        $response = ($this->caller)('ProcessJournal', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\ProcessJournalResponse::class)->assert($response);
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
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateResponse::class)->assert($response);
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
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateClientResponse::class)->assert($response);
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
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AuthenticateByUserNameResponse::class)->assert($response);
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
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\DomainsResponse::class)->assert($response);
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
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CompaniesResponse::class)->assert($response);
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
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AdministrationIDResponse::class)->assert($response);
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
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\AdministrationsResponse::class)->assert($response);
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
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResponse::class)->assert($response);
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
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SetCurrentDomainResponse::class)->assert($response);
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
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\LanguageResponse::class)->assert($response);
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
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResponse::class)->assert($response);
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
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

