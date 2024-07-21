<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCurrentDomain implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $domainID = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domainID
     */
    public function __construct(?string $sessionID, ?string $domainID)
    {
        $this->sessionID = $sessionID;
        $this->domainID = $domainID;
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
    public function getDomainID() : ?string
    {
        return $this->domainID;
    }

    /**
     * @param null | string $domainID
     * @return static
     */
    public function withDomainID(?string $domainID) : static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }
}

