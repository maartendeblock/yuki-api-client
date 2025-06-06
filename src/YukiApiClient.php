<?php

namespace MaartenDeBlock\YukiApiClient;

use MaartenDeBlock\YukiApiClient\Config\YukiConfig;
use MaartenDeBlock\YukiApiClient\Environment\YukiEnvironment;
use MaartenDeBlock\YukiApiClient\Session\SessionManager;
use MaartenDeBlock\YukiApiClient\Fluent\DomainsService;
use MaartenDeBlock\YukiApiClient\Fluent\AccountingService;
use MaartenDeBlock\YukiApiClient\Exception\YukiAuthenticationException;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Authenticate;

// Legacy SOAP client imports for internal use
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

/**
 * Yuki API Client v2.0
 * 
 * Modern PHP client for the Yuki API with fluent interface, automatic session management,
 * comprehensive error handling, and flexible configuration.
 * 
 * @version 2.0.0
 * @author Maarten De Block
 */
class YukiApiClient
{
    private YukiConfig $config;
    private SessionManager $sessionManager;
    private bool $isAuthenticated = false;

    // Internal SOAP clients (not exposed publicly in v2.0)
    private YukiApiAccountingClient $soapAccounting;
    private YukiApiAccountingInfoClient $soapAccountingInfo;
    private YukiApiArchiveClient $soapArchive;
    private YukiApiBackofficeClient $soapBackoffice;
    private YukiApiContactClient $soapContact;
    private YukiApiDomainsClient $soapDomains;
    private YukiApiFiscalTableClient $soapFiscalTable;
    private YukiApiIntegrationClient $soapIntegration;
    private YukiApiPettycashClient $soapPettycash;
    private YukiApiProjectsClient $soapProjects;
    private YukiApiPurchaseClient $soapPurchase;
    private YukiApiSalesClient $soapSales;
    private YukiApiVatClient $soapVat;

    // Fluent service instances
    private ?DomainsService $fluentDomains = null;
    private ?AccountingService $fluentAccounting = null;

    /**
     * Create a new Yuki API Client
     * 
     * @param string|YukiConfig $apiKeyOrConfig API key string or YukiConfig instance
     * @param YukiEnvironment|null $environment Environment (if using API key string)
     * @param array $options Additional options (if using API key string)
     */
    public function __construct($apiKeyOrConfig, YukiEnvironment $environment = null, array $options = [])
    {
        // Handle configuration
        if (is_string($apiKeyOrConfig)) {
            $this->config = new YukiConfig($apiKeyOrConfig, $environment, $options);
        } elseif ($apiKeyOrConfig instanceof YukiConfig) {
            $this->config = $apiKeyOrConfig;
        } else {
            throw new \InvalidArgumentException('First argument must be API key string or YukiConfig instance');
        }

        // Initialize session manager
        $this->sessionManager = new SessionManager($this->config->getApiKey());

        // Initialize internal SOAP clients
        $this->initializeSoapClients();

        // Auto-authenticate if enabled
        if ($this->config->isAutoAuthenticateEnabled()) {
            $this->authenticate();
        }
    }

    /**
     * Create client from configuration file
     */
    public static function fromConfig(string $configPath): self
    {
        return new self(YukiConfig::fromFile($configPath));
    }

    /**
     * Create client with simple parameters
     */
    public static function create(string $apiKey, string $environment = YukiEnvironment::PRODUCTION): self
    {
        return new self($apiKey, new YukiEnvironment($environment));
    }

    /**
     * Authenticate with the Yuki API
     */
    public function authenticate(): self
    {
        try {
            $request = new Authenticate($this->config->getApiKey());
            $response = $this->soapDomains->authenticate($request);
            $sessionId = $response->getAuthenticateResult();

            if (!$sessionId) {
                throw YukiAuthenticationException::authenticationFailed('No session ID received');
            }

            $this->sessionManager->setSessionId($sessionId);
            $this->isAuthenticated = true;

            if ($this->config->isDebugEnabled()) {
                error_log("[Yuki API] Authentication successful. Session ID: {$sessionId}");
            }

            return $this;
        } catch (\Exception $e) {
            $this->isAuthenticated = false;
            throw YukiAuthenticationException::authenticationFailed($e->getMessage());
        }
    }

    /**
     * Check if client is authenticated
     */
    public function isAuthenticated(): bool
    {
        return $this->isAuthenticated && $this->sessionManager->hasValidSession();
    }

    /**
     * Get current session ID
     */
    public function getSessionId(): ?string
    {
        return $this->sessionManager->getSessionId();
    }

    /**
     * Get API key
     */
    public function getApiKey(): string
    {
        return $this->config->getApiKey();
    }

    /**
     * Get configuration
     */
    public function getConfig(): YukiConfig
    {
        return $this->config;
    }

    /**
     * Get session manager
     */
    public function getSessionManager(): SessionManager
    {
        return $this->sessionManager;
    }

    /**
     * Access domains service (fluent interface)
     */
    public function domains(): DomainsService
    {
        if ($this->fluentDomains === null) {
            $this->fluentDomains = new DomainsService($this->soapDomains, $this->sessionManager);
            if ($this->config->isDebugEnabled()) {
                $this->fluentDomains->debug(true);
            }
        }
        return $this->fluentDomains;
    }

    /**
     * Access accounting service (fluent interface)
     */
    public function accounting(): AccountingService
    {
        if ($this->fluentAccounting === null) {
            $this->fluentAccounting = new AccountingService($this->soapAccounting, $this->sessionManager);
            if ($this->config->isDebugEnabled()) {
                $this->fluentAccounting->debug(true);
            }
        }
        return $this->fluentAccounting;
    }

    /**
     * Enable debug mode
     */
    public function enableDebug(bool $enabled = true): self
    {
        $this->config->setOption('debug', $enabled);
        return $this;
    }

    /**
     * Enable caching
     */
    public function enableCache(bool $enabled = true): self
    {
        $this->config->setOption('cache_enabled', $enabled);
        return $this;
    }

    /**
     * Set timeout
     */
    public function setTimeout(int $seconds): self
    {
        $this->config->setOption('timeout', $seconds);
        return $this;
    }

    /**
     * Validate API key by attempting authentication
     */
    public function validateApiKey(): bool
    {
        try {
            $this->authenticate();
            return true;
        } catch (YukiAuthenticationException $e) {
            return false;
        }
    }

    /**
     * Create a fake client for testing
     */
    public static function fake(array $responses = []): self
    {
        return new self('fake-api-key', YukiEnvironment::test(), ['auto_authenticate' => false]);
    }

    /**
     * Initialize internal SOAP clients
     */
    private function initializeSoapClients(): void
    {
        $environment = $this->config->getEnvironment();
        
        $this->soapAccounting = YukiApiAccountingClientFactory::factory($environment->getWsdlUrl('Accounting'));
        $this->soapAccountingInfo = YukiApiAccountingInfoClientFactory::factory($environment->getWsdlUrl('AccountingInfo'));
        $this->soapArchive = YukiApiArchiveClientFactory::factory($environment->getWsdlUrl('Archive'));
        $this->soapBackoffice = YukiApiBackofficeClientFactory::factory($environment->getWsdlUrl('Backoffice'));
        $this->soapContact = YukiApiContactClientFactory::factory($environment->getWsdlUrl('Contact'));
        $this->soapDomains = YukiApiDomainsClientFactory::factory($environment->getWsdlUrl('Domains'));
        $this->soapFiscalTable = YukiApiFiscalTableClientFactory::factory($environment->getWsdlUrl('FiscalTable'));
        $this->soapIntegration = YukiApiIntegrationClientFactory::factory($environment->getWsdlUrl('Integration'));
        $this->soapPettycash = YukiApiPettycashClientFactory::factory($environment->getWsdlUrl('Pettycash'));
        $this->soapProjects = YukiApiProjectsClientFactory::factory($environment->getWsdlUrl('projects'));
        $this->soapPurchase = YukiApiPurchaseClientFactory::factory($environment->getWsdlUrl('Purchase'));
        $this->soapSales = YukiApiSalesClientFactory::factory($environment->getWsdlUrl('Sales'));
        $this->soapVat = YukiApiVatClientFactory::factory($environment->getWsdlUrl('Vat'));
    }
}