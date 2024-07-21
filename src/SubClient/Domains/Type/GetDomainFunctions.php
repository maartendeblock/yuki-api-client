<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDomainFunctions implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $domain = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domain
     */
    public function __construct(?string $sessionID, ?string $domain)
    {
        $this->sessionID = $sessionID;
        $this->domain = $domain;
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
    public function getDomain() : ?string
    {
        return $this->domain;
    }

    /**
     * @param null | string $domain
     * @return static
     */
    public function withDomain(?string $domain) : static
    {
        $new = clone $this;
        $new->domain = $domain;

        return $new;
    }
}

