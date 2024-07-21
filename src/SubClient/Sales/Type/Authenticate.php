<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Authenticate implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $accessKey = null;

    /**
     * Constructor
     *
     * @param null | string $accessKey
     */
    public function __construct(?string $accessKey)
    {
        $this->accessKey = $accessKey;
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

