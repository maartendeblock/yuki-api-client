<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting;

use MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class YukiApiAccountingClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GLAccountBalance', Type\GLAccountBalance::class),
            new ClassMap('GLAccountBalanceResponse', Type\GLAccountBalanceResponse::class),
            new ClassMap('GLAccountBalanceResult', Type\GLAccountBalanceResult::class),
            new ClassMap('GLAccountBalanceFiscal', Type\GLAccountBalanceFiscal::class),
            new ClassMap('GLAccountBalanceFiscalResponse', Type\GLAccountBalanceFiscalResponse::class),
            new ClassMap('GLAccountBalanceFiscalResult', Type\GLAccountBalanceFiscalResult::class),
            new ClassMap('GLAccountBalanceYearEnd', Type\GLAccountBalanceYearEnd::class),
            new ClassMap('GLAccountBalanceYearEndResponse', Type\GLAccountBalanceYearEndResponse::class),
            new ClassMap('GLAccountBalanceYearEndResult', Type\GLAccountBalanceYearEndResult::class),
            new ClassMap('GLAccountTransactions', Type\GLAccountTransactions::class),
            new ClassMap('GLAccountTransactionsResponse', Type\GLAccountTransactionsResponse::class),
            new ClassMap('GLAccountTransactionsResult', Type\GLAccountTransactionsResult::class),
            new ClassMap('GLAccountTransactionsAndContact', Type\GLAccountTransactionsAndContact::class),
            new ClassMap('GLAccountTransactionsAndContactResponse', Type\GLAccountTransactionsAndContactResponse::class),
            new ClassMap('GLAccountTransactionsAndContactResult', Type\GLAccountTransactionsAndContactResult::class),
            new ClassMap('GLAccountTransactionsFiscal', Type\GLAccountTransactionsFiscal::class),
            new ClassMap('GLAccountTransactionsFiscalResponse', Type\GLAccountTransactionsFiscalResponse::class),
            new ClassMap('GLAccountTransactionsFiscalResult', Type\GLAccountTransactionsFiscalResult::class),
            new ClassMap('NetRevenue', Type\NetRevenue::class),
            new ClassMap('NetRevenueResponse', Type\NetRevenueResponse::class),
            new ClassMap('NetRevenueFiscal', Type\NetRevenueFiscal::class),
            new ClassMap('NetRevenueFiscalResponse', Type\NetRevenueFiscalResponse::class),
            new ClassMap('OutstandingCreditorItems', Type\OutstandingCreditorItems::class),
            new ClassMap('OutstandingCreditorItemsResponse', Type\OutstandingCreditorItemsResponse::class),
            new ClassMap('OutstandingCreditorItemsResult', Type\OutstandingCreditorItemsResult::class),
            new ClassMap('OutstandingCreditorItemsByDateOutstanding', Type\OutstandingCreditorItemsByDateOutstanding::class),
            new ClassMap('OutstandingCreditorItemsByDateOutstandingResponse', Type\OutstandingCreditorItemsByDateOutstandingResponse::class),
            new ClassMap('OutstandingCreditorItemsByDateOutstandingResult', Type\OutstandingCreditorItemsByDateOutstandingResult::class),
            new ClassMap('OutstandingCreditorItemsByDate', Type\OutstandingCreditorItemsByDate::class),
            new ClassMap('OutstandingCreditorItemsByDateResponse', Type\OutstandingCreditorItemsByDateResponse::class),
            new ClassMap('OutstandingCreditorItemsByDateResult', Type\OutstandingCreditorItemsByDateResult::class),
            new ClassMap('OutstandingDebtorItems', Type\OutstandingDebtorItems::class),
            new ClassMap('OutstandingDebtorItemsResponse', Type\OutstandingDebtorItemsResponse::class),
            new ClassMap('OutstandingDebtorItemsResult', Type\OutstandingDebtorItemsResult::class),
            new ClassMap('OutstandingDebtorItemsByDateOutstanding', Type\OutstandingDebtorItemsByDateOutstanding::class),
            new ClassMap('OutstandingDebtorItemsByDateOutstandingResponse', Type\OutstandingDebtorItemsByDateOutstandingResponse::class),
            new ClassMap('OutstandingDebtorItemsByDateOutstandingResult', Type\OutstandingDebtorItemsByDateOutstandingResult::class),
            new ClassMap('OutstandingDebtorItemsWithLanguage', Type\OutstandingDebtorItemsWithLanguage::class),
            new ClassMap('OutstandingDebtorItemsWithLanguageResponse', Type\OutstandingDebtorItemsWithLanguageResponse::class),
            new ClassMap('OutstandingDebtorItemsWithLanguageResult', Type\OutstandingDebtorItemsWithLanguageResult::class),
            new ClassMap('OutstandingDebtorItemsByDate', Type\OutstandingDebtorItemsByDate::class),
            new ClassMap('OutstandingDebtorItemsByDateResponse', Type\OutstandingDebtorItemsByDateResponse::class),
            new ClassMap('OutstandingDebtorItemsByDateResult', Type\OutstandingDebtorItemsByDateResult::class),
            new ClassMap('CheckOutstandingItem', Type\CheckOutstandingItem::class),
            new ClassMap('CheckOutstandingItemResponse', Type\CheckOutstandingItemResponse::class),
            new ClassMap('CheckOutstandingItemResult', Type\CheckOutstandingItemResult::class),
            new ClassMap('CheckOutstandingItemAdmin', Type\CheckOutstandingItemAdmin::class),
            new ClassMap('CheckOutstandingItemAdminResponse', Type\CheckOutstandingItemAdminResponse::class),
            new ClassMap('CheckOutstandingItemAdminResult', Type\CheckOutstandingItemAdminResult::class),
            new ClassMap('ProcessJournal', Type\ProcessJournal::class),
            new ClassMap('xmlDoc', Type\XmlDoc::class),
            new ClassMap('ProcessJournalResponse', Type\ProcessJournalResponse::class),
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

