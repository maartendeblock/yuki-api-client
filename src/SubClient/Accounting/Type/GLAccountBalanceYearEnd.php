<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GLAccountBalanceYearEnd implements RequestInterface
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
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $transactionDate;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param \DateTimeInterface $transactionDate
     */
    public function __construct(?string $sessionID, ?string $administrationID, \DateTimeInterface $transactionDate)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->transactionDate = $transactionDate;
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
}

