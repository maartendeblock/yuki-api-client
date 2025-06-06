<?php

/**
 * GetTransactions Example - Yuki API Client v2.0
 * 
 * This example demonstrates how to retrieve transactions using the
 * modern v2.0 fluent API with automatic session management and flexible filtering.
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
    
    echo "=== Yuki API v2.0 - Get Transactions Example ===\n\n";
    
    // Example 1: Get transactions from the last month using fluent API
    echo "1. Getting transactions from the last month...\n";
    
    // Note: Since the fluent API for AccountingInfo is not yet fully implemented,
    // we'll use the direct SOAP client approach with v2.0 session management
    
    // Get the underlying AccountingInfo client via reflection (temporary approach)
    $reflection = new ReflectionClass($client);
    $accountingInfoProperty = $reflection->getProperty('soapAccountingInfo');
    $accountingInfoProperty->setAccessible(true);
    $accountingInfoClient = $accountingInfoProperty->getValue($client);
    
    // Define date range
    $startDate = new DateTime('-1 month');
    $endDate = new DateTime('now');
    
    // Create the GetTransactions request with automatic session management
    $getTransactionsRequest = new \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactions(
        $client->getSessionId(),  // Automatic session management
        null,                     // AdministrationID (null for default)
        null,                     // Contact filter (null for all)
        $startDate,               // Start date
        $endDate,                 // End date
        null,                     // Currency filter (null for default)
        null,                     // MaxTransactions (null for no limit)
        null,                     // GLAccount filter (null for all)
        null,                     // Project filter (null for all)
        null                      // RGS filter (null for all)
    );
    
    // Execute the request
    $response = $accountingInfoClient->getTransactions($getTransactionsRequest);
    $transactions = $response->getGetTransactionsResult();
    
    echo "   Found " . count($transactions) . " transactions in the last month:\n";
    
    // Display first 5 transactions as examples
    $displayCount = min(5, count($transactions));
    for ($i = 0; $i < $displayCount; $i++) {
        $transaction = $transactions[$i];
        echo "   - Transaction " . ($i + 1) . ":\n";
        echo "     Date: " . ($transaction->Date ?? 'N/A') . "\n";
        echo "     Amount: " . ($transaction->Amount ?? 'N/A') . "\n";
        echo "     Description: " . ($transaction->Description ?? 'N/A') . "\n";
        if (isset($transaction->Contact)) {
            echo "     Contact: " . $transaction->Contact . "\n";
        }
        echo "\n";
    }
    
    if (count($transactions) > 5) {
        echo "   ... and " . (count($transactions) - 5) . " more transactions.\n\n";
    }
    
    // Example 2: Get transactions with specific filters
    echo "2. Getting transactions with filters (this week only)...\n";
    
    $weekStart = new DateTime('monday this week');
    $weekEnd = new DateTime('sunday this week');
    
    $filteredRequest = new \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GetTransactions(
        $client->getSessionId(),
        null,                     // AdministrationID
        null,                     // Contact filter
        $weekStart,               // This week start
        $weekEnd,                 // This week end
        null,                     // Currency
        10,                       // Limit to 10 transactions
        null,                     // GLAccount
        null,                     // Project
        null                      // RGS
    );
    
    $weekResponse = $accountingInfoClient->getTransactions($filteredRequest);
    $weekTransactions = $weekResponse->getGetTransactionsResult();
    
    echo "   Found " . count($weekTransactions) . " transactions this week (limited to 10):\n";
    
    foreach ($weekTransactions as $index => $transaction) {
        echo "   - " . ($index + 1) . ". " . ($transaction->Description ?? 'No description');
        echo " - " . ($transaction->Amount ?? 'N/A');
        echo " (" . ($transaction->Date ?? 'N/A') . ")\n";
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
    echo "Stack trace: " . $e->getTraceAsString() . "\n";
}

echo "\n=== API Usage Notes ===\n";
echo "• The v2.0 client automatically handles authentication and session management\n";
echo "• Transactions can be filtered by date, contact, amount, and other criteria\n";
echo "• Use DateTime objects for date filtering\n";
echo "• Set MaxTransactions to limit the number of results returned\n";
echo "• All transaction data is automatically parsed into PHP objects\n";
echo "• Future versions will include a full fluent API for AccountingInfo\n";
