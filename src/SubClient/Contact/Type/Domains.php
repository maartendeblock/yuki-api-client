<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Domains implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     */
    public function __construct(?string $sessionID)
    {
        $this->sessionID = $sessionID;
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
}

