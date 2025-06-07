<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * InvoiceLine model for Yuki API
 */
class InvoiceLine extends AbstractXmlModel
{
    private ?string $description = null;
    private ?string $remarks = null;
    private ?float $productQuantity = null;
    private ?float $lineAmount = null;
    private ?float $lineVatAmount = null;
    private ?Product $product = null;
    private ?\DateTime $accrualDate = null;
    private ?int $accrualPeriods = null;
    private ?string $accrualInterval = null;

    public function __construct()
    {
        // Default quantity
        $this->productQuantity = 1.0;
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

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): self
    {
        $this->remarks = $remarks;
        return $this;
    }

    public function getProductQuantity(): ?float
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(?float $productQuantity): self
    {
        $this->productQuantity = $productQuantity;
        return $this;
    }

    public function getLineAmount(): ?float
    {
        return $this->lineAmount;
    }

    public function setLineAmount(?float $lineAmount): self
    {
        $this->lineAmount = $lineAmount;
        return $this;
    }

    public function getLineVatAmount(): ?float
    {
        return $this->lineVatAmount;
    }

    public function setLineVatAmount(?float $lineVatAmount): self
    {
        $this->lineVatAmount = $lineVatAmount;
        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;
        return $this;
    }

    public function getAccrualDate(): ?\DateTime
    {
        return $this->accrualDate;
    }

    public function setAccrualDate(?\DateTime $accrualDate): self
    {
        $this->accrualDate = $accrualDate;
        return $this;
    }

    public function getAccrualPeriods(): ?int
    {
        return $this->accrualPeriods;
    }

    public function setAccrualPeriods(?int $accrualPeriods): self
    {
        $this->accrualPeriods = $accrualPeriods;
        return $this;
    }

    public function getAccrualInterval(): ?string
    {
        return $this->accrualInterval;
    }

    public function setAccrualInterval(?string $accrualInterval): self
    {
        $this->accrualInterval = $accrualInterval;
        return $this;
    }

    public function toXml(int $indent = 0): string
    {
        $xml = [];
        $xml[] = $this->indent($indent) . '<InvoiceLine>';
        
        if ($this->description !== null) {
            $xml[] = $this->xmlElement('Description', $this->description, $indent + 1);
        }
        
        if ($this->remarks !== null) {
            $xml[] = $this->xmlElement('Remarks', $this->remarks, $indent + 1);
        }
        
        if ($this->productQuantity !== null) {
            $xml[] = $this->xmlElement('ProductQuantity', $this->formatMoney($this->productQuantity), $indent + 1);
        }
        
        if ($this->lineAmount !== null) {
            $xml[] = $this->xmlElement('LineAmount', $this->formatMoney($this->lineAmount), $indent + 1);
        }
        
        if ($this->lineVatAmount !== null) {
            $xml[] = $this->xmlElement('LineVATAmount', $this->formatMoney($this->lineVatAmount), $indent + 1);
        }
        
        if ($this->product !== null) {
            $xml[] = $this->product->toXml($indent + 1);
        }
        
        if ($this->accrualDate !== null) {
            $xml[] = $this->xmlElement('AccrualDate', $this->formatDate($this->accrualDate), $indent + 1);
        }
        
        if ($this->accrualPeriods !== null) {
            $xml[] = $this->xmlElement('AccrualPeriods', (string)$this->accrualPeriods, $indent + 1);
        }
        
        if ($this->accrualInterval !== null) {
            $xml[] = $this->xmlElement('AccrualInterval', $this->accrualInterval, $indent + 1);
        }
        
        $xml[] = $this->indent($indent) . '</InvoiceLine>';
        
        return implode("\n", $xml);
    }

    public function validate(): array
    {
        $errors = [];
        
        // Description is required if no product description
        if (($this->description === null || $this->description === '') && 
            ($this->product === null || $this->product->getDescription() === null)) {
            $errors[] = "Either InvoiceLine Description or Product Description is required";
        }
        
        // Product quantity should be positive
        if ($this->productQuantity !== null && $this->productQuantity <= 0) {
            $errors[] = "ProductQuantity must be greater than zero";
        }
        
        // Validate product if provided
        if ($this->product !== null) {
            $productErrors = $this->product->validate();
            foreach ($productErrors as $error) {
                $errors[] = "Product: " . $error;
            }
        }
        
        // Line amounts should be positive if provided
        if ($this->lineAmount !== null && $this->lineAmount < 0) {
            $errors[] = "LineAmount cannot be negative";
        }
        
        if ($this->lineVatAmount !== null && $this->lineVatAmount < 0) {
            $errors[] = "LineVATAmount cannot be negative";
        }
        
        // Accrual periods should be positive if provided
        if ($this->accrualPeriods !== null && $this->accrualPeriods <= 0) {
            $errors[] = "AccrualPeriods must be greater than zero";
        }
        
        return $errors;
    }

    /**
     * Calculate line total based on quantity and product price
     *
     * @return float|null
     */
    public function calculateLineTotal(): ?float
    {
        if ($this->product === null || $this->product->getSalesPrice() === null || $this->productQuantity === null) {
            return $this->lineAmount;
        }
        
        return $this->productQuantity * $this->product->getSalesPrice();
    }

    /**
     * Create InvoiceLine from array data
     *
     * @param array $data InvoiceLine data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        $invoiceLine = new self();
        
        $invoiceLine->setDescription($data['description'] ?? $data['Description'] ?? null)
                    ->setRemarks($data['remarks'] ?? $data['Remarks'] ?? null)
                    ->setProductQuantity(isset($data['productQuantity']) ? (float)$data['productQuantity'] : 
                                        (isset($data['ProductQuantity']) ? (float)$data['ProductQuantity'] : null))
                    ->setLineAmount(isset($data['lineAmount']) ? (float)$data['lineAmount'] : 
                                   (isset($data['LineAmount']) ? (float)$data['LineAmount'] : null))
                    ->setLineVatAmount(isset($data['lineVatAmount']) ? (float)$data['lineVatAmount'] : 
                                      (isset($data['LineVATAmount']) ? (float)$data['LineVATAmount'] : null))
                    ->setAccrualPeriods(isset($data['accrualPeriods']) ? (int)$data['accrualPeriods'] : 
                                       (isset($data['AccrualPeriods']) ? (int)$data['AccrualPeriods'] : null))
                    ->setAccrualInterval($data['accrualInterval'] ?? $data['AccrualInterval'] ?? null);
        
        // Handle accrual date
        if (isset($data['accrualDate']) || isset($data['AccrualDate'])) {
            $dateString = $data['accrualDate'] ?? $data['AccrualDate'];
            if ($dateString) {
                $invoiceLine->setAccrualDate(new \DateTime($dateString));
            }
        }
        
        // Handle product data
        if (isset($data['product']) && is_array($data['product'])) {
            $invoiceLine->setProduct(Product::fromArray($data['product']));
        } elseif (isset($data['Product']) && is_array($data['Product'])) {
            $invoiceLine->setProduct(Product::fromArray($data['Product']));
        }
        
        return $invoiceLine;
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
            'remarks' => $this->remarks,
            'productQuantity' => $this->productQuantity,
            'lineAmount' => $this->lineAmount,
            'lineVatAmount' => $this->lineVatAmount,
            'product' => $this->product?->toArray(),
            'accrualDate' => $this->accrualDate?->format('Y-m-d'),
            'accrualPeriods' => $this->accrualPeriods,
            'accrualInterval' => $this->accrualInterval
        ];
    }
}