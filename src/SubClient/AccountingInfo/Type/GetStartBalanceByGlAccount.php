<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStartBalanceByGlAccount implements RequestInterface
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
    private int $bookyear;

    /**
     * @var int
     */
    private int $financialMode;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param int $bookyear
     * @param int $financialMode
     */
    public function __construct(?string $sessionID, ?string $administrationID, int $bookyear, int $financialMode)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->bookyear = $bookyear;
        $this->financialMode = $financialMode;
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
    public function getBookyear() : int
    {
        return $this->bookyear;
    }

    /**
     * @param int $bookyear
     * @return static
     */
    public function withBookyear(int $bookyear) : static
    {
        $new = clone $this;
        $new->bookyear = $bookyear;

        return $new;
    }

    /**
     * @return int
     */
    public function getFinancialMode() : int
    {
        return $this->financialMode;
    }

    /**
     * @param int $financialMode
     * @return static
     */
    public function withFinancialMode(int $financialMode) : static
    {
        $new = clone $this;
        $new->financialMode = $financialMode;

        return $new;
    }
}

