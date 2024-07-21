<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateDomain implements RequestInterface
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
     * @var null | string
     */
    private ?string $domainName = null;

    /**
     * @var null | string
     */
    private ?string $defaultLanguage = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationName
     * @param null | string $domainName
     * @param null | string $defaultLanguage
     */
    public function __construct(?string $sessionID, ?string $administrationName, ?string $domainName, ?string $defaultLanguage)
    {
        $this->sessionID = $sessionID;
        $this->administrationName = $administrationName;
        $this->domainName = $domainName;
        $this->defaultLanguage = $defaultLanguage;
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

    /**
     * @return null | string
     */
    public function getDomainName() : ?string
    {
        return $this->domainName;
    }

    /**
     * @param null | string $domainName
     * @return static
     */
    public function withDomainName(?string $domainName) : static
    {
        $new = clone $this;
        $new->domainName = $domainName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDefaultLanguage() : ?string
    {
        return $this->defaultLanguage;
    }

    /**
     * @param null | string $defaultLanguage
     * @return static
     */
    public function withDefaultLanguage(?string $defaultLanguage) : static
    {
        $new = clone $this;
        $new->defaultLanguage = $defaultLanguage;

        return $new;
    }
}

