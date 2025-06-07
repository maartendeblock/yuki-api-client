<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * SalesInvoice model for Yuki API
 */
class SalesInvoice extends AbstractXmlModel
{
    public const PAYMENT_METHOD_UNSPECIFIED = 'Unspecified';
    public const PAYMENT_METHOD_ELECTRONIC_TRANSFER = 'ElectronicTransfer';
    public const PAYMENT_METHOD_DIRECT_COLLECTION = 'DirectCollection';
    public const PAYMENT_METHOD_CREDIT_CARD = 'CreditCard';
    public const PAYMENT_METHOD_DEBIT_CARD = 'DebitCard';
    public const PAYMENT_METHOD_CASH = 'Cash';
    public const PAYMENT_METHOD_IDEAL = 'iDeal';
    public const PAYMENT_METHOD_ONLINE = 'Online';
    public const PAYMENT_METHOD_TO_SETTLE = 'ToSettle';

    private ?string $reference = null;
    private ?string $subject = null;
    private ?string $paymentMethod = null;
    private ?string $paymentId = null;
    private ?bool $process = null;
    private ?bool $emailToCustomer = null;
    private ?string $layout = null;
    private ?\DateTime $date = null;
    private ?\DateTime $dueDate = null;
    private ?string $priceList = null;
    private ?string $currency = null;
    private ?string $projectId = null;
    private ?string $projectCode = null;
    private ?string $remarks = null;
    private ?string $documentFileName = null;
    private ?string $documentBase64 = null;
    private ?Contact $contact = null;
    private array $invoiceLines = [];

    public function __construct()
    {
        // Set default values
        $this->paymentMethod = self::PAYMENT_METHOD_ELECTRONIC_TRANSFER;
        $this->process = true;
        $this->emailToCustomer = false;
        $this->date = new \DateTime();
        $this->dueDate = (new \DateTime())->modify('+30 days');
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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function setPaymentId(?string $paymentId): self
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    public function isProcess(): ?bool
    {
        return $this->process;
    }

    public function setProcess(?bool $process): self
    {
        $this->process = $process;
        return $this;
    }

    public function isEmailToCustomer(): ?bool
    {
        return $this->emailToCustomer;
    }

    public function setEmailToCustomer(?bool $emailToCustomer): self
    {
        $this->emailToCustomer = $emailToCustomer;
        return $this;
    }

    public function getLayout(): ?string
    {
        return $this->layout;
    }

    public function setLayout(?string $layout): self
    {
        $this->layout = $layout;
        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTime $dueDate): self
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getPriceList(): ?string
    {
        return $this->priceList;
    }

    public function setPriceList(?string $priceList): self
    {
        $this->priceList = $priceList;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    public function setProjectId(?string $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    public function getProjectCode(): ?string
    {
        return $this->projectCode;
    }

    public function setProjectCode(?string $projectCode): self
    {
        $this->projectCode = $projectCode;
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

    public function getDocumentFileName(): ?string
    {
        return $this->documentFileName;
    }

    public function setDocumentFileName(?string $documentFileName): self
    {
        $this->documentFileName = $documentFileName;
        return $this;
    }

    public function getDocumentBase64(): ?string
    {
        return $this->documentBase64;
    }

    public function setDocumentBase64(?string $documentBase64): self
    {
        $this->documentBase64 = $documentBase64;
        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    public function getInvoiceLines(): array
    {
        return $this->invoiceLines;
    }

    public function setInvoiceLines(array $invoiceLines): self
    {
        $this->invoiceLines = [];
        foreach ($invoiceLines as $line) {
            $this->addInvoiceLine($line);
        }
        return $this;
    }

    public function addInvoiceLine(InvoiceLine $invoiceLine): self
    {
        $this->invoiceLines[] = $invoiceLine;
        return $this;
    }

    public function removeInvoiceLine(int $index): self
    {
        if (isset($this->invoiceLines[$index])) {
            unset($this->invoiceLines[$index]);
            $this->invoiceLines = array_values($this->invoiceLines); // Re-index array
        }
        return $this;
    }

    public function toXml(int $indent = 0): string
    {
        $xml = [];
        $xml[] = $this->indent($indent) . '<SalesInvoice>';
        
        if ($this->reference !== null) {
            $xml[] = $this->xmlElement('Reference', $this->reference, $indent + 1);
        }
        
        if ($this->subject !== null) {
            $xml[] = $this->xmlElement('Subject', $this->subject, $indent + 1);
        }
        
        if ($this->paymentMethod !== null) {
            $xml[] = $this->xmlElement('PaymentMethod', $this->paymentMethod, $indent + 1);
        }
        
        if ($this->paymentId !== null) {
            $xml[] = $this->xmlElement('PaymentID', $this->paymentId, $indent + 1);
        }
        
        if ($this->process !== null) {
            $xml[] = $this->xmlElement('Process', $this->process ? 'true' : 'false', $indent + 1);
        }
        
        if ($this->emailToCustomer !== null) {
            $xml[] = $this->xmlElement('EmailToCustomer', $this->emailToCustomer ? 'true' : 'false', $indent + 1);
        }
        
        if ($this->layout !== null) {
            $xml[] = $this->xmlElement('Layout', $this->layout, $indent + 1, true);
        }
        
        if ($this->date !== null) {
            $xml[] = $this->xmlElement('Date', $this->formatDate($this->date), $indent + 1);
        }
        
        if ($this->dueDate !== null) {
            $xml[] = $this->xmlElement('DueDate', $this->formatDate($this->dueDate), $indent + 1);
        }
        
        if ($this->priceList !== null) {
            $xml[] = $this->xmlElement('PriceList', $this->priceList, $indent + 1, true);
        }
        
        if ($this->currency !== null) {
            $xml[] = $this->xmlElement('Currency', $this->currency, $indent + 1, true);
        }
        
        if ($this->projectId !== null) {
            $xml[] = $this->xmlElement('ProjectID', $this->projectId, $indent + 1, true);
        }
        
        if ($this->projectCode !== null) {
            $xml[] = $this->xmlElement('ProjectCode', $this->projectCode, $indent + 1, true);
        }
        
        if ($this->remarks !== null) {
            $xml[] = $this->xmlElement('Remarks', $this->remarks, $indent + 1, true);
        }
        
        if ($this->documentFileName !== null) {
            $xml[] = $this->xmlElement('DocumentFileName', $this->documentFileName, $indent + 1);
        }
        
        if ($this->documentBase64 !== null) {
            $xml[] = $this->xmlElement('DocumentBase64', $this->documentBase64, $indent + 1);
        }
        
        // Add contact
        if ($this->contact !== null) {
            $xml[] = $this->contact->toXml($indent + 1);
        }
        
        // Add invoice lines
        if (!empty($this->invoiceLines)) {
            $xml[] = $this->indent($indent + 1) . '<InvoiceLines>';
            foreach ($this->invoiceLines as $line) {
                $xml[] = $line->toXml($indent + 2);
            }
            $xml[] = $this->indent($indent + 1) . '</InvoiceLines>';
        }
        
        $xml[] = $this->indent($indent) . '</SalesInvoice>';
        
        return implode("\n", $xml);
    }

    public function validate(): array
    {
        $errors = [];
        
        // Reference is required if process is true
        if ($this->process === true && ($this->reference === null || $this->reference === '')) {
            $errors[] = "Reference is required when Process is true";
        }
        
        // Subject is typically required
        $this->validateRequired($this->subject, 'Subject', $errors);
        
        // Validate payment method
        if ($this->paymentMethod !== null) {
            $validMethods = [
                self::PAYMENT_METHOD_UNSPECIFIED,
                self::PAYMENT_METHOD_ELECTRONIC_TRANSFER,
                self::PAYMENT_METHOD_DIRECT_COLLECTION,
                self::PAYMENT_METHOD_CREDIT_CARD,
                self::PAYMENT_METHOD_DEBIT_CARD,
                self::PAYMENT_METHOD_CASH,
                self::PAYMENT_METHOD_IDEAL,
                self::PAYMENT_METHOD_ONLINE,
                self::PAYMENT_METHOD_TO_SETTLE
            ];
            if (!in_array($this->paymentMethod, $validMethods)) {
                $errors[] = "PaymentMethod must be one of: " . implode(', ', $validMethods);
            }
        }
        
        // Validate dates
        if ($this->date !== null && $this->dueDate !== null && $this->dueDate < $this->date) {
            $errors[] = "DueDate cannot be before Date";
        }
        
        // Validate contact
        if ($this->contact !== null) {
            $contactErrors = $this->contact->validate();
            foreach ($contactErrors as $error) {
                $errors[] = "Contact: " . $error;
            }
        } else {
            $errors[] = "Contact is required";
        }
        
        // Validate invoice lines
        if (empty($this->invoiceLines)) {
            $errors[] = "At least one InvoiceLine is required";
        } else {
            foreach ($this->invoiceLines as $index => $line) {
                $lineErrors = $line->validate();
                foreach ($lineErrors as $error) {
                    $errors[] = "InvoiceLine[{$index}]: " . $error;
                }
            }
        }
        
        return $errors;
    }

    /**
     * Calculate total invoice amount
     *
     * @return float
     */
    public function calculateTotal(): float
    {
        $total = 0.0;
        foreach ($this->invoiceLines as $line) {
            $lineTotal = $line->calculateLineTotal();
            if ($lineTotal !== null) {
                $total += $lineTotal;
            }
        }
        return $total;
    }

    /**
     * Create SalesInvoice from array data
     *
     * @param array $data SalesInvoice data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        $invoice = new self();
        
        $invoice->setReference($data['reference'] ?? $data['Reference'] ?? null)
                ->setSubject($data['subject'] ?? $data['Subject'] ?? null)
                ->setPaymentMethod($data['paymentMethod'] ?? $data['PaymentMethod'] ?? null)
                ->setPaymentId($data['paymentId'] ?? $data['PaymentID'] ?? null)
                ->setProcess(isset($data['process']) ? (bool)$data['process'] : 
                            (isset($data['Process']) ? (bool)$data['Process'] : null))
                ->setEmailToCustomer(isset($data['emailToCustomer']) ? (bool)$data['emailToCustomer'] : 
                                    (isset($data['EmailToCustomer']) ? (bool)$data['EmailToCustomer'] : null))
                ->setLayout($data['layout'] ?? $data['Layout'] ?? null)
                ->setPriceList($data['priceList'] ?? $data['PriceList'] ?? null)
                ->setCurrency($data['currency'] ?? $data['Currency'] ?? null)
                ->setProjectId($data['projectId'] ?? $data['ProjectID'] ?? null)
                ->setProjectCode($data['projectCode'] ?? $data['ProjectCode'] ?? null)
                ->setRemarks($data['remarks'] ?? $data['Remarks'] ?? null)
                ->setDocumentFileName($data['documentFileName'] ?? $data['DocumentFileName'] ?? null)
                ->setDocumentBase64($data['documentBase64'] ?? $data['DocumentBase64'] ?? null);
        
        // Handle dates
        if (isset($data['date']) || isset($data['Date'])) {
            $dateString = $data['date'] ?? $data['Date'];
            if ($dateString) {
                $invoice->setDate(new \DateTime($dateString));
            }
        }
        
        if (isset($data['dueDate']) || isset($data['DueDate'])) {
            $dateString = $data['dueDate'] ?? $data['DueDate'];
            if ($dateString) {
                $invoice->setDueDate(new \DateTime($dateString));
            }
        }
        
        // Handle contact
        if (isset($data['contact']) && is_array($data['contact'])) {
            $invoice->setContact(Contact::fromArray($data['contact']));
        } elseif (isset($data['Contact']) && is_array($data['Contact'])) {
            $invoice->setContact(Contact::fromArray($data['Contact']));
        }
        
        // Handle invoice lines
        if (isset($data['invoiceLines']) && is_array($data['invoiceLines'])) {
            foreach ($data['invoiceLines'] as $lineData) {
                $invoice->addInvoiceLine(InvoiceLine::fromArray($lineData));
            }
        } elseif (isset($data['InvoiceLines']) && is_array($data['InvoiceLines'])) {
            foreach ($data['InvoiceLines'] as $lineData) {
                $invoice->addInvoiceLine(InvoiceLine::fromArray($lineData));
            }
        }
        
        return $invoice;
    }

    /**
     * Convert to array representation
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'reference' => $this->reference,
            'subject' => $this->subject,
            'paymentMethod' => $this->paymentMethod,
            'paymentId' => $this->paymentId,
            'process' => $this->process,
            'emailToCustomer' => $this->emailToCustomer,
            'layout' => $this->layout,
            'date' => $this->date?->format('Y-m-d'),
            'dueDate' => $this->dueDate?->format('Y-m-d'),
            'priceList' => $this->priceList,
            'currency' => $this->currency,
            'projectId' => $this->projectId,
            'projectCode' => $this->projectCode,
            'remarks' => $this->remarks,
            'documentFileName' => $this->documentFileName,
            'documentBase64' => $this->documentBase64,
            'contact' => $this->contact?->toArray(),
            'invoiceLines' => array_map(fn($line) => $line->toArray(), $this->invoiceLines)
        ];
    }
}