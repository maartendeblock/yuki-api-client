<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckOutstandingItemAdmin implements RequestInterface
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
    private ?string $Reference = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | string $Reference
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?string $Reference)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->Reference = $Reference;
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
    public function getReference() : ?string
    {
        return $this->Reference;
    }

    /**
     * @param null | string $Reference
     * @return static
     */
    public function withReference(?string $Reference) : static
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }
}

