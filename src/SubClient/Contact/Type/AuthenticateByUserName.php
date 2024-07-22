<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthenticateByUserName implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $userName = null;

    /**
     * @var null | string
     */
    private ?string $password = null;

    /**
     * Constructor
     *
     * @param null | string $userName
     * @param null | string $password
     */
    public function __construct(?string $userName, ?string $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * @return null | string
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }

    /**
     * @param null | string $userName
     * @return static
     */
    public function withUserName(?string $userName) : static
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }

    /**
     * @param null | string $password
     * @return static
     */
    public function withPassword(?string $password) : static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}

