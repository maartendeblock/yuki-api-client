<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthenticateClient implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $clientID = null;

    /**
     * @var null | string
     */
    private ?string $clientSecret = null;

    /**
     * @var null | string
     */
    private ?string $accessKey = null;

    /**
     * Constructor
     *
     * @param null | string $clientID
     * @param null | string $clientSecret
     * @param null | string $accessKey
     */
    public function __construct(?string $clientID, ?string $clientSecret, ?string $accessKey)
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->accessKey = $accessKey;
    }

    /**
     * @return null | string
     */
    public function getClientID() : ?string
    {
        return $this->clientID;
    }

    /**
     * @param null | string $clientID
     * @return static
     */
    public function withClientID(?string $clientID) : static
    {
        $new = clone $this;
        $new->clientID = $clientID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getClientSecret() : ?string
    {
        return $this->clientSecret;
    }

    /**
     * @param null | string $clientSecret
     * @return static
     */
    public function withClientSecret(?string $clientSecret) : static
    {
        $new = clone $this;
        $new->clientSecret = $clientSecret;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccessKey() : ?string
    {
        return $this->accessKey;
    }

    /**
     * @param null | string $accessKey
     * @return static
     */
    public function withAccessKey(?string $accessKey) : static
    {
        $new = clone $this;
        $new->accessKey = $accessKey;

        return $new;
    }
}

