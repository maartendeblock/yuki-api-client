<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAdministrationData implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionId = null;

    /**
     * @var null | string
     */
    private ?string $administrationId = null;

    /**
     * Constructor
     *
     * @param null | string $sessionId
     * @param null | string $administrationId
     */
    public function __construct(?string $sessionId, ?string $administrationId)
    {
        $this->sessionId = $sessionId;
        $this->administrationId = $administrationId;
    }

    /**
     * @return null | string
     */
    public function getSessionId() : ?string
    {
        return $this->sessionId;
    }

    /**
     * @param null | string $sessionId
     * @return static
     */
    public function withSessionId(?string $sessionId) : static
    {
        $new = clone $this;
        $new->sessionId = $sessionId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAdministrationId() : ?string
    {
        return $this->administrationId;
    }

    /**
     * @param null | string $administrationId
     * @return static
     */
    public function withAdministrationId(?string $administrationId) : static
    {
        $new = clone $this;
        $new->administrationId = $administrationId;

        return $new;
    }
}

