<?php

namespace MaartenDeBlock\YukiApiClient;

use MaartenDeBlock\YukiApiClient\SubClient\Accounting\YukiApiAccountingClient;
use MaartenDeBlock\YukiApiClient\SubClient\Accounting\YukiApiAccountingClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\YukiApiAccountingInfoClient;
use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\YukiApiAccountingInfoClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Archive\YukiApiArchiveClient;
use MaartenDeBlock\YukiApiClient\SubClient\Archive\YukiApiArchiveClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Backoffice\YukiApiBackofficeClient;
use MaartenDeBlock\YukiApiClient\SubClient\Backoffice\YukiApiBackofficeClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Contact\YukiApiContactClient;
use MaartenDeBlock\YukiApiClient\SubClient\Contact\YukiApiContactClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\YukiApiDomainsClient;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\YukiApiDomainsClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\YukiApiFiscalTableClient;
use MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\YukiApiFiscalTableClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Integration\YukiApiIntegrationClient;
use MaartenDeBlock\YukiApiClient\SubClient\Integration\YukiApiIntegrationClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Pettycash\YukiApiPettycashClient;
use MaartenDeBlock\YukiApiClient\SubClient\Pettycash\YukiApiPettycashClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Projects\YukiApiProjectsClient;
use MaartenDeBlock\YukiApiClient\SubClient\Projects\YukiApiProjectsClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Purchase\YukiApiPurchaseClient;
use MaartenDeBlock\YukiApiClient\SubClient\Purchase\YukiApiPurchaseClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClient;
use MaartenDeBlock\YukiApiClient\SubClient\Sales\YukiApiSalesClientFactory;
use MaartenDeBlock\YukiApiClient\SubClient\Vat\YukiApiVatClient;
use MaartenDeBlock\YukiApiClient\SubClient\Vat\YukiApiVatClientFactory;

class YukiApiClient
{
    protected string $apiKey;

    public YukiApiAccountingClient $accounting;
    public YukiApiAccountingInfoClient $accountinginfo;
    public YukiApiArchiveClient $archive;
    public YukiApiBackofficeClient $backoffice;
    public YukiApiContactClient $contact;
    public YukiApiDomainsClient $domains;
    public YukiApiFiscalTableClient $fiscaltable;
    public YukiApiIntegrationClient $integration;
    public YukiApiPettycashClient $pettycash;
    public YukiApiProjectsClient $projects;
    public YukiApiPurchaseClient $purchase;
    public YukiApiSalesClient $sales;
    public YukiApiVatClient $vat;


    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->accounting = YukiApiAccountingClientFactory::factory('https://api.yukiworks.be/ws/Accounting.asmx?wsdl');
        $this->accountinginfo = YukiApiAccountingInfoClientFactory::factory('https://api.yukiworks.be/ws/AccountingInfo.asmx?wsdl');
        $this->archive = YukiApiArchiveClientFactory::factory('https://api.yukiworks.be/ws/Archive.asmx?wsdl');
        $this->backoffice = YukiApiBackofficeClientFactory::factory('https://api.yukiworks.be/ws/Backoffice.asmx?wsdl');
        $this->contact = YukiApiContactClientFactory::factory('https://api.yukiworks.be/ws/Contact.asmx?wsdl');
        $this->domains = YukiApiDomainsClientFactory::factory('https://api.yukiworks.be/ws/Domains.asmx?wsdl');
        $this->fiscaltable = YukiApiFiscalTableClientFactory::factory('https://api.yukiworks.be/ws/FiscalTable.asmx?wsdl');
        $this->integration = YukiApiIntegrationClientFactory::factory('https://api.yukiworks.be/ws/Integration.asmx?wsdl');
        $this->pettycash = YukiApiPettycashClientFactory::factory('https://api.yukiworks.be/ws/Pettycash.asmx?wsdl');
        $this->projects = YukiApiProjectsClientFactory::factory('https://api.yukiworks.be/ws/projects.asmx?wsdl');
        $this->purchase = YukiApiPurchaseClientFactory::factory('https://api.yukiworks.be/ws/Purchase.asmx?wsdl');
        $this->sales = YukiApiSalesClientFactory::factory('https://api.yukiworks.be/ws/Sales.asmx?wsdl');
        $this->vat = YukiApiVatClientFactory::factory('https://api.yukiworks.be/ws/Vat.asmx?wsdl');
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}
