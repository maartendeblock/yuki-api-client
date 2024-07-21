<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddDomainUser implements RequestInterface
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
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $roles = null;

    /**
     * @var null | string
     */
    private ?string $administrations = null;

    /**
     * @var bool
     */
    private bool $sendMessage;

    /**
     * @var null | string
     */
    private ?string $customMessage = null;

    /**
     * @var null | string
     */
    private ?string $language = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domain
     * @param null | string $email
     * @param null | string $name
     * @param null | string $roles
     * @param null | string $administrations
     * @param bool $sendMessage
     * @param null | string $customMessage
     * @param null | string $language
     */
    public function __construct(?string $sessionID, ?string $domain, ?string $email, ?string $name, ?string $roles, ?string $administrations, bool $sendMessage, ?string $customMessage, ?string $language)
    {
        $this->sessionID = $sessionID;
        $this->domain = $domain;
        $this->email = $email;
        $this->name = $name;
        $this->roles = $roles;
        $this->administrations = $administrations;
        $this->sendMessage = $sendMessage;
        $this->customMessage = $customMessage;
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
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param null | string $email
     * @return static
     */
    public function withEmail(?string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRoles() : ?string
    {
        return $this->roles;
    }

    /**
     * @param null | string $roles
     * @return static
     */
    public function withRoles(?string $roles) : static
    {
        $new = clone $this;
        $new->roles = $roles;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAdministrations() : ?string
    {
        return $this->administrations;
    }

    /**
     * @param null | string $administrations
     * @return static
     */
    public function withAdministrations(?string $administrations) : static
    {
        $new = clone $this;
        $new->administrations = $administrations;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendMessage() : bool
    {
        return $this->sendMessage;
    }

    /**
     * @param bool $sendMessage
     * @return static
     */
    public function withSendMessage(bool $sendMessage) : static
    {
        $new = clone $this;
        $new->sendMessage = $sendMessage;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomMessage() : ?string
    {
        return $this->customMessage;
    }

    /**
     * @param null | string $customMessage
     * @return static
     */
    public function withCustomMessage(?string $customMessage) : static
    {
        $new = clone $this;
        $new->customMessage = $customMessage;

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

