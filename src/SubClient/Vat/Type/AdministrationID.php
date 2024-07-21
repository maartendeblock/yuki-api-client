<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AdministrationID implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $administrationName = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationName
     */
    public function __construct(?string $sessionID, ?string $administrationName)
    {
        $this->sessionID = $sessionID;
        $this->administrationName = $administrationName;
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
    public function getAdministrationName() : ?string
    {
        return $this->administrationName;
    }

    /**
     * @param null | string $administrationName
     * @return static
     */
    public function withAdministrationName(?string $administrationName) : static
    {
        $new = clone $this;
        $new->administrationName = $administrationName;

        return $new;
    }
}

