# Yuki API Client v2.0

[![Latest Stable Version](https://poser.pugx.org/maartendeblock/yuki-api-client/v/stable)](https://packagist.org/packages/maartendeblock/yuki-api-client)
[![License](https://poser.pugx.org/maartendeblock/yuki-api-client/license)](https://packagist.org/packages/maartendeblock/yuki-api-client)

Modern PHP client for the Yuki API with fluent interface, automatic session management, comprehensive error handling, and flexible configuration.

## 🚀 Features

- **Fluent Interface**: Chainable, intuitive API calls
- **Automatic Session Management**: No manual session handling required
- **Smart Authentication**: Auto-authentication with session validation
- **Comprehensive Error Handling**: Custom exceptions with context
- **Environment Support**: Production, test, and development environments
- **Flexible Configuration**: File-based, array-based, or object-based configuration
- **Enhanced Response Handling**: Automatic data transformation to arrays
- **Debug Mode**: Built-in logging and debugging capabilities
- **Performance Optimized**: Lazy loading and efficient resource management

## 📋 Requirements

- PHP 8.1 or higher
- ext-soap
- Composer

## 📦 Installation

```bash
composer require maartendeblock/yuki-api-client:^2.0
```

## 🚨 Upgrading from v1.x

**Version 2.0 introduces breaking changes.** Please read the upgrade guide below carefully.

### Breaking Changes

1. **Public SOAP client properties removed**: Direct access to `$client->domains`, `$client->accounting`, etc. is no longer available
2. **Constructor signature changed**: Now accepts configuration objects and additional parameters
3. **Fluent interface required**: API calls now use fluent methods like `$client->domains()->companies()->get()`
4. **Minimum PHP version**: Now requires PHP 8.1+

### Migration Guide

#### v1.x Code (Old):
```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Authenticate;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Companies;

// Old v1.x way
$client = new YukiApiClient($apiKey);

// Manual authentication
$authRequest = new Authenticate($apiKey);
$authResponse = $client->domains->authenticate($authRequest);
$sessionId = $authResponse->getAuthenticateResult();

// Manual session management
$companiesRequest = new Companies($sessionId);
$companiesResponse = $client->domains->companies($companiesRequest);
$companies = $companiesResponse->getCompaniesResult();
```

#### v2.0 Code (New):
```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;

// New v2.0 way - much simpler!
$client = new YukiApiClient($apiKey);

// Automatic authentication and session management
$companies = $client->domains()->companies()->get();
```

### Step-by-Step Migration

1. **Update composer requirement**:
   ```bash
   composer require maartendeblock/yuki-api-client:^2.0
   ```

2. **Remove manual authentication code**:
   ```php
   // Remove these lines:
   // $authRequest = new Authenticate($apiKey);
   // $authResponse = $client->domains->authenticate($authRequest);
   // $sessionId = $authResponse->getAuthenticateResult();
   ```

3. **Replace property access with fluent methods**:
   ```php
   // Old:
   $client->domains->companies($companiesRequest)
   
   // New:
   $client->domains()->companies()->get()
   ```

4. **Remove manual session management**:
   ```php
   // Remove request object creation:
   // $companiesRequest = new Companies($sessionId);
   
   // Replace with fluent call:
   $companies = $client->domains()->companies()->get();
   ```

5. **Update response handling**:
   ```php
   // Old:
   $companiesResponse = $client->domains->companies($companiesRequest);
   $companies = $companiesResponse->getCompaniesResult();
   
   // New (returns array directly):
   $companies = $client->domains()->companies()->get();
   ```

## 🚀 Quick Start

### Basic Usage

```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;

// Create client with API key
$client = new YukiApiClient('your-api-key');

// Fetch companies (auto-authentication handled)
$companies = $client->domains()->companies()->get();

// Fetch domains
$domains = $client->domains()->domains()->get();
```

### Advanced Configuration

```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;
use MaartenDeBlock\YukiApiClient\Environment\YukiEnvironment;
use MaartenDeBlock\YukiApiClient\Config\YukiConfig;

// Using environment
$client = new YukiApiClient('your-api-key', YukiEnvironment::test());

// Using configuration object
$config = new YukiConfig('your-api-key', YukiEnvironment::production(), [
    'debug' => true,
    'timeout' => 60,
    'auto_authenticate' => true
]);
$client = new YukiApiClient($config);

// Using factory methods
$client = YukiApiClient::create('your-api-key', YukiEnvironment::PRODUCTION);
$client = YukiApiClient::fromConfig('config/yuki.php');
```

### Configuration File

Create `config/yuki.php`:
```php
<?php
return [
    'api_key' => 'your-api-key',
    'environment' => 'production', // or 'test', 'development'
    'options' => [
        'debug' => false,
        'timeout' => 30,
        'auto_authenticate' => true,
        'cache_enabled' => false,
        'cache_ttl' => 3600
    ]
];
```

Then use:
```php
$client = YukiApiClient::fromConfig('config/yuki.php');
```

## 📚 API Reference

### Client Methods

```php
// Authentication
$client->authenticate();                    // Manual authentication
$client->isAuthenticated();               // Check authentication status
$client->getSessionId();                  // Get current session ID
$client->validateApiKey();                // Validate API key

// Configuration
$client->enableDebug(true);               // Enable debug mode
$client->enableCache(true);               // Enable caching
$client->setTimeout(60);                  // Set timeout in seconds
$client->getConfig();                     // Get configuration object
$client->getSessionManager();             // Get session manager

// Fluent Services
$client->domains();                       // Access domains service
$client->accounting();                    // Access accounting service
```

### Domains Service

```php
// Companies
$companies = $client->domains()->companies()->get();
$companies = $client->domains()->companies()->cached(3600)->get();

// Domains
$domains = $client->domains()->domains()->get();
$domains = $client->domains()->domains()->debug(true)->get();
```

### Accounting Service

```php
// Companies
$companies = $client->accounting()->companies()->get();

// Transactions (with filtering)
$transactions = $client->accounting()
    ->transactions()
    ->where('amount', '> 100')
    ->where('date', '2024-01-01')
    ->get();
```

## 🛡️ Error Handling

Version 2.0 includes comprehensive error handling with custom exceptions:

```php
use MaartenDeBlock\YukiApiClient\Exception\YukiAuthenticationException;
use MaartenDeBlock\YukiApiClient\Exception\YukiApiException;
use MaartenDeBlock\YukiApiClient\Exception\YukiValidationException;

try {
    $client = new YukiApiClient('invalid-key');
    $companies = $client->domains()->companies()->get();
} catch (YukiAuthenticationException $e) {
    // Handle authentication errors
    echo "Authentication failed: " . $e->getMessage();
} catch (YukiApiException $e) {
    // Handle API errors
    echo "API error: " . $e->getMessage();
    print_r($e->getContext());
} catch (Exception $e) {
    // Handle other errors
    echo "Unexpected error: " . $e->getMessage();
}
```

## 🧪 Testing

The package includes comprehensive testing with both PHPUnit and Playwright:

```bash
# Install development dependencies
composer install --dev

# Run PHPUnit tests
vendor/bin/phpunit

# Run integration tests (requires ddev)
npm run test:playwright
```

## 🔧 Configuration Options

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `debug` | bool | `false` | Enable debug logging |
| `timeout` | int | `30` | Request timeout in seconds |
| `auto_authenticate` | bool | `true` | Automatically authenticate on client creation |
| `cache_enabled` | bool | `false` | Enable response caching |
| `cache_ttl` | int | `3600` | Cache time-to-live in seconds |

## 🌍 Environment Support

- **Production**: `YukiEnvironment::PRODUCTION`
- **Test**: `YukiEnvironment::TEST`  
- **Development**: `YukiEnvironment::DEVELOPMENT`

```php
// Different ways to specify environment
$client = new YukiApiClient($apiKey, YukiEnvironment::test());
$client = YukiApiClient::create($apiKey, YukiEnvironment::TEST);

$config = new YukiConfig($apiKey, YukiEnvironment::development());
$client = new YukiApiClient($config);
```

## 🔧 Development

### Regenerating SOAP Clients

The package uses auto-generated SOAP clients from WSDL files. To regenerate them:

```bash
./run_soap_client.sh
```

This command finds all `*Config.php` files and regenerates the corresponding clients.

### Adding New Services

To add a new Yuki service:

1. Run the SOAP client wizard:
   ```bash
   vendor/bin/soap-client wizard
   ```

2. Follow the prompts using this pattern:
   - Config location: `src/SubClient/ServiceName/YukiApiServiceNameClientConfig.php`
   - WSDL URL: `https://api.yukiworks.be/ws/ServiceName.asmx`
   - Generic name: `YukiApiServiceName`
   - Directory: `src/SubClient/ServiceName`
   - Namespace: `MaartenDeBlock\YukiApiClient\SubClient\ServiceName`

3. Add the service to the main client and create a fluent service wrapper.

## 📄 Changelog

### v2.0.0 (2024-12-XX)

**🚨 BREAKING CHANGES:**

- **Removed public SOAP client properties** (`$client->domains`, `$client->accounting`, etc.)
- **New fluent interface** for all API calls
- **Automatic session management** - no manual authentication required
- **Enhanced constructor** accepting configuration objects
- **Minimum PHP 8.1** requirement
- **Comprehensive error handling** with custom exceptions
- **Environment support** for different API endpoints
- **Configuration system** with file and object-based config

**✨ New Features:**

- Fluent API interface with method chaining
- Automatic authentication and session management
- Custom exception hierarchy for better error handling
- Environment-specific configuration (production/test/development)
- Debug mode with built-in logging
- Caching support (interface ready)
- Factory methods for easy client creation
- Configuration file support

**🐛 Bug Fixes:**

- Session expiration handling
- Memory usage optimization
- SOAP client initialization improvements

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

- **Documentation**: Check this README and the test suite examples
- **Issues**: [GitHub Issues](https://github.com/maartendeblock/yuki-api-client/issues)
- **API Documentation**: [Yuki API Docs](https://documenter.getpostman.com/view/12207912/UVCBB51L#intro)

## 🎉 Acknowledgments

- Built with [phpro/soap-client](https://github.com/phpro/soap-client)
- Inspired by modern PHP API client patterns
- Comprehensive testing with Playwright