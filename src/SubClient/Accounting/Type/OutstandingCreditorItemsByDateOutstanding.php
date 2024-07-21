<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OutstandingCreditorItemsByDateOutstanding implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $administrationID = null;

    /**
     * @var bool
     */
    private bool $includeBankTransactions;

    /**
     * @var 'ContactAsc' | 'ContactDesc' | 'AmountAsc' | 'AmountDesc' | 'DateAsc' | 'DateDesc'
     */
    private string $sortOrder;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $dateOutstanding;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param bool $includeBankTransactions
     * @param 'ContactAsc' | 'ContactDesc' | 'AmountAsc' | 'AmountDesc' | 'DateAsc' | 'DateDesc' $sortOrder
     * @param \DateTimeInterface $dateOutstanding
     */
    public function __construct(?string $sessionID, ?string $administrationID, bool $includeBankTransactions, string $sortOrder, \DateTimeInterface $dateOutstanding)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->includeBankTransactions = $includeBankTransactions;
        $this->sortOrder = $sortOrder;
        $this->dateOutstanding = $dateOutstanding;
    }

    /**
     * @return null | string
     */
    public function getSessionID() : ?string
    {
        return $this->sessionID;
    }

    /**
     * @param null | string $sessionID
     * @return static
     */
    public function withSessionID(?string $sessionID) : static
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAdministrationID() : ?string
    {
        return $this->administrationID;
    }

    /**
     * @param null | string $administrationID
     * @return static
     */
    public function withAdministrationID(?string $administrationID) : static
    {
        $new = clone $this;
        $new->administrationID = $administrationID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeBankTransactions() : bool
    {
        return $this->includeBankTransactions;
    }

    /**
     * @param bool $includeBankTransactions
     * @return static
     */
    public function withIncludeBankTransactions(bool $includeBankTransactions) : static
    {
        $new = clone $this;
        $new->includeBankTransactions = $includeBankTransactions;

        return $new;
    }

    /**
     * @return 'ContactAsc' | 'ContactDesc' | 'AmountAsc' | 'AmountDesc' | 'DateAsc' | 'DateDesc'
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder;
    }

    /**
     * @param 'ContactAsc' | 'ContactDesc' | 'AmountAsc' | 'AmountDesc' | 'DateAsc' | 'DateDesc' $sortOrder
     * @return static
     */
    public function withSortOrder(string $sortOrder) : static
    {
        $new = clone $this;
        $new->sortOrder = $sortOrder;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateOutstanding() : \DateTimeInterface
    {
        return $this->dateOutstanding;
    }

    /**
     * @param \DateTimeInterface $dateOutstanding
     * @return static
     */
    public function withDateOutstanding(\DateTimeInterface $dateOutstanding) : static
    {
        $new = clone $this;
        $new->dateOutstanding = $dateOutstanding;

        return $new;
    }
}

