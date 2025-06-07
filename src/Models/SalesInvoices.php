<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * SalesInvoices collection model for Yuki API
 * Represents the root XML element for multiple sales invoices
 */
class SalesInvoices extends AbstractXmlModel
{
    public const NAMESPACE_URI = 'urn:xmlns:http://www.theyukicompany.com:salesinvoices';

    private array $salesInvoices = [];

    public function __construct()
    {
        // Initialize with empty collection
    }

    public function getSalesInvoices(): array
    {
        return $this->salesInvoices;
    }

    public function setSalesInvoices(array $salesInvoices): self
    {
        $this->salesInvoices = [];
        foreach ($salesInvoices as $invoice) {
            $this->addSalesInvoice($invoice);
        }
        return $this;
    }

    public function addSalesInvoice(SalesInvoice $salesInvoice): self
    {
        $this->salesInvoices[] = $salesInvoice;
        return $this;
    }

    public function removeSalesInvoice(int $index): self
    {
        if (isset($this->salesInvoices[$index])) {
            unset($this->salesInvoices[$index]);
            $this->salesInvoices = array_values($this->salesInvoices); // Re-index array
        }
        return $this;
    }

    public function count(): int
    {
        return count($this->salesInvoices);
    }

    public function isEmpty(): bool
    {
        return empty($this->salesInvoices);
    }

    public function toXml(int $indent = 0): string
    {
        $xml = [];
        
        // XML declaration
        $xml[] = '<?xml version="1.0" encoding="UTF-8"?>';
        
        // Root element with namespace
        $xml[] = $this->indent($indent) . '<SalesInvoices xmlns="' . self::NAMESPACE_URI . '">';
        
        // Add each sales invoice
        foreach ($this->salesInvoices as $salesInvoice) {
            $xml[] = $salesInvoice->toXml($indent + 1);
        }
        
        $xml[] = $this->indent($indent) . '</SalesInvoices>';
        
        return implode("\n", $xml);
    }

    public function validate(): array
    {
        $errors = [];
        
        // At least one sales invoice is required
        if (empty($this->salesInvoices)) {
            $errors[] = "At least one SalesInvoice is required";
        } else {
            // Validate each sales invoice
            foreach ($this->salesInvoices as $index => $invoice) {
                $invoiceErrors = $invoice->validate();
                foreach ($invoiceErrors as $error) {
                    $errors[] = "SalesInvoice[{$index}]: " . $error;
                }
            }
        }
        
        return $errors;
    }

    /**
     * Create SalesInvoices from array data
     *
     * @param array $data SalesInvoices data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        $salesInvoices = new self();
        
        // Handle different array structures
        if (isset($data['salesInvoices']) && is_array($data['salesInvoices'])) {
            foreach ($data['salesInvoices'] as $invoiceData) {
                $salesInvoices->addSalesInvoice(SalesInvoice::fromArray($invoiceData));
            }
        } elseif (isset($data['SalesInvoices']) && is_array($data['SalesInvoices'])) {
            foreach ($data['SalesInvoices'] as $invoiceData) {
                $salesInvoices->addSalesInvoice(SalesInvoice::fromArray($invoiceData));
            }
        } elseif (isset($data[0])) {
            // Direct array of invoices
            foreach ($data as $invoiceData) {
                if (is_array($invoiceData)) {
                    $salesInvoices->addSalesInvoice(SalesInvoice::fromArray($invoiceData));
                }
            }
        } else {
            // Single invoice data
            $salesInvoices->addSalesInvoice(SalesInvoice::fromArray($data));
        }
        
        return $salesInvoices;
    }

    /**
     * Convert to array representation
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'salesInvoices' => array_map(fn($invoice) => $invoice->toArray(), $this->salesInvoices)
        ];
    }

    /**
     * Calculate total amount for all invoices
     *
     * @return float
     */
    public function calculateTotalAmount(): float
    {
        $total = 0.0;
        foreach ($this->salesInvoices as $invoice) {
            $total += $invoice->calculateTotal();
        }
        return $total;
    }

    /**
     * Get invoices by reference
     *
     * @param string $reference Invoice reference to search for
     * @return SalesInvoice[]
     */
    public function getInvoicesByReference(string $reference): array
    {
        return array_filter($this->salesInvoices, function($invoice) use ($reference) {
            return $invoice->getReference() === $reference;
        });
    }

    /**
     * Get first invoice (convenience method)
     *
     * @return SalesInvoice|null
     */
    public function getFirstInvoice(): ?SalesInvoice
    {
        return $this->salesInvoices[0] ?? null;
    }

    /**
     * Create a simple SalesInvoices collection with one invoice
     *
     * @param SalesInvoice $invoice The invoice to add
     * @return self
     */
    public static function single(SalesInvoice $invoice): self
    {
        $collection = new self();
        $collection->addSalesInvoice($invoice);
        return $collection;
    }
}