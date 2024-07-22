<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ImportSingleStatementLine implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionId = null;

    /**
     * @var null | string
     */
    private ?string $accountGlCode = null;

    /**
     * @var null | string
     */
    private ?string $transactionCode = null;

    /**
     * @var null | string
     */
    private ?string $offsetAccount = null;

    /**
     * @var null | string
     */
    private ?string $offsetName = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $transactionDate;

    /**
     * @var null | string
     */
    private ?string $transactionDescription = null;

    /**
     * @var float
     */
    private float $amount;

    /**
     * Constructor
     *
     * @param null | string $sessionId
     * @param null | string $accountGlCode
     * @param null | string $transactionCode
     * @param null | string $offsetAccount
     * @param null | string $offsetName
     * @param \DateTimeInterface $transactionDate
     * @param null | string $transactionDescription
     * @param float $amount
     */
    public function __construct(?string $sessionId, ?string $accountGlCode, ?string $transactionCode, ?string $offsetAccount, ?string $offsetName, \DateTimeInterface $transactionDate, ?string $transactionDescription, float $amount)
    {
        $this->sessionId = $sessionId;
        $this->accountGlCode = $accountGlCode;
        $this->transactionCode = $transactionCode;
        $this->offsetAccount = $offsetAccount;
        $this->offsetName = $offsetName;
        $this->transactionDate = $transactionDate;
        $this->transactionDescription = $transactionDescription;
        $this->amount = $amount;
    }

    /**
     * @return null | string
     */
    public function getSessionId() : ?string
    {
        return $this->sessionId;
    }

    /**
     * @param null | string $sessionId
     * @return static
     */
    public function withSessionId(?string $sessionId) : static
    {
        $new = clone $this;
        $new->sessionId = $sessionId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountGlCode() : ?string
    {
        return $this->accountGlCode;
    }

    /**
     * @param null | string $accountGlCode
     * @return static
     */
    public function withAccountGlCode(?string $accountGlCode) : static
    {
        $new = clone $this;
        $new->accountGlCode = $accountGlCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTransactionCode() : ?string
    {
        return $this->transactionCode;
    }

    /**
     * @param null | string $transactionCode
     * @return static
     */
    public function withTransactionCode(?string $transactionCode) : static
    {
        $new = clone $this;
        $new->transactionCode = $transactionCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOffsetAccount() : ?string
    {
        return $this->offsetAccount;
    }

    /**
     * @param null | string $offsetAccount
     * @return static
     */
    public function withOffsetAccount(?string $offsetAccount) : static
    {
        $new = clone $this;
        $new->offsetAccount = $offsetAccount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOffsetName() : ?string
    {
        return $this->offsetName;
    }

    /**
     * @param null | string $offsetName
     * @return static
     */
    public function withOffsetName(?string $offsetName) : static
    {
        $new = clone $this;
        $new->offsetName = $offsetName;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTransactionDate() : \DateTimeInterface
    {
        return $this->transactionDate;
    }

    /**
     * @param \DateTimeInterface $transactionDate
     * @return static
     */
    public function withTransactionDate(\DateTimeInterface $transactionDate) : static
    {
        $new = clone $this;
        $new->transactionDate = $transactionDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTransactionDescription() : ?string
    {
        return $this->transactionDescription;
    }

    /**
     * @param null | string $transactionDescription
     * @return static
     */
    public function withTransactionDescription(?string $transactionDescription) : static
    {
        $new = clone $this;
        $new->transactionDescription = $transactionDescription;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return static
     */
    public function withAmount(float $amount) : static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }
}

