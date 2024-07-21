<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCustomPaymentMethods implements RequestInterface
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
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     */
    public function __construct(?string $sessionID, ?string $administrationID)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
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
}

