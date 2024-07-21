<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFinancialYearModifiedDate implements RequestInterface
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
     * @var int
     */
    private int $yearID;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param int $yearID
     */
    public function __construct(?string $sessionID, ?string $administrationID, int $yearID)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->yearID = $yearID;
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
     * @return int
     */
    public function getYearID() : int
    {
        return $this->yearID;
    }

    /**
     * @param int $yearID
     * @return static
     */
    public function withYearID(int $yearID) : static
    {
        $new = clone $this;
        $new->yearID = $yearID;

        return $new;
    }
}

