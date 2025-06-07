<?php

namespace MaartenDeBlock\YukiApiClient\Models;

use MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Transaction as YukiTransaction;

/**
 * Transaction model wrapper for Yuki API
 * 
 * Provides business logic and convenience methods for working with Yuki Transaction objects
 */
class Transaction
{
    public const TYPE_SALES_INVOICE = 'sales_invoice';
    public const TYPE_PURCHASE_INVOICE = 'purchase_invoice';
    public const TYPE_PAYMENT = 'payment';
    public const TYPE_BANK_TRANSACTION = 'bank_transaction';
    public const TYPE_JOURNAL_ENTRY = 'journal_entry';
    public const TYPE_UNKNOWN = 'unknown';

    private YukiTransaction $yukiTransaction;
    private ?string $inferredType = null;
    private ?bool $isPaid = null;
    private ?\DateTime $estimatedDueDate = null;

    public function __construct(YukiTransaction $yukiTransaction)
    {
        $this->yukiTransaction = $yukiTransaction;
        $this->analyzeTransaction();
    }

    /**
     * Create Transaction model from Yuki Transaction object
     */
    public static function fromYukiTransaction(YukiTransaction $yukiTransaction): self
    {
        return new self($yukiTransaction);
    }

    /**
     * Create Transaction model from array data
     */
    public static function fromArray(array $data): self
    {
        // This would need to create a YukiTransaction object from array data
        // For now, throw an exception as this requires more complex conversion
        throw new \InvalidArgumentException('Creating Transaction from array not yet implemented');
    }

    /**
     * Get the underlying Yuki Transaction object
     */
    public function getYukiTransaction(): YukiTransaction
    {
        return $this->yukiTransaction;
    }

    /**
     * Get transaction ID
     */
    public function getId(): ?string
    {
        return $this->yukiTransaction->getId();
    }

    /**
     * Get transaction HID
     */
    public function getHID(): ?string
    {
        return $this->yukiTransaction->getHID();
    }

    /**
     * Get reference/identifier for display
     */
    public function getReference(): string
    {
        return $this->getId() ?? $this->getHID() ?? 'N/A';
    }

    /**
     * Get transaction date
     */
    public function getTransactionDate(): \DateTimeInterface
    {
        return $this->yukiTransaction->getTransactionDate();
    }

    /**
     * Get transaction description
     */
    public function getDescription(): ?string
    {
        return $this->yukiTransaction->getDescription();
    }

    /**
     * Get transaction amount
     */
    public function getAmount(): float
    {
        return $this->yukiTransaction->getAmount();
    }

    /**
     * Get GL account code
     */
    public function getGlAccountCode(): ?string
    {
        return $this->yukiTransaction->getGlAccountCode();
    }

    /**
     * Get contact information
     */
    public function getContact(): ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact
    {
        return $this->yukiTransaction->getContact();
    }

    /**
     * Get customer name from contact or description
     */
    public function getCustomerName(): string
    {
        $contact = $this->getContact();
        if ($contact && method_exists($contact, 'getFullName')) {
            $fullName = $contact->getFullName();
            if ($fullName) {
                return $fullName;
            }
        }
        
        return $this->getDescription() ?? 'Unknown';
    }

    /**
     * Get inferred transaction type
     */
    public function getInferredType(): string
    {
        return $this->inferredType ?? self::TYPE_UNKNOWN;
    }

    /**
     * Check if this is likely a sales invoice
     */
    public function isSalesInvoice(): bool
    {
        return $this->getInferredType() === self::TYPE_SALES_INVOICE;
    }

    /**
     * Check if this is likely a purchase invoice
     */
    public function isPurchaseInvoice(): bool
    {
        return $this->getInferredType() === self::TYPE_PURCHASE_INVOICE;
    }

    /**
     * Check if transaction is paid (estimated)
     */
    public function isPaid(): bool
    {
        // For now, return false as we don't have payment status in the transaction
        // This could be enhanced to look for related payment transactions
        return $this->isPaid ?? false;
    }

    /**
     * Get estimated due date
     */
    public function getEstimatedDueDate(): ?\DateTime
    {
        if ($this->estimatedDueDate !== null) {
            return $this->estimatedDueDate;
        }

        // Estimate due date based on transaction date + typical payment terms
        if ($this->isSalesInvoice()) {
            $transactionDate = $this->getTransactionDate();
            
            // Convert DateTimeInterface to DateTime to ensure consistent return type
            // The Yuki API may return either DateTime or DateTimeImmutable objects
            if ($transactionDate instanceof \DateTimeImmutable) {
                // Convert DateTimeImmutable to DateTime for mutability and consistent return type
                $dueDate = new \DateTime($transactionDate->format('Y-m-d H:i:s'), $transactionDate->getTimezone());
            } else {
                $dueDate = clone $transactionDate;
            }
            
            $dueDate->modify('+30 days'); // Assume 30-day payment terms
            return $dueDate;
        }

        return null;
    }

    /**
     * Check if transaction is overdue (estimated)
     */
    public function isOverdue(): bool
    {
        if ($this->isPaid()) {
            return false;
        }

        $dueDate = $this->getEstimatedDueDate();
        if (!$dueDate) {
            return false;
        }

        return $dueDate < new \DateTime();
    }

    /**
     * Get absolute amount (always positive)
     */
    public function getAbsoluteAmount(): float
    {
        return abs($this->getAmount());
    }

    /**
     * Check if amount is debit (positive)
     */
    public function isDebit(): bool
    {
        return $this->getAmount() > 0;
    }

    /**
     * Check if amount is credit (negative)
     */
    public function isCredit(): bool
    {
        return $this->getAmount() < 0;
    }

    /**
     * Get formatted amount for display
     */
    public function getFormattedAmount(string $currency = 'EUR'): string
    {
        $symbol = $currency === 'EUR' ? '€' : $currency;
        return $symbol . ' ' . number_format($this->getAbsoluteAmount(), 2);
    }

    /**
     * Get document information
     */
    public function getDocument(): ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document
    {
        return $this->yukiTransaction->getDocument();
    }

    /**
     * Get VAT information
     */
    public function getVat(): ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT
    {
        return $this->yukiTransaction->getVat();
    }

    /**
     * Get project information
     */
    public function getProject(): ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo
    {
        return $this->yukiTransaction->getProject();
    }

    /**
     * Convert to array representation
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'hid' => $this->getHID(),
            'reference' => $this->getReference(),
            'transaction_date' => $this->getTransactionDate()->format('Y-m-d'),
            'description' => $this->getDescription(),
            'amount' => $this->getAmount(),
            'absolute_amount' => $this->getAbsoluteAmount(),
            'formatted_amount' => $this->getFormattedAmount(),
            'gl_account_code' => $this->getGlAccountCode(),
            'customer_name' => $this->getCustomerName(),
            'inferred_type' => $this->getInferredType(),
            'is_sales_invoice' => $this->isSalesInvoice(),
            'is_purchase_invoice' => $this->isPurchaseInvoice(),
            'is_paid' => $this->isPaid(),
            'estimated_due_date' => $this->getEstimatedDueDate()?->format('Y-m-d'),
            'is_overdue' => $this->isOverdue(),
            'is_debit' => $this->isDebit(),
            'is_credit' => $this->isCredit()
        ];
    }

    /**
     * Analyze transaction to infer type and other properties
     */
    private function analyzeTransaction(): void
    {
        $description = strtolower($this->getDescription() ?? '');
        $glAccount = $this->getGlAccountCode() ?? '';
        $amount = $this->getAmount();

        // Analyze transaction type based on description and GL account
        if (stripos($description, 'invoice') !== false || 
            stripos($description, 'factuur') !== false) {
            
            if ($amount > 0 || stripos($glAccount, '1300') !== false) {
                // Positive amount or debtor account = sales invoice
                $this->inferredType = self::TYPE_SALES_INVOICE;
            } else {
                // Negative amount = purchase invoice
                $this->inferredType = self::TYPE_PURCHASE_INVOICE;
            }
        } elseif (stripos($description, 'payment') !== false ||
                  stripos($description, 'betaling') !== false ||
                  stripos($description, 'pay') !== false) {
            $this->inferredType = self::TYPE_PAYMENT;
        } elseif (stripos($glAccount, '1') === 0) {
            // GL accounts starting with 1 are typically balance sheet accounts
            $this->inferredType = self::TYPE_BANK_TRANSACTION;
        } elseif (stripos($glAccount, '8') === 0) {
            // GL accounts starting with 8 are typically revenue accounts
            $this->inferredType = self::TYPE_SALES_INVOICE;
        } elseif (stripos($glAccount, '4') === 0 || stripos($glAccount, '6') === 0) {
            // GL accounts starting with 4 or 6 are typically expense accounts
            $this->inferredType = self::TYPE_PURCHASE_INVOICE;
        } else {
            $this->inferredType = self::TYPE_JOURNAL_ENTRY;
        }

        // Analyze payment status (basic heuristics)
        if (stripos($description, 'paid') !== false ||
            stripos($description, 'betaald') !== false ||
            $this->inferredType === self::TYPE_PAYMENT) {
            $this->isPaid = true;
        }
    }

    /**
     * Create a collection of Transaction models from array of Yuki Transaction objects
     */
    public static function createCollection(array $yukiTransactions): array
    {
        return array_map(
            fn(YukiTransaction $transaction) => new self($transaction),
            $yukiTransactions
        );
    }

    /**
     * Filter collection for sales invoices only
     */
    public static function filterSalesInvoices(array $transactions): array
    {
        return array_filter(
            $transactions,
            fn(Transaction $transaction) => $transaction->isSalesInvoice()
        );
    }

    /**
     * Filter collection for unpaid transactions only
     */
    public static function filterUnpaid(array $transactions): array
    {
        return array_filter(
            $transactions,
            fn(Transaction $transaction) => !$transaction->isPaid()
        );
    }

    /**
     * Filter collection for overdue transactions only
     */
    public static function filterOverdue(array $transactions): array
    {
        return array_filter(
            $transactions,
            fn(Transaction $transaction) => $transaction->isOverdue()
        );
    }

    /**
     * Sort collection by due date
     */
    public static function sortByDueDate(array $transactions): array
    {
        usort($transactions, function(Transaction $a, Transaction $b) {
            $dueDateA = $a->getEstimatedDueDate();
            $dueDateB = $b->getEstimatedDueDate();
            
            if (!$dueDateA && !$dueDateB) return 0;
            if (!$dueDateA) return 1;
            if (!$dueDateB) return -1;
            
            return $dueDateA <=> $dueDateB;
        });
        
        return $transactions;
    }

    /**
     * Calculate total amount for collection
     */
    public static function calculateTotal(array $transactions): float
    {
        return array_reduce(
            $transactions,
            fn(float $total, Transaction $transaction) => $total + $transaction->getAbsoluteAmount(),
            0.0
        );
    }
}