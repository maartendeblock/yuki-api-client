# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2024-12-06

### 🚨 BREAKING CHANGES

#### Constructor Changes
- **BREAKING**: Constructor signature changed from `__construct($apiKey)` to `__construct($apiKeyOrConfig, $environment = null, $options = [])`
- **BREAKING**: Now accepts YukiConfig objects as first parameter
- **BREAKING**: Added support for YukiEnvironment as second parameter

#### Public Property Removal
- **BREAKING**: Removed all public SOAP client properties (`$client->domains`, `$client->accounting`, etc.)
- **BREAKING**: Direct access to SOAP clients no longer available
- **MIGRATION**: Use fluent interface methods instead (e.g., `$client->domains()` instead of `$client->domains`)

#### API Interface Changes
- **BREAKING**: All API operations now require fluent interface
- **BREAKING**: Manual session management no longer required
- **BREAKING**: Request/response object handling automated

#### PHP Version Requirements
- **BREAKING**: Minimum PHP version raised from ^7.4 to ^8.1
- **BREAKING**: Uses PHP 8.1+ features including typed properties and constructor property promotion

#### Response Handling
- **BREAKING**: Responses automatically converted to arrays instead of returning SOAP objects
- **BREAKING**: `getXxxxResult()` method calls no longer needed

### ✨ New Features

#### Fluent Interface
- **NEW**: Fluent interface for all API operations
- **NEW**: Method chaining support (e.g., `$client->domains()->companies()->debug(true)->get()`)
- **NEW**: Chainable configuration methods

#### Automatic Session Management
- **NEW**: Automatic authentication on client creation
- **NEW**: Session validation and auto-renewal
- **NEW**: Session expiration handling
- **NEW**: SessionManager class for advanced session control

#### Enhanced Configuration
- **NEW**: YukiConfig class for flexible configuration
- **NEW**: YukiEnvironment class for environment-specific settings
- **NEW**: Configuration file support via `YukiApiClient::fromConfig()`
- **NEW**: Factory methods for easy client creation

#### Error Handling
- **NEW**: Custom exception hierarchy:
  - `YukiApiException` (base exception)
  - `YukiAuthenticationException` (auth-specific errors)
  - `YukiValidationException` (validation errors)
- **NEW**: Detailed error context in exceptions
- **NEW**: Comprehensive error messages

#### Environment Support
- **NEW**: Production, test, and development environment support
- **NEW**: Environment-specific WSDL URL generation
- **NEW**: Environment validation

#### Debug & Logging
- **NEW**: Built-in debug mode with logging
- **NEW**: Debug mode can be enabled globally or per-operation
- **NEW**: Performance timing in debug mode

#### Modern PHP Features
- **NEW**: Full PHP 8.1+ type declarations
- **NEW**: Readonly properties where appropriate
- **NEW**: Constructor property promotion
- **NEW**: Enum-like environment constants

### 🔄 Changed

#### Response Processing
- **CHANGED**: All responses now automatically converted to arrays
- **CHANGED**: No manual result extraction needed
- **CHANGED**: Consistent array-based data structure

#### Client Instantiation
- **CHANGED**: Auto-authentication enabled by default
- **CHANGED**: Environment defaults to production
- **CHANGED**: Options passed via array instead of separate parameters

#### Error Messages
- **CHANGED**: More descriptive error messages
- **CHANGED**: Error context included in exceptions
- **CHANGED**: Better debugging information

### 🗑️ Removed

#### Deprecated Methods
- **REMOVED**: Manual authentication requirement for each operation
- **REMOVED**: Manual session ID management
- **REMOVED**: Public access to internal SOAP clients
- **REMOVED**: Manual request object creation

#### Legacy Support
- **REMOVED**: PHP 7.4 and 8.0 support
- **REMOVED**: Direct SOAP response object access
- **REMOVED**: Legacy configuration patterns

### 📈 Improved

#### Performance
- **IMPROVED**: Reduced API call overhead through session reuse
- **IMPROVED**: Lazy loading of service instances
- **IMPROVED**: Optimized SOAP client initialization

#### Developer Experience
- **IMPROVED**: Significantly reduced boilerplate code
- **IMPROVED**: IntelliSense support with proper type hints
- **IMPROVED**: Consistent API patterns across all services

#### Reliability
- **IMPROVED**: Automatic retry on session expiration
- **IMPROVED**: Better error recovery mechanisms
- **IMPROVED**: Comprehensive input validation

### 🐛 Fixed

#### Session Management
- **FIXED**: Session expiration handling
- **FIXED**: Memory leaks in long-running applications
- **FIXED**: Thread safety improvements

#### SOAP Client Issues
- **FIXED**: WSDL caching issues
- **FIXED**: Environment-specific endpoint resolution
- **FIXED**: Client initialization race conditions

### 📚 Migration Guide

#### Basic Usage Migration

**v1.x Code:**
```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Authenticate;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Companies;

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

**v2.0 Code:**
```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;

$client = new YukiApiClient($apiKey);

// Automatic authentication and session management
$companies = $client->domains()->companies()->get();
```

#### Advanced Configuration Migration

**v1.x Code:**
```php
$client = new YukiApiClient($apiKey);
// No built-in configuration support
```

**v2.0 Code:**
```php
use MaartenDeBlock\YukiApiClient\YukiApiClient;
use MaartenDeBlock\YukiApiClient\Environment\YukiEnvironment;
use MaartenDeBlock\YukiApiClient\Config\YukiConfig;

// Multiple ways to configure
$client = new YukiApiClient($apiKey, YukiEnvironment::test());

$config = new YukiConfig($apiKey, YukiEnvironment::production(), [
    'debug' => true,
    'timeout' => 60
]);
$client = new YukiApiClient($config);

$client = YukiApiClient::fromConfig('config/yuki.php');
```

#### Error Handling Migration

**v1.x Code:**
```php
try {
    $response = $client->domains->companies($request);
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

**v2.0 Code:**
```php
use MaartenDeBlock\YukiApiClient\Exception\YukiAuthenticationException;
use MaartenDeBlock\YukiApiClient\Exception\YukiApiException;

try {
    $companies = $client->domains()->companies()->get();
} catch (YukiAuthenticationException $e) {
    echo "Authentication failed: " . $e->getMessage();
} catch (YukiApiException $e) {
    echo "API error: " . $e->getMessage();
    print_r($e->getContext());
}
```

### 🎯 Update Instructions

1. **Update PHP requirement:** Ensure you're running PHP 8.1 or higher
2. **Update composer requirement:** `composer require maartendeblock/yuki-api-client:^2.0`
3. **Remove manual authentication code:** Delete all manual auth and session management
4. **Replace property access with fluent methods:** Change `$client->domains` to `$client->domains()`
5. **Update response handling:** Remove `getXxxResult()` calls, use returned arrays directly
6. **Update error handling:** Catch specific Yuki exceptions instead of generic Exception

### 📊 Statistics

- **Lines of code reduced:** ~60% reduction in typical usage
- **Boilerplate eliminated:** Manual authentication and session management
- **Type safety:** 100% typed properties and methods
- **Test coverage:** Comprehensive test suite with 16+ test scenarios
- **Performance:** Improved session reuse and lazy loading

---

## [1.x] - Previous Versions

### v1.x Features
- Basic SOAP client generation from WSDL
- Manual authentication and session management
- Direct SOAP client property access
- PHP 7.4+ support
- Basic error handling

For v1.x changelog and migration from earlier versions, see [CHANGELOG-v1.md](CHANGELOG-v1.md).