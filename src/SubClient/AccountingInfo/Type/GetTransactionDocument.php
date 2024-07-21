<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTransactionDocument implements RequestInterface
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
     * @var null | string
     */
    private ?string $transactionID = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | string $transactionID
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?string $transactionID)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->transactionID = $transactionID;
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
     * @return null | string
     */
    public function getTransactionID() : ?string
    {
        return $this->transactionID;
    }

    /**
     * @param null | string $transactionID
     * @return static
     */
    public function withTransactionID(?string $transactionID) : static
    {
        $new = clone $this;
        $new->transactionID = $transactionID;

        return $new;
    }
}

