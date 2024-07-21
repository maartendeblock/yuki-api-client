<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LyantheRecognitionEngine implements RequestInterface
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
     * @var bool
     */
    private bool $enableLyanthe;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domain
     * @param bool $enableLyanthe
     */
    public function __construct(?string $sessionID, ?string $domain, bool $enableLyanthe)
    {
        $this->sessionID = $sessionID;
        $this->domain = $domain;
        $this->enableLyanthe = $enableLyanthe;
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

    /**
     * @return bool
     */
    public function getEnableLyanthe() : bool
    {
        return $this->enableLyanthe;
    }

    /**
     * @param bool $enableLyanthe
     * @return static
     */
    public function withEnableLyanthe(bool $enableLyanthe) : static
    {
        $new = clone $this;
        $new->enableLyanthe = $enableLyanthe;

        return $new;
    }
}

