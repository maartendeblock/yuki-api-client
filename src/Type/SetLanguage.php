<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetLanguage implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $language = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $language
     */
    public function __construct(?string $sessionID, ?string $language)
    {
        $this->sessionID = $sessionID;
        $this->language = $language;
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
    public function getLanguage() : ?string
    {
        return $this->language;
    }

    /**
     * @param null | string $language
     * @return static
     */
    public function withLanguage(?string $language) : static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}

