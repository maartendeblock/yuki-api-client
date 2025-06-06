<?php

/**
 * GetCompanies Example - Yuki API Client v2.0
 * 
 * This example demonstrates how to retrieve a list of companies using the
 * modern v2.0 fluent API with automatic session management.
 * 
 * @author Maarten De Block
 * @version 2.0.0
 */

use MaartenDeBlock\YukiApiClient\YukiApiClient;
use MaartenDeBlock\YukiApiClient\Environment\YukiEnvironment;
use MaartenDeBlock\YukiApiClient\Exception\YukiApiException;

require __DIR__ . '/../vendor/autoload.php';

// Configuration - Update with your API key
$apiKey = 'YOUR_YUKI_API_KEY_HERE';

// Load configuration from file if available
if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php';
    $apiKey = YUKI_API_KEY ?? $apiKey;
}

try {
    // Initialize the v2.0 client with fluent API
    $client = new YukiApiClient($apiKey, YukiEnvironment::PRODUCTION);
    
    // Enable debug mode for detailed logging (optional)
    $client->enableDebug(false);
    
    echo "=== Yuki API v2.0 - Get Companies Example ===\n\n";
    
    // Method 1: Using Accounting service (most common)
    echo "1. Getting companies via Accounting service...\n";
    $companies = $client->accounting()->companies()->get();
    
    echo "   Found " . count($companies) . " companies:\n";
    foreach ($companies as $index => $company) {
        echo "   - Company " . ($index + 1) . ": " . ($company['Name'] ?? 'Unknown Name') . "\n";
        if (isset($company['Code'])) {
            echo "     Code: " . $company['Code'] . "\n";
        }
    }
    
    echo "\n";
    
    // Method 2: Using Domains service to get available domains/companies
    echo "2. Getting domains/companies via Domains service...\n";
    $domains = $client->domains()->list();
    
    echo "   Found " . count($domains) . " domains:\n";
    foreach ($domains as $index => $domain) {
        echo "   - Domain " . ($index + 1) . ": " . ($domain['Name'] ?? 'Unknown Name') . "\n";
        if (isset($domain['ID'])) {
            echo "     ID: " . $domain['ID'] . "\n";
        }
    }
    
    echo "\n=== Example completed successfully! ===\n";
    
} catch (YukiApiException $e) {
    echo "Yuki API Error: " . $e->getMessage() . "\n";
    echo "Error Code: " . $e->getCode() . "\n";
    
    if ($e->hasDetails()) {
        echo "Details: " . print_r($e->getDetails(), true) . "\n";
    }
    
} catch (Exception $e) {
    echo "General Error: " . $e->getMessage() . "\n";
    echo "Please check your API key and network connection.\n";
}

echo "\n=== API Usage Notes ===\n";
echo "• The v2.0 client automatically handles authentication and session management\n";
echo "• Companies can be retrieved via both Accounting and Domains services\n";
echo "• All responses are automatically converted to PHP arrays\n";
echo "• Error handling includes detailed exception information\n";
echo "• Debug mode can be enabled for troubleshooting\n";
