<?php

/**
 * UploadDocument Example - Yuki API Client v2.0
 * 
 * This example demonstrates how to upload documents to the Yuki Archive
 * using the modern v2.0 fluent API with automatic session management.
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

/**
 * Helper function to create a sample XML invoice for demonstration
 */
function createSampleInvoice(): string
{
    return '<?xml version="1.0" encoding="UTF-8"?>
<Invoice>
    <Header>
        <InvoiceNumber>INV-2025-001</InvoiceNumber>
        <InvoiceDate>' . date('Y-m-d') . '</InvoiceDate>
        <DueDate>' . date('Y-m-d', strtotime('+30 days')) . '</DueDate>
    </Header>
    <Customer>
        <Name>Example Customer B.V.</Name>
        <Address>Example Street 123</Address>
        <City>Amsterdam</City>
        <PostalCode>1000 AA</PostalCode>
        <Country>NL</Country>
        <VATNumber>NL123456789B01</VATNumber>
    </Customer>
    <Lines>
        <Line>
            <Description>Professional Services</Description>
            <Quantity>10</Quantity>
            <UnitPrice>150.00</UnitPrice>
            <VATRate>21</VATRate>
            <LineTotal>1500.00</LineTotal>
        </Line>
    </Lines>
    <Totals>
        <SubTotal>1500.00</SubTotal>
        <VATAmount>315.00</VATAmount>
        <Total>1815.00</Total>
    </Totals>
</Invoice>';
}

try {
    // Initialize the v2.0 client with fluent API
    $client = new YukiApiClient($apiKey, YukiEnvironment::PRODUCTION);
    
    // Enable debug mode for detailed logging (optional)
    $client->enableDebug(false);
    
    echo "=== Yuki API v2.0 - Upload Document Example ===\n\n";
    
    // Step 1: Check available document folders
    echo "1. Checking available document folders...\n";
    $folders = $client->archive()->folders()->get();
    
    echo "   Available folders:\n";
    foreach ($folders as $index => $folder) {
        echo "   - Folder " . ($index + 1) . ": " . ($folder['Name'] ?? 'Unknown Name');
        if (isset($folder['ID'])) {
            echo " (ID: " . $folder['ID'] . ")";
        }
        echo "\n";
    }
    echo "\n";
    
    // Step 2: Prepare document for upload
    echo "2. Preparing document for upload...\n";
    
    // Example 1: Upload a sample XML invoice
    $fileName = 'sample_invoice_' . date('Y-m-d_H-i-s') . '.xml';
    $fileContent = createSampleInvoice();
    $targetFolder = 1; // Use first folder (typically default folder)
    
    echo "   Document: $fileName\n";
    echo "   Size: " . strlen($fileContent) . " bytes\n";
    echo "   Target Folder: $targetFolder\n\n";
    
    // Step 3: Upload the document using fluent API
    echo "3. Uploading document using v2.0 fluent API...\n";
    
    $uploadResult = $client->archive()
        ->upload()
        ->file($fileName)
        ->data($fileContent)
        ->folder($targetFolder)
        ->execute();
    
    echo "   ✅ Upload successful!\n";
    echo "   Upload Result: " . print_r($uploadResult, true) . "\n";
    
    // Step 4: Upload multiple documents (batch example)
    echo "4. Uploading multiple documents (batch example)...\n";
    
    $documentsToUpload = [
        [
            'name' => 'credit_note_' . date('Y-m-d_H-i-s') . '.xml',
            'content' => str_replace('<Invoice>', '<CreditNote>', str_replace('</Invoice>', '</CreditNote>', $fileContent))
        ],
        [
            'name' => 'receipt_' . date('Y-m-d_H-i-s') . '.xml',
            'content' => str_replace(['<Invoice>', '</Invoice>'], ['<Receipt>', '</Receipt>'], $fileContent)
        ]
    ];
    
    $uploadedCount = 0;
    foreach ($documentsToUpload as $index => $document) {
        try {
            echo "   Uploading " . ($index + 1) . "/2: " . $document['name'] . "...\n";
            
            $batchResult = $client->archive()
                ->upload()
                ->file($document['name'])
                ->data($document['content'])
                ->folder($targetFolder)
                ->execute();
            
            echo "   ✅ Upload successful!\n";
            $uploadedCount++;
            
        } catch (Exception $e) {
            echo "   ❌ Upload failed: " . $e->getMessage() . "\n";
        }
    }
    
    echo "\n   Batch upload completed: $uploadedCount/2 documents uploaded successfully.\n\n";
    
    // Step 5: Upload a local file (if it exists)
    echo "5. Uploading a local file (if available)...\n";
    
    $localFile = __DIR__ . '/../README.md';
    if (file_exists($localFile)) {
        $localFileName = 'readme_' . date('Y-m-d_H-i-s') . '.md';
        $localContent = file_get_contents($localFile);
        
        echo "   Uploading local file: $localFile\n";
        echo "   As: $localFileName\n";
        echo "   Size: " . strlen($localContent) . " bytes\n";
        
        $localResult = $client->archive()
            ->upload()
            ->file($localFileName)
            ->data($localContent)
            ->folder($targetFolder)
            ->execute();
        
        echo "   ✅ Local file upload successful!\n";
        
    } else {
        echo "   ℹ️  No local README.md file found, skipping local file upload.\n";
    }
    
    echo "\n=== All uploads completed successfully! ===\n";
    
} catch (YukiApiException $e) {
    echo "Yuki API Error: " . $e->getMessage() . "\n";
    echo "Error Code: " . $e->getCode() . "\n";
    
    if ($e->hasDetails()) {
        echo "Details: " . print_r($e->getDetails(), true) . "\n";
    }
    
} catch (Exception $e) {
    echo "General Error: " . $e->getMessage() . "\n";
    echo "Please check your API key, network connection, and file permissions.\n";
    echo "Stack trace: " . $e->getTraceAsString() . "\n";
}

echo "\n=== API Usage Notes ===\n";
echo "• The v2.0 client automatically handles authentication and session management\n";
echo "• Documents are uploaded as raw binary data (no manual base64 encoding needed)\n";
echo "• The SOAP client automatically handles base64 encoding for base64Binary fields\n";
echo "• Supported file types: XML, PDF, images, and other common document formats\n";
echo "• Always specify the target folder ID (use folders()->get() to list available folders)\n";
echo "• File names should be unique to avoid conflicts in the archive\n";
echo "• Large files may take longer to upload - consider implementing progress tracking\n";
echo "• Use batch uploads for multiple documents to improve efficiency\n";

echo "\n=== Upload Best Practices ===\n";
echo "• Include timestamps in file names to ensure uniqueness\n";
echo "• Validate file content before uploading\n";
echo "• Handle upload errors gracefully with retry logic\n";
echo "• Keep track of uploaded documents for later reference\n";
echo "• Use appropriate folder organization for different document types\n";
echo "• Consider file size limits and upload timeouts for large documents\n";