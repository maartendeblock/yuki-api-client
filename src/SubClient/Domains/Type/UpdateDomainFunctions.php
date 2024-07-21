<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateDomainFunctions implements RequestInterface
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
     * @var 'BOResponsible' | 'BOBackup' | 'BOController' | 'BOAccountManager'
     */
    private string $domainFunction;

    /**
     * @var null | string
     */
    private ?string $login = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domain
     * @param 'BOResponsible' | 'BOBackup' | 'BOController' | 'BOAccountManager' $domainFunction
     * @param null | string $login
     */
    public function __construct(?string $sessionID, ?string $domain, string $domainFunction, ?string $login)
    {
        $this->sessionID = $sessionID;
        $this->domain = $domain;
        $this->domainFunction = $domainFunction;
        $this->login = $login;
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
     * @return 'BOResponsible' | 'BOBackup' | 'BOController' | 'BOAccountManager'
     */
    public function getDomainFunction() : string
    {
        return $this->domainFunction;
    }

    /**
     * @param 'BOResponsible' | 'BOBackup' | 'BOController' | 'BOAccountManager' $domainFunction
     * @return static
     */
    public function withDomainFunction(string $domainFunction) : static
    {
        $new = clone $this;
        $new->domainFunction = $domainFunction;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLogin() : ?string
    {
        return $this->login;
    }

    /**
     * @param null | string $login
     * @return static
     */
    public function withLogin(?string $login) : static
    {
        $new = clone $this;
        $new->login = $login;

        return $new;
    }
}

