<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * Product model for Yuki API
 */
class Product extends AbstractXmlModel
{
    private ?string $description = null;
    private ?string $reference = null;
    private ?float $salesPrice = null;
    private ?float $vatPercentage = null;
    private ?bool $vatIncluded = null;
    private ?int $vatType = null;
    private ?string $vatDescription = null;
    private ?string $glAccountCode = null;

    public function __construct()
    {
        // Default values
        $this->vatIncluded = false;
        $this->vatPercentage = 0.00;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getSalesPrice(): ?float
    {
        return $this->salesPrice;
    }

    public function setSalesPrice(?float $salesPrice): self
    {
        $this->salesPrice = $salesPrice;
        return $this;
    }

    public function getVatPercentage(): ?float
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage(?float $vatPercentage): self
    {
        $this->vatPercentage = $vatPercentage;
        return $this;
    }

    public function isVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }

    public function setVatIncluded(?bool $vatIncluded): self
    {
        $this->vatIncluded = $vatIncluded;
        return $this;
    }

    public function getVatType(): ?int
    {
        return $this->vatType;
    }

    public function setVatType(?int $vatType): self
    {
        $this->vatType = $vatType;
        return $this;
    }

    public function getVatDescription(): ?string
    {
        return $this->vatDescription;
    }

    public function setVatDescription(?string $vatDescription): self
    {
        $this->vatDescription = $vatDescription;
        return $this;
    }

    public function getGlAccountCode(): ?string
    {
        return $this->glAccountCode;
    }

    public function setGlAccountCode(?string $glAccountCode): self
    {
        $this->glAccountCode = $glAccountCode;
        return $this;
    }

    public function toXml(int $indent = 0): string
    {
        $xml = [];
        $xml[] = $this->indent($indent) . '<Product>';
        
        if ($this->description !== null) {
            $xml[] = $this->xmlElement('Description', $this->description, $indent + 1);
        }
        
        if ($this->reference !== null) {
            $xml[] = $this->xmlElement('Reference', $this->reference, $indent + 1);
        }
        
        if ($this->salesPrice !== null) {
            $xml[] = $this->xmlElement('SalesPrice', $this->formatMoney($this->salesPrice), $indent + 1);
        }
        
        if ($this->vatPercentage !== null) {
            $xml[] = $this->xmlElement('VATPercentage', $this->formatPercentage($this->vatPercentage), $indent + 1);
        }
        
        if ($this->vatIncluded !== null) {
            $xml[] = $this->xmlElement('VATIncluded', $this->vatIncluded ? 'true' : 'false', $indent + 1);
        }
        
        if ($this->vatType !== null) {
            $xml[] = $this->xmlElement('VATType', (string)$this->vatType, $indent + 1);
        }
        
        if ($this->vatDescription !== null) {
            $xml[] = $this->xmlElement('VATDescription', $this->vatDescription, $indent + 1);
        }
        
        if ($this->glAccountCode !== null) {
            $xml[] = $this->xmlElement('GLAccountCode', $this->glAccountCode, $indent + 1);
        }
        
        $xml[] = $this->indent($indent) . '</Product>';
        
        return implode("\n", $xml);
    }

    public function validate(): array
    {
        $errors = [];
        
        // Description is required
        $this->validateRequired($this->description, 'Description', $errors);
        
        // Sales price should be a valid positive number
        if ($this->salesPrice !== null && $this->salesPrice < 0) {
            $errors[] = "SalesPrice must be a positive number";
        }
        
        // VAT percentage should be between 0 and 100
        if ($this->vatPercentage !== null && ($this->vatPercentage < 0 || $this->vatPercentage > 100)) {
            $errors[] = "VATPercentage must be between 0 and 100";
        }
        
        // GL Account Code format validation (typically numeric)
        if ($this->glAccountCode !== null && !preg_match('/^\d+$/', $this->glAccountCode)) {
            $errors[] = "GLAccountCode must be numeric";
        }
        
        return $errors;
    }

    /**
     * Create Product from array data
     *
     * @param array $data Product data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        $product = new self();
        
        $product->setDescription($data['description'] ?? $data['Description'] ?? null)
                ->setReference($data['reference'] ?? $data['Reference'] ?? null)
                ->setSalesPrice(isset($data['salesPrice']) ? (float)$data['salesPrice'] : 
                               (isset($data['SalesPrice']) ? (float)$data['SalesPrice'] : null))
                ->setVatPercentage(isset($data['vatPercentage']) ? (float)$data['vatPercentage'] : 
                                  (isset($data['VATPercentage']) ? (float)$data['VATPercentage'] : null))
                ->setVatIncluded(isset($data['vatIncluded']) ? (bool)$data['vatIncluded'] : 
                                (isset($data['VATIncluded']) ? (bool)$data['VATIncluded'] : null))
                ->setVatType(isset($data['vatType']) ? (int)$data['vatType'] : 
                            (isset($data['VATType']) ? (int)$data['VATType'] : null))
                ->setVatDescription($data['vatDescription'] ?? $data['VATDescription'] ?? null)
                ->setGlAccountCode($data['glAccountCode'] ?? $data['GLAccountCode'] ?? null);
        
        return $product;
    }

    /**
     * Convert to array representation
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'description' => $this->description,
            'reference' => $this->reference,
            'salesPrice' => $this->salesPrice,
            'vatPercentage' => $this->vatPercentage,
            'vatIncluded' => $this->vatIncluded,
            'vatType' => $this->vatType,
            'vatDescription' => $this->vatDescription,
            'glAccountCode' => $this->glAccountCode
        ];
    }
}